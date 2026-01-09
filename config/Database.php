<?php
/**
 * Database Connection Class
 * Implements Singleton pattern for consistent database connections
 */
class Database
{
    private static $instance = null;
    private $conn;

    // Database configuration
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "db_decor";

    private function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Set charset to UTF-8
        mysqli_set_charset($this->conn, "utf8mb4");
    }

    /**
     * Get singleton instance of Database class
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    /**
     * Get the database connection
     */
    public function getConnection()
    {
        return $this->conn;
    }

    /**
     * Close the connection
     */
    public function close()
    {
        if ($this->conn) {
            mysqli_close($this->conn);
            self::$instance = null;
        }
    }

    /**
     * Prevent cloning of the instance
     */
    private function __clone()
    {
    }

    /**
     * Prevent unserialization of the instance
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
}
?>