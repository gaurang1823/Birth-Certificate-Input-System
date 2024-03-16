<?php 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="test1";
 $conn = new mysqli($servername,$username,$password,$dbname);

 if($conn->connect_error){
    die("connection failed");
 }
 else
 {
    echo "connection successful";
 }

//     $sql="CREATE DATABASE test1";
//    $result=  mysqli_query($conn,$sql);
//     if($result)
//     {
//         echo "DATABase created successfully";
//     }
//     else
//     {
//         echo "failed";
//     }

// $sql= "CREATE TABLE EMPLOYEE
//     (Dept_no int,
//     Emp_Name varchar(20),
//     EMP_ID varchar(20))";

//    $result=  mysqli_query($conn,$sql);
//     if($result)
//     {
//         echo "TABLE created successfully";
//     }
//     else
//     {
//         echo "failed";
//     }

$sql="INSERT INTO EMPLOYEE(Dept_no,Emp_Name,EMP_ID) values(1,'Rohan','CE12')";
$result= mysqli_query($conn,$sql);
 ?>