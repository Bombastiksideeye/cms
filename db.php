<?php
class Database {
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($host, $username, $password, $dbname) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        
        // Create connection
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {
            //echo "Connected successfully";
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }

    public function selectWithWhere($table, $columns = '*', $where = '') {
        $sql = "SELECT $columns FROM $table";
        if ($where) {
            $sql .= " WHERE $where";
        }

        $result = $this->conn->query($sql);

        if ($result === false) {
            die("Query failed: " . $this->conn->error);
        }

        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }

    public function delete($table, $where = '') {
        $sql = "DELETE FROM $table";
        if ($where) {
            $sql .= " WHERE $where";
        }
    
        $result = $this->conn->query($sql);
    
        if ($result === false) {
            die("Query failed: " . $this->conn->error);
        }
    
        return $result;
    }

    public function insert($table, $data) {
        $columns = implode(", ", array_keys($data));
        $values = implode(", ", array_map([$this, 'quoteValue'], array_values($data)));
        
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        if ($this->conn->query($sql) === true) {
            return $this->conn->insert_id;  // return the last inserted ID if needed
        } else {
            die("Insert query failed: " . $this->conn->error);
        }
    }
    public function update($table, $data, $where) {
        $set = [];
        foreach ($data as $column => $value) {
            $set[] = "$column = " . $this->quoteValue($value);
        }
        $set = implode(', ', $set);

        $sql = "UPDATE $table SET $set WHERE $where";

        if ($this->conn->query($sql) === true) {
            return true;
        } else {
            die("Update query failed: " . $this->conn->error);
        }
    }

    private function quoteValue($value) {
        return "'" . $this->conn->real_escape_string($value) . "'";
    }
    public function countRows($table, $where = '') {
        $sql = "SELECT COUNT(*) as count FROM $table";
        if ($where) {
            $sql .= " WHERE $where";
        }

        $result = $this->conn->query($sql);

        if ($result === false) {
            die("Query failed: " . $this->conn->error);
        }

        $row = $result->fetch_assoc();
        return $row['count'];
    }

}

$db = new Database('localhost', 'root', '', 'compassionmemorialgardens');
// Example usage of the update method
//$db->update('credentials', ['psword' => 'new_password'], 'id_number="1234123"');

//$db->closeConnection();
?>
