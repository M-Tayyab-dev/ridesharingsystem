<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['UserName'];
    $email = $_POST['Email'];
    $contact = $_POST['PhoneNo'];
    $password = $_POST['Password'];
    $confirmPassword = $_POST['ConfirmPassword'];
    
    $checkEmailSql = "SELECT * FROM signupform WHERE email = '$email'";
    $result = $conn->query($checkEmailSql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already available.'); window.history.back();</script>";
        exit();
    }
    
    if ($password === $confirmPassword) {
        $sql = "INSERT INTO signupform (name, email, phone_number, password, confirm_password) 
                VALUES ('$name', '$email', '$contact', '$password', '$confirmPassword')";

        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully.";
            header("Location: index.php");  // fixed this to match your read.php
            exit();
        } else {
            echo "Insert failed: " . $conn->error;
        }
    } else {
        echo "Your passwords do not match.";
    }
}
?>
