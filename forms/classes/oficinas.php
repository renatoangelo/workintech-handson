<?php


class Oficina {
    
    static function get() {
        include '../admin/include/connection.php';
        $query_oficina = 'SELECT o.id_oficina, o.nome 
        FROM oficinas o 
        WHERE o.limite > (
                            SELECT count(*) 
                            FROM cadastro c 
                            WHERE c.oficina = o.id_oficina
                          )';
        $oficinas_disponiveis = $conn->prepare($query_oficina);
        $oficinas_disponiveis->execute();
        $oficinas_disponiveis = $oficinas_disponiveis->fetchAll();

        return $oficinas_disponiveis;
    }

    static function getData($args) {
        include '../admin/include/connection.php';
        $query = 'SELECT date FROM oficinas WHERE id_oficina = :oficina';
        $result = $conn->prepare($query);
        $result->bindParam(':oficina', $args['oficina'], PDO::PARAM_STR);
        $result->execute();
        $result = $result->fetchColumn();
        return $result;

    }

}
?>