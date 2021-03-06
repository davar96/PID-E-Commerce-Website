<?php
class DBController{
    // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "pid_e_commerce_website";

    // Connection property
    public $con = null;

    // Call constructor
    public function __construct(){
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->con->connect_error){
            echo"Echec".$this->con->connect_error;
        }
    }

    // Will close the connection when object is not used
    public function __destruct(){
        $this->closeConnection();
    }

    // MySql Closing Connection
    protected function closeConnection(){
        if ($this->con != null) {
           $this->con->close();
           $this->con = null;
        }
    }
}





?>