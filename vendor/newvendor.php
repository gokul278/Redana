<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <title>Hotel Registration Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" style="border-radius: 50%;" href="./requiredfiles/Redana-logo.png">
		<style>
		ul li{list-style:none;}
		ul li a {color:black;text-decoration:none; }
		ul li a:hover {color:black; text-decoration:none;}
		</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  
    <a class="navbar-brand" href="index.php"><span style="color:red;font-family: 'Permanent Marker', cursive;"><div align="center">&nbsp;<img src="./requiredfiles/Redana-logo.png" height="40" alt="logo" style="border-radius:50%">&nbsp;&nbsp;Redana</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	
      <!-- <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
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
        </li>
		
		
      </ul>
	   -->
    </div>
	
</nav>
<br><br><br><br>
<div class="middle" style="margin:0px auto; border:1px solid #F8F9FA;  width:800px;">

       <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background: red; border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" style="color:black;" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
          </li>
		  <li class="nav-item">
             <a class="nav-link " id="login-tab" style="color:black;" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log In</a>
          </li>
       </ul>
       <br>
<div align="center"><img src="./requiredfiles/Redana-logo.png" height="70" alt="logo" style="border-radius:50%"></div>
<br>
	   <!--tab 1 starsts-->
	   <div class="tab-content" id="myTabContent">
	       <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="home-tab">
			    <!-- <div class="footer" style="color:red;"><?php if(isset($loginmsg)){ echo $loginmsg;}?></div> -->
			    <form  id="frm">
                      <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter Restaurant Name" name="name" required/>
                      </div>
	                  <div class="form-group">
                          <label for="name">Email Id:</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required/>
                          <!-- <span id="" style="color:red;"></span> -->
	                  </div>
	                 <div class="form-group">
                         <label for="pswd">Password:</label>
                         <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="pswd" placeholder="Enter Password" name="pswd" required/>
                         <br>
                         <div style="font-size:15px;color:red">
                          <span><span style="font-size:20px">*</span> A lowercase letter &nbsp;</span>
                          <span><span style="font-size:20px">*</span> A capital (UPPERCASE) Letter &nbsp;</span>
                          <span><span style="font-size:20px">*</span> A number &nbsp;</span>
                          <span><span style="font-size:20px">*</span> Minimum 8 characters &nbsp;</span>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="mob">Mobile:</label>
                         <input type="tel" class="form-control" pattern="[7-9]{1}[0-9]{9}" id="mob" placeholder="9123456578" name="mob" required/>
                     </div>
	                 <div class="form-group">
                          <label for="add">Address:</label>
                          <input type="text" class="form-control" id="add" placeholder="Enter Address"  name="address" required>
                     </div>
	                 <div class="form-group">
                          <!-- <input type="file" id="logo" accept="image/*" required  name="logo" required>Upload Logo  -->
                          <input type="file" id="logo" name="logo" accept="image/*" onchange="validateImage(this)">Upload Logo 
                     </div>
                     <input type="hidden" id="imageInput" name="type" value="vendor">
                     <p style="color:red">* Image pixel should be in 650x650</p>
                     <br>
                    <p id="already" style="color:red"></p>
                     <button type="submit" id="register" name="register" class="btn btn-outline-primary"><div id="indication">Register</div></button>&nbsp;&nbsp;<span id="loading" style="display: none; text-align: center;"><img src="./Loading.gif" alt="Loading..." height="35"></span>
                     
                </form>
                
				<br>
			</div>
			<div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="home-tab">
			   <a href="index.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">Log In</button></a>
			   <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br>
			</div>
	   </div>
	</div>
	<br>
	   
</body>
<script src="./js/newvendor.js"></script>
</html>