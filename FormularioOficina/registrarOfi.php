<!DOCTYPE html>
<html>
<head>
    <title>Registrar oficina</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link href="../Css/Estilo.css" rel="stylesheet" type="text/Css"/>
    <link href="../Css/estiloform.css" rel="stylesheet" type="text/Css"/>
    <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
       
</head>
<body>
     <nav class="navetilo"><!-- menu de navegacion -->    
            <a class="barra-enlace"  href="index.html">Home</a>
            <a class="barra-enlace" href="../sesionformularios.php">Registros</a>
            <a class="barra-enlace" href="">Contacto</a>
            </nav>
    <form method="post">
        <h1>Registrar Oficina</h1>
        
        <input  type="text" name="Nombre" placeholder="Nombre">
        <input  type="number" name="Codigo" placeholder="Codigo completo">
        <input  type="text" name="Direccion" placeholder="Direccion">
        <input  type="text" name="Dimension" placeholder="Dimension">
        <input  type="text" name="Descripcion" placeholder="Descripcion">
        <input  type="number" name="Precio" placeholder="Precio">
        
        <input type="submit" class="btn btn-primary" name="register">
        <input type="submit"  class="btn btn-primary" value="Regresar" href="bandejaOficina.php">
    </form>
    
    <?php 
        include("registrarOficinaForm.php");
        ?>
</body>
</html>
