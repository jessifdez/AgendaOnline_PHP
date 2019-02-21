<!DOCTYPE HTML>
<html>  
<body>
 <?php //CREAMOS LA TABLA
$servername = "localhost";
$username = "id8707224_jessica";
$password = "123456";
$dbname = "id8707224_bbdd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS contactos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Telefono VARCHAR(30) NOT NULL)";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Tabla contactos creada<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 
 <?php //INSERTAMOS DATOS EN LA TABLA
$servername = "localhost";
$username = "id8707224_jessica";
$password = "123456";
$dbname = "id8707224_bbdd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$nombre=$_POST["nombre"];
	$telefono=$_POST["telefono"];
    $sql = "INSERT INTO contactos (Nombre, Telefono) VALUES ('$nombre','$telefono')";
    // use exec() because no results are returned
    $conn->exec($sql);
	$last_id = $conn->lastInsertId();
    echo $nombre." ha sido añadido añadido";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 
</body>
</html>