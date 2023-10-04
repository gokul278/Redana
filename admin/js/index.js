const clearerror = () => {
    $("#errormessage").text('');
}


$("#frm").submit((event) => {
    event.preventDefault();
    $("#loginbtn").html(' Loading <img src="./Loading.gif" alt="logo" height="23" style="border-radius:50%"/> ');
    var frm = $("#frm")[0];
    var frmdata = new FormData(frm);
    $.ajax({
        url: "./ajax/indexajax.php",
        type: "POST",
        data: frmdata,
        processData: false,
        contentType: false,
        cache: false,
        success: function(res) {
            var response = JSON.parse(res);
            if (response.status == "success") {
                $("#loginbtn").html(' Loading <img src="./Loading.gif" alt="logo" height="23" style="border-radius:50%"/> ');
                location.replace("dashboard.php");
            } else if (response.status == "checkpass") {
                $("#loginbtn").html(' Submit ');
                $("#errormessage").text('Check password');
            } else if (response.status == "notexits") {
                $("#loginbtn").html(' Submit ');
                $("#errormessage").text('Check your Email ID');
            }
        }
    });
})