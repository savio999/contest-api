<?php

namespace App\Controllers;

use App\Core\Database;

class DBController extends BaseController
{
    private $connection;
    public function __construct()
    {
        try {
            $dbInstance = Database::getInstance();
            $this->connection = $dbInstance->getConnection();
        } catch (\Exception $e) {
            $this->jsonResponse([
                'status' => 'error',
                'message' => 'Database connection failed: ' . $e->getMessage()
            ], 500);
        }
    }
    
    public function setUpDb()
    {
        try {
            $schemaSql = file_get_contents(__DIR__ . '/../database/schema.sql');
            $this->connection->exec($schemaSql);

            $this->jsonResponse([
                'status' => 'success',
                'message' => 'Database and tables created successfully.'
            ]);
        } catch (\PDOException $e) {
            $this->jsonResponse([
                'status' => 'error',
                'message' => 'Database setup failed: ' . $e->getMessage()
            ], 500);
        }
    }
}