<?php include('server.php');?>
<?php include('../server.php'); 

if (empty($_SESSION['admin_name'])) {
    header('location: ../index.php');
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
      table, th, td {
    border: 1px solid black;
}
th, td {
    padding: 15px;
}
    </style>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Semester</title>
    <!-- BOOTSTRAP CORE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->
    
    <!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
    <link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/button.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="navbar navbar-default navbar-fixed-top scroll-me">
        <!-- pass scroll-me class above a tags to starts scrolling -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                   
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/admin/admin.php">HOME</a></li>
                     <li><a href="" style="color: yellow;">WELCOME ( <?php echo $_SESSION['admin_name']; ?> )</a></li>
                     <li><a href="../index.php?logout='1'" style="color: white;">Logout</a></li>
                    
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR END  -->
    <div id="header">
        <div class="overlay">
            <div class="container">
                <div class="row scroll-me">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 text-center ">

                        <h1 data-scroll-reveal="enter from the bottom after 0.2s">
                        </h1>

                        <h4 data-scroll-reveal="enter from the bottom after 0.4s">

                        </h4>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--HEADER SECTION END  -->
    
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                  
                    <br><br>

                    <center><h2><strong>SET SUBJECTS FOR EXAM</strong></h2></center>
                    

                </div>
            </div>
            <div class="row text-center pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                 <form method="post">
                    
                  <center><h4><strong>SEMESTER-1  <select name = "sem_1">
                          <option value="-1">Select Subject</option>
                          <option value="MCA 101 - Computer Organisation & Architecture">MCA 101 - Computer Organisation & Architecture</option>
                          <option value="MCA 102 - Bussiness Systems & Application">MCA 102 - Bussiness Systems & Application</option>
                          <option value="MCA 103 - Computer Programming with C">MCA 103 - Computer Programming with C</option>
                          <option value="MM 101 - Discrete Mathematical Structure">MM 101 - Discrete Mathematical Structure </option>
                          <option value="HU 101 - Bussiness English  Communication">HU 101 - Bussiness English  Communication</option>
                           
                </select></strong></h4></center>

                <button class="button button2" type="submit" name="submit_sem1">SET</button>
             
               
                
                   
                
                <br><br>
                
   
                    <center><h4><strong>SEMESTER-2  <select name = "sem_2">
                          <option value="-1">Select Subject</option>
                          <option value="MCA 201 - Data Communication & Networks">MCA 201 - Data Communication & Networks</option>
                          <option value="MCA 202 - Information Systems Analysis & Design">MCA 202  Information Systems Analysis & Design</option>
                          <option value="MCA 203 - Data Structure with C">MCA 203 - Data Structure with C</option>
                          <option value="MCA 204 - Database Management System I">MCA 204 - Database Management System I</option>
                          <option value="MCA 205 - Object-Oriented Programming with C++">MCA 205 - Object-Oriented Programming with C++</option>
                </select> </strong></h4></center>

                <button class="button button2" type="submit" name="submit_sem2">SET</button>
             
                
                    
                
                
                <br><br>
          
                    <center><h4><strong>SEMESTER-3  <select name = "sem_3">
                          <option value="-1">Select Subject</option>
                          <option value="MCA 301 - Operating Systems & Systems software">MCA 301 - Operating Systems & Systems software</option>
                          <option value="MCA 302 - Unix & Shell Programming">MCA 302 - Unix & Shell Programming</option>
                          <option value="MCA 303 - Intelligent Systems">MCA 303 - Intelligent Systems</option>
                          <option value="MM 301 - Statistics & Numerical Techniques">MM 301 - Statistics & Numerical Techniques</option>
                          <option value="MBA 301 - Bussiness Management">MBA 301 - Bussiness Management</option>
                          <option value="MBA 302 - Management Accounting">MBA 302 - Management Accounting</option>
                </select> </strong></h4></center>

                <button class="button button2" type="submit" name="submit_sem3">SET</button>
             
               
                
                <br><br>
                    <center><h4><strong>SEMESTER-4  <select name = "sem_4">
                          <option value="-1">Select Subject</option>
                          <option value="MCA 401 - Software Engineering & TQM">MCA 401 - Software Engineering & TQM</option>
                          <option value="MCA 402 - Graphics & Multimedia">MCA 402 - Graphics & Multimedia</option>
                          <option value="MCA 403 - Database Management System II">MCA 403 - Database Management System II</option>
                          <option value="MM 401 - Operation Research & Optimisation Techniques">MM 401 - Operation Research & Optimisation Techniques</option>
                          <option value="HU 401 - Environment & Ecology">HU 401 - Environment & Ecology</option>

                </select> </strong></h4></center>

                 <button class="button button2" type="submit" name="submit_sem4">SET</button>
             
                

                <br><br>
                   <center><h4><strong>SEMESTER-5  <select name = "sem_5">
                          <option value="-1">Select Subject</option>
                          <option value="MCA E501A - Distributed Database Management">MCA E501A - Distributed Database Management</option>
                          <option value="MCA E502B - Windows Programming With VB">MCA E502B - Windows Programming With VB</option>
                          <option value="MCA E503B - Object Oriented Programming With Java">MCA E503B - Object Oriented Programming With Java</option>
                          <option value="MCA E504B - E-Commerce">MCA E504B - E-Commerce</option>
                          <option value="HU 501 - Values & Ethics Of Profession">HU 501 - Values & Ethics Of Profession</option>

                </select> </strong></h4></center>

                <button class="button button2" type="submit" name="submit_sem5">SET</button>
             
               
                    
                <br><br>
               
              

                </form>


                <br><br>

        <div align="center">
<h2><strong>EXAM SET</strong></h2>
<br>
                    <?php

$sql = "SELECT  sem_1,sem_2,sem_3,sem_4,sem_5 FROM examset";
$result = $db->query($sql);
$q = 1;
if ($result->num_rows > 0) {
    echo "<table class='w3-table-all w3-card-4 w3-large'><tr class='w3-yellow'><th>SEMESTER-1</th><th>SEMESTER-2</th><th>SEMESTER-3</th><th>SEMESTER-4</th><th>SEMESTER-5</th></tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>"  . $row["sem_1"] . "</td><td>" . $row["sem_2"] . " </td><td>" . $row["sem_3"] . "</td><td>" . $row["sem_4"] ."</td><td>" . $row["sem_5"] ."</td></tr>";
        $q++;
    }
    echo "</table>";
} else {
    echo "No Exam Set in Database";
}

$db->close();

?>

            </div>
            
        </div>
 

    <!-- SERVICES SECTION END  -->
   
    
   
    <!--FOOTER SECTION END  -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- SCROLLING SCRIPTS PLUGIN  -->
    <script src="assets/js/jquery.easing.min.js"></script>
 
     <!-- SCROLL ANIMATIONS  -->
    <script src="assets/js/scrollReveal.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
