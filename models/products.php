<?php
require_once __DIR__ . "/../config/Database.php";

class Product
{
    private $conn;
    private $table = "tbl_products";

    public function __construct()
    {
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    public function create($data)
    {
        $sql = "INSERT INTO {$this->table}
            (name, price, quantity, brand, category, type, description, images)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "sdisssss",
            $data['name'],
            $data['price'],
            $data['quantity'],
            $data['brand'],
            $data['category'],
            $data['type'],
            $data['description'],
            $data['images']
        );

        return $stmt->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->table} ORDER BY id DESC";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $data)
    {
        $sql = "UPDATE {$this->table}
            SET name=?, price=?, quantity=?, brand=?, category=?, type=?, description=?, images=?
            WHERE id=?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "sdisssssi",
            $data['name'],
            $data['price'],
            $data['quantity'],
            $data['brand'],
            $data['category'],
            $data['type'],
            $data['description'],
            $data['images'],
            $id
        );

        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        error_log("Delete query result: " . ($result ? "true" : "false") . ", Affected rows: " . $stmt->affected_rows);
        return $result;
    }
}