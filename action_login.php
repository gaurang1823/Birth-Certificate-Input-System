<?php


if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $passwd = $_POST["passwd"];

    // echo $fname;
    // exit();

    include 'dbconnection.php';
    
    if(empty($username) || empty($passwd)){
        header("location: /MyDBMSproject/home.php?error=Fill all fields");
        exit();
    }
    else{
        $sql = "SELECT * FROM login";
        $result = mysqli_query($conn, $sql);

        while( $row = mysqli_fetch_assoc($result) ){
            if( $row["lg_fname"] == $username && $row["lg_password"] == $passwd ){
                session_start();
                $_SESSION["id"] = $row["lg_id"];
                $_SESSION["lg_fname"] = $row["lg_fname"];
                mysqli_close($conn);
                header("location: /MyDBMSproject/home.php");
                exit();
            }
        }
        header("location: /MyDBMSproject/home.php?error=Try again");
        exit();
    }

}

?>