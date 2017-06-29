<?php
datos();
function datos()
{
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$cel = $_POST['celular'];
$mail = $_POST['mail'];
$retorno = $nom."<br>".$ape."<br>".$cel."<br>".$mail;
echo $retorno;
return $retorno;
}
?>