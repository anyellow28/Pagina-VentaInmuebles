<?php
include 'database.php';
error_reporting(0);
/*cabecera de excel*/
header('Content-Type: application/vnd.ms-excel;charset=UTF-8');
header('Content-Disposition: attachment; filename=excelCargoReporte.xls');

$stmt = $dbh->prepare("select * from clientes");
$stmt->execute();
?>
<div>
<table>
	<thead>
		<tr>
			<th>DNI</th>
			<th>NOMBRE</th>
			<th>EMAIL</th>
			<th>TELEFONO</th>          
		</tr>
	</thead>
	<tbody>
		<?php
		 $Clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
		 foreach ($Clientes as $Cliente) {
		?>
		   <tr>
		   	<td><?php echo $Cliente['dni'];?></td>
		   	<td><?php echo $Cliente['name'];?></td>
		   	<td><?php echo $Cliente['email'];?></td>
		   	<td><?php echo $Cliente['telefono'];?></td>
		   </tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>