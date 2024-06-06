<?php
class DatabaseConnection {
    private $host = 'localhost';
    private $db = 'compassionmemorialgardens';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8mb4';
    private $pdo;
    private $error;

    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
           // echo "Connection established to the database.";
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo "Connection failed: " . $this->error;
        }
    }

    public function insert($table, $columns, $values) {
        $columns_str = implode(", ", $columns);
        $placeholders = rtrim(str_repeat('?, ', count($values)), ', ');
        $query = "INSERT INTO $table ($columns_str) VALUES ($placeholders)";
        
        $stmt = $this->pdo->prepare($query);
        try {
            $stmt->execute($values);
           // echo "Record inserted successfully.";
        } catch (PDOException $e) {
            echo "Insert failed: " . $e->getMessage();
        }
    }

    public function delete($table, $condition, $condition_values) {
        $query = "DELETE FROM $table WHERE $condition";
        
        $stmt = $this->pdo->prepare($query);
        try {
            $stmt->execute($condition_values);
           // echo "Record deleted successfully.";
        } catch (PDOException $e) {
            echo "Delete failed: " . $e->getMessage();
        }
    }

    public function update($table, $updates, $condition, $condition_values) {
        $set_clause = implode(", ", array_map(function($col) {
            return "$col = ?";
        }, array_keys($updates)));
        
        $query = "UPDATE $table SET $set_clause WHERE $condition";
        
        $stmt = $this->pdo->prepare($query);
        try {
            $stmt->execute(array_merge(array_values($updates), $condition_values));
            //echo "Record updated successfully.";
        } catch (PDOException $e) {
            echo "Update failed: " . $e->getMessage();
        }
    }

    public function view($table, $columns = "*", $condition = "", $condition_values = []) {
        $query = "SELECT $columns FROM $table";
        if (!empty($condition)) {
            $query .= " WHERE $condition";
        }
        
        $stmt = $this->pdo->prepare($query);
        try {
            $stmt->execute($condition_values);
            $results = $stmt->fetchAll();
            return $results;
        } catch (PDOException $e) {
            echo "View failed: " . $e->getMessage();
            return [];
        }
    }

    public function close_connection() {
        $this->pdo = null;
        echo "Database connection closed.";
    }
}

// Example usage:
$db = new DatabaseConnection();

// Insert a new record
//$db->insert("users", ["name", "age"], ["Alice", 30]);

// View records
//$users = $db->view("users");
//print_r($users);

// Update a record
//$db->update("users", ["age" => 31], "name = ?", ["Alice"]);

// Delete a record
//$db->delete("users", "name = ?", ["Alice"]);

// Close the connection
//$db->close_connection();
?>
