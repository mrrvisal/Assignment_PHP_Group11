<?php
require_once __DIR__ . '/../config/Database.php';

class User
{
    private static function getConnection()
    {
        return Database::getInstance()->getConnection();
    }

    public static function create($name, $email, $password, $phone)
    {
        $conn = self::getConnection();
        $stmt = $conn->prepare("INSERT INTO tbl_register (name, email, password, role, phone, created_at) 
                                VALUES (?, ?, ?, 'customer', ?, NOW())");
        $stmt->bind_param("ssss", $name, $email, $password, $phone);
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            error_log("Insert failed: " . $stmt->error);
            $stmt->close();
            return false;
        }
    }

    public static function findByEmail($email)
    {
        $conn = self::getConnection();
        $stmt = $conn->prepare("SELECT * FROM tbl_register WHERE email=? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }

    public static function verifyLogin($email, $password)
    {
        $user = self::findByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

    public static function updateOtp($email, $otp)
    {
        $conn = self::getConnection();
        $stmt = $conn->prepare("UPDATE tbl_register SET otp=?, otp_expire=DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email=?");
        $stmt->bind_param("ss", $otp, $email);
        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }

    public static function verifyOtp($email, $otp)
    {
        $conn = self::getConnection();
        $stmt = $conn->prepare("SELECT * FROM tbl_register WHERE email=? AND otp=? AND otp_expire > NOW()");
        $stmt->bind_param("ss", $email, $otp);
        $stmt->execute();
        $result = $stmt->get_result();
        $valid = $result->num_rows > 0;
        $stmt->close();
        return $valid;
    }

    public static function resetPassword($email, $newpass)
    {
        $conn = self::getConnection();
        $hashed = password_hash($newpass, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("UPDATE tbl_register SET password=?, otp=NULL, otp_expire=NULL WHERE email=?");
        $stmt->bind_param("ss", $hashed, $email);
        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }
}