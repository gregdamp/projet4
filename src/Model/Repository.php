<?php 

namespace App\Model;

use PDO;

abstract class Repository
{
    private $db;
    
    protected function getDb()
    {
        if ($this->db === null) {
            try {
                $this->db = new \PDO('mysql:host=localhost;dbname=projet_mentor;charset=utf8', 'root', '');
            } catch(\Exception $e) {
                echo 'Impossible de se connecter à la base de donnée';
            }
        }
        return $this->db;
    }
}