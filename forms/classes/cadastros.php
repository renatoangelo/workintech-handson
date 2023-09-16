<?php

class Cadastro
{

    static function create($args)
    {
        include '../admin/include/connection.php';

        if ($args['nome'] == '') {
            return '<div class="alert alert-danger" role="alert"> Nome não informado! </div>';
        }
        $valida = Cadastro::validaCapacidade($args);
        if ($valida['vagas_pc'] + $valida['vagas_notebook'] > 0){
           
            if($valida['vagas_pc'] == 0 && $args['notebook'] == 2){
                return '<div class="alert alert-danger" role="alert"> Essa oficina está lotada para os PCs. Apenas inscrições para quem possui Notebook </div>';
            }
            if($valida['vagas_notebook'] == 0 && $args['notebook'] == 1){
                return '<div class="alert alert-danger" role="alert"> Essa oficina está lotada para os Notebooks. Apenas inscrições para quem NÃO possui Notebooks </div>';
            }
            $query = 'SELECT COUNT(1) FROM cadastro WHERE ra = :ra';
            $result = $conn->prepare($query);
            $result->bindParam(':ra', $args['ra'], PDO::PARAM_STR);
            $result->execute();
            $total = $result->fetchColumn();
            if ($total > 0) {
                return '<div class="alert alert-warning" role="alert"> Usuário já cadastrado em uma oficina</div>';
            }

            $query = "INSERT INTO cadastro (nome, ra, turma, oficina, notebook, termos) VALUES (:nome, :ra, :turma, :oficina, :notebook, :termos)";
            $result = $conn->prepare($query);
            $result->bindParam(':nome', $args['nome'], PDO::PARAM_STR);
            $result->bindParam(':ra', $args['ra'], PDO::PARAM_STR);
            $result->bindParam(':turma', $args['turma'], PDO::PARAM_STR);
            $result->bindParam(':oficina', $args['oficina'], PDO::PARAM_STR);
            $result->bindParam(':notebook', $args['notebook'], PDO::PARAM_STR);
            $result->bindParam(':termos', $args['termos'], PDO::PARAM_STR);
            $result = $result->execute();


            if ($result) {
                return '<div class="alert alert-success" role="alert"> Usuário criado com sucesso! </div>';
            } else {
                return false;
            }
        } else {
            return '<div class="alert alert-danger" role="alert"> Oficina com lotação máxima! Por favor atualize a página </div>';
        }
    }


    static function get()
    {
        include '../admin/include/connection.php';
        $query = 'SELECT * FROM cadastro';
        $result = $conn->prepare($query);
        $result->execute();
        $result = $result->fetchAll();
        return $result;
    }

    static function validaCapacidade($args)
    {
        include '../admin/include/connection.php';
        $query = 'SELECT o.id_oficina,
        o.limite_pc,
        o.limite_note,
        (o.limite_pc - COUNT(CASE WHEN c.notebook = 2 THEN 1 END)) AS vagas_pc,
        (o.limite_note - COUNT(CASE WHEN c.notebook = 1 THEN 1 END)) AS vagas_notebook
        FROM oficinas o
        LEFT JOIN cadastro c ON o.id_oficina = c.oficina
        WHERE o.id_oficina = :oficina
        GROUP BY o.id_oficina, o.limite_pc, o.limite_note';
        $result = $conn->prepare($query);
        $result->bindParam(':oficina', $args['oficina'], PDO::PARAM_STR);
        $result->execute();
        $result = $result->fetch(PDO::FETCH_ASSOC);
        $total = $result['vagas_pc'];
        if ($total) {
            return $result;
        } else {
            return false;
        }
    }

}