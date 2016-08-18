<?php
if(isSet($_COOKIE["codigo"]))
$email=$_COOKIE["codigo"];
if(isSet($_COOKIE["email"]))
$email=$_COOKIE["email"];
if(isSet($_COOKIE["senha"]))
$senha=$_COOKIE["senha"];
if(isSet($_COOKIE["nivel"]))
$nivel=$_COOKIE["nivel"];


if(!(empty($email) OR empty($senha)))
{
include "cnx.php";
$resultado = mysql_query("SELECT * FROM clientes WHERE email='$email'");
if(mysql_num_rows($resultado)==1)
{
if($senha != mysql_result($resultado, 0, "senha"))
{	
setcookie('codigo');
setcookie('email');
setcookie('senha');
setcookie('nivel');
echo "<script>alert('Você não efetuou o LOGIN!'); location.href='tela_login.php' </script>";
exit;
}
}
else
{
setcookie('codigo');
setcookie('email');
setcookie('senha');
setcookie('nivel');
echo '<script>alert("Você não efetuou o LOGIN!");</script>';
exit;
}
}
else{
echo '<script>alert("Você não efetuou o LOGIN!");</script>';
exit;
}
mysql_close();
?>