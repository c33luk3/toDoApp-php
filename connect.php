 <?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=mydbpdo", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully"; 
//     $sql = "CREATE TABLE MyEmployees (
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         firstname VARCHAR(30) NOT NULL,
//         lastname VARCHAR(30) NOT NULL,
//         email VARCHAR(50),
//         reg_date TIMESTAMP
//         )";
//     $conn->exec($sql);
//     echo "Table MyEmployees created successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "<br>" . $e->getMessage();
//     }


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDBPDO";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "INSERT INTO MyEmployees (firstname, lastname, email)
//     VALUES ('Chaz', 'Luke', 'ceeluke@gmail.com')";
//     $conn->exec($sql);
//     echo "New record created successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "<br>" . $e->getMessage();
//     }

// $conn = null;






// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDBPDO";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // begin the transaction
//     $conn->beginTransaction();
//     // our SQL statements
//     $conn->exec("INSERT INTO MyEmployees (firstname, lastname) 
//     VALUES ('Chaz','Luke')");
//     $conn->exec("INSERT INTO MyEmployees (firstname, lastname, email) 
//     VALUES ('Shoe', 'Braun', 'ShoeBraun@coolman.com')");
//     $conn->exec("INSERT INTO MyEmployees (firstname, lastname, email) 
//     VALUES ('Gemart', 'johnathston', 'GemartJohnathston@cbc.com')");

//     // commit the transaction
//     $conn->commit();
//     echo "New records created successfully";
//     }
// catch(PDOException $e)
//     {
//     // roll back the transaction if something failed
//     $conn->rollback();
//     echo "Error: " . $e->getMessage();
//     }

// $conn = null;






// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDBPDO";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // prepare sql and bind parameters
//     $stmt = $conn->prepare("INSERT INTO MyEmployees (firstname, lastname, email) 
//     VALUES (:firstname, :lastname, :email)");
//     $stmt->bindParam(':firstname', $firstname);
//     $stmt->bindParam(':lastname', $lastname);
//     $stmt->bindParam(':email', $email);

//     // insert a row
//     $firstname = "John";
//     $lastname = "Doe";
//     $email = "john@example.com";
//     $stmt->execute();

//     // insert another row
//     $firstname = "Mary";
//     $lastname = "Moe";
//     $email = "mary@example.com";
//     $stmt->execute();

//     // insert another row
//     $firstname = "Julie";
//     $lastname = "Dooley";
//     $email = "julie@example.com";
//     $stmt->execute();

//     echo "New records created successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "Error: " . $e->getMessage();
//     }
// $conn = null;


// function lets_See($jackblack) {
//     $jackblack .= 'ceeLuke.';
// }
// $jB= 'this is it, ';
// add_this_also($jB);
// echo $jB;


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDBPDO";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $result = $stmt = $conn->prepare("SELECT *, firstname, lastname FROM MyEmployees"); 
//     $stmt->execute();

//     // set the resulting array to associative
//     $stmt->setFetchMode(PDO::FETCH_ASSOC); 
//     foreach ($stmt->fetchAll() as $k=>$v) { 
//         print_r($v);
//     }
// }
// catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
// $conn = null;
// echo "<pre>";
// var_dump($result);
// echo "</pre>";


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myDBPDO";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // sql to delete a record
//     $sql = "DELETE FROM MyEmployees WHERE id= 20";

//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Record deleted successfully";
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE MyEmployees SET firstname='James', lastname='Braun', email='jamesBraun@007.com' WHERE id=19";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
   


?> 
