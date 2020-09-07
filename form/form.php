<?php
require_once '../database/database.php';

if(isset($_POST['submitForm'])){
    $fullName = $_POST['fullName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    if(!empty($fullName) && !empty($phone) && !empty($email) && !empty($msg)){
        $sql = "INSERT INTO db_science_university_forms (form_sender_name, form_sender_phone, form_sender_email, form_sender_message) VALUES (?, ?, ?, ?)";
        $sqlResult = $conn->prepare($sql);
        $runQuery = $sqlResult->execute([$fullName, $phone, $email, $msg]);
        if($runQuery){
            header('Location: ../Pages/index.php');
        } else {
            header('Location: ../Pages/index.php');
        }
    } else {
        echo "<script>alert('Fields must not be empty')</script>";
        header('Location: ../Pages/index.php');
    }
}
?>