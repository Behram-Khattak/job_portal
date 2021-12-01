<?php
    class database{
   
    private $dsn = "mysql:host=localhost; dbname=job_portal";
    private $dbuser="root";
    private $dbpass= "";

    public $conn;

    public function __construct(){
                try {
            $this->conn = new PDO($this->dsn, $this->dbuser, $this->dbpass);
            
    //  echo "successful";
                }catch(PDOException $e) {
                    echo "Error : ".$e->getmessage();
                }
                return $this->conn;
    }
    }

?>