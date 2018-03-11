<?php include('server.php'); ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TEACHER</title>

        <!-- CSS -->        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
 
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">


  
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="btn btn-link-3" href="index.php">Home</a></li>
             <li><a class="btn btn-link-3" href="index.php">Login As Student</a></li>
            
            <li><a class="btn btn-link-3" href="teacher-login.php">Login As Teacher</a></li>
            <li><a class="btn btn-link-3" href="college-login.php">Login As College</a></li>
            <li><a class="btn btn-link-3" href="admin-login.php">Login As Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <form name="myForm" method="post">
  <div class="login-form-student">
      <h1>Teacher Signup</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Name " name="name" >
       
     </div>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username " name="username" >
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Email-ID " name="email">
     </div>
     
<div class="form-group">
   <tr>
<td ></td>
<td><select name="college" class="form-control" name ="college">
<option value="-1">Select College</option>
<option value="bppimt" id="bppimt">B. P. Poddar Institute of Management & Technology</option>
</select></td>
</tr>
</div>

     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" name ="password_1">
       <i class="fa fa-lock"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Confirm Password" name ="password_2">
       <i class="fa fa-lock"></i>
     </div>
      
     <button type="submit" name="signup-teacher" class="log-btn" >Sign Up</button> 
      <!-- display validtion errors here -->
    <?php include('errors.php'); ?>
     
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
   
  

</body>
</html>
