<?php
session_start();
include('Connect.php');

 //BORRAR PRIMERO REGISTROS DE MAS DE 2 DIAS o aun mas viejos
        $query = "SELECT fecha_show_case FROM products WHERE admin_show_case='0'";
        $fila=$connection->query($query);
        while ($compras = $fila->fetch_array(MYSQLI_BOTH)){
        $date1 = date('Y-m-d'); 
        $query2 = "UPDATE products SET productaction ='2' WHERE fecha_show_case <='$date1'";
        mysqli_query($connection,$query2);
        }
?>