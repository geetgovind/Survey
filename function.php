<?php
function question($qid)
{
    $host = 'localhost';
    $dbName = 'vsk';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("SELECT * FROM quesions WHERE qid = :qid");
        $stmt->bindParam(':qid', $qid, PDO::PARAM_INT);
        $stmt->execute();
        $question = $stmt->fetch(PDO::FETCH_ASSOC);
        // print_r($user);       
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $question;
}

function response($state)
{
    $host = 'localhost';
    $dbName = 'vsk';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("SELECT * FROM responses WHERE state = :state");
        $stmt->bindParam(':state', $state, PDO::PARAM_INT);
        $stmt->execute();
        $question = $stmt->fetch(PDO::FETCH_ASSOC);
        // print_r($user);       
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $question;
}
?>