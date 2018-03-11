<?php

	 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


	$username = "";
	$email = "";
	$errors = array();


	// connect to database
	$db = mysqli_connect();


	              ////signup buttons////

	//if the signup-student button is clicked
	if (isset($_POST['signup-student'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string( $db, $_POST['email']);
		$roll = mysqli_real_escape_string( $db, $_POST['roll']);
		$course = mysqli_real_escape_string( $db, $_POST['course']);
		$college = mysqli_real_escape_string( $db, $_POST['college']);
		$semester = mysqli_real_escape_string( $db, $_POST['semester']);
		$password_1 = mysqli_real_escape_string( $db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string( $db, $_POST['password_2']);

		$check = "SELECT * FROM studentsignup WHERE username= '$username'";
		$check1 = "SELECT * FROM studentsignup WHERE roll= '$roll'";
		$check2 = "SELECT * FROM eligiblestudent WHERE roll= '$roll'  AND semester= '$semester' AND name= '$name'";
		
		$result = mysqli_query($db, $check);
		$result1 = mysqli_query($db, $check1);
		$result2 = mysqli_query($db, $check2);
	

		//ensure that form fields are filled properly
		if (empty($name)) {
			array_push($errors, "name is required");
		}
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
 			 array_push($errors, "Only Letters Allowed");
		}
		if (empty($username)) {
			array_push($errors, "username is required");
		}
		if (empty($email)) {
			array_push($errors, "email is required");
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			array_push($errors, "invalid email format ");
		}
		if (empty($roll)) {
			array_push($errors, "roll is required");
		}
		if (empty($course)) {
			array_push($errors, "course is required");
		}
		if (empty($college)) {
			array_push($errors, "college is required");
		}
		if (empty($semester)) {
			array_push($errors, "semester is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if (strlen ($password_1)>20 || strlen ($password_1)<6){
           	array_push($errors, "Password must be between 6 and 20 characters");
         }
		if ($password_1 != $password_2)  {
			array_push($errors, "The two password do not match");
		}
		if (mysqli_num_rows($result) == 1){
			array_push($errors, "Username already exists");
		}

		if (mysqli_num_rows($result1) == 1){
			array_push($errors, "Roll number already exists");
		}
		//if there are no errors, save user to the database
		if (count($errors) == 0) {
			if (mysqli_num_rows($result2) == 1){
			$password = md5($password_1); // encrypt password before storing in database (security)
			$sql = "INSERT INTO studentsignup (name, username, email, roll, course, college, semester, password)
							VALUES ('$name', '$username', '$email', '$roll', '$course', '$college', '$semester', '$password')";
			mysqli_query($db, $sql);			
			header('location:success.php');
			}
			else{
				array_push($errors, "Student no eligible for exam");
			}

		}

	}


	//if the signup-teacher button is clicked
	if (isset($_POST['signup-teacher'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string( $db, $_POST['email']);
		$college = mysqli_real_escape_string( $db, $_POST['college']);
		$password_1 = mysqli_real_escape_string( $db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string( $db, $_POST['password_2']);

		$check = "SELECT * FROM eligibleteacher WHERE name = '$name' AND email='$email'";
		$result = mysqli_query($db, $check);

		$check1 = "SELECT * FROM teachersignup WHERE name = '$name'";
		$result1 = mysqli_query($db, $check1);

		$check2 = "SELECT * FROM teachersignup WHERE emailid = '$email'";
		$result2 = mysqli_query($db, $check2);

		//ensure that form fields are filled properly
		if (empty($name)) {
			array_push($errors, "name is required");
		}
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
 			 array_push($errors, "Only Letters Allowed");
		}
		if (empty($username)) {
			array_push($errors, "username is required");
		}
		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			array_push($errors, "invalid email format ");
		}
		if (empty($college)) {
			array_push($errors, "college is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if (strlen ($password_1)>20 || strlen ($password_1)<6){
           	array_push($errors, "Password must be between 6 and 20 characters");
         }

		if ($password_1 != $password_2)  {
			array_push($errors, "The two password do not match");
		}
		
		if (mysqli_num_rows($result1) == 1){
			array_push($errors, "Username already exists");
		}

		if (mysqli_num_rows($result2) == 1){
			array_push($errors, "Email-ID already exists");
		}
		

		//if there are no errors, save user to the database
		if (count($errors) == 0) {
			if (mysqli_num_rows($result) == 1){
			$password = md5($password_1); // encrypt password before storing in database (security)
			$sql = "INSERT INTO teachersignup (name, username, emailid,  college, password)
							VALUES ('$name', '$username', '$email', '$college', '$password')";
			mysqli_query($db, $sql);			
			header('location:success.php'); //redirect to home page
			}
			else {
				array_push($errors, "Teacher not in college database");
			}

		}

	}
	

	//if the signup-college button is clicked
	if (isset($_POST['signup-college'])) {
		$collegename = mysqli_real_escape_string($db, $_POST['collegename']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string( $db, $_POST['email']);
		$collegeid = mysqli_real_escape_string( $db, $_POST['collegeid']);
		$password_1 = mysqli_real_escape_string( $db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string( $db, $_POST['password_2']);

		$check = "SELECT * FROM collegesignup WHERE collegename= '$collegename'";
		$result = mysqli_query($db, $check);

		//ensure that form fields are filled properly
		if (empty($collegename)) {
			array_push($errors, "collegename is required");
		}
		
		if (empty($username)) {
			array_push($errors, "username is required");
		}
		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			array_push($errors, "invalid email format ");
		}
		if (empty($collegeid)) {
			array_push($errors, "collegeid is required");
		}

		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if (strlen ($password_1)>20 || strlen ($password_1)<6){
           	array_push($errors, "Password must be between 6 and 20 characters");
         }
		if ($password_1 != $password_2)  {
			array_push($errors, "The two password do not match");
		}
		if (mysqli_num_rows($result) == 1){
			array_push($errors, "College already exists");
		}
		//if there are no errors, save user to the database
		if (count($errors) == 0) {
			$password = md5($password_1); // encrypt password before storing in database (security)
			$sql = "INSERT INTO collegesignup (collegename, username, email,  collegeid, password)
							VALUES ('$collegename', '$username', '$email', '$collegeid', '$password')";
			mysqli_query($db, $sql);			
			header('location:success.php'); //redirect to home page
		}

	}

				//login buttons////


//if login-student button is clicked
  if (isset($_POST['login-student'])) {
 		
   	    $username = mysqli_real_escape_string($db, $_POST['username']);
    	$password = mysqli_real_escape_string($db, $_POST['password']);

    	//echo $username." <> ".$password; exit;
   
    //ensure that form fields are filled properly
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
    	
      $password = md5($password); //encrypt password before comparing with that from database
      $query = "SELECT * FROM studentsignup WHERE username='$username' AND password='$password'";
      //echo $query; exit();
      $result = mysqli_query($db, $query);
     

      if (mysqli_num_rows($result) == 1) {
      		//log user in
      	$_SESSION['student_name'] = $username;
      	
      	header('location: /student/student-login.php');
      	 
      
      }else {
      	array_push($errors, "wrong username/password combination");
      	}
  			
  		}
	}

	//if login-teacher button is clicked
  if (isset($_POST['login-admin'])) {
 		
   	    $username = mysqli_real_escape_string($db, $_POST['username']);
    	$password = mysqli_real_escape_string($db, $_POST['password']);

      $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
      $result = mysqli_query($db, $query);
   
      
      if (mysqli_num_rows($result) == 1) {
      	$_SESSION['admin_name'] = $username;
      	
      	header('location: /admin/admin.php');
      	 
      	 }else {

     		header('location: index.php');
      		}
  			
  		}
	
//if login-college button is clicked
  if (isset($_POST['login-college'])) {
 		
   	    $username = mysqli_real_escape_string($db, $_POST['username']);
    	$password = mysqli_real_escape_string($db, $_POST['password']);

    	//echo $username." <> ".$password; exit;
   
    //ensure that form fields are filled properly
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
    	
      $password = md5($password); //encrypt password before comparing with that from database
      $query = "SELECT * FROM collegesignup WHERE username='$username' AND password='$password'";
      //echo $query; exit();
      $result = mysqli_query($db, $query);
     

      if (mysqli_num_rows($result) == 1) {
      		//log user in
      	$_SESSION['college_name'] = $username;
      	
      	header('location: /college/college.php');
      	 
      
      }else {
      	array_push($errors, "wrong username/password combination");
      	}
  			
  		}
	}


//if login-teacher button is clicked
  if (isset($_POST['login-teacher'])) {
 		
   	    $username = mysqli_real_escape_string($db, $_POST['username']);
    	$password = mysqli_real_escape_string($db, $_POST['password']);

    	//echo $username." <> ".$password; exit;
   
    //ensure that form fields are filled properly
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
    	
      $password = md5($password); //encrypt password before comparing with that from database
      $query = "SELECT * FROM teachersignup WHERE username='$username' AND password='$password'";
      //echo $query; exit();
      $result = mysqli_query($db, $query);
     

      if (mysqli_num_rows($result) == 1) {
      		//log user in
      	$_SESSION['teacher_name'] = $username;
      	
      	header('location: /semester/semester.php');
      	 
      
      }else {
      	array_push($errors, "wrong username/password combination");
      	}
  			
  		}
	}



	//if reset password pressed

	if (isset($_POST['reset_password'])) {


 		$password = 12345;
 		echo $password;	
   	  $email = mysqli_real_escape_string($db, $_POST['emailid']);	
      $query = "SELECT * FROM studentsignup WHERE email='$email'";
      $result = mysqli_query($db, $query);
      if (mysqli_num_rows($result) == 1) {
      		
    
      	
      	header('location: /semester/semester.php');
      	 
      
      }else {
      	array_push($errors, "wrong username/password combination");
      	}
  			
  		}
	



	//logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}
	

?>

