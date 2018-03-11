<?php include('../server.php'); 

if (empty($_SESSION['teacher_name'])) {
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
    <title>SEMESTER</title>
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
                    <li><a href="#header">HOME</a></li>
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

                        <h1 data-scroll-reveal="enter from the bottom after 0.2s">
                        </h1>

                        <h2 data-scroll-reveal="enter from the bottom after 0.4s">THE MOST WONDERFUL PART OF BEING A TEACHER IS TO THINK THAT MANY YEARS DOWN THE LINE, THERE WILL BE SOMEONE, SOMEWHERE OUT THERE, THINKING ABOUT HOW LUCKY THEY WERE TO BE TAUGHT BY A TEACHER AS WONDERFUL AS YOURSELF

                        </h2>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--HEADER SECTION END  -->
    <section id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                    <h2><strong>SELECT SEMESTER</strong></h2>
                    

                </div>
            </div>
            <div class="row text-center pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s">
                <div class="col-md-3">
                    
                    <a href="/semester/semester-1.php"><h4><strong> <button class="button button1">SEMESTER 1</button> </strong></h4></a>
                   
                </div>
                <div class="col-md-3">
   
                    <a href="/semester/semester-2.php"><h4><strong><button class="button button2"> SEMESTER 2</button> </strong></h4></a>
                    
                </div>
                <div class="col-md-3">
          
                    <a href="/semester/semester-3.php"><h4><strong><button class="button button3">SEMESTER 3</button>  </strong></h4></a>
                    
                </div>
                <div class="col-md-3">
           
                    <a href="/semester/semester-4.php"><h4><strong><button class="button button4">SEMESTER 4</button> </strong></h4></a>
                    
                </div>
            </div>
            <div class="row text-center" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="col-md-3">
                    
                    <a href="/semester/semester-5.php"><h4><strong><button class="button button5">SEMESTER 5</button> </strong></h4></a>
                    
                </div>
                              
            </div>
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
