<?php
session_start();
include('Connect.php');

 //BORRAR PRIMERO REGISTROS DE MAS DE 2 DIAS o aun mas viejos
        $query = "SELECT tiempo FROM buyerrequests ";
        $fila=$connection->query($query);
        while ($compras = $fila->fetch_array(MYSQLI_BOTH)){
        $date1 = date('Y-m-d');
        $query2 = "DELETE FROM buyerrequests WHERE tiempo <='$date1'";
        mysqli_query($connection,$query2);
        }
?>