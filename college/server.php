<?php
	
	


	// connect to database
$db = mysqli_connect();

	if (isset($_POST['submit_student'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $roll = mysqli_real_escape_string($db, $_POST['roll']);
    $semester = mysqli_real_escape_string($db, $_POST['semester']);


    $sql = "INSERT INTO eligiblestudent (name, roll, semester)
							VALUES ('$name', '$roll', '$semester')";
    mysqli_query($db, $sql);

    header('location:student.php'); //redirect to home page
	}


	if (isset($_POST['submit_teacher'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    


    $sql = "INSERT INTO eligibleteacher (name, email)
							VALUES ('$name', '$email' )";
    mysqli_query($db, $sql);

    header('location:teacher.php'); //redirect to home page
	}

	if (isset($_POST['reset_student'])) {
    $sql = "DELETE FROM eligiblestudent";
    mysqli_query($db, $sql);
}
  
	if (isset($_POST['reset_teacher'])) {
    $sql = "DELETE FROM eligibleteacher";
    mysqli_query($db, $sql);
}
   

?>