<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTA DE EQUIPOS ELECTRONICOS</title>
    
    <style>
label{
    padding: 10px;
        width:200px;
}
    *{
        font-family:Arial;
    }
    </style>

    <script>
function validar(){
    if(document.all.nombre.value==""){
        alert("Por favor ingrese el nombre");
        document.all.nombre.focus();
        return false;
    }

    if(document.all.apellido.value==""){
        alert("Por favor ingrese el apellido");
        document.all.apellido.focus();
        return false;
    }

    if(document.all.direccion.value==""){
        alert("Por favor ingrese la dirección");
        document.all.direccion.focus();
        return false;
    }

    if(document.all.descripcion.value==""){
        alert("Por favor ingrese la descripción");
        document.all.descripcion.focus();
        return false;
    }

    if(document.all.cantidad.value==""){
        alert("Por favor ingrese la cantidad");
        document.all.cantidad.focus();
        return false;
    }

    if(document.all.precio.value==""){
        alert("Por favor ingrese el precio");
        document.all.precio.focus();
        return false;
    }
}
    </script>

<link rel="stylesheet" href="styles/estilos.css" >
</head>
<body style="background-color:#7B68EE;">

    <center><h1>APLICACIÓN WEB PARA EL CÁLCULO DE PRECIO </h1></center>
    <center><h1>DE EQUIPOS ELECTRÓNICOS</h1></center>
            <h2>DATOS DEL CLIENTE</h2>

    <form method="post" action="calcular.php" onsubmit="return validar();">
            <div>
       <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" size="50">
    </div>
    <br>
    <div>
        <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" size="50" border: solid 5px;>
    </div>
    <br>
    <div>
        <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" size="70">
    </div>

<h2>DATOS DE LA VENTA</h2>

        <div>
        <label for="descripcion">Descripción del producto:</label>
                <input type="text" name="descripcion" id="descripcion" size="77">
        </div>
           <br>
        <div>
            <label for="cantidad">Cantidad:</label>
                <input type="text" name="cantidad" id="cantidad" value="" placeholder="Introduzca la cantidad">
   
            <label for="precio">Precio:</label>
                <input type="text" name="precio" id="precio" value="" placeholder="Introduzca el precio">

           <label for="subtotal">Sub-Total:</label>
                <input type="text" name="subtotal" id="subtotal"> 
                
        <div>
        <br>
        <div>
            <label for="iva">IVA:</label>
                <input type="text" name="iva" id="iva" value= 0.13>        

            <label for="cesc">CESC:</label>
                <input type="textr" name="cesc" id="cesc" value= 0.05>     

            <label for="total">Total:</label>
                <input type="number" name="total" id="total">     
        <div>
        <br>
                <input type="submit" value="Calcular Datos">
    </form>

 </body>
</html>