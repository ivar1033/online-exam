 <?php include('../server.php'); ?>
<?php


		$db = mysqli_connect();
		////// SEMESTER - 1 //////////
 
 		$mca_101 = "MCA 101 - Computer Organisation & Architecture";
		
		if (isset($_POST['sem_1'])){

			$sql = "SELECT sem_1 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_1']== $mca_101){
                  header('location:/answer/mca_101.php');  
                }

				
			}

			$mca_102 = "MCA 102 - Bussiness Systems & Application";
		
		if (isset($_POST['sem_1'])){

			$sql = "SELECT sem_1 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_1']== $mca_102){
                  header('location:/answer/mca_102.php');  
                }

				
			}

			$mca_103 = "MCA 103 - Computer Programming with C";
		
		if (isset($_POST['sem_1'])){

			$sql = "SELECT sem_1 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_1']== $mca_103){
                  header('location:/answer/mca_103.php');  
                }

				
			}

			$mm_101 = "MM 101 - Discrete Mathematical Structure";
		
		if (isset($_POST['sem_1'])){

			$sql = "SELECT sem_1 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_1']== $mm_101){
                  header('location:/answer/mm_101.php');  
                }

				
			}

			$hu_101 = "HU 101 - Bussiness English  Communication";
		
		if (isset($_POST['sem_1'])){

			$sql = "SELECT sem_1 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_1']== $hu_101){
                  header('location:/answer/hu_101.php');  
                }

				
			}
















		



		////////// SEMESTER - 2 ////////////////

			$mca_201 = "MCA 201 - Data Communication & Networks";
		
		if (isset($_POST['sem_2'])){

			$sql = "SELECT sem_2 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_2']== $mca_201){
                  header('location:/answer/mca_201.php');  
                }

				
			}

			$mca_202 = "MCA 202 - Information Systems Analysis & Design";
		
		if (isset($_POST['sem_2'])){

			$sql = "SELECT sem_2 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_2']== $mca_202){
                  header('location:/answer/mca_202.php');  
                }

				
			}

			$mca_203 = "MCA 203 - Data Structure with C";
		
		if (isset($_POST['sem_2'])){

			$sql = "SELECT sem_2 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_2']== $mca_203){
                  header('location:/answer/mca_203.php');  
                }

				
			}

			$mca_204 = "MCA 204 - Database Management System I";
		
		if (isset($_POST['sem_2'])){

			$sql = "SELECT sem_2 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_2']== $mca_204){
                  header('location:/answer/mca_204.php');  
                }

				
			}


			$mca_205 = "MCA 205 - Object-Oriented Programming with C++";
		
		if (isset($_POST['sem_2'])){

			$sql = "SELECT sem_2 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_2']== $mca_205){
                  header('location:/answer/mca_205.php');  
                }

				
			}


















			//////////// SEMESTER - 3 ///////////////////

				$mca_301 = "MCA 301 - Operating Systems & Systems software";
		
		if (isset($_POST['sem_3'])){

			$sql = "SELECT sem_3 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_3']== $mca_301){
                  header('location:/answer/mca_301.php');  
                }

				
			}

			$mca_302 = "MCA 302 - Unix & Shell Programming";
		
		if (isset($_POST['sem_3'])){

			$sql = "SELECT sem_3 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_3']== $mca_302){
                  header('location:/answer/mca_302.php');  
                }

				
			}

			$mca_303 = "MCA 303 - Intelligent Systems";
		
		if (isset($_POST['sem_3'])){

			$sql = "SELECT sem_3 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_3']== $mca_303){
                  header('location:/answer/mca_303.php');  
                }

				
			}

			$mm_301 = "MM 301 - Statistics & Numerical Techniques";
		
		if (isset($_POST['sem_3'])){

			$sql = "SELECT sem_3 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_3']== $mm_301){
                  header('location:/answer/mm_301.php');  
                }

				
			}


			$mba_301 = "MBA 301 - Bussiness Management";
		
		if (isset($_POST['sem_3'])){

			$sql = "SELECT sem_3 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_3']== $mba_301){
                  header('location:/answer/mba_301.php');  
                }

				
			}

			$mba_302 = "MBA 302 - Management Accounting";
		
		if (isset($_POST['sem_3'])){

			$sql = "SELECT sem_3 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_3']== $mba_302){
                  header('location:/answer/mba_302.php');  
                }

				
			}















			



			//////////// SEMESTER - 4 ///////////////////

				$mca_401 = "MCA 401 - Software Engineering & TQM";
		
		if (isset($_POST['sem_4'])){

			$sql = "SELECT sem_4 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_4']== $mca_401){
                  header('location:/answer/mca_401.php');  
                }

				
			}

			$mca_402 = "MCA 402 - Graphics & Multimedia";
		
		if (isset($_POST['sem_4'])){

			$sql = "SELECT sem_4 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_4']== $mca_402){
                  header('location:/answer/mca_402.php');  
                }

				
			}

			$mca_403 = "MCA 403 - Database Management System II";
		
		if (isset($_POST['sem_4'])){

			$sql = "SELECT sem_4 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_4']== $mca_403){
                  header('location:/answer/mca_403.php');  
                }

				
			}

			$mm_401 = "MM 401 - Operation Research & Optimisation Techniques";
		
		if (isset($_POST['sem_4'])){

			$sql = "SELECT sem_4 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_4']== $mm_401){
                  header('location:/answer/mm_401.php');  
                }

				
			}


			$hu_401 = "HU 401 - Environment & Ecology";
		
		if (isset($_POST['sem_4'])){

			$sql = "SELECT sem_4 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_4']== $hu_401){
                  header('location:/answer/hu_401.php');  
                }

				
			}

















			



			//////////// SEMESTER - 5 ///////////////////

				$mca_e501a = "MCA E501A - Distributed Database Management";
		
		if (isset($_POST['sem_5'])){

			$sql = "SELECT sem_5 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_5']== $mca_e501a){
                  header('location:/answer/mca_e501a.php');  
                }

				
			}

			$mca_e502b = "MCA E502B - Windows Programming With VB";
		
		if (isset($_POST['sem_5'])){

			$sql = "SELECT sem_5 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_5']== $mca_e502b){
                  header('location:/answer/mca_e502b.php');  
                }

				
			}

			$mca_e503b = "MCA E503B - Object Oriented Programming With Java";
		
		if (isset($_POST['sem_5'])){

			$sql = "SELECT sem_5 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_5']== $mca_e503b){
                  header('location:/answer/mca_e503b.php');  
                }

				
			}

			$mca_e504b = "MCA E504B - E-Commerce";
		
		if (isset($_POST['sem_5'])){

			$sql = "SELECT sem_5 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_5']== $mca_e504b){
                  header('location:/answer/mca_e504b.php');  
                }

				
			}


			$hu_501 = "HU 501 - Values & Ethics Of Profession";
		
		if (isset($_POST['sem_5'])){

			$sql = "SELECT sem_5 FROM examset";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();
			

			if($row['sem_5']== $hu_501){
                  header('location:/answer/hu_501.php');  
                }

				
			}




////////// exam entry chreck /////////
			if (isset($_POST['exam'])) {

				$usr = $_SESSION['student_name'];

				$sql = "SELECT * FROM result WHERE username='$usr'";
				$result = $db->query($sql);

				

				 if ($result->num_rows == 0){

				 	
					header('location:/student/exam.php');
			}



			}





			///////////////////// FOR RESULT //////////////////////

			$usr = $_SESSION['student_name'];

			$sql = "SELECT * FROM studentsignup WHERE username = '$usr'";
			$result = mysqli_query($db, $sql);
			$row = $result->fetch_assoc();
			$stu_name= $row['name'];
			$stu_name = strtoupper($stu_name);
			$name = $row['username'];

			$sql = "SELECT * FROM result where username = '$name'";
			$result = mysqli_query($db, $sql);
			$row = $result->fetch_assoc();

			$semester = $row['semester'];
			$subject = $row['subject'];
			$correct = $row['correct'];
			


		

		

?>
