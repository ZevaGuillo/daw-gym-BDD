<?php
    /*class Conexion{
        private $host = "localhost";
        private $port = "3306";
        private $user = "root";
        private $password = "admin";
        private $db = "conexion_gym_db";
        private $connect;

        public function _construct(){
            $connectionString = "mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->db.";charset=utf8";
            try{
                $this->connect = new PDO(connectionString, $this->user, $this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "CONEXION EXITOSA";
            }catch(Exception $e){
                $this->connect = "ERROR DE CONEXION A LA BASE DE DATOS";
                echo "ERROR: ".$e->getMessage();
            }
        }
    }

    $pdo = new Conexion();*/
    
    $pdo = new PDO('mysql:host=localhost;dbname=conexion_gym_db', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>