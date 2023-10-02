$("#username").click(()=>{
    $("#err").text("");
})

$("#pwd").click(()=>{
    $("#err").text("");
})

$("#frm").submit((e)=>{
    e.preventDefault();
    $("#loginbtn").html('Loading <img src="./Loading.gif" alt="logo" height="23" style="border-radius:50%"/>');
    var name = $("#username").val();
    var password = $("#pwd").val();
    $.ajax({
        url: "./ajax/indexajax.php",
        type: "POST",        
        data: {"username":name,"password":password},
        // beforeSend: function() {
        //     // $("#loginbtn").html('Loading...!');
        // },
        success: function(res) {
            if(res == "notexits"){
                $("#err").text("Check your Email ID or Create an account");
                $("#loginbtn").html('Submit');
            }else if(res == "checkpass"){
                $("#err").text("Check your passsword");
                $("#loginbtn").html('Submit');
            }else if(res == "success"){
                $("#loginbtn").html('Loading <img src="./Loading.gif" alt="logo" height="23" style="border-radius:50%"/>');
                location.replace("food.php");
            }
        }
    });
})