const removechk = () =>{
    $("#passchk").text("");
}

$("#createaccountform").submit((event)=>{
    event.preventDefault();
    $("#regiterbtn").html("Loading&nbsp;&nbsp;&nbsp;&nbsp;<img src='./Loading.gif' alt='log' height='25' style='border-radius: 50%;'>");
    let pass = $("#password").val();
    let repass = $("#confirmpassword").val();
    if(pass === repass){
        var frm = $("#createaccountform")[0];
        var frmdata = new FormData(frm);
        $.ajax({
            url: "./ajax/Signupajax.php",
            type: "POST",
            data: frmdata,
            processData: false,
            contentType: false,
            cache: false,
            success: function (res) {
                var response = JSON.parse(res);
                if(response.status == "already"){
                    $("#passchk").text("E-Mail already Exit's");
                    $("#regiterbtn").html("Register");
                }else if(response.status == "success"){
                    $("#regiterbtn").html("Account Created");
                    location.replace("my-account.php");
                }
            }
        });
    }else{
        $("#regiterbtn").html("Register");
        $("#passchk").text("Password Confirm not Match");
    }
})