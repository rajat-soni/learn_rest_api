   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link href="../Assest/custom.css" rel="stylesheet"/>
    <link href ="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

    <body style="background-color: #D6EAF8;">
    <?php 
    include '../indexLayout/indexHeader.inc.php';?>
    <div class = "container mb-4">
    <div class="row">
      <div class="col-md-3"></div>
        <div class="col-md-6 mt-5">
            <div class= "card shadow">
                <div class="card-header" style= "padding-top: 20px; padding-bottom: 20px; "><span style="font-size: 24px; float:right;">AddEmpoyee</span></div>
                <div class="card-body">
                    <div class = "row">
                        <div class = "col-2"><label>Name</div><br>
                        <div class = "col-10"><input type = "text" placeholder= "Employee name*" name = "name" id = "name" class= "form-control"></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>

                    <div class = "row">
                        <div class = "col-2"><label>LastName</div><br>
                        <div class = "col-10"><input type = "text" placeholder= "last name*" id = "lastname" class= "form-control"></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>
                    <div class = "row">
                        <div class = "col-2"><label>Mobile No</div><br>
                        <div class = "col-10"><input type = "text" placeholder= "mobile*"   id = "mobile" class= "form-control"></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>
                    <div class = "row">
                        <div class = "col-2"><label>Adress</div><br>
                        <div class = "col-10"><textarea class= "form-control"   id = "address" placeholder="type your local address here*"></textarea></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>
                    <div class = "row">
                        <div class = "col-2"><label> Email</div><br>
                        <div class = "col-10"><input type = "text" class= "form-control" id= "email" placeholder="email address here*"></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>
                    <div class = "row">
                        <div class = "col-2"><label> Password</div><br>
                        <div class = "col-10"><input type = "text" class= "form-control" placeholder="Password*" id = "password"></div><br>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br> 
                    <div class = "row">
                        <div class = "col-2"></div>
                        <div class = "col-10"><button type = "submit"  class="btn btn-primary btn-lg" name = "insert" id = "insertBtn" style= "float:right;" onclick = "insertRecord()">Save Data</button></div>
                        
                    </div>
                    
                    <span class="text-danger mt-4" id = "error" style = "float:right;"></span>
                    
                </div> 
                <div class="card-footer" style= "padding-top: 20px; padding-bottom: 20px; ">All rights reserved in Ajax crud &copy; 2022.</div>           
            </div> 
</form>
        </div>
        <div class="col-md-3"></div>
</div>      
</div>

<footer class="fixed-bottom">All Rights Reserved in Ajax Crud &copy;</footer>
</div>
</body>
    
    <?php include '../indexLayout/indexFooter.inc.php';
    ?>


