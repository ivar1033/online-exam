
<?php include ('server.php'); ?>
<?php include('../server.php'); 

if (empty($_SESSION['student_name'])) {
    header('location: ../index.php');
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
    </style>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title><?php echo $_SESSION['student_name']; ?></title>
    <!-- BOOTSTRAP CORE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->
    
    <!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
    <link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/button.css" rel="stylesheet" />
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
                    <li><a href="/student/student-login.php">HOME</a></li>
                   <li><a href="" style="color: yellow;">WELCOME ( <?php echo $_SESSION['student_name']; ?> )</a></li>
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

                        <h2 data-scroll-reveal="enter from the bottom after 0.4s">THE EASIEST WAY TO DO WELL IN YOUR EXAMS IS TO TREAT THEM LIKE A GIANT PUNCHING BAG. USE ALL THE STRENGTH OF YOUR MEMORY AND PUNCH THE DAYLIGHT OF YOUR TESTS. ALL THE VERY BEST. 

                        </h2>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--HEADER SECTION END  -->

  <form method="POST">

        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>SUBJECT</strong></h2>
                </div>
            </div>


 <?php

$usr = $_SESSION['student_name'];

$sem1 = "Semester-1";

$sem2 = "Semester-2";

$sem3 = "Semester-3";

$sem4 = "Semester-4";

$sem5 = "Semester-5";

$sql = "SELECT * FROM studentsignup WHERE username='$usr'";
$result = $db->query($sql);

$row = $result->fetch_assoc();
   // output data of each row
    if ($row["semester"] == $sem1) {
        ?>

        <?php

        $sql = "SELECT sem_1 FROM examset"; 
        $result = $db->query($sql);
        $row1 = $result->fetch_assoc();

        ?>
        <center><button class="button button2" type="submit" name="sem_1"><?php echo $row1["sem_1"] ?></button></center>
        <?php
    }
    if ($row["semester"] == $sem2) {
        ?>

         <?php

        $sql = "SELECT sem_2 FROM examset"; 
        $result = $db->query($sql);
        $row2 = $result->fetch_assoc();

        ?>

        <center><button class="button button2" type="submit" name="sem_2"><?php echo $row2["sem_2"] ?></button></center>
        <?php
    }
    if ($row["semester"] == $sem3) {
        ?>

         <?php

        $sql = "SELECT sem_3 FROM examset"; 
        $result = $db->query($sql);
        $row3 = $result->fetch_assoc();

        ?>

        <center><button class="button button2" type="submit" name="sem_3"><?php echo $row3["sem_3"] ?></button></center>
        <?php
    }
    if ($row["semester"] == $sem4) {
        ?>

         <?php

        $sql = "SELECT sem_4 FROM examset"; 
        $result = $db->query($sql);
        $row4 = $result->fetch_assoc();

        ?>

        <center><button class="button button2" type="submit" name="sem_4"><?php echo $row4["sem_4"] ?></button></center>
        <?php
    }
    if ($row["semester"] == $sem5) {
        ?>

         <?php

        $sql = "SELECT sem_5 FROM examset"; 
        $result = $db->query($sql);
        $row5 = $result->fetch_assoc();

        ?>

        <center><button class="button button2" type="submit" name="sem_5"><?php echo $row5["sem_5"] ?></button></center>
        <?php
    }


$db->close();

?>     
        

             </div>
        </div>
            

     </form>      
           



    </section>
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
