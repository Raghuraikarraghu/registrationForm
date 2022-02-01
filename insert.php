<?php

    session_start();

    $conn = mysqli_connect('localhost', 'root', '','insert');

    if(isset($_POST['submit'])) {

        
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        

        $querry = "INSERT INTO data(name,address,email,phone) VALUES ('$name','$address','$email','$phone')";

        $result = mysqli_query($conn,$querry);

        if($result) {
            // echo "Data inserted Successfully...!";
            $_SESSION['success'] = "DATA INSERTED SUCCESSFULLY";
            header('Location: index.php');
        }
        else {
            // echo "Data inserted Unsuccessfully...!";
            $_SESSION['failure'] = "DATA INSERTED UNSUCCESSFULLY";
            header('Location: index.php');
        }
    }

?>