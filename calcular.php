<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#7FFF00;">

</body>
</html>
<?php
if($_POST){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $descripcion =$_POST["descripcion"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $subtotal =$_POST["subtotal"];
    $iva = $_POST["iva"];
    $cesc = $_POST["cesc"];
    $total = $_POST["total"];

    $NOMBRE = $nombre;
    $APELLIDO = $apellido;
    $DIRECCION = $direccion ;
    $SUBTOTAL = $cantidad * $precio;
    $IVA = $SUBTOTAL * $iva;
    $CESC = $SUBTOTAL * $cesc;
    $TOTAL = $SUBTOTAL + $IVA + $CESC;

    echo "
    <h1>CALCULO DE PRECIO DE EQUIPO ELECTRONICO</h1>
       
        <table style=\"width: 700px; border: solid 5px black; padding: 10px;\">

            <tr>
                <td>NOMBRE:</td>
                <td>$nombre</td>
                
            <tr>

            <tr>
                <td>APELLIDO:</td>
                <td>$apellido</td>
                
            <tr>

            <tr>
                <td>DIRECCION:</td>
                <td>$direccion</td>
                
            <tr>

            <tr>
                <td>DESCRIPCION:</td>
                <td>$descripcion</td>
                
            <tr>

            <tr>
                <td>CANTIDAD:</td>
                <td>$cantidad</td>
                
            <tr>

            <tr>
                <td>PRECIO:</td>
                <td>$ ".number_format($precio,2) ."</td>
                
            <tr>


            <tr>
                <td>SUBTOTAL:</td>
                <td>$subtotal</td>
                <td>$ ".number_format($SUBTOTAL,2)."</td>
            <tr>

            <tr>
                <td>IVA:</td>
                <td>$iva %</td>
                <td>$ ".number_format($IVA,2)."</td>
            <tr>

            <tr>
                <td>CESC:</td>
                <td>$cesc %</td>
                <td>$ ".number_format($CESC,2)."</td>
            <tr>

            <tr>
                <td>TOTAL:</td>
                <td>$total</td>
                <td>$ ".number_format($TOTAL,2)."</td>
            <tr>

        <table>
        <br>

        <a href='index.php'>Regresar<a/>

        <style>
        *{
            font-family:Arial;
        font-size: 20pt;  
         }
        </style> 

        ";
}