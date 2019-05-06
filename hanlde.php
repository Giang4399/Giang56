<?php
   require_once('./dbconnector.php');
   if (isset($_POST['add'])) {
        //them
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $sql="Insert Into staff1 (fullname, id, phone,email) values('".$fullname."','".$age."','".$phone."','".$email."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } elseif (isset($_POST['edit'])) {
    $id=$_GET['id'];
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $sql = "UPDATE staff1 SET fullname = '".$fullname."', age = '".$age."', phone = '".$phone."', email =  '".$email."' WHERE id = $id"; 
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');   
    }else{
    $id=$_GET['id'];
    $sql="DELETE FROM staff1 WHERE id = $id";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>
