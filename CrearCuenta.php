<!DOCTYPE html>
<html>
<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link href="Css/Estilo.css" rel="stylesheet" type="text/Css"/>
    <link href="Css/estiloform.css" rel="stylesheet" type="text/Css"/>
    <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
       
</head>
<body>
     <nav class="navetilo"><!-- menu de navegacion -->    
            <a class="barra-enlace"  href="index.html">Home</a>
            <a class="barra-enlace" href="">Nosotros</a>
            <a class="barra-enlace" href="">Contacto</a>
            <a class="barra-enlace" href="inicioSesion.html">Inicio de Sesion</a>
           </nav>
    <form class="form-inicio"  method="post">
        <h1>Registrar Cliente</h1>
        <input class="form-letras" type="text" name="usuario" placeholder="Ingrese su Usuario">
        <input class="form-letras" type="password" name="contraseña" placeholder="contraseña">
       
        <input type="submit" class="btn btn-primary" name="register">
    </form>
    <?php 
        include("registrarCuenta.php");
        ?>
</body>
</html>