<!DOCTYPE HTML>
<html>
<body>
<h1>Dis duh Ta do App</h1>
<form method="get" action ="<?php echo $_SERVER['PHP_SELF'];?>">
      Enter Here: <input type="text" name="foo">
                  <input type="submit">
</form>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TooDoApp";
$item = $_POST;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, task FROM Mylist"); 
    $stmt->execute();

    $stmt ->setFetchMode(PDO::FETCH_ASSOC);
    $mylist = $stmt->fetchALL();


    foreach ($mylist as $a) {
        echo "<tr>";
        echo "<td>" . $a["task"] . "</td>";
        echo "<td>" . "<form method='post' action='./delete.php'>" . "<input hidden name ='id' value=".$a['id'].">
        <input type ='submit' value = 'DONE'> </form>" . "</td>";
        echo "</tr>";

    } 
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}



if ($_POST) {
$item = $_POST["item"];
}
function validateItem($item) {
    $item=trim('item');
    $item=stripslashes('item');
    $item=htmlspecialchars('item');
    return $item;
}
validateItem($item);


?>