<?php
    require_once 'connection.php';
    try {

        $query = "DELETE FROM platos WHERE titulo = '" . $_GET['titulo'] ."'";
    
        $connection->exec($query);
        echo "plato eliminado";
    } catch (Exception $e) {
        echo $e;
    }
   
?>