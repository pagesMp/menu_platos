<?php

    require_once 'connection.php';

    if(isset($_POST)){
        try {
            $query = "insert into platos(titulo, numero_comensales, tipo_plato, precio) values ('" .$_POST["titulo"]."','" .$_POST["numero_comensales"]."','" .$_POST["tipo_plato"]."','" .$_POST["precio"]."')";
            $connection->exec($query); 

            echo "plato creado".$_POST["titulo"] . "insertado";
        } catch (Exception $e) {
            echo $e;
        };
    };

?>