<?php

$hayError=FALSE;
$errores=array();
include ('ctes.php');
include 'esAdmin.php';

if ( ! $_POST ) 
{
	include (VIEW_PATH.'tareas.php');
}
else 
{

	if (ValorPost('nombre')=='')
	{
		$hayError = true;
		$errores['nombre']='Introduzca un nombre.';
    }

    if (ValorPost('telefono')=='' || strlen(ValorPost('telefono')) != 9)
	{
		$hayError = true;
		$errores['telefono']='Introduzca un telefono correcto';
	}

    if (ValorPost('descripcion')=='')
	{
		$hayError = true;
		$errores['descripcion']='Introduzca una descripcion de la tarea.';
	}
	
	if (ValorPost('correo')=='' || !filter_var(ValorPost('correo'), FILTER_VALIDATE_EMAIL))
	{
		$hayError = true;
		$errores['correo']='Introduzca un correo válido.';
	}
	
	if (ValorPost('direccion')=='')
	{
		$hayError = true;
		$errores['direccion']='Introduzca la direccion de la tarea.';
	}

	if (ValorPost('poblacion')=='')
	{
		$hayError = true;
		$errores['poblacion']='Introduzca la poblacion de la tarea.';
	}

	if (ValorPost('codigopost')=='' || strlen(ValorPost('codigopost')) != 5)
	{
		$hayError = true;
		$errores['codigopost']='Introduzca un codigo postal correcto';
	}
	
	if (ValorPost('provincias')=='')
	{
		$hayError = true;
		$errores['provincias']='Introduzca la provincia de la tarea.';
	}

	if (ValorPost('estado')=='')
	{
		$hayError = true;
		$errores['estado']='Introduzca el estado de la tarea.';
	}

	if (ValorPost('operarioenc')=='')
	{
		$hayError = true;
		$errores['operarioenc']='Introduzca el operario encargado de la tarea.';
	}
	
	if (ValorPost('fecharealiz')=='' || !validar_fecha_espanol(ValorPost('fecharealiz')))
	{
		$hayError = true;
		$errores['fecharealiz']='Introduzca una fecha de realización correcta.';
	}


	

	if ($hayError)
	{
		include 'tareas.php';
	}
	else 
	{ 
		if($esAdmin){
			include (VIEW_PATH.'menuAdmin.php');	
		}else{
			include (VIEW_PATH.'menuOper.php');
		}
	}
}



// FUNCIONES

function ValorPost($nombreCampo, $valorPorDefecto='')
{
	if (isset($_POST[$nombreCampo]))
		return $_POST[$nombreCampo];
	else
		return $valorPorDefecto;
}

function VerError($campo)
{
	global $errores;
	if (isset($errores[$campo]))
	{
		echo '<span style="color:red">'.$errores[$campo].'</span>';
	}
}

function CreaSelect($name, $opciones, $valorDefecto='')
{
	$html="\n".'<select name="'.$name.'">';
	foreach($opciones as $value=>$text)
	{
		if ($value==$valorDefecto)
			$select='selected="selected"';
		else
			$select="";
		$html.= "\n\t<option value=\"$value\" $select>$text</option>";
	}
	$html.="\n</select>";

	return $html;
}

function validar_fecha_espanol($fecha){
	$valores = explode('/', $fecha);
	if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
		return true;
    }
	return false;
}