<?php
namespace Model;

class ConnectDb
{

    private $db_connection = 'Mysqli';
    private $host = 'localhost';
    private $db_name = 'cards';
    private $username = 'admin';
    private $password = 'admin';

    // получение соединения с базой данных
    public function getConnection()
    {
            $this->conn = new $this->db_connection($this->host, $this->username, $this->password, $this->db_name);

          if (!$this->conn) {
              die("Connection failed: " . $this->conn->connect_error);
          }

        return $this->conn;
    }

}




