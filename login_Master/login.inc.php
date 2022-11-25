<?php
include '../indexFunction.inc.php';

error_reporting(0);


// index function file //
$loginFun = new indexDB(); // connection


$email = $loginFun->legal_input($_POST['email']);

$password = $loginFun->legal_input($_POST['password']);

$row = $loginFun->loginUserInfo($email, $password); // login function call //


if ($row === true) {
    //echo json_encode(array("statusCode"=>200));
    echo  "Logged in";
} else {
    echo  "<div style='display:none;'>Please login</div>";
    //echo json_encode(array("statusCode"=>201));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="../Assest/custom.css" rel="stylesheet" />
    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

   


<body style="background-image: url('../image/wraper_index.jpg');background-attachment:fixed;
  background-position: center;background-repeat: no-repeat;   background-size: cover;" >

<!-- style="background-image: url('../image/wraper_index.jpg');background-attachment:fixed;
  background-position: center;background-repeat: no-repeat;   background-size: cover;" -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-6 mt-5 shadow">
                <div class="card mt-5 " style="opacity:0.9; background-color: #219cdd;">
                    <div class="card-header text-muted pt-3 pb-3"><span style="color:white;">Login Form</span></div>
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-6 mt-3 mb-3"><img src="../image/loginImages03.PNG" style="width:300px; margin-top: 10px; margin-bottom: 50px;"></div>


                            <div class="col-6 mt-4">

                                <input type="text" class="form-control" placeholder="your email address" name="email" id="email" style="border-radius: 0px;"><br><br>
                                <input type="text" class="form-control" placeholder="your Password here !" name="password" id="password" style="border-radius: 0px;"><br>
                                <button type="button" class="btn btn-warning btn-md" id="loginBtn" name="save" style="float:right; border-radius:0px;" onclick="loginData()">Login here
                            </div>

                        </div>
                        <span class="error text-danger" style="float: right;"></span>
                    </div>


                    <div class="card-footer text-muted pt-3 pb-3"> <span style="color:white;">All Rights Reserved in &copy; 2022</span></div>

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <footer class="fixed-bottom" style = "float: right; color:white;">All Rights Reserved in Ajax Crud &copy;</footer>

    <?php include '../indexLayout/indexFooter.inc.php'; ?>