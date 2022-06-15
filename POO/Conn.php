<?php

class Conn
{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "celke_poo";
    public $port = 3306;
    public $connect = null;

    public function conectar()
    {
        try {
            $this->connect =  new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname, $this->user, $this->pass);
            echo "Conexão realizada com sucesso!<br>";
            return $this->connect;
        } catch (Exception $err) {
            echo "Conexão com banco não realizada com sucesso.<br>";
            return false;
        }
    }
}
