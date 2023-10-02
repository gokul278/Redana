$("#codeinput").click(()=>{
    $("#activationerror").text("");
})

const activationbtn = () => {
    var code = $('#codeinput').val();
    var way = "activation";
    if(code.length == 0){
        $("#activationerror").text("Enter the Activation Code");
        $('#codeinput').val('');
    }else{
        if(code.length == 6){
            $.ajax({
                url: "./ajax/foodajax.php",
                type: "POST",        
                data: {"way":way,"code":code},
                success: function(res) {
                    console.log(res);
                    var response = JSON.parse(res);
                    if(response.status == "invalid"){
                        $("#activationerror").text("Invalid Activation Code");
                        $('#codeinput').val('');
                    }else if(response.status == "success"){
                        location.reload();
                    }
                }
            });
        }else{
            $("#activationerror").text("Enter the Valid Activation Code");
            $('#codeinput').val('');
        }        
    }
}

$("#activationlogout").click(()=>{
    location.replace("logout.php")
})

$(document).ready(()=>{
    checkProductAvailability();
})

$("#logout").click(()=>{
    location.replace("logout.php");
})

// function editpreviewImage(input, food_id) {

//     var imagePreview = document.getElementById('editimage' + food_id);
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();  
//         reader.onload = function (e) {
//             imagePreview.src = e.target.result;
//         };
  
//         reader.readAsDataURL(input.files[0]);
//     }
// }

function editpreviewImage(input, food_id) {
    var imagePreview = document.getElementById('editimage' + food_id);
    var previousSrc = imagePreview.src; // Store the previous image source

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.src = e.target.result;

            var img = new Image();
            img.src = e.target.result;

            img.onload = function () {
                if (img.width === 650 && img.height === 650) {
                    // Image is valid, set it as the preview
                } else {
                    // Image dimensions are not 650x650 pixels, set previous image
                    input.value = "";
                    imagePreview.src = previousSrc;
                    alert('Please select an image with dimensions 650x650 pixels.');
                }
            };
        };

        reader.readAsDataURL(input.files[0]);
    }
}

  
  function previewImage(input) {
  var imagePreview = document.getElementById('imagePreview');
  var previousImageSrc = imagePreview.src;

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      imagePreview.src = e.target.result;

      var img = new Image();
      img.src = e.target.result;

      img.onload = function () {
        if (img.width === 650 && img.height === 650) {
          // Image dimensions are valid (650x650)
          // Proceed with form submission or other actions
        } else {
          alert("Please upload a 650x650 pixel image.");
          // Clear the input field
          input.value = "";
          imagePreview.src = previousImageSrc; // Clear the preview image
        }
      };
    };

    reader.readAsDataURL(input.files[0]);
  }
}

$("#updatefrm").submit((event)=>{
    event.preventDefault();
    var frm = $("#updatefrm")[0];
    var formData = new FormData(frm);

    $.ajax({
        url: "./ajax/foodajax.php",
        type: "POST",        
        data: formData,
        processData:false,
        contentType: false,
        cache:false,
        success: function(res) {
            console.log(res);
            if(res == "success"){
                location.reload();
            }
        }
    });
})

$("#logoupdate").submit((event)=>{
    event.preventDefault();
    var frm = $("#logoupdate")[0];
    var formData = new FormData(frm);
    $.ajax({
        url: "./ajax/foodajax.php",
        type: "POST",        
        data: formData,
        processData:false,
        contentType: false,
        cache:false,
        success: function(res) {
            if(res == "success"){
                location.reload();
            }
        }
    });
})

const clearfoodadd = () =>{
    $("#foodadderror").text("");
    $("#successmessage").text("");
}

const clearsuccess = () =>{
    $("#successmessage").text("");
}


function validateImageSize(input) {
    // Get the selected file from the input
    const file = input.files[0];
  
    if (file) {
      const image = new Image();
  
      image.onload = function() {
        if (image.width === 650 && image.height === 650) {
          // Image size is valid
          clearSuccess();
        } else {
          // Image size is not valid
          alert("Image must be exactly 650x650 pixels.");
          input.value = ""; // Clear the selected file
        }
      };
  
      // Load the selected image file into the Image object
      const objectURL = URL.createObjectURL(file);
      image.src = objectURL;
    }
  }


  function addValidateImage(input) {
    var file = input.files[0];
  
    if (file) {
      var img = new Image();
      img.src = window.URL.createObjectURL(file);
  
      img.onload = function () {
        if (img.width === 650 && img.height === 650) {    
          
        } else {
          // Image dimensions are not 650x650 pixels
          alert('Please select an image with dimensions 650x650 pixels.');
          input.value = ''; // Clear the file input
        }
      };
    }
  }

