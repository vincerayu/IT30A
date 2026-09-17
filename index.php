<?php

// Database Connection
$host = 'localhost';
$db = 'library_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host; dbname=$db; cahrset=$charset";

$options =[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>false
];

try{
    $pdo = new PDO($dsn,$user,$pass,$options);
}catch(PDOException $e){
    die("Database Connection Fialed" . $e->getMessage());
}

//session
session_start();

//Determine current section
$section = $_GET['section'] ?? 'students';

//crus operations
$actions = $_GET['action'] ?? '';

//---------------------------------------------------------------------
//Students
//---------------------------------------------------------------------

//fetch students 
//if($section === 'studentsss'){
  //  $stmt = $pdo->query("
    //    SELECT * 
      //  FROM students 
        //ORDER by student
    
    //")
//}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System</title>
</head>
<body>
    <h1>Simple Library System</h1>
    <nav>
        <a href="index.php?selection=students">Students</a>
        <a href="index.php?selection=books">Books</a>
        <a href="index.php?selection=borrow">Borrow</a>
    </nav>


</body>
</html>