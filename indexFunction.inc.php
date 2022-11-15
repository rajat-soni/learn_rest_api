<?php 

require_once 'Config_DB/constant.inc.php'; // constant file //

Class indexDB { // db class 

    public function __construct(){ // connection constructor  //

        $Conn = new mysqli(hostName,userName,Password,dbName);
        $this->conn = $Conn;
        if($this->conn->connect_error){
            echo "connection errro";

        }
    }    

          public  function insertData($name,$lastname,$mobile,$address,$email,$password){ // insert fucntion declration //
                $sqlQuery = "INSERT INTO `employeetbl`(`name`, `lastname`, `mobile`, `address`, `email`, `password`) VALUES ('$name','$lastname','$mobile','$address','$email','$password')";
                $sqlRunQuery = $this->conn->query($sqlQuery) or die("Error in query");

                if($sqlRunQuery == TRUE){
                    return true;
                   
                }
            }

            public function ReadData(){ // retrive record //
                
                $sqlQuery = "SELECT * FROM `employeetbl`";
                $readQuery = $this->conn->query($sqlQuery);
                if($this->conn->query($sqlQuery) == TRUE){
                    return $readQuery;
                }
            } 
             
            public function deleData($id){ // delete record  //
                $sql = "Delete from employeetbl where `emp_id` = '$id' ";
                $runSql = $this->conn->query($sql);

                if($runSql == TRUE){
                    return $runSql;
                }
                return false;
            }

            public function selectData($edit_id){  // view record
                
                 $sqlQuery = "SELECT * FROM `employeetbl` where `emp_id` = '$edit_id'";
                $readQuery = $this->conn->query($sqlQuery);

                if($this->conn->query($sqlQuery) == TRUE){
                    return $readQuery;
                }
            }



            public function updateRecord($emp_id,$name,$lastname,$mobile,$address,$email,$password){ // update record //
                $updateSql = "UPDATE `employeetbl` SET `name`='$name',`lastname`='$lastname',`mobile`='$mobile',`address`='$address',`email`='$email',`password`='$password' WHERE `emp_id` = '$emp_id'";
                $runQuery = $this->conn->query($updateSql) or die("error in sql");
                if($runQuery = $this->conn->query($updateSql) == TRUE){
                    return $runQuery;

                }

            }

            function loginUserInfo($email,$password){ // login function // 
                $sqlQuery = "SELECT * FROM `admin_tbl` where  `email` = '$email' and `password` = '$password'";
                $runQuery = $this->conn->query($sqlQuery) or die("Error in sql query");
                $fetchLoginInfo = $runQuery->fetch_assoc();       
                if($runQuery == True){
                    
                    return true;   
                   
                }else{
                    return false;
                }

            }
            

            public function legal_input($value) { // input data validation //
                $value = trim($value);
                $value = stripslashes($value);
                $value = htmlspecialchars($value);
                return $value;
            }

            public function redirectFun($links){
                 header('location: $links');
            }

            
}

?>