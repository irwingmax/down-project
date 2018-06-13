<?php
class Connect
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $connection;

    public function connectar()
    {
        $this->server =  "mysql427.umbler.com";
        $this->user   =  "usd_saojudas";
        $this->pwd    =  "(6WI{2gcDE";
        $this->dbname =  "db_unidos";

        try {
            $this->connection = new PDO(
                "mysql:host=$this->server;
                dbname=$this->dbname",
                $this->user,
                $this->pwd
            );
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        } catch (PDOException $e) {
            echo "Não Conectado: " . $e->getMessage();
        }

        return $this->connection;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
