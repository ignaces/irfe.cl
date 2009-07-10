<?php

// Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
if(isset($_POST['titulo']) && !empty($_POST['titulo']);

// Si entramos es que todo se ha realizado correctamente

$link = mysql_connect("localhost","root","");
mysql_select_db("irfe",$link);

// Con esta sentencia SQL insertaremos los datos en la base de datos
mysql_query("INSERT INTO test (Hola) VALUES ('{$_POST['titulo']}',$link);
}

?>