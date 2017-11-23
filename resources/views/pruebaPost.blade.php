
<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
</head>
<body>
	<form action="validate" method="POST">
		 {{csrf_field()}}
		 <p>Su nombre: <input type="text" name="nombre" /></p>
		 <p>Su edad: <input type="text" name="edad" /></p>
		 <p><input type="submit" /></p>
		</form>
</body>
</html>