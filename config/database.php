<?php
//lo necesario para hacer una conexion a nuestra db
class Database {

    private $hostname = "localhost";
    private $database = "tienda_online";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";

    function conectar()
    {
        try{
        $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; 
        charset=" . $this->charset;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false //preparaciones que se hagan para la consulta no sea emulada
        ];

        $pdo = new PDO($conexion, $this->username, $this->password, $options); //aqui se agrego el this

        return $pdo;
    } catch (PDOException $e){
        echo 'Error conexion: ' . $e->getMessage();
        exit;
    }
    }
}