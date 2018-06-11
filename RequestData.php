<?php 

class RequestData
{
    private $nome;
    private $data;
    private $comentario;
    private $parceiroID;

    public function generateID()
    {
        $n = mt_rand();
        $this->parceiroID = hash('md5', "$n");

        return $this->parceiroID;
    }

    public function obtainTitulo()
    {
        $this->titulo = isset($_POST['name']) ? $_POST['name'] : '';
        return $this->titulo;
    }

    public function obtainDiretor()
    {
        $this->diretor = isset($_POST['date']) ? $_POST['date'] : '';
        return $this->diretor;
    }

    public function obtainAtor()
    {
        $this->ator = isset($_POST['comments']) ? $_POST['comments'] : '';
        return $this->ator;
    }

}
