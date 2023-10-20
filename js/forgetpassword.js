const clearerror = () => {
    $("#errormessage").text('');
}

$("#forgetpassword").submit(function(e) {
    e.preventDefault();
    $("#forgetpassbtn").html(' Loading <img src="./Loading.gif" alt="logo" height="23" style="border-radius:50%"/> ');
    var frm = $("#forgetpassword")[0];
    var frmdata = new FormData(frm);
    $.ajax({
        url: "./ajax/forgetpasswordajax.php",
        type: "POST",
        data: frmdata,
        processData: false,
        contentType: false,
        cache: false,
        success: function(res) {
            var response = JSON.parse(res);
            if (response.status == "success") {
                $("#forgetpassbtn").html('Mail Sented ');
                location.reload();
            } else if (response.status == "checkmail") {
                $("#forgetpassbtn").html(' Send OTP ');
                $("#errormessage").text('Check your Mail');
            }
        }
    });
});


const removeopterr = () => {
    $("#opterrormessage").html("");
}


$("#forgetpasswordotp").submit(function(e) {
    e.preventDefault();
    $("#passwordbtn").html(' Loading <img src="./Loading.gif" alt="logo" height="23" style="border-radius:50%"/> ');
    let pass = $("#password").val();
    let repass = $("#repassword").val();
    if (pass == repass) {
        var frm = $("#forgetpasswordotp")[0];
        var frmdata = new FormData(frm);
        $.ajax({
            url: "./ajax/forgetpasswordajax.php",
            type: "POST",
            data: frmdata,
            processData: false,
            contentType: false,
            cache: false,
            success: function(res) {
                console.log(res);
                var response = JSON.parse(res);
                if (response.status == "success") {
                    $("#passwordbtn").html('password Changed ');
                    location.replace('my-account.php');
                } else if (response.status == "invalidotp") {
                    $("#passwordbtn").html(' Change password ');
                    $("#opterrormessage").text('Invalid OTP');
                }
            }
        });
    } else {
        $("#passwordbtn").html(' Change Password ');
        $("#opterrormessage").html(" Check Your Confirm Password ")
    }

});