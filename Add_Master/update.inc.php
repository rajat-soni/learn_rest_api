<?php 
    include '../indexLayout/indexHeader.inc.php';
    require '../indexFunction.inc.php';


     $selectData = new indexDB();
     $email = '';
     $name = '';
     $password = '';
     $lastnaem = '';
     $address  = '';
     $mobile = '';
     
     $edit_id = $_GET['edit_id'];
   
     $updateData = $selectData->selectData($edit_id);
     $row =  $updateData->fetch_assoc();
    ?>


    <div class = "container">
    <div class="row">
      <div class="col-md-3"></div>
        <div class="col-md-6 mt-5">
            <div class= "card shadow">
                <div class="card-header" style= "padding-top: 20px; padding-bottom: 20px; "><span style="font-size: 24px; float:right;">Update Employee</span></div>
                <div class="card-body">
                <div class = "row">
                        
                        <div class = "col-2"><label></div><br>
                        <div class = "col-10"><input type = "hidden" placeholder= "Employee name*" name = "emp_id" id = "u_emp_id" class= "form-control" value = "<?php echo $row['emp_id'];?>"></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>

                    <div class = "row">
                        
                        <div class = "col-2"><label>Name</div><br>
                        <div class = "col-10"><input type = "text" placeholder= "Employee name*" name = "name" id = "u_name" class= "form-control" value = "<?php echo $row['name'];?>"></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>

                    <div class = "row">
                        <div class = "col-2"><label>LastName</div><br>
                        <div class = "col-10"><input type = "text" placeholder= "last name*" id = "u_lastname" class= "form-control" value = "<?php echo $row['lastname'];?>"></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>
                    <div class = "row">
                        <div class = "col-2"><label>Mobile No</div><br>
                        <div class = "col-10"><input type = "text" placeholder= "u_mobile*"   id = "u_mobile" class= "form-control"  value = "<?php echo $row['mobile'];?>"></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>
                    <div class = "row">
                        <div class = "col-2"><label>Adress</div><br>
                        <div class = "col-10">
                            <input type = "text"class= "form-control"   id = "u_address" name = "address" placeholder="type your local address here*" 
                        value = "<?php echo $row['address']?>"></textarea></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>
                    <div class = "row">
                        <div class = "col-2"><label> Email</div><br>
                        <div class = "col-10"><input type = "text" class= "form-control" id= "u_email" placeholder="email address here*" value = "<?php echo $row['email'];?>"></div>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br>
                    <div class = "row">
                        <div class = "col-2"><label> Password</div><br>
                        <div class = "col-10"><input type = "text" class= "form-control" placeholder="Password*" id = "u_password" value = "<?php echo $row['password'];?>"></div><br>
                        <span class="text-danger" class = "error" style="margin-left: 110px;"></span>
                    </div><br> 
                    <div class = "row">
                        <div class = "col-2"></div>
                        <div class = "col-10"><button type = "submit"  class="btn btn-warning btn-lg" name = "Update" id = "updateBtn" style= "float:right;">Update Record</button></div>
                        <span class="text-danger" id = "error" style="margin-left: 110px;"></span>
                    </div>
                    
                    
                    
                </div> 
                <div class="card-footer" style= "padding-top: 20px; padding-bottom: 20px; ">All rights reserved in Ajax crud &copy; 2022.</div>           
            </div> 
</form>
        </div>
</div>
</div>
</div>
        <div class="col-md-3"></div>
</div>      
</div>
    
    <?php include '../indexLayout/indexFooter.inc.php';
    ?>

