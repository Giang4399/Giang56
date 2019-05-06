<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $name=$_POST['Name'];
    $job=$_POST['Age'];
    $address=$_POST['Phone'];
    $salary=$_POST['Email'];
    $sql="Insert Into customer (Name, Age, Phone, Email) values('".$Name."','".$Age."','".$Phone."','".$Email."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } 
    else{
    $ID=$_GET['ID'];
    $sql="DELETE FROM customer WHERE ID = $ID";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>