<?php



session_start();

if(isset($_SESSION['user'])){
    header('Location: ..///index.php');
}

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_confirmation'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];
    
    
    if($password != $password_confirmation){
        header('Location: ./register.php?error=1');
    }

    // $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=phpLogin",'root', '');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header('Location: ../login.php');
}

?>