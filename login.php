<?php
session_start();
$host = 'localhost';
$dbName = 'vsk';
$username = 'root';
$password = '';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        
        $password = $_POST['password'];
        $hashedPassword = md5($password);
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->execute(['username' => $username, 'password' => $hashedPassword]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {            
            $_SESSION['username'] = $user['state'];
            header("Location: survey.php"); // Redirect to the quiz form upon successful login
            exit;
        } else {
            echo "<script>alert('Invalid username or password. You will be redirected to login page in a bit. ')</script>";  
            // Redirect to index.php after 5 seconds
            header("refresh:1; url=index.php");     
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
