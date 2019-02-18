
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
        $name = $FN = $HK = $sigSauer = $glock = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input($_POST["name"]);
          $FN = test_input($_POST["FN"]);
          $HK = test_input($_POST["HK"]);
          $sigSauer = test_input($_POST["sigSauer"]);
          $glock = test_input($_POST["glock"]);
        }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>
         <h2>Validate these .....</h2>
        <form method="post" action="<?php echo formVal($_SERVER["PHP_SELF"]);?>"
        <?php
        ?>> 
        
        FN: <input type="text" name="FN">
        <br><br>
        HK: <input type="text" name="HK">
        <br><br>
        sigSauer: <input type="text" name="sigSauer">
        <br><br>
        glock: <input type="text" name="glock">
        <br><br>
        Comment Section: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">      
        
        </form>

        <?php       
    
        echo $FN;
        echo "<br>";
        echo $HK;
        echo "<br>";
        echo $sigSauer;
        echo "<br>";
        echo $glock;
        echo "<br>";
        
?>
        

 </body>
 </html>