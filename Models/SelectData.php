<?php

require_once __DIR__ . '/Connect.php';

class SelectData
{
    public function getData()
    {
        try {
            $objConnect = new Connect();
            $objConnect->connectar();
            $selectQuery = "SELECT id_parceiro, nome, DATE_FORMAT(Data, '%d/%m/%y') as new_date, Comentario FROM tb_parceiros";
            $selectStmt = $objConnect->getConnection()->prepare($selectQuery);
            $selectStmt->execute();

            $resultSelect = $selectStmt->fetchAll(PDO::FETCH_ASSOC);

            return $resultSelect;
        } catch (PDOException $e) {
            //header("Location: http://localhost/unidos-sindrome-down?result=error");
            echo $e->getMessage();
        }
    }
}
