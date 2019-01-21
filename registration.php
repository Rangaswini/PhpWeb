<?php

$servername = "localhost";
$Cusername = "root";
$Cpassword = "root";
$db="Test";

$data = [
    'id'=> $_POST['id'],
    'rname' => $_POST['rname'],
    'email'=>$_POST['email'],
    'gender' => $_POST['gender'],
    'dob' =>$_POST['dob'],
    'qualification' =>$_POST['qualification'],
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];
try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$db", $Cusername, $Cpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO registerUser (id,rname,email,gender,dob,qualification,username,password) VALUES (:id, :rname, :email, :gender, :dob, :qualification, :username, :password)";
    $stmt = $conn->prepare($sql); 
     $stmt->execute($data);
    header('Location: ./index.php');
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    //  $conn = null;
 

 
    