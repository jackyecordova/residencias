<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="imprimir()">
<div id="todo">
	<div class="col-lg-8">
		<h1>Departamento de obras publicas</h1>
	</div>
	<div class="col-lg-4">
		orden de compras
	</div>

	
</div>
<script type="text/javascript">
	function imprimir (argument) {
		  var printContents = document.getElementById("todo").innerHTML;
	     var originalContents = document.body.innerHTML;

	     document.body.innerHTML = printContents;

	     window.print();

	     document.body.innerHTML = originalContents;
		}
</script>
</body>
</html>