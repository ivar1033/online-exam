<?php include('server.php'); ?>
<?php include('../server.php'); 

if (empty($_SESSION['college_name'])) {
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
    <title><?php echo $_SESSION['college_name']; ?></title>
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
                    <li><a href="/college/college.php">HOME</a></li>
                   <li><a href="" style="color: yellow;">WELCOME ( <?php echo $_SESSION['college_name']; ?> )</a></li>
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

                        <h2 data-scroll-reveal="enter from the bottom after 0.4s">

                        </h2>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--HEADER SECTION END  -->
    <section id="services">
        
            <div class="row text-center">
                <form  method="post">
                    
                
                    <h2><strong>INSERT STUDENTS DETAILS</strong></h2>
                    
                     
                    NAME:<br>
                                <input type="text" name="name" placeholder="Name">
                                <br><br>
                    UNIVERSITY ROLL NUMBER<br>
                                <input type="text" name="roll" placeholder="Roll">
                            <br><br>

                            <h2><strong>SEMESTER</strong></h2>
                    <select name="semester">
                            <option value="-1"></option>
                            <option value="Semester-1">SEMESTER-1</option>
                            <option value="Semester-2">SEMESTER-2</option>
                            <option value="Semester-3">SEMESTER-3</option>
                            <option value="Semester-4">SEMESTER-4</option>
                            <option value="Semester-5">SEMESTER-5</option>
                    </select>
                    <br><br>
                    <button class="button button1" type="submit" name="submit_student">SUBMIT</button>
                    <br><br>
                    <button class="button button3" type="submit" name="reset_student">RESET</button>
</form>

                </div>

        </div>
<br><br>
        <div align="center">
        <h2><strong>STUDENT LIST FOR EXAM</strong></h2>
            <?php

                $sql = "SELECT  name, roll, semester  FROM eligiblestudent";
                $result = $db->query($sql);
                $q = 1;
                if ($result->num_rows > 0) {
                    echo "<table class='w3-table-all w3-card-4 w3-large'><tr class='w3-yellow'><th>SL.NO</th><th>ROLL</th><th>NAME</th><th>SEMESTER</th></tr>";
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $q . "</td><td>" . $row["roll"] . " </td><td>" . $row["name"] . "</td><td>" . $row["semester"] . "</td></tr>";
                        $q++;
                    }
                    echo "</table>";
                } else {
                    echo "No Students in Database";
                }

                $db->close();

            ?>
            
        </div>
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
