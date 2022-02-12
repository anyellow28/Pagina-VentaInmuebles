<!DOCTYPE html>
<html>
<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link href="../Css/Estilo.css" rel="stylesheet" type="text/Css"/>
    <link href="../Css/estiloform.css" rel="stylesheet" type="text/Css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
</head>
<body>
     <nav class="navetilo"><!-- menu de navegacion -->

            <a class="barra-enlace"  href="../index.html">Home</a>
            <a class="barra-enlace" href="../sesionformularios.php">Registros</a>
            <a class="barra-enlace" href="">Contacto</a>
        </nav>   
    <form class="form-inicio"  method="post">
        <h1>Registrar Cliente</h1>
        <input class="form-letras" type="number" name="dni" placeholder="DNI">
        <input class="form-letras" type="text" name="name" placeholder="Nombre completo">
        <input class="form-letras" type="email" name="email" placeholder="Email">
        <input class="form-letras" type="text" name="telefono" placeholder="telefono">
        <center>
        <input type="submit" class="btn btn-primary" name="register">
        </center>
        
    </form class="form-inicio">
    <center>
        <form action="bandejaCliente.php">
            <input class="btn btn-danger" type="submit" name="volver" value="Regresar">
        </form>
    </center>
    
    
    <?php 
        include("registrar.php");
        ?>
</body>
</html>
