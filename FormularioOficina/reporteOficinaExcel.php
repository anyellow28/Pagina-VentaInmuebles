<?php
include 'database.php';
error_reporting(0);
/*cabecera de excel*/
header('Content-Type: application/vnd.ms-excel;charset=UTF-8');
header('Content-Disposition: attachment; filename=excelCargoReporte.xls');

$stmt = $dbh->prepare("select * from oficina");
$stmt->execute();
?>
<div>
<table>
	<thead>
		<tr>
			<th>Nombre Oficina</th>
			<th>Codigo</th>
			<th>Direccion</th>
			<th>Dimension</th>
			<th>Descripcion</th>
			<th>Precio</th>      
		</tr>
	</thead>
	<tbody>
		<?php
		 $Oficinas = $stmt->fetchAll(PDO::FETCH_ASSOC);
		 foreach ($Oficinas as $Oficina) {
		?>
		   <tr>
		   	<td><?php echo $Oficina['Nombre'];?></td>
		   	<td><?php echo $Oficina['Codigo'];?></td>
		   	<td><?php echo $Oficina['Direccion'];?></td>
		   	<td><?php echo $Oficina['Dimension'];?></td>
		   	<td><?php echo $Oficina['Descripcion'];?></td>
		   	<td><?php echo $Oficina['Precio'];?></td>
		   </tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>