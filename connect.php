<?php
    $name = $_POST['name'];
    $mobilemail = $_POST['mobilemail'];
    $otp = $_POST['otp'];
    $conn = mysqli_connect('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("INSERT INTO logininfo (name, mobilemail, otp) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $mobilemail, $otp);
        $stmt->execute();
        echo "Successfully logged in...!!";
        $stmt->close();
        $conn->close();
    }
?>
