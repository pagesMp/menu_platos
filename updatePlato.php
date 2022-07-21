<?php
    require_once 'connection.php';
   if(isset($_POST['titulo'])){
    $query = "update platos set titulo='" . $_POST['titulo'] . "', numero_comensales='" . $_POST['numero_comensales'] . "', tipo_plato='" . $_POST['tipo_plato']. "', precio='" . $_POST['precio'] . "' where idplatos='". $_POST['idplatos'] . "'";
        $connection->exec($query);
        echo "plato actualizado";
    }else{    

?>

<form action="updatePlato.php" method="post">
    <input type="hidden" name="idplatos" value="<?php echo $_GET['idplatos']?>">
    Titulo <input type="text" name="titulo" value="<?php echo $_GET['titulo']?>"><br><br>
    Numero comensales <input type="text" name="numero_comensales" value="<?php echo $_GET['numero_comensales']?>"><br><br>
    Tipo Plato <input type="text" name="tipo_plato" value="<?php echo $_GET['tipo_plato']?>"><br><br>
    Precio <input type="text" name="precio" value="<?php echo $_GET['precio']?>"><br><br>
    <input type="submit" value="Enviar">  
</form>

<?php
    }

?>