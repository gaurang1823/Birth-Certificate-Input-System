<?php
include 'dbconnection.php';

if(isset($_POST["submit_child"])){
    $c_fname = $_POST["c_fname"];
    $c_mname = $_POST["c_mname"];
    $c_lname = $_POST["c_lname"];
    $c_phone = $_POST["c_phone"];
    $date_of_birth = $_POST["date_of_birth"];
    $place_of_birth = $_POST["place_of_birth"];
    $gender=$_POST["gender"];
    $address= $_POST["address"];
    $email= $_POST["email"];

    $sql = "INSERT INTO child (c_fname, c_mname, c_lname, gender, c_dob, c_pob, c_phone, c_email, c_add) VALUES ('$c_fname', '$c_mname', '$c_lname', '$gender', '$date_of_birth', '$place_of_birth', $c_phone, '$email', '$address')";
    $conn->query($sql);
    header("location: /MyDBMSproject/fatherform.php");
    exit();

}
?> 