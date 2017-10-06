<?php 

	if (!isset($_POST['search']))exit('No se recibió el valor a buscar') {
		require_once '../conexion.php'
		function search()
		{
			$mysqli=getConnexion();
			$search=$mysqlli->real_escape-string($_POST['search'])
			$query="SELECT ord_id,observaciones FROM orden WHERE observaciones LIKE '%search%'";
			$res=$mysqli->query($query);
			while ($row=$res->fetch_array(MYSQLI_ASSOC)) {
				echo "<p><a href='$row[ord_id]'> $row[observaciones]</a></p> ";
				# code...
			}
					}
	}
 ?>