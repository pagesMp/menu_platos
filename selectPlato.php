<?php

    require_once 'connection.php';

    $query = "SELECT * FROM platos";
    $result = $connection->prepare($query);
    $result-> execute();
    $tasks = $result->fetchAll();

    foreach($tasks as $plato){
        echo "</br>";
        echo "</br> idplatos:  " .$plato['idplatos'];
        echo "</br> titulo:  " .$plato['titulo'];
        echo "</br> numero_comensales:  " .$plato['numero_comensales'];  
        echo "</br> tipo_plato:  " .$plato['tipo_plato'];
        echo "</br> precio:  " .$plato['precio']."€";
        echo "</br><a href='updatePlato.php?idplatos=". $plato['idplatos'] ."&titulo=" . $plato['titulo'] . "&numero_comensales=" . $plato['numero_comensales'] . "&tipo_plato=" . $plato['tipo_plato'] . "&precio=" . $plato['precio'] . "'>Modificar</a>";
        echo "</br><a href='deletePlato.php?idplatos=" . $plato['idplatos'] . "'>Borrar</a>";
    }    

?>