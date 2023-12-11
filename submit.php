<?php

// Prevent the user from going back to the previous page
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vsk";

if(isset($_POST['submit'])){    
try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $state = $_POST['state'];

        $q1_data = $_POST['question1']; $q1 = implode(',', $q1_data); $q1_array = explode(',', $q1); $q1_sum = array_sum($q1_array);
        $q2_data = $_POST['question2']; $q2 = implode(',', $q2_data); $q2_array = explode(',', $q2); $q2_sum = array_sum($q2_array);
        $q3_data = $_POST['question3']; $q3 = implode(',', $q3_data); $q3_array = explode(',', $q3); $q3_sum = array_sum($q3_array);
        $q4_data = $_POST['question4']; $q4 = implode(',', $q4_data); $q4_array = explode(',', $q4); $q4_sum = array_sum($q4_array);
        $q5_data = $_POST['question5']; $q5 = implode(',', $q5_data); $q5_array = explode(',', $q5); $q5_sum = array_sum($q5_array);
        $q6_data = $_POST['question6']; $q6 = implode(',', $q6_data); $q6_array = explode(',', $q6); $q6_sum = array_sum($q6_array);
        $q7_data = $_POST['question7']; $q7 = implode(',', $q7_data); $q7_array = explode(',', $q7); $q7_sum = array_sum($q7_array);
        $total = $q1_sum+$q2_sum+$q3_sum+$q4_sum+$q5_sum+$q6_sum+$q7_sum;

        $stmt = $conn->prepare("INSERT INTO responses (state, q1, q2, q3, q4, q5, q6, q7, q1_sum, q2_sum, q3_sum, q4_sum, q5_sum, q6_sum, q7_sum, total) VALUES (:state, :q1, :q2, :q3, :q4, :q5, :q6, :q7, :q1_sum, :q2_sum, :q3_sum, :q4_sum, :q5_sum, :q6_sum, :q7_sum, :total)");
        
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':q1', $q1);
        $stmt->bindParam(':q2', $q2);
        $stmt->bindParam(':q3', $q3);
        $stmt->bindParam(':q4', $q4);
        $stmt->bindParam(':q5', $q5);
        $stmt->bindParam(':q6', $q6);
        $stmt->bindParam(':q7', $q7);
        $stmt->bindParam(':q1_sum', $q1_sum);
        $stmt->bindParam(':q2_sum', $q2_sum);
        $stmt->bindParam(':q3_sum', $q3_sum);
        $stmt->bindParam(':q4_sum', $q4_sum);
        $stmt->bindParam(':q5_sum', $q5_sum);
        $stmt->bindParam(':q6_sum', $q6_sum);
        $stmt->bindParam(':q7_sum', $q7_sum);
        $stmt->bindParam(':total', $total);
        if ($stmt->execute()) {
            // echo "Data inserted successfully! You will be redirected in 5 sec.";
            header("Location: survey_result.php");
        } else {
            echo "Some error occurred";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>
