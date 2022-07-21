<?php
    require_once 'connection.php';
    try {

        $query = "DELETE FROM platos WHERE idplatos = '" . $_GET['idplatos'] ."'";
    
        $connection->exec($query);
        echo "plato eliminado";
    } catch (Exception $e) {
        echo $e;
    }
   
?>