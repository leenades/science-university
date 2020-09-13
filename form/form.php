<?php
session_start();

require_once '../database/database.php';

if(isset($_POST['submitForm'])){
    $fullName = $_POST['fullName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $_SESSION['message_form'] = 'Message sent. Thank you for contacting us!';
    $_SESSION['msg_type'] = 'success';

    if(!empty($fullName) && !empty($phone) && !empty($email) && !empty($msg)){
        $sql = "INSERT INTO db_science_university_forms (form_sender_name, form_sender_phone, form_sender_email, form_sender_message, time_stamp) VALUES (?, ?, ?, ?, CURRENT_TIME())";
        $sqlResult = $conn->prepare($sql);
        $runQuery = $sqlResult->execute([$fullName, $phone, $email, $msg]);
        if($runQuery){
            header('Location: ../Pages/index.php?status=successful');
        } else {
            header('Location: ../Pages/index.php?status=failed');
            $_SESSION['message_form'] = 'Message was not sent. Try again!';
            $_SESSION['msg_type'] = 'danger';
        }
    } else {
        echo "<script>alert('Fields must not be empty')</script>";
        header('Location: ../Pages/index.php?status=failed');
        $_SESSION['message_form'] = 'Message was not sent. Please fill all fields!';
        $_SESSION['msg_type'] = 'danger';
    }
}


?>