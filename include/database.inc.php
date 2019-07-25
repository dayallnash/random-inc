<?php

require_once('config.inc.php');

class Database
{
    public function query(string $stmt)
    {
        $mysqli = $this->connect();

        // Check that this is a SELECT stmt and not something else
        if (strpos($stmt, 'SELECT') !== 0) {
            return false;
        }

        // Execute the query
        $response = $mysqli->query($stmt);

        if (!$response) {
            return false;
        }

        // Build the results array
        $results = [];
        while ($row = $response->fetch_assoc()) {
            $results[] = $row;
        }

        return $results;
    }

    private function connect(): mysqli
    {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);

        if (!$mysqli) {
            //TODO: use a Warning class (not built yet) to flash a warning on whatever page user is on
            die('Could not make connection');
        }

        //TODO: handle if mysql_select_db fails
        $mysqli->select_db(DB_DB);

        return $mysqli;
    }
}