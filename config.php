<?php
//   LIGANDO O PHP AO BACO DE DADOS

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'mydb_telecall');

$conn = new Mysqli(HOST,USER,PASS,BASE);
?>