<?php

$name= $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];
$colaboradores = $_POST['colaboradores'];
$industria = $_POST['industria'];

$destinatario = "bryan240499@gmail.com";
$asunto = "Smart Boleta Landing Page";


$carta = "De: $name  \n";
$carta .= "Apellido: $lastname \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Empresa: $empresa \n";
$carta .= "Número de Colaboradores: $colaboradores \n";
$carta .= "Industria: $industria";


//envio de mensaje
mail($destinatario, $asunto, $carta);
header('Location:enviado.html');


?>