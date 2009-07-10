<?php

function Conectar(){
$link = mysql_connect("localhost","root","");
mysql_select_db("irfe", $link);
}

$link = Conectar();
$q = "INSERT INTO test (Hola) VALUES ('HSAHSAHSAH')";
$rs = mysql_query($q);
if($rs == false) {
	echo '<p>Error al insertar los campos en la tabla.</p>';
}else{
	echo '<p>Los datos se han insertado correctamente.</p>';
}