$("#addfood").submit((event)=>{
    event.preventDefault();
    console.log("Hello");
    let cod = $("#cod").is(":checked");
    let op = $("#op").is(":checked");
    if((cod && op) || (cod || op)){
        var frm = $("#addfood")[0];
        var formData = new FormData(frm);
        $.ajax({
            url: "./ajax/foodajax.php",
            type: "POST",        
            data: formData,
            processData:false,
            contentType: false,
            cache:false,
            success: function(res) {
                console.log(res);
                checkProductAvailability();
                var response = JSON.parse(res);
                if(response.status == "success"){
                    var id = response.foodid;
                    var payment = "";

                    var cod = "";
                    var op = "";
                    if(response.cod == "true"){
                        cod = "checked"
                    }
                    if(response.op == "true"){
                        op = "checked"
                    }
                    var image = response.imagename;
                    if($("#cod")[0].checked){
                        payment+="Cash on Delivery";
                        if($("#op")[0].checked){
                            payment+=", Online Payment";
                        }
                    }else if($("#op")[0].checked){
                        payment+="Online Payment";
                    }
                    $("#successmessage").text("Successfully Added...!");
                    $("#showproduct").prepend(`
                    <div class='modal fade' id='food${id}' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                <h5 class='modal-title'>Do you want to delete the Prouct ?</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>
                                <div class='modal-body' align='center'>
                                <img id='deletefoodimage${id}' src='foodimages/`+image+`' width='100px' alt='Food Image'>
                                <br>
                                <br>
                                <h5 id='deletefoodtext${id}'>${$("#food_name").val()}</h5>
                                </div>
                                <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                <button type='button' class='deletefood btn btn-danger' id='deletefoodbtn${id}' value='${id}' imagename='${image}'><i class='fa fa-trash' aria-hidden='true'>&nbsp;&nbsp;Delete</i></button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class='modal fade' id='foodedit${id}' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title'>Edit</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body' align='start'>
                                    <form id='updatefood${id}'>
                                    <div class='form-group'><!--food_name-->
                                        <label for='food_name'>Food Name:</label>
                                        <input type='text' class='form-control' placeholder='Enter Food Name ' id='foodname${id}' name='food_name' value='${response.foodname}' required onclick='clearsuccess()'>
                                    </div>
                                    <div class='form-group'><!--cost-->
                                        <label for='cost'>Cost :</label>
                                        <input type='number' class='form-control' placeholder='10000' id='foodcost${id}' name='cost' value='${response.cost}' required onclick='clearsuccess()'>
                                    </div>
                                    <div class='form-group'><!--cuisines-->
                                        <label for='cuisines'>Cuisines :</label>
                                        <input type='text' class='form-control'  placeholder='Enter Cuisines' id='cuisines${id}' name='cuisines' value='${response.cuisines}' required onclick='clearsuccess()'>
                                    </div>
                                    <div class='form-group'><!--payment_mode-->
                                        <input type='checkbox' name='chk[]' value='COD' id='cod${id}' onclick='clearfoodadd()' ${cod}>&nbsp;&nbsp;<label for='cod${id}' onclick='clearfoodupdate()'>Cash On Delivery</label>
                                        <br>
                                        <input type='checkbox' name='chk[]' value='OP' id='op${id}' onclick='clearfoodadd()'${op}>&nbsp;&nbsp;<label for='op${id}' onclick='clearfoodupdate()'>Online Payment</label>
                                        <br>
                                        <p class='errorfood' style='color:red'></p>
                                    </div>
                                    <div class='form-group'>
                                        <label for='foodsnap'>Food Snap :</label>
                                        <input type='hidden' name='way' value='updatefood'>
                                        <input type='hidden' name='foodid' value='${id}'>
                                        <br>
                                        <img id='editimage${id}' src='foodimages/${response.imagename}' width='100px' alt='Food Image'>
                                        <br>
                                        <br>
                                        <input  id='inputimage${id}' class='form-control-file' name='foodsnap' type='file' accept='image/*' onchange='editpreviewImage(this, ${id})' />
                                    </div>           
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                        <button type='button' class='editfood btn btn-success' value='${id}' imagename='${response.imagename}' onclick='updatefooddetails(this)'>
                                            <i class='fa fa-upload' aria-hidden='true'>&nbsp;&nbsp;Update</i>
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>`);
                    $("#tbodyval").prepend(`
                        <tr id="${id}">
                            <th><img id='editfoodsnap${id}' src="foodimages/`+image+`" width="100px" alt="Food Image"></th>
                            <th><div id="editfoodname${id}"> ${$("#food_name").val()} </div></th>
                            <th><div id='editfoodcost${id}'> ${$("#cost").val()} Rs/- </div></th>
                            <th><div id='editfoodcuisines${id}'> ${$("#cuisines").val()} </div></th>
                            <th><div id='editfoodpayment${id}'> ${payment} </div></th>
                            <th><button class='btn btn-outline-danger' style='font-size:15px' data-toggle='modal' data-target='#food${id}'><i class='fa fa-trash' aria-hidden='true'>&nbsp;&nbsp;Delete</i></button></th>
                            <th> <button class='editfood btn btn-outline-info' style='font-size:15px' data-toggle='modal' data-target='#foodedit${id}'>
                                <i class='fa fa-edit' aria-hidden='true'>&nbsp;&nbsp;Edit</i>
                            </button></th>
                        </tr>
                    `);

                    $("#food_name").val('');
                    $("#cost").val('');
                    $("#cuisines").val('');
                    $("#cod")[0].checked = false;
                    $("#op")[0].checked = false;
                    $('#foodsnap').val('');
                }
            }
        });
    }else{
        $("#foodadderror").text("Choose the Payment mode");
    }
})


