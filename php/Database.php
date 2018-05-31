<?php
	class Database{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    public $conn;

    function __construct(){
        $this->db_connect();
    }

    private function db_connect(){
      $this->servername = 'localhost';
      $this->username = 'root1';
      $this->password = '';
      $this->dbname = 'db_onlineinv';

      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
      return $this->conn;
    }

    function getCategories(){
        $sql = "SELECT * FROM tbl_category"." ORDER by category_name ASC";
        $result = $this->conn->query($sql);
        return $result;
    }

    function getBDUsername(){
       return $this->username;
    }

	}
?>
