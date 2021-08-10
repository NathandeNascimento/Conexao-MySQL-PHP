<?php
$sevidor = "localhost";
$dbname = "universo";
$dbusuario = "root";
$dbsenha = "root";

$conn = mysqli_connect($sevidor, $dbusuario, $dbsenha, $dbname);
if (!$conn)  {
    die ("Conexão falhouuuu:" . mysqli_connect_error());
}




?>