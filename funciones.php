<?php
    function connect_bd()
    {
        $db = pg_connect("host=localhost port=5432 dbname=users user=postgres password=warofworld") or die('connection failed');
        if (!$db) {
            echo "Ha ocurrido un error.\n";
        exit;
        }
        return $db;
    }

    function get_typeuser($id)
    {
        if ($id==False) {
            return 0;
        }
        $db = connect_bd();
        $vendedor = "SELECT id_vendedor from vendedores where id_empleado = $id";
        $result = pg_query($db,$vendedor);
        if (pg_affected_rows($result) == 1) {
            return 1; // Es un vendedor
        }
        $gerente = "SELECT id_gerente from gerentes where id_empleado = $id";
        $result = pg_query($db,$gerente);
        if (pg_affected_rows($result) == 1) {
            return 2; // Es un gerente
        }
        $empleado = "SELECT id_empleado from empleados where id_empleado = $id";
        $result = pg_query($db,$empleado);
        if (pg_affected_rows($result) == 1) {
            return 3; // Es un empleado
        }
        $cliente = "SELECT id_cliente from clientes where id_cliente = $id";
        $result = pg_query($db,$cliente);
        if (pg_affected_rows($result) == 1) {
            return 4; // Es un cliente
        }
        return -1; // No esta en la base de datos
    }

    function redirect($url) 
    {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }

    function prompt()
    {
        echo ("<script type='text/javascript'> var answer = prompt('Porfavor ingrese un ID valido o en su defecto registrese'); </script>");
        $answer = "<script type='text/javascript'> document.write(answer); </script>;";
        return($answer);
    }
?>
