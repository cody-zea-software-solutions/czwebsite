<?php
class Databases {
    private static $connection;

    // Set up the database connection
    public static function SetupConnection() {
        if (!isset(self::$connection)) {
            self::$connection = new mysqli("localhost", "root", "denuwaan123A", "codyzea", 3306);
            // self::$connection = new mysqli("localhost", "root", "Uditha1#", "mydb", 3306);

            // Check connection and throw an error if it fails
            if (self::$connection->connect_error) {
                die("Database connection failed: " . self::$connection->connect_error);
            }
        }
    }

    // Search function for SELECT queries with prepared statements
    public static function Search($query, $params = [], $types = "") {
        self::SetupConnection();
        
        // Prepare the statement
        if ($stmt = self::$connection->prepare($query)) {
            // Bind parameters if they exist
            if (!empty($params) && !empty($types)) {
                $stmt->bind_param($types, ...$params);
            }

            // Execute the query
            if ($stmt->execute()) {
                // Get result set
                $resultset = $stmt->get_result();
                $stmt->close();
                return $resultset;
            } else {
                die("Error executing statement: " . $stmt->error);
            }
        } else {
            die("Error preparing statement: " . self::$connection->error);
        }
    }

    // IUD method for INSERT, UPDATE, DELETE queries using prepared statements
    public static function IUD($query, $params = [], $types = "") {
        self::SetupConnection();

        // Prepare the statement
        if ($stmt = self::$connection->prepare($query)) {
            // Bind parameters if they exist
            if (!empty($params) && !empty($types)) {
                $stmt->bind_param($types, ...$params);
            }

            // Execute the query
            if ($stmt->execute()) {
                $stmt->close();
                return true;
            } else {
                die("Error executing statement: " . $stmt->error);
            }
        } else {
            die("Error preparing statement: " . self::$connection->error);
        }
    }

    // Close the database connection
    public static function CloseConnection() {
        if (isset(self::$connection)) {
            self::$connection->close();
            self::$connection = null;
        }
    }
}

// Ensure SetupConnection() is called before using the class
Databases::SetupConnection();
?>
