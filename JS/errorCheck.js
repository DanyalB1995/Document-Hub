function validateLogin(){
    $(document).ready(function() {
        $.ajax({
            url:'login.php',
            type:'post',
            data:$('#login').serialize(),
            success:function(data){
                console.log(data);
                if(data == "error"){
                    $("#warning").html("Username/Password Wrong!");
                }
                else{
                     console.log("Finally we got here!");
                     window.location.href = "welcome.php";
                }  
            }
        });
    });
}

function registerCustomer(){

    var user = $("#user").val();
    var conNo = $("#conNo").val();
    var pass1 = $("#pass").val();
    var pass2 = $("#pass2").val();


    if(!user || !conNo || !pass1 || !pass2){
        console.log("here");
        $("#error").html("Field/s has been missed!");
    }
    else if(pass1 != pass2){
        $("#error").html("Passwords dont match!");
    }
    else{
        $(document).ready(function() {
            $.ajax({
                url:'register.php',
                type:'post',
                data:$('#registerForm').serialize(),
                success:function(response){
                    var split = response.split("\n");
                    if(split[10] == 0){
                        $("#error").html("Username or Contract Number already Exists!");
                    }
                    else{
                        $("#error").html("Customer created!");
                    }
                },
                error:function(){
                    $("#error").html("Error customer not created!");
                }     
            });
        });
    }
}


