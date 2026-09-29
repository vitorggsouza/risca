<?php

function get_db_conn(): PDO
{
    static $conn = null;

    if ($conn === null) {
        try {
            $options = [
                PDO::ATTR_ERRMODE                   => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE        => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES          => false
            ];

            $conn = new PDO(
                sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $_ENV['DB_HOST'], $_ENV['DB_NAME']),
                $_ENV['DB_USERNAME'],
                $_ENV['DB_PASSWORD'],
                $options
            );
        } catch (PDOException $e) {
            abort(500, $e->getMessage(), get_msgs('system.unexpected_pt_br'));
        }
    }

    return $conn;
}
