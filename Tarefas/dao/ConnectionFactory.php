<?php
class ConnectionFactory{
    static $connection;
    public static function getConnection(){
       if(!isset($connection)) {
       $host = "localhost";
        $banco = "tarefa";
        $user = "root";
        $pass = "";
        $port = "3307";
        try{
        $connection = new PDO("mysql:host=$host;dbname=$banco;port=$port",$user,$pass);
        echo"Conectado";
        return $connection;
        }catch(PDOException $ex){
            echo"ERRO:". $ex->getMessage();


        }
    }
        return $connection;
    }
}
?>