<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $Name=$_POST['Name'];
    $Age=$_POST['Age'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
    $sql="Insert Into customer (Name, Age, Phone, Email) values('".$Name."','".$Age."','".$Phone."','".$Email."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } elseif (isset($_POST['sua'])) {
    $ID=$_GET['ID'];
    $Name=$_POST['Name'];
    $Age=$_POST['Age'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
    $sql = "UPDATE customer SET Name = '".$Name."', Age = '".$Age."', Phone = '".$Phone."', Email =  '".$Email."' WHERE ID = $ID"; 
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');   
    }else{
    $ID=$_GET['ID'];
    $sql="DELETE FROM customer WHERE ID = $ID";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>