<?php 
class DB{
    public $con;
    protected $serverName = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbName = "demomvc";

    function __construct(){
        $this->con = mysqli_connect($this->serverName, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbName);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
}
?>