<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <title>Admin</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">		
        <link rel="icon" type="image/x-icon" style="border-radius: 50%;" href="./requiredfiles/Redana-logo.png">
		<style>
		ul li{list-style:none;}
		ul li a {color:black; text-decoration:none;}
		ul li a:hover {color:black; text-decoration:none;}
		</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

    <a class="navbar-brand" href="index.php"><span style="color:red;font-family: 'Permanent Marker', cursive;">&nbsp;<img src="./requiredfiles/Redana-logo.png" height="40" alt="logo" style="border-radius:50%">&nbsp;&nbsp;Redana</span></a>
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
		
		
      </ul> -->
	  
    </div>
	
</nav>
<br><br><br><br>
<div class="middle" style="  padding:40px; border:2px solid red; margin:0px auto; width:400px;border-radius:10px">
<div align="center"><img src="./requiredfiles/Redana-logo.png" height="60" alt="logo" style="border-radius:50%"></div>
<br>
       <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:red;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
         
              <a class="nav-link" id="profile-tab" style="color:white;"    aria-controls="profile" aria-selected="false">Welcome Admin</a>
          
       </ul>
	   <br><br>
	   <div class="tab-content" id="myTabContent">
	   <!--login Section-- starts-->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
			    <!-- <div class="footer" style="color:red;"></div> -->
			  <form id='frm'>
                    <div class="form-group">
                      <label for="email">Email ID :</label>
                      <input type="email" class="form-control" name="username" id="usernamae" onclick="clearerror()" required/>
                      <input type="hidden" value="admin" name="type"> 
                    </div>
                   <div class="form-group">
                      <label for="pwd">Password :</label>
                      <input type="password" name="password" class="form-control" id="password" onclick="clearerror()" required/>
                   </div>
                  <div align="center">
                  <button type="submit" name="login" class="btn btn-primary"><div id="loginbtn"> Submit </div></button>
                  </div>
                  <br>
                  <div id="errormessage" style="color:red;"></div>
                  <!-- <div class="footer" style="color:green;"></div> -->
			 </form>
			</div>
			<!--login Section-- ends-->
      </div>
	  </div>
</body>
<script src="./js/index.js"></script>
</html>
