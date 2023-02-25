<?php    
//to update to latest php version        
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
    header("Access-Control-Allow-Origin"); // to call API   
 
    Class Database{
        private $dbname;
        private $tblname;
        private $host;
        private $username;
        private $password;
        private $conn;
     
        function __construct(){
            // Database Name
            $this->dbname = 'dclmWebcastdb';
            // Host Name
            $this->host = 'localhost';
            // DB Username
            $this->username = 'root';
            // Database Name
            $this->password = '';
     
            // Open Databse Connection
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        }
     
        // Fetching Data From Database
        public function get_results($query){
            if(empty($query)){
                // Returning Error if query String is Empty
                return json_encode(["error"=>"Query is empty"]);
            }else{
                $query = $this->conn->query($query);
     
                if($this->conn->error){
                    return json_encode($this->conn);
                }else{
                    return $query;
                }
            }
        }
     
        // closing db connection
        function __destruct(){
            $this->conn->close();
        }
    }
    ?>
    