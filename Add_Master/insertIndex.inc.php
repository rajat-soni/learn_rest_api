 <?php 
 require '../indexFunction.inc.php';

    $dataConn = new indexDB();
    
    $name = $dataConn->legal_input($_POST['name']);
    $lastname = $dataConn->legal_input($_POST['lastname']);
    $mobile = $dataConn->legal_input($_POST['mobile']);
    $address = $dataConn->legal_input($_POST['address']);
    $email = $dataConn->legal_input($_POST['email']);
    $password = $dataConn->legal_input($_POST['password']);  
  
$sql =  $dataConn->insertData($name,$lastname,$mobile,$address,$email,$password);
if($sql == TRUE){
    echo 1;
}else{
    echo 0;
}
 
 ?>