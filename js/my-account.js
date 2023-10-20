$("#loginaccount").submit((event) => {
    event.preventDefault();
    $("#loginbtn").html(' Loading <img src="./Loading.gif" alt="logo" height="23" style="border-radius:50%"/> ');
    var frm = $("#loginaccount")[0];
    var frmdata = new FormData(frm);
    $.ajax({
        url: "./ajax/my-accountajax.php",
        type: "POST",
        data: frmdata,
        processData: false,
        contentType: false,
        cache: false,
        success: function(res) {
            var response = JSON.parse(res);
            if (response.status == "success") {
                $("#loginbtn").html(' Loading <img src="./Loading.gif" alt="logo" height="23" style="border-radius:50%"/> ');
                if (response.activationstatus == "false") {
                    location.reload();
                } else {
                    location.replace("index.php");
                }
            } else if (response.status == "checkpass") {
                $("#loginbtn").html(' Submit ');
                $("#errormessage").text('Check password');
            } else if (response.status == "notexits") {
                $("#loginbtn").html(' Submit ');
                $("#errormessage").text('Check your Email ID');
            }
        }
    });
});


const clearerror = () => {
    $("#errormessage").text('');
}


const activationbtn = () => {
    $("#activationerr").text('');
}

$("#activation").submit((event) => {
    event.preventDefault();
    $("#activationcode").html(' Loading <img src="./Loading.gif" alt="logo" height="23" style="border-radius:50%"/> ');
    var frm = $("#activation")[0];
    var frmdata = new FormData(frm);
    $.ajax({
        url: "./ajax/my-accountajax.php",
        type: "POST",
        data: frmdata,
        processData: false,
        contentType: false,
        cache: false,
        success: function(res) {
            var response = JSON.parse(res);
            if (response.status == "success") {
                $("#activationcode").html(' Loading <img src="./Loading.gif" alt="logo" height="23" style="border-radius:50%"/> ');
                location.replace("index.php");
            } else if (response.status == "invalid") {
                $("#activationcode").html(' Login ');
                $("#activationerr").text('Invalid Code');
            }
        }
    });
})