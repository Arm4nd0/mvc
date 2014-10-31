<?php
    $conexion=mysql_connect("localhost","root","")or die("error de conexion");
    $base=mysql_select_db("sistemaescolar",$conexion) or die("error de base");
    mysql_query("SET NAMES 'UTF8'");
?>