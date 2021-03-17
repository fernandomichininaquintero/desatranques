<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h1>TAREA</h1>
    <form action="" method="post">
        <label for="contacto">Persona de Contacto</label>
        <input type="text" name="contacto"><br>
        <label for="tlf">Telefono</label>
        <input type="text" name="tlf"><br>
        <label for="decrip">Descripcion</label>
        <input type="text" name="descrip"><br>
        <label for="email">Correo electronico</label>
        <input type="text" name="email"><br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion"><br>
        <label for="pobl">Poblacion</label>
        <input type="text" name="pobl"><br>
        <label for="cp">Codigo Postal</label>
        <input type="text" name="cp"><br>
        <label for="prov">Provincia</label>
        <?=
			CreaSelect('provs',array(
				''=>'',
				'1'=>'Alava',
                '2'=>'Albacete',
                '3'=>'Alicante',
				'4'=>'Almeria',
                '5'=>'Avila',
                '6'=>'Badajoz',
                '7'=>'Balears (Illes)',
				'8'=>'Barcelona',
                '9'=>'Burgos',
                '10'=>'Cáceres',
                '11'=>'Cádiz',
				'12'=>'Castellón',
                '13'=>'Ciudad Real',
                '14'=>'Córdoba',
				'15'=>'Coruña (A)',
                '16'=>'Cuenca',
                '17'=>'Girona',
				'18'=>'Granada',
                '19'=>'Guadalajara',
                '20'=>'Guipzcoa',
                '21'=>'Huelva',
				'22'=>'Huesca',
                '23'=>'Jaén',
                '24'=>'León',
				'25'=>'Lleida',
                '26'=>'Rioja (La)',
                '27'=>'Lugo',
				'28'=>'Madrid',
                '29'=>'Málaga',
                '30'=>'Murcia',
                '31'=>'Navarra',
				'32'=>'Ourense',
                '33'=>'Asturias',
                '34'=>'Palencia',
				'35'=>'Palmas (Las)',
                '36'=>'Pontevedra',
                '37'=>'Salamanca ',
				'38'=>'Santa Cruz de Tenerife',
                '39'=>'Cantabria',
                '40'=>'Segovia',
                '41'=>'Sevilla',
				'42'=>'Soria',
                '43'=>'Tarragona',
                '44'=>'Teruel',
				'45'=>'Toledo',
                '46'=>'Valencia',
                '47'=>'Valladolid ',
				'48'=>'Vizcaya',
                '49'=>'Zamora',
                '50'=>'Zaragoza',
                '51'=>'Ceuta',
				'52'=>'Melilla',),
                ValorPost('ccaa'))?><br>
        <label for="estado">Estado</label>
        <input type="text" name="estado"><br>
        <label for="fch_crea">Fecha Creacion</label>
        <input type="text" name="fch_crea" value="<?= date('d-m-Y') ?>" readonly><br>
        <label for="operario">Operario Encargado</label>
        <input type="text" name="operario"><br>
        <label for="fch_rea">Fecha Realizacion</label>
        <input type="text" name="fch_rea"><br>
        <label for="anot_ant">Anotaciones Anteriores</label>
        <input type="text" name="anot_ant"><br>
        <label for="anot_post">Anotaciones Posteriores</label>
        <input type="text" name="anot_post"><br>
    </form>
</body>
</html>