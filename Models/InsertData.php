<?php
require_once __DIR__ . '/Connect.php';

class InsertData
{
    public function insert($id, $titulo, $diretor, $ator)
    {
        $objConnect = new Connect();
        $objConnect->connectar();
        $insertQuery = "INSERT INTO tb_parceiros (id_parceiro, nome, Data, Comentario) 
                        VALUES (:parceiroID, :nome, :data, :comentario)";
        $insertStmt = $objConnect->getConnection()->prepare($insertQuery);
        $insertStmt->bindParam(':parceiroID', $id, PDO::PARAM_STR, 99);
        $insertStmt->bindParam(':nome', $titulo, PDO::PARAM_STR, 10);
        $insertStmt->bindParam(':data', $diretor, PDO::PARAM_STR, 10);
        $insertStmt->bindParam(':comentario', $ator, PDO::PARAM_STR, 10);
        $insertStmt->execute();
    }
}