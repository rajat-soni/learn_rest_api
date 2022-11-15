function insertRecord(){  // function for inserting data //

  

var firstname = $("#name").val();
 
var lastname = $("#lastname").val();
var mobile = $("#mobile").val();
var address = $("#address").val();
var email = $("#email").val();
var password = $("#password").val();

if(firstname != "" && lastname != "" &&  mobile != "" && address != "" && email != "" && password != ""){
    $.ajax({
        url : '../Add_Master/insertIndex.inc.php',
        type : 'POST',

        data :{name:firstname, lastname:lastname, mobile:mobile, address:address, email:email, password:password},
        success : function(data){
          
            if(data = 1){
                window.location.href = '../index_folder/index.inc.php';
            }else{
                $("#error").html("Error in data submitting");
            }
        }
    })

    }else{
    $('#error').html("Field Should not be empty***").fadeToggle(3000);
    }
}


$(document).ready( function () { // data table  js //
    $('#myTable').DataTable();

   
});

$(document).ready(function (){  // function  for update data //
    $("#updateBtn").click(function(){
        var emp_id = $("#u_emp_id").val();

       var name = $("#u_name").val();
       var lastname = $("#u_lastname").val();
       var mobile = $("#u_mobile").val();
       var address= $("#u_address").val();
       var email = $("#u_email").val();
       var password = $("#u_password").val();


       if( emp_id != "" && name != '' && lastname != "" && mobile != "" && address != "" && email != "" && password != "") {

                $.ajax({
                    url : '../Add_Master/updateData.inc.php',
                    type : 'POST',
                    data : {emp_id:emp_id, name:name, lastname:lastname, mobile:mobile, address:address, email:email, password:password},
                    success : function(data){
                        if(data = true){     
                            window.location.href = '../index_folder/index.inc.php';
                        }else{
                            
                            
                        }
                    
                    }
                }) 

       }else{
        
        $("error").html("Eroro in login").fadeout();
         
       }
      
    })
})

