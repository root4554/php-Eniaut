<?php

class Database {

    protected $connection;

    public function __construct() {
        try {
            $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

            if (mysqli_connect_errno())
                throw new Exception("Could not connect to database.");
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function query($query, $types = "", $params = []) {
        try {
            $stmt = $this->execute($query, $types, $params);
            $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();

            return $result;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function execute($query, $types = "", $params = []) {
        try {
            $stmt = $this->connection->prepare($query);
            if (!$stmt)
                throw new Exception("Unable to prepare statement: " . query);

            if ($params)
                $stmt->bind_param($types, $params);

            $stmt->execute();

            return $stmt;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

}