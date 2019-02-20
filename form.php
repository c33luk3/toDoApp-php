<!DOCTYPE HTML>
<html>
<body>


<?php

 $name = $email ="";

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = test_input($_POST["name"]);
    $Email = test_input($_POST["Email"]);
    }

    function test_input($data) {
        $data =trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return($data);
    }
    ?>

    <h1>Welcome Back Patron!</h1>

    <form method="post" action="welcome.php">
    Name: <input type="text" name="chaz luke">
    <br><br>
    E-mail: <input type="text" name="ceeluke@gmail.com">
    <br><br>
    <input type="submit">

    

    </form>
    </body>
    </html>