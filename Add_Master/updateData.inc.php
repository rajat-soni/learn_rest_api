<?php 
require "../indexfunction.inc.php";
 $updateData = new indexDB();


    $emp_id = $_POST['emp_id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $address= $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $updateRow = $updateData->updateRecord($emp_id,$name, $lastname, $mobile,$address,$email, $password);
    if($updateRow == TRUE){
        echo 1;
    }else{
        echo 0;
    }




?>