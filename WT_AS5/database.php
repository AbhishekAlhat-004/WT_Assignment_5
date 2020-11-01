<?php
class database
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    
    public $conn;

    public function __construct() {
        $this->host = 'localhost';
        $this->dbname = 'id14796920_abcd';
        $this->username = 'id14796920_root';
        $this->password = '1}&3s)cl%$Ck_Mk?';
    }

    public function Connect(){
    
        $this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
        if(mysqli_connect_error()){
            echo "error connecting to database";
        }
        else{
            return $this->conn; 
        }
         
    }
}

?>