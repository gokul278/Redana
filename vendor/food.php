<?php
include('./requiredfiles/connectiondb.php');
session_start();
if(isset($_SESSION["vendor_id"])){
  $activationchecksql = "SELECT * FROM vendorlogin WHERE vendor_id = '". $_SESSION["vendor_id"] ."'";
  $activationcheckres = $con->query($activationchecksql);
  foreach($activationcheckres as $activationcheckrow){
    if($activationcheckrow["activation_status"] == "false"){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Activation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" style="border-radius: 50%;" href="./requiredfiles/Redana-logo.png">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="food.php"><span style="color:red;font-family: 'Permanent Marker', cursive;">&nbsp;<img src="./requiredfiles/Redana-logo.png" height="40" alt="logo" style="border-radius:50%">&nbsp;&nbsp;Redana</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
  <br><br><br><br>
  <div class="middle" style="margin:0px auto; border:2px solid red;  width:800px;border-radius:10px">
  <br>
  <div align="center"><img src="./requiredfiles/Redana-logo.png" height="70" alt="logo" style="border-radius:50%"></div>
  <div class="mt-3" align="center">
    <div><a class="navbar-brand" style="color:black; text-decoration:none;"><span style="font-size:18px">Vendor</span>&nbsp;&nbsp;<i class="far fa-user"></i>&nbsp;&nbsp;<span style="font-size:18px"><?php echo $_SESSION["vendor_name"]?></span></a>&nbsp;&nbsp;<button id="activationlogout" class="btn btn-outline-danger">Logout</button></div>
    <br><br>
    <h3>Enter Activation Code</h3>
    <br>
    <div style="width:30%;" align="center">
      <input type="number" id='codeinput' class="form-control" style="text-align: center;" placeholder="Activation Code" required/>
    </div>
    <p id='activationerror' style="color:red;font-weight:600;margin-top:20px"></p>
    <button onclick="activationbtn()" class='btn btn-outline-primary'>Activate</button>
    <br><br>
  </div>
  </div>
  
  </div>
</body>
<script src="./js/food.js"></script>
</html>

<?php
    }else if($activationcheckrow["activation_status"] == "true"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" style="border-radius: 50%;" href="./requiredfiles/Redana-logo.png">
	 <style>
		ul li a {color:white;padding:40px; }
		ul li a:hover {color:white;}
	 </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  
    <a class="navbar-brand" href="food.php"><span style="color:red;font-family: 'Permanent Marker', cursive;">&nbsp;<img src="./requiredfiles/Redana-logo.png" height="40" alt="logo" style="border-radius:50%">&nbsp;&nbsp;Redana</span></a>

	<a class="navbar-brand" style="color:black; text-decoration:none;"><span style="font-size:18px">Vendor</span>&nbsp;&nbsp;<i class="far fa-user"></i>&nbsp;&nbsp;<span style="font-size:18px"><?php echo $_SESSION["vendor_name"]?></span></a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
                
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li> -->
		<li class="nav-item">
			<button id="logout" class="btn btn-outline-danger my-2 my-sm-0" name="logout" type="submit">Log Out</button>&nbsp;&nbsp;&nbsp;
        </li>
		
		
      </ul>
	  
    </div>
	
</nav>

<!--navbar ends-->


<br><br>
<div class="middle" style=" padding:40px;  width:100%;">
       <!--tab heading-->
	   <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:red;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#viewitem" role="tab" aria-controls="home" aria-selected="true">Manage Products</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#manageaccount" role="tab" aria-controls="profile" aria-selected="false">Add Products</a>
          </li>
		  <li class="nav-item">
              <a class="nav-link" id="accountsettings-tab" data-toggle="tab" href="#accountsettings" role="tab" aria-controls="accountsettings" aria-selected="false">Account Settings</a>
          </li>
		  
		  <li class="nav-item">
              <a class="nav-link" id="logo-tab" data-toggle="tab" href="#logo" role="tab" aria-controls="logo" aria-selected="false">Update Logo</a>
          </li>
		  <li class="nav-item">
              <a class="nav-link" id="status-tab" data-toggle="tab" href="#status" role="tab" aria-controls="status" aria-selected="false">Order Status</a>
          </li>
		  
       </ul>
	   <br><br>
	<!--tab 1 starts-->   
	   <div class="tab-content" id="myTabContent">
	   
            <div class="tab-pane fade show active" id="viewitem" role="tabpanel" aria-labelledby="home-tab">
                 <div class="container" id="showproduct"> 
			 <table border="1" bordercolor="#F0F0F0" cellpadding="20px">
			 <thead align="center">
        <th>Food Image</th>
        <th>Food name</th>
        <th>Food Price</th>
        <th>Food cuisines </th>
        <th>Payment Mode  </th>
        <th>Delete Item   </th>
        <th>Update item Details </th>
       </thead>
       <tbody align="center" id="tbodyval">
        <?php
        $sql = "SELECT * from food_menu WHERE vendor_id = '".$_SESSION["vendor_id"]."' ORDER BY food_id DESC";
        $res = $con->query($sql);
        $cod = "false";
        $op = "false";
        if(($res->num_rows)>=1){
          foreach($res as $row) {
            $payment = "";
            if ($row['cashondelivery'] == "true") {
                $payment = $payment.''."Cash on Delivery";
                $cod = "true";
                if ($row['onlinepayment'] == "true") {
                  $payment = $payment.''.", Online Payment";
                  $op = "true";
                }
            }else if ($row['onlinepayment'] == "true") {
              $payment = $payment.''."Online Payment";
              $op = "true";
            }
            
            
            echo "<tr id='" . $row["food_id"] . "'>
    <th><img id='editfoodsnap".$row["food_id"]."' src='foodimages/" . htmlspecialchars($row["food_snaps"]) . "' width='100px' alt='Food Image'></th>
    <th><div id='editfoodname".$row["food_id"]."'>" . $row['food_name'] . "</div></th>
    <th><div id='editfoodcost".$row["food_id"]."'>" . $row['food_cost'] . " Rs/-</th>
    <th><div id='editfoodcuisines".$row["food_id"]."'>" . $row['cuisines'] . "</th>
    <th><div id='editfoodpayment".$row["food_id"]."'>" . $payment . "</th>
    <th>
        <button class='btn btn-outline-danger' style='font-size:15px' data-toggle='modal' data-target='#food" . $row["food_id"] . "'>
            <i class='fa fa-trash' aria-hidden='true'>&nbsp;&nbsp;Delete</i>
        </button>
    </th>
    <div class='modal fade' id='food" . $row["food_id"] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title'>Do you want to delete the Product?</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body' align='center'>
                    <img id='deletefoodimage" . $row["food_id"] . "'  src='foodimages/" . htmlspecialchars($row["food_snaps"]) . "' width='100px' alt='Food Image'>
                    <br><br>
                    <h5 id='deletefoodtext" . $row["food_id"] . "'>" . $row["food_name"] . "</h5>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='button' id='deletefoodbtn" . $row["food_id"] . "' class='deletefood btn btn-danger' value='" . $row["food_id"] . "' imagename='" . $row["food_snaps"] . "'>
                        <i class='fa fa-trash' aria-hidden='true'>&nbsp;&nbsp;Delete</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <th>
        <button class='editfood btn btn-outline-info' style='font-size:15px' data-toggle='modal' data-target='#foodedit" . $row["food_id"] . "'>
            <i class='fa fa-edit' aria-hidden='true'>&nbsp;&nbsp;Edit</i>
        </button>
    </th>
    <div class='modal fade' id='foodedit" . $row["food_id"] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title'>Edit</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body' align='start'>
                <form id='updatefood" . $row["food_id"] . "'>
                <div class='form-group'><!--food_name-->
                    <label for='food_name'>Food Name:</label>
                    <input type='text' class='form-control' placeholder='Enter Food Name ' id='foodname". $row["food_id"] . "' name='food_name' value='" . $row['food_name'] . "' required onclick='clearsuccess()'>
                </div>
                <div class='form-group'><!--cost-->
                    <label for='cost'>Cost :</label>
                    <input type='number' class='form-control' placeholder='10000' id='foodcost". $row["food_id"] . "' name='cost' value='" . $row['food_cost'] . "' required onclick='clearsuccess()'>
                </div>
                <div class='form-group'><!--cuisines-->
                    <label for='cuisines'>Cuisines :</label>
                    <input type='text' class='form-control'  placeholder='Enter Cuisines' id='cuisines". $row["food_id"] . "' name='cuisines' value='" . $row['cuisines'] . "' required onclick='clearsuccess()'>
                </div>
                <div class='form-group'><!--payment_mode-->
                    <input type='checkbox' name='chk[]' value='COD' id='cod". $row["food_id"] . "' onclick='clearfoodadd()' " . ($row["cashondelivery"] == "true" ? "checked" : "") . ">&nbsp;&nbsp;<label for='cod". $row["food_id"] . "' onclick='clearfoodupdate()'>Cash On Delivery</label>
                    <br>
                    <input type='checkbox' name='chk[]' value='OP' id='op". $row["food_id"] . "' onclick='clearfoodadd()' " . ($row["onlinepayment"] == "true" ? "checked" : "") . ">&nbsp;&nbsp;<label for='op". $row["food_id"] . "' onclick='clearfoodupdate()'>Online Payment</label>
                    <br>
                    <p class='errorfood' style='color:red'></p>
                </div>
                <div class='form-group'>
                    <label for='foodsnap'>Food Snap :</label>
                    <input type='hidden' name='way' value='updatefood'>
                    <input type='hidden' name='foodid' value='".$row["food_id"]."'>
                    <br>
                    <img id='editimage" . $row["food_id"] . "' src='foodimages/" . htmlspecialchars($row["food_snaps"]) . "' width='100px' alt='Food Image'>
                    <br>
                    <br>
                    <input id='inputimage" . $row["food_id"] . "' class='form-control-file' name='foodsnap' type='file' accept='image/*' onchange='editpreviewImage(this, " . $row["food_id"] . ")'/>
                </div>           
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='button' class='editfood btn btn-success' value='". $row["food_id"] . "' imagename='" . $row["food_snaps"] . "' onclick='updatefooddetails(this)'>
                        <i class='fa fa-upload' aria-hidden='true'>&nbsp;&nbsp;Update</i>
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</tr>";

          }        
        }
        ?>
       </tbody>
			 </table>
			 </div>    	 
	        </div>
<!--tab 1 ends-->	   
			
			
			<!--tab 2 starts-->
            <div class="tab-pane fade" id="manageaccount" role="tabpanel" aria-labelledby="profile-tab"> 
			         <!--add Product-->
                <form id="addfood">
                  <div class="form-group"><!--food_name-->
                  <label for="food_name">Food Name:</label>
                        <input type="text" class="form-control" id="food_name" placeholder="Enter Food Name" name="food_name" required onclick="clearsuccess()">
                  </div>							 
                  <div class="form-group"><!--cost-->
                        <label for="cost">Cost :</label>
                        <input type="number" class="form-control" id="cost"  placeholder="10000" name="cost" required onclick="clearsuccess()">
                  </div>							 
                  <div class="form-group"><!--cuisines-->
                            <label for="cuisines">Cuisines :</label>
                            <input type="text" class="form-control" id="cuisines" placeholder="Enter Cuisines" name="cuisines" required onclick="clearsuccess()">
                  </div>                       
                  <div class="form-group"><!--payment_mode-->
                    <input type="checkbox" name="chk[]" value="COD" id="cod" onclick="clearfoodadd()"/>&nbsp;&nbsp;<label for="cod" onclick="clearfoodadd()">Cash On Delivery</label>
                    <br>
                    <input type="checkbox" name="chk[]" value="OP" id="op" onclick="clearfoodadd()"/>&nbsp;&nbsp;<label for="op" onclick="clearfoodadd()">Online Payment</label>
                    <br>
                    <p id="foodadderror" style="color:red"></p>
                  </div>
                  <div class="form-group">
                    <label for="foodsnap">Food Snaps :</label>
                    <input type="hidden" name="way" value="foodname">
                    <br>
                    <input class="form-control-file" type="file" accept="image/*" name="foodsnap" id="foodsnap" required onchange="addValidateImage(this)" />
                    <!-- <input class="form-control-file" type="file" accept="image/*" name="foodsnap" id="foodsnap" required onchange="addValidateImage(this)" onclick="clearsuccess()"/> -->
                  </div>
                    <button type="submit" name="add" class="btn btn-primary">ADD Item</button> &nbsp;&nbsp;&nbsp; <span id="successmessage" style="color:green"></span>
                </form>
              </div>
			<!--tab 2 ends-->
			
			
			 <!--tab 3-- starts-->
			 <div class="tab-pane fade" id="accountsettings" role="tabpanel" aria-labelledby="accountsettings-tab">
			    <form id="updatefrm" method="post" enctype="multipart/form-data"> 
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" id="username" value="<?php echo $_SESSION["vendor_name"]?>" class="form-control" name="name" />
                    </div>
					<div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" id="email" value="<?php echo $_SESSION["vendor_email"]?>" class="form-control" name="email" readonly="readonly"/>
                    </div>
					<div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" id="address" value="<?php echo $_SESSION["vendor_address"]?>" class="form-control" name="address" required/>
                    </div>
					<div class="form-group">
                      <label for="mobile">Mobile Number</label>
                      <input type="text" id="mobile" pattern="[6-9]{1}[0-9]{9}" value="<?php echo $_SESSION["vendor_mobile"]?>" class="form-control" name="mobile" required/>
                    </div>
					
                   <div class="form-group">
                      <label for="pwd">Password</label>
                     <input type="password" name="pwsd" class="form-control" value="<?php echo $_SESSION["vendor_password"]?>" id="pwd" required/>
                   </div>
                   <input type="hidden" value="accountsetting" name="way">
                  <button type="submit" name="upd_account" class="btn btn-primary">Update</button>
                  
			 </form>
			</div>
			<div class="tab-pane fade" id="logo" role="tabpanel" aria-labelledby="logo-tab">
      <div class="container">
        <img id="imagePreview" src="images/<?php echo $_SESSION["vendor_image"]?>" height="100px" alt="">
        <br>
        <br>
        <br>
        <form id="logoupdate">
          <h4>Update New Image</h4>
          <input type="hidden" value="updatelogo" name="way">
          <input type="file" class="form-control-file" name="logopic" id="logopic" accept="image/*" required onchange="previewImage(this);">
          <br>
          <button type="submit" name="upd_logo" class="btn btn-outline-primary">Update Logo</button>
        </form>
      </div>
			</div>
			 <div class="tab-pane fade " id="status" role="tabpanel" aria-labelledby="status-tab">
	            <table class="table">
				<tbody>
				<th>Order Id</th>
				<th>Customer Email</th>
				<th>Food Id</th>
				<th>Order Status</th>
				<th>Update Status</th>
				
			   <td><i style="color:orange;" class="fas fa-exclamation-triangle"></i>&nbsp;<span style="color:red;"><?php echo $orderrow['fldstatus']; ?></span></td>
			   
			   <td><span style="color:green;"><?php echo $orderrow['fldstatus']; ?></span></td>
			  
						<form method="post">
						<td><a href="changestatus.php?order_id=<?php echo $orderrow['fld_order_id']; ?>"><button type="button" name="changestatus">Update Status</button></a></td>
						</form>
						<tr>
						
				</tbody>
				</table>
			 </div>
	  </div>
	</div>  
	
</body>
<script src="./js/food.js"></script>
</html>
<?php
    }
  }
}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Try again</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
     <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/font.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="icon" type="image/x-icon" style="border-radius: 50%;" href="./requiredfiles/Redana-logo.png">
</head>
<body>
  <div class="mt-5 pt-5" align="center">
    <h1>Login Again</h1>
    <br>
    <a href="index.php"><button class="btn btn-outline-success">GO BACK</button></a>
  </div>
</body>
</html>

<?php
}
?>