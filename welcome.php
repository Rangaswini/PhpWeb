<?php
 $uname=$_POST['uname'];
 $pass=$_POST['pass'];

 $servername = "localhost";
$Cusername = "root";
$Cpassword = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=Test", $Cusername, $Cpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT * FROM registerUser WHERE username = '$uname'
    AND pass = '$pass' ;");
    
    $record=$stmt->execute();
    if($record)
    {
        echo "welcome".$uname."!";

    }


    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
   
 
?>