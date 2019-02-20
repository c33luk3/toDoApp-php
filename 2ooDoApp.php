<!DOCTYPE HTML>
<html>
<body>

<form method="get" action ="<?php echo $_SERVER['PHP_SELF'];?>">
      Enter Here: <input type="text" name="do it">
                  <input type="submit">
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TooDoApp";
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE TooDoApp";
    
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "CREATE TABLE ToDoList (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    id VARCHAR(30) NOT NULL,
    task VARCHAR(30) NOT NULL,
    stat VARCHAR(50),
    reg_date TIMESTAMP
    )";


    $conn->exec($sql);
    echo "Table ToDoList created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TooDoApp";

try {
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO ToDoList (id, task, status)
    VALUES ('cook', 'clean', 'feed animals')";

    $conn->exec($sql);
    echo  "record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql  . $e->getMessage();
    }

$conn = null;
?>

