<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $name=$_POST['fullname'];
    $job=$_POST['age'];
    $address=$_POST['phone'];
    $salary=$_POST['email'];
    $sql="Insert Into staff1 (fullname, age, phone, email) values('".$fullname."','".$age."','".$phone."','".$email."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } 
    else{
    $id=$_GET['id'];
    $sql="DELETE FROM staff1 WHERE id = $id";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>