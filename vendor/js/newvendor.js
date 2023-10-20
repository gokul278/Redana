$("#email").click(() => {
    $("#already").text("");
})

function validateImage(input) {
    const file = input.files[0];

    if (file) {
        const img = new Image();
        img.src = URL.createObjectURL(file);

        img.onload = function() {
            if (img.width === 650 && img.height === 650) {
                $("#frm").submit((event) => {
                    event.preventDefault();
                    var frm = $("#frm")[0];
                    var frmdata = new FormData(frm);
                    $.ajax({
                        url: "./ajax/newvendorajax.php",
                        type: "POST",
                        data: frmdata,
                        processData: false,
                        contentType: false,
                        cache: false,
                        beforeSend: function() {
                            $("#indication").text("Wait a second ...!");
                            $("#loading").css("display", "block");
                        },
                        success: function(response) {
                            console.log(response); // Log the response
                            var data = JSON.parse(response);
                            if (data.status == "already") {
                                $("#already").text("Already Registered");
                                $("#indication").text("Register");
                                $("#loading").css("display", "none");
                            } else if (data.status == "success") {
                                location.replace("food.php");
                            } else if (data.status == "failed") {
                                alert("Try again");
                                location.reload();
                            } else if (data.status == "error") {
                                alert("An error occurred while processing your request.");
                            }
                        }
                    });

                })
            } else {
                alert("Please upload a 650x650 pixel image.");
                input.value = "";
            }
        };
    }
}