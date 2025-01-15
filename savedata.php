<?php
include('conn.php');
//print_r($_REQUEST);

//to store the name
$student_name = $_REQUEST['student'];
$student_contact = $_REQUEST['contact'];
$country = $_REQUEST['country'];
$gender = $_REQUEST['gender'];
$subject = implode(",",$_REQUEST['subject']);

//echo $subject;

$sql = "INSERT INTO `student_details`( `student_name`, `student_contact`, `country`, `gender`, `favourite_subject`) VALUES ('$student_name','$student_contact','$country','$gender','$subject')";
//echo $sql;

$insertData = mysqli_query($mysqli,$sql);

if($insertData){
    echo "Data Inserted successfully";
    header("Location:curd.php");
}


?>