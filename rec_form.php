<?php

echo "<h1> Recebe Form</h1>";
$user=$_POST["user"];
// $e_mail=$_POST["email"];
$senha=$_POST["senha"];
$cript=md5($senha);

echo "Usuario: $user<br>";
echo "Senha: $senha<br>";
// echo "email: $email<br>";

?>
