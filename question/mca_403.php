<?php include('../server.php'); 

if (empty($_SESSION['teacher_name'])) {
    header('location: ../index.php');
}

?>
<?php include('server.php'); ?>
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
    <title>QUESTION PAPER</title>
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
                    <li><a href="/semester/semester-4.php">HOME</a></li>
                    <li><a href="" style="color: yellow;">WELCOME ( <?php echo $_SESSION['teacher_name']; ?> )</a></li>
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

                        
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--HEADER SECTION END  -->
    <section id="services">
        
            <div class="row text-center">
                <form  method="post">

                
                    <h2><strong>INSERT QUESTION</strong></h2>
                    <div class="alert alert-danger" role="alert">
                    <strong>Note!</strong> Only 10 questions can be inserted.
                    </div>
                    <h2><strong>MCA-403</strong></h2>
                     <textarea rows="4" cols="50" name="question"></textarea>
                     <br>
                     <h2><strong>ANSWERS</strong></h2>
                    OPTION A:<br>
                                <input type="text" name="A" placeholder="OPTION A">
                                <br><br>
                    OPTION B:<br>
                                <input type="text" name="B" placeholder="OPTION B">
                            <br><br>
                    OPTION C:<br>
                                <input type="text" name="C" placeholder="OPTION C">
                            <br><br>
                    OPTION D:<br>
                                <input type="text" name="D" placeholder="OPTION D">
                            <br><br>

                            <h2><strong>CORRECT ANSWER</strong></h2>
                    <select name="correct">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select>
                    <br><br>
                    <button class="button button1" type="submit" name="mca_403">SUBMIT</button>
                    <br><br>
                    <button class="button button3" type="submit" name="rmca_403">Delete Question Bank</button>
                    
</form>

                </div>

        </div>
<br><br>
        <div align="center">
<h2><strong>QUESTION PAPER</strong></h2>
            <?php

                $sql = "SELECT  question, A, B, C, D, correct  FROM mca_403";
                $result = $db->query($sql);
                $q = 1;
                if ($result->num_rows > 0) {
                    echo "<table class='w3-table-all w3-card-4 w3-large'><tr class='w3-yellow'><th>Q.NO</th><th>QUESTION</th><th>OPTION-A </th><th>OPTION-B</th><th>OPTION-C</th><th>OPTION-D</th><th>CORRECT ANSWER</th></tr>";
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $q . "</td><td>" . $row["question"] . "</td><td>" . $row["A"] . " </td><td>" . $row["B"] . "</td><td>" . $row["C"] . "</td><td>" . $row["D"] . "</td><td>" . $row["correct"] . "</td></tr>";
                        $q++;
                    }
                    echo "</table>";
                } else {
                    echo "No Questions in Database";
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
