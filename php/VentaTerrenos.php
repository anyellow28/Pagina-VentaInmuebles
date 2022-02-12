<?php
    include './LibreriaTerrenos.php';
$cant=0;
$icom=0.0;
$ides=0.0;
$ipag=0.0;

if(isset($_POST["btnProce"])){
      $mode = $_POST["cboModel"];
      $cant = $_POST["txtCanti"];       
      $icom= fn_impCompra($mode,$cant);
      $ides= fn_impDescuento($cant,$icom);
      $ipag= fn_impPagar($icom,$ides);
      $nomDistrito = fn_NomDistrito($mode);

}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Ventas</title>
		  <style type="text/css">
            .btnWidth {
                width: 80px;
            }     
        </style>

	<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css" />
        <link href="../Css/estiloform.css" rel="stylesheet" type="text/Css"/>
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="../bootstrap-5.1.3-dist/js/bootstrap.min.js"/>
    </head>
    <body>

        <nav class="navetilo"><!-- menu de navegacion -->
            <a class="barra-enlace"  href="../index.html">Inicio</a>
            <a class="barra-enlace" href="">Nosotros</a>
            <a class="barra-enlace" href="">Contacto</a>
           </nav>  

	<div class="container">
	<br/>
	<div class="panel panel-default">
	    		<div class="panel-heading"><h3>VENTA DEL TERRENOS</h3></div>
				<div class="panel-body">
				
	<form name="frmVista" method="post" action="VentaTerrenos.php" class="form-horizontal" >
	    <hr />
            <div class="form-group">
                <label for="frmBoleta:txtCanti" class="control-label col-sm-4">Metros Cuadrados:</label>
                <div class="col-sm-2">
                    <input type="number" name="txtCanti" 
                     class="form-control" required placeholder="Cantidad" />
                </div>
            </div>
             
            <br>
            <div class="form-group">
                <label for="frmBoleta:cboModel" class="control-label col-sm-4">Distrito:</label>
                <div class="col-sm-3">
                    <select name="cboModel" class="zonal_select">
                        <option value="0">Seleccione</option>
                        <option value="1">Miraflores</option>
                        <option value="2">San Martin de Porres</option>
                        <option value="3">Surco</option>
                        <option value="4">Barranco</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="col-sm-2">
                        <input type="submit" name="btnProce" value="Procesar" class="btn btn-success" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="frmBoleta:txtModelo" class="control-label col-sm-4">Distrito:</label>
                <div class="col-sm-2">
                    <input type="text" name="txtModelo" 
                     class="form-control" disabled value="<?php echo $nomDistrito ?>" />
                </div>
            </div>
             <br>
            <div class="form-group">
                <label for="frmBoleta:txtMet" class="control-label col-sm-4">Metros Cuadrados:</label>
                <div class="col-sm-2">
                    <input type="number" name="txtMet" 
                     class="form-control" disabled value="<?php echo $cant ?>" />
                </div>
            </div>
             <br>
          

            <br>
            <div class="form-group">
                <label for="frmBoleta:txtIcom" class="control-label col-sm-4">Precio Base:</label>
                <div class="col-sm-2">
                    <input type="number" name="txtIcom" 
                     class="form-control" disabled value="<?php echo $icom ?>" />
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="frmBoleta:txtIdes" class="control-label col-sm-4">Descuento:</label>
                <div class="col-sm-2">
                    <input type="number" name="txtDes" 
                     class="form-control" disabled value="<?php echo $ides ?>" />
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="frmBoleta:txtIpag" class="control-label col-sm-4">Precio Total:</label>
                <div class="col-sm-2">
                    <input type="number" name="txtIpag" 
                     class="form-control" disabled value="<?php echo $ipag ?>" />
                </div>
            </div> 
            <br>
        
            </div> 
    </form>
      </div>
	</div>
	</div>
	</body>
</html>