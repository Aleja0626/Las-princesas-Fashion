<?php
// Crea conexión
$conectar = conexionphp();

function conexionphp(){
    $server ='127.0.0.1';
    $user='root';
    $pass='123456';
    $db ='resgistrousuariospf';
    $conectar = mysqli_connect($server, $user, $pass, $db)or die ("Error en la conexion");
    return $conectar;
}

// Recibe los datos del formulario
$user = $_POST['Usuario'];
$email = $_POST['email'];
$contra = $_POST['Contraseña'];

// Inserta los datos en la base de datos
$sql = "INSERT INTO users (usuario, email, Contraseña) VALUES ('$user', '$email', '$contra')";

if ($conectar->query($sql) === TRUE) {
    echo "Usuario registrado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conectar->error;
}

$conectar->close();
?>
