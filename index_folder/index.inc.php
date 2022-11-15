
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <body style="background-color: #D6EAF8;">


<?php include '../indexLayout/indexHeader.inc.php'; // header file //
 // connection file //
error_reporting(0);
$ReadConn = new indexDB();  
$id = $_GET['delet_id'];
$ReadConn->deleData($id);
?>
<a href = "../Add_MASTER/insertIndexUI.inc.php" class="btn btn-lg btn-light mt-5 ml-4  mb-4" style="margin-left:10px;">Add Record</a>
<table class="table table-bordered" id = "myTable" class="mt-5 table-hover" class="shadow">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 

$ReadConn = new indexDB();

$sr = 1;
$sql = $ReadConn->ReadData();
if($sql == TRUE){
while($row=$sql->fetch_assoc()){

?>
    <tr>
    
      <td><?php echo $sr++;?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['lastname'];?></td>
      <td><?php echo $row['mobile'];?></td>
      <td><?php echo $row['address'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['password'];?></td>
      <td><a href = "?delet_id=<?php echo $row['emp_id'];?>" onclick=""><i class="fa fa-trash" style= "font-size: 20px; color:black;"></i></a>&nbsp;
      <a href = "../Add_Master/update.inc.php?edit_id=<?php echo $row['emp_id'];?>" id= "update"><i class="fa fa-edit" style= "font-size: 20px; color:black;"></i></a>&nbsp;
      <!-- <a href = "update.inc.php?edit_id=" id= "update"><i class="fa fa-user-plus" style =  "font-size: 21px; color:black;"></i></a>&nbsp;
      <a href = "../Add_Master/update.inc.php?edit_id=" id= "update"><i class="fa fa-user-times" style = "font-size: 21px; color: black;"></i></a> -->
    </td>
    </tr>
   <?php  $sr++;} }?>
  </tbody>
</table>

<?php include '../indexLayout/indexFooter.inc.php';?>