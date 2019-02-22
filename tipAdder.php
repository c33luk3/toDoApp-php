<a href="survivalTips.php">Home</a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survivalTips";

try {
    $tip = $_GET['tip'];
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO myTips (tip)
    VALUES ('$tip')";

    $conn->exec($sql);
    echo  "record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql  . $e->getMessage();
    }


?>
