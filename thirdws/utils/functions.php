<?php

/**
 *  Gets the provinces from the database
 */
function getProvinces(): array {
  //select * from provinces
  $provinces = [];
  $usuario = "root";
  $contrasena = "";
  $servidor = "localhost";
  $database = "thworkshop";

  //CREAMOS LA CONEXIÓN CON EL SERVIDOR QUE SE ALMACENARÁ EN $conexion
  $connection= mysqli_connect($servidor, $usuario, $contrasena) or die("No se ha podido conectar con el servidor");

  //CREAMOS LA CONEXIÓN CON LA BASE DE DATOS QUE SE ALMACENARÁ EN $db
  $db = mysqli_select_db($connection, $database) or die("No se ha podido conectar con la base de datos");

$sql = "select * from provinces";

$result = mysqli_query($connection, $sql);
while ($row = $result->fetch_assoc()) {
  $provinces[] = array($row["province_id"] => $row["province_name"]);
}

print_r ($provinces);
// 
  /*
  $sql = "select * from provinces";
  try { 
    $conn = getConnection();
  return [1 => 'Alajuela', 2 => 'San Jose', 3 => 'Cartago', 80 => 'Heredia', 90 => 'Limon', 100 => 'Puntarenas', 200 => 'Guanacaste'];
  }catch(PDOException $e) { 
    echo $e;
  }*/
  return $provinces;
}

function getUsers() {
  $users = array();
  $sql = 'select * from users;';
  try {
    $conn = getConnection();  

  } catch(PDOException $e) {
    echo $e;
  }

}

function getConnection(): bool|mysqli {
  $connection = mysqli_connect('localhost:3306', 'root', '', 'thworkshop');
  print_r(mysqli_connect_error());
  return $connection;
}

/**
 * Saves an specific user into the database
 */
function saveUser($user): bool{

  $firstName = $user['firstName'];
  $lastName = $user['lastName'];
  $username = $user['email'];
  $password = md5($user['password']); #Encrypting password

  $sql = "INSERT INTO users (name, lastname, username, password) VALUES('$firstName', '$lastName', '$username','$password')";

  try {
    $conn = getConnection();
    mysqli_query($conn, $sql);
  } catch (Exception $e) {
    echo $e->getMessage();
    return false;
  }
  return true;
}