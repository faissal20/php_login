<?php 

use Helpers\Connection;
// require '.././Helpers/Connection.php';

session_start();

if(isset($_SESSION['user'])){
    header('Location: ../index.php');
}


 if(isset($_POST['username']) && isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    try {
        $conn = new PDO("mysql:host=localhost;dbname=phpLogin",'root', '');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        if ($password == $user['password'] ) {
            $_SESSION['user'] = $username;
            header('Location: ../index.php');
        } else {
            header('Location: ./login.php?error=1');
        }
    } else {
        header('Location: ./login.php?error=1');
    }
 } 