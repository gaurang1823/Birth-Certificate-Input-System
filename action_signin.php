<?php


if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $passwd = $_POST["passwd"];
    $_POST["gender"];

    // echo $fname;
    // exit();

    include 'dbconnection.php';
    
    if(empty($fname) || empty($lname) || empty($phone) || empty($passwd)){
        header("location: /MyDBMSproject/signin.php?error=Fill all fields");
        exit();
    }
    else{
        $sql = "INSERT INTO login(lg_fname, lg_lname, lg_password, lg_phone) VALUES ('$fname', '$lname', '$passwd', $phone)";
        // $stmt = mysqli_prepare($conn, $sql);
        // mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $passwd, $phone);
        // mysqli_stmt_execute($stmt);
        if($conn->query($sql)){
            header("location: /MyDBMSproject/login.php");
            exit();
        }
        else{
            header("location: /MyDBMSproject/signup.php?error=try again");
        }
    }

}

?>