<?php
include 'database.php';
error_reporting(0);
/*cabecera de excel*/
header('Content-Type: application/vnd.ms-excel;charset=UTF-8');
header('Content-Disposition: attachment; filename=excelCargoReporte.xls');

$stmt = $dbh->prepare("select * from departamentos");
$stmt->execute();
?>
<div>
<table>
	<thead>
		<tr>
			<th>DISTRITO</th>
			<th>HABITACIONES</th>
			<th>DIRECCION</th>
			<th>PRECIO</th>
            <th>REGALO</th>
          
		</tr>
	</thead>
	<tbody>
		<?php
		 $Departamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
		 foreach ($Departamentos as $Departamento) {
		?>
		   <tr>
		   	<td><?php echo $Departamento['distrito'];?></td>
		   	<td><?php echo $Departamento['numhab'];?></td>
		   	<td><?php echo $Departamento['direccion'];?></td>
		   	<td><?php echo $Departamento['precio'];?></td>
		   	<td><?php echo $Departamento['numregalo'];?></td>

		   </tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>