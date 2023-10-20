<?php
include("./requiredfiles/connectiondb.php");
session_start();
if(isset($_SESSION["admin_id"])){
?>
<html>
  <head>
     <title>Admin control panel</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">		
        <link rel="icon" type="image/x-icon" style="border-radius: 50%;" href="./requiredfiles/Redana-logo.png">
		 <style>
		ul li a {color:black;}
		ul li a:hover {color:black; font-weight:bold;}
		ul li {list-style:none;}

ul li a:hover{text-decoration:none;}
#social-fb,#social-tw,#social-gp,#social-em{color:blue;}
#social-fb:hover{color:#4267B2;}
#social-tw:hover{color:#1DA1F2;}
#social-gp:hover{color:#D0463B;}
#social-em:hover{color:#D0463B;}
.table tbody th,
    .table tbody td {
        vertical-align: middle;
    }
	 </style>
  </head>
  
    
	<body>

	
<nav  class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  
    <a class="navbar-brand" href="dashboard.php"><span style="color:red;font-family: 'Permanent Marker', cursive;">&nbsp;<img src="./requiredfiles/Redana-logo.png" height="40" alt="logo" style="border-radius:50%">&nbsp;&nbsp;Redana</span></a>
   
	<a class="navbar-brand" style="color:black;text-decoration:none"><i class="far fa-user">&nbsp;&nbsp;Admin</i>&nbsp;&nbsp;<?php echo $_SESSION["admin_username"]?></a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
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
        <button name="logout" onclick="logout()"  class="btn btn-outline-danger">Log Out</button>
      </li>
		
      </ul>
	  
    </div>
	
</nav>
<!--navbar ends-->
<br><br><br><br>
<!--details section-->
 
<div class="container">
       <!--tab heading-->
	   <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:red;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" style="color:black;" id="viewitem-tab" data-toggle="tab" href="#viewitem" role="tab" aria-controls="viewitem" aria-selected="true">View Food Items</a>
          </li>
          <li class="nav-item">
              <a class="nav-link"  style="color:black;" id="manageaccount-tab" data-toggle="tab" href="#manageaccount" role="tab" aria-controls="manageaccount" aria-selected="false">Account Settings</a>
          </li>
		  <li class="nav-item">
              <a class="nav-link" style="color:black;"  id="ManageVendors-tab" data-toggle="tab" href="#ManageVendors" role="tab" aria-controls="ManageVendors" aria-selected="false">Manage Vendors</a>
          </li>
		  <li class="nav-item">
              <a class="nav-link" style="color:black;" id="orderstatus-tab" data-toggle="tab" href="#orderstatus" role="tab" aria-controls="orderstatus" aria-selected="false">Order status</a>
          </li>
		  
		  
		  
		  
       </ul>
	   <br><br>
	<!--tab 1 starts-->   
	   <div class="tab-content" id="myTabContent">
	   
            <div class="tab-pane fade show active" id="viewitem" role="tabpanel" aria-labelledby="viewitem-tab">
                 <div class="container">
	               <table class="table" border="1" bordercolor="#F0F0F0" cellpadding="20px">
                 <thead align="center">
                    <tr>
                        <th scope="col">Hotel_Id</th>
                            <th scope="col">Food View</th>
                            <th scope="col">Food Cuisines</th>
                            <th scope="col">Hotel Name</th>
                            <th scope="col">Food Id</th>                            
                            <th scope="col">Remove Food</th>
                     </tr>
                 </thead>
                 
                  <tbody align="center"  id="tbodyval">
                    <?php
                    $vendorsql = "select * from food_menu fm JOIN vendorlogin vl ON fm.vendor_id = vl.vendor_id order by food_id desc";
                    $vendores = $con->query($vendorsql);
                    if($vendores){
                      foreach($vendores as $row){
                        $imagePath = "../vendor/foodimages/".$row["food_snaps"]."";
                        echo "<tr id='vendorfood" . $row["food_id"] . "'>
                          <th>ID: <span style='color:green'>" .$row["vendor_id"]. "</span> </th>
                          <th> <img src='".$imagePath."' alt='Food Image' width='100px'> </th>
                          <th> " .$row["cuisines"]. " </th>
                          <th> " .$row["name"]. " </th>
                          <th>ID: <span style='color:green'>" .$row["food_id"]. "</span> </th>
                          <th> <button class='btn btn-outline-danger removefood' value='" .$row["food_id"]. "'> <i class='fa fa-trash' aria-hidden='true'>&nbsp;&nbsp;Remove</i> </button> </th>
                        </tr>";
                      }
                    }
                    ?>	  
                  </tbody>
           </table>
	 
	 </div>   	
		  
		   <!-- <span style="color:green; text-align:centre;"></span> -->
			
		
      	    </div>	 
	  
<!--tab 1 ends-->	   			
			<!--tab 2 starts-->
            <div class="tab-pane fade" id="manageaccount" role="tabpanel" aria-labelledby="manageaccount-tab">
			    <form id="userupdate">
                    <div class="form-group">
                      <label for="name">Email ID</label>
                      <input type="text" id="username" value="<?php echo $_SESSION["admin_username"]; ?>" class="form-control" name="email" readonly="readonly"/>
                    </div>
					
                    <input type="hidden" name="type" value="updateuser">
					
                   <div class="form-group">
                      <label for="pwd">Password:</label>
                     <input type="password" name="password" class="form-control" value="<?php echo $_SESSION["admin_password"]; ?>" id="pwd" required/>
                   </div>
				   
				   
 
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                  <!-- <div class="footer" style="color:red;"></div> -->
			 </form>
			</div>
			<!--tab 2 ends-->
			 
			 <div class="tab-pane fade show" id="ManageVendors" role="tabpanel" aria-labelledby="ManageVendors-tab">
			    <div class="container">
	               <table class="table" border="1" bordercolor="#F0F0F0" cellpadding="20px">
                 <thead align="center">
                    <tr>
                      <th scope="col">vendor Id</th>
                      <th scope="col">Hotel Image</th>
                      <th scope="col">Hotel Name</th>    
                      <th scope="col">Hotel Email</th>                         
                      <th scope="col">Mobile Number</th>                                                    
                      <th scope="col">Address</th>
                      <th scope="col">Remove Vendor</th>
                     </tr>
                  </thead>
                  <tbody align="center"  id="tbodyvalvendor">
                    <?php
                    $accountsql = "SELECT * FROM vendorlogin ORDER BY vendor_id DESC";
                    $accountres = $con->query($accountsql);
                    if($accountres){
                      foreach($accountres as $accountrow){
                        $imagePath = "../vendor/images/".$accountrow["image"]."";
                        echo "
                        <tr id='vendorid".$accountrow["vendor_id"]."'>
                          <th>ID: <span style='color:green'>" .$accountrow["vendor_id"]. "</span> </th>
                          <th> <img src='".$imagePath."' alt='Food Image' width='100px'> </th>
                          <th> ".$accountrow["name"]." </th>
                          <th> ".$accountrow["email"]." </th>
                          <th> ".$accountrow["mobile_number"]." </th>
                          <th> ".$accountrow["address"]." </th>
                          <th> <button class='btn btn-outline-danger removevendor' value='" .$accountrow["vendor_id"]. "'> <i class='fa fa-trash' aria-hidden='true'>&nbsp;&nbsp;Remove</i> </button> </th>
                        </tr>
                        ";
                      }
                    }
                    ?>	  
                  </tbody>
           </table>
	 
	 </div>   	
			 </div>
			 
			 <!--tab 4-->
			 <div class="tab-pane fade" id="orderstatus" role="tabpanel" aria-labelledby="orderstatus-tab">
               <table class="table">
			   <th>Order Id</th>
			   <th>Food Id</th>
			   <th>Customer Email Id</th>
			   <th>order Status</th>
			   <tbody>
			  
			   </tbody>
			   </table>
			</div>
			 
      
	  </div>
	</div>	 
	<br><br><br>

</body>
<script src="./js/dashboard.js"></script>
</html>	

<?php
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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