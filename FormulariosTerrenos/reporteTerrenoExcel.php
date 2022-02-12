<?php
include 'database.php';
error_reporting(0);
/*cabecera de excel*/
header('Content-Type: application/vnd.ms-excel;charset=UTF-8');
header('Content-Disposition: attachment; filename=excelCargoReporte.xls');

$stmt = $dbh->prepare("select * from terrenos");
$stmt->execute();
?>
<div>
<table>
	<thead>
		<tr>
			<th>NOMBRE</th>
			<th>DNI</th>
			<th>DISTRITO</th>
			<th>DIRECCION</th>
			<th>METROS</th>
			<th>PRECIO</th>
            <th>DESCRIPCION</th>
          
		</tr>
	</thead>
	<tbody>
		<?php
		 $Terrenos = $stmt->fetchAll(PDO::FETCH_ASSOC);
		 foreach ($Terrenos as $Terreno) {
		?>
		   <tr>
		   	<td><?php echo $Terreno['namePro'];?></td>
		   	<td><?php echo $Terreno['DNI'];?></td>
		   	<td><?php echo $Terreno['dist'];?></td>
		   	<td><?php echo $Terreno['direct'];?></td>
		   	<td><?php echo $Terreno['metros'];?></td>
		   	<td><?php echo $Terreno['precio'];?></td>
		   	<td><?php echo $Terreno['descri'];?></td>

		   </tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>