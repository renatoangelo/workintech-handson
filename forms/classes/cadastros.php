<?php 

class Cadastro {

    static function create($args) {
        include '../admin/include/connection.php';

        if(!isset($args['nome'])) {
            return '<div class="alert alert-danger" role="alert"> Nome não informado! </div>';
        }
        $valida = Cadastro::validaCapacidade($args);
        if($valida){
        $data_agora = Oficina::getData($args);
        $timestamp = strtotime($data_agora);
        $dataFormatada = date('Y-m-d', $timestamp);
        
        
        $dataExiste = Cadastro::validaData($args, $dataFormatada);
        if($dataExiste){
            return '<div class="alert alert-warning" role="alert"> Usuário já cadastrado em outra oficina da mesma data</div>';
        }

        
        $query = 'SELECT COUNT(1) FROM cadastro WHERE ra = :ra and oficina = :oficina';
        $result = $conn->prepare($query);
        $result->bindParam(':ra', $args['ra'], PDO::PARAM_STR);
        $result->bindParam(':oficina', $args['oficina'], PDO::PARAM_STR);
        $result->execute();
        $total = $result->fetchColumn();
        if ($total > 0) {
            return '<div class="alert alert-warning" role="alert"> Usuário já cadastrado nesta oficina!</div>';
        }


        $query = 'INSERT INTO cadastro (nome, ra,turma,oficina,notebook,termos, data_agora) VALUES (:nome, :ra, :turma, :oficina, :notebook, :termos, :data_agora)';
        $result = $conn->prepare($query);
        $result->bindParam(':nome', $args['nome'], PDO::PARAM_STR);
        $result->bindParam(':ra', $args['ra'], PDO::PARAM_STR);
        $result->bindParam(':turma', $args['turma'], PDO::PARAM_STR);
        $result->bindParam(':oficina', $args['oficina'], PDO::PARAM_STR);
        $result->bindParam(':notebook', $args['notebook'], PDO::PARAM_INT);
        $result->bindParam(':termos', $args['termos'], PDO::PARAM_INT);
        $result->bindParam(':data_agora', $data_agora, PDO::PARAM_STR);
        if ($result->execute()) {
            return '<div class="alert alert-success" role="alert"> Usuário criado com sucesso! </div>';
        } else {
            return false;
        }
    } else {
        return '<div class="alert alert-danger" role="alert"> Oficina com lotação máxima! Por favor atualize a página </div>';
    }
    }


    static function get() {
        include '../admin/include/connection.php';
        $query = 'SELECT * FROM cadastro';
        $result = $conn->prepare($query);
        $result->execute();
        $result = $result->fetchAll();
        return $result;

    }

    static function validaCapacidade($args) {
        include '../admin/include/connection.php';
        $query = 'SELECT COUNT(*) FROM cadastro c, oficinas o WHERE c.oficina = :oficina and c.oficina = o.id_oficina';
        $result = $conn->prepare($query);
        $result->bindParam(':oficina', $args['oficina'], PDO::PARAM_STR);
        $result->execute();
        $total = $result->fetchColumn();
        echo $total;
        if ($total <= 40) {
            return true;
        } else {
            return false;
        }
    }

    static function validaData($args, $data_agora) {
        include '../admin/include/connection.php';
        $query = 'SELECT COUNT(*) FROM cadastro WHERE data_agora = :data_agora and ra = :ra';
        $result = $conn->prepare($query);
        $result->bindParam(':ra', $args['ra'], PDO::PARAM_STR);
        $result->bindParam(':data_agora', $data_agora, PDO::PARAM_STR);
        $result->execute();
        $exist = $result->fetchColumn();
        if ($exist == 1) {
            return true;
        } else {
            return false;
        }



    }
  



}



?>