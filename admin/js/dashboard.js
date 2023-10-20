const logout = () =>{
    location.replace("logout.php");
}

$(document).ready(()=>{
    checkProductAvailability();
    checkvendorAvailability();
})

function checkProductAvailability() {
    if ($("#tbodyval tr").length === 0) {
        $("#tbodyval").html("<tr><td colspan='7' style='font-weight:700'>No products available</td></tr>");
    } else {
        $("#tbodyval tr:has(td)").remove();
    }
}

function checkvendorAvailability() {
    if ($("#tbodyvalvendor tr").length === 0) {
        $("#tbodyvalvendor").html("<tr><td colspan='7' style='font-weight:700'>No vendors available</td></tr>");
    } else {
        $("#tbodyvalvendor tr:has(td)").remove();
    }
}

$("#userupdate").submit((event)=>{
    event.preventDefault();
    var frm = $("#userupdate")[0];
    var frmdata = new FormData(frm);
    $.ajax({
        url: "./ajax/dashboardajax.php",
        type: "POST",        
        data: frmdata,
        processData:false,
        contentType: false,
        cache:false,
        success: function(res) {
            var response = JSON.parse(res);
            if(response.status == "success"){
                location.reload();
            }
        }
    });
})

$(document).on('click', '.removefood', function () {
    var foodid = $(this).val();
    var type = "removefood";
    $.ajax({
        url: "./ajax/dashboardajax.php",
        type: "POST",        
        data: {"foodid":foodid,"type":type},
        success: function(res) {
            var response = JSON.parse(res);
            if(response.status == "success"){
                $("#vendorfood"+foodid).remove();
                checkProductAvailability();
            }
        }
    });
});

$(document).on('click', '.removevendor', function () {
    var vendorid = $(this).val();
    var type = "removevendor";
    $.ajax({
        url: "./ajax/dashboardajax.php",
        type: "POST",        
        data: {"vendorid":vendorid,"type":type},
        success: function(res) {
            console.log(res);
            var response = JSON.parse(res);
            if(response.status == "success"){
                location.reload();
            }
        }
    });
});
