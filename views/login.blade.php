<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	 <h1> - Desatranques Jaen S.L - </h1>

<FORM action="" METHOD="post">
	
		<p>Usuario: 
		   <INPUT TYPE="text" NAME="usuario" 
		   value="<?=isset($_POST['usuario']) ? $_POST['usuario'] : ''?>">		
		</p>

        <p>Clave: 
		   <INPUT TYPE="text" NAME="clave" 
		   value="<?=isset($_POST['clave']) ? $_POST['clave'] : ''?>">		
		</p>
		
		<input
			type="submit" name="enter" value="Entrar">

</FORM>
</body>
</html>