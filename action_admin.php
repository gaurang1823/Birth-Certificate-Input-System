<?php


if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $passwd = $_POST["passwd"];


    include 'dbconnection.php';
    
    if(empty($username) || empty($passwd)){
        header("location: /MyDBMSproject/admin-dashboard.php?error=Fill all fields");
        exit();
    }
    else{
        $sql = "SELECT * FROM admin";
        $result = mysqli_query($conn, $sql);

        while( $row = mysqli_fetch_assoc($result) ){
            if( $row["ad_name"] == $username && $row["ad_password"] == $passwd ){
                session_start();
                $_SESSION["ad_name"] = $row["ad_name"];
                mysqli_close($conn);
                header("location: /MyDBMSproject/admin-dashboard.php");
                exit();
            }
        }
        header("location: /MyDBMSproject/admin.php?error=Try again");
        exit();
    }

}

?>