$(document).on('click', '.deletefood', function() {
    let way = "editfood";
    let foodid = $(this).val();
    let imageName = $(this).attr('imagename');
    console.log(foodid)
    $.ajax({
        url: "./ajax/foodajax.php",
        type: "POST",        
        data: {"way":way,"foodid":foodid,"imagename":imageName},
        success: function(res) {
            console.log(res);
            if(res == "success"){
                $("#food"+foodid).modal("hide");
                $("#"+foodid).remove();
                checkProductAvailability();
            }           
        }
    });
});

function checkProductAvailability() {
    if ($("#tbodyval tr").length === 0) {
        $("#tbodyval").html("<tr><td colspan='7' style='font-weight:700'>No products available</td></tr>");
    } else {
        $("#tbodyval tr:has(td)").remove();
    }
}

const updatefooddetails = (event) => {
    var id = event.value;
    var frm = $("#updatefood" + id)[0];
    var formData = new FormData(frm);
    let cod = $("#cod" + id).is(":checked");
    let op = $("#op" + id).is(":checked");
    if ((cod && op) || (cod || op)) {
        $.ajax({
            url: "./ajax/foodajax.php",
            type: "POST",
            data: formData,
            processData: false, 
            contentType: false,
            success: function (res) {
                var response = JSON.parse(res);
                var payment = "";
                if(response.cod == "true"){
                    payment+="Cash on Delivery";
                    if(response.op == "true"){
                        payment+=", Online Payment";
                    }
                }else if(response.op == "true"){
                    payment+="Online Payment";
                }
                if(response.status == "success"){
                    if(response.type == "noimage"){
                       $("#editfoodname"+id).text(response.foodname);
                       $("#editfoodcost"+id).text(response.foodcost+" Rs/-");
                       $("#editfoodcuisines"+id).text(response.cuisines);
                       $("#editfoodpayment"+id).text(payment);
                       $("#foodedit"+id).modal("hide");
                    }else if(response.type == "image"){
                        $("#editfoodname"+id).text(response.foodname);
                        $("#editfoodcost"+id).text(response.foodcost+" Rs/-");
                        $("#editfoodcuisines"+id).text(response.cuisines);
                        $("#editfoodpayment"+id).text(payment);
                        $("#editfoodsnap" + id).attr("src", "foodimages/" + response.foodsnap);
                        $("#deletefoodimage" + id).attr("src", "foodimages/" + response.foodsnap);
                        $("#deletefoodtext"+id).text(response.foodname);
                        $("#deletefoodbtn"+id).attr("imagename",response.foodsnap);
                        $("#inputimage"+id).val('');
                        $("#foodedit"+id).modal("hide");
                    }
                }
            }
        });
    } else {
        $(".errorfood").text("Choose the Payment mode");
        console.log("error" + id);
    }
}


const clearfoodupdate  = () =>{
    $(".errorfood").text("");
}
