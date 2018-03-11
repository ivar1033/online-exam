<
<?php include('../server.php'); 

if (empty($_SESSION['student_name'])) {
    header('location: ../index.php');
}

?>
<?php include ('server.php'); ?>
<?php include('submit.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    </style>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>EXAM</title>
    <!-- BOOTSTRAP CORE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- IONICON STYLE SHEET FOR BEAUTIFUL ICONS -->

    <!-- STYLE FOR OPENING IMAGE IN POPUP USING FANCYBOX-->
    <link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/button.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
               
            </div>
            <div class="navbar-collapse collapse" id="quiz">
              <script type="text/javascript">
                  var total_seconds = 30*10;
                  var c_minutes = parseInt(total_seconds/60);
                  var c_seconds = parseInt(total_seconds%60);
                  function CheckTime(){
                    document.getElementById("quiz").innerHTML='Time Left: ' + c_minutes + ' minutes ' + c_seconds + ' seconds' ;
                    if(total_seconds <=0){
                      document.getElementById("submit").click();
                      } else{
                        total_seconds = total_seconds -1;
                        c_minutes = parseInt(total_seconds/60);
                        c_seconds = parseInt(total_seconds%60);
                        setTimeout("CheckTime()",1000);

                      }}
                      setTimeout("CheckTime()",1000);
                      </script>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="" style="color: yellow;">WELCOME ( <?php echo $_SESSION['student_name']; ?> )</a></li>
                     <li><a href="../index.php?logout='1'" style="color: white;">Logout</a></li>

                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR END  -->

 <br><br>
  <br><br>
        <div align="center">
        <h2><strong>MBA_302</strong></h2>
        </div>
<form method="post">
<div class="container">
  

  <table class="table table-bordered" >
    <thead>
      <tr>
        
        <th>Q1) <?php echo $question_mba302[0]; ?></th>
      </tr>
    </thead>
    <tbody >
      <tr>
        <td><b>A)</b>  <?php echo $answer_mba302_1[0]; ?></td>
        </tr>
      <tr>
        <td><b>B)</b>  <?php echo $answer_mba302_2[0]; ?></td>
        </tr>        
      <tr>
       <td><b>C)</b>  <?php echo $answer_mba302_3[0]; ?></td>
        </tr>
       <tr>
        <td><b>D)</b>  <?php echo $answer_mba302_4[0]; ?></td>
        </tr>
        <tr>      
                   <td>   <b>CORRECT ANSWER</b>  <select name="ans_1">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select></td>
        </tr>
    </tbody>
  </table>
  <br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Q2) <?php echo $question_mba302[1]; ?></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td><b>A)</b>  <?php echo $answer_mba302_1[1]; ?></td>
        </tr>
      <tr>
        <td><b>B)</b>  <?php echo $answer_mba302_2[1]; ?></td>
        </tr>        
      <tr>
       <td><b>C)</b>  <?php echo $answer_mba302_3[1]; ?></td>
        </tr>
       <tr>
        <td><b>D)</b>  <?php echo $answer_mba302_4[1]; ?></td>
        </tr>
          <tr>      
                   <td>   <b>CORRECT ANSWER</b>  <select name="ans_2">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select></td>
        </tr>
    </tbody>
  </table>
  <br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Q3) <?php echo $question_mba302[2]; ?></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td><b>A)</b>  <?php echo $answer_mba302_1[2]; ?></td>
        </tr>
      <tr>
        <td><b>B)</b>  <?php echo $answer_mba302_2[2]; ?></td>
        </tr>        
      <tr>
       <td><b>C)</b>  <?php echo $answer_mba302_3[2]; ?></td>
        </tr>
       <tr>
        <td><b>D)</b>  <?php echo $answer_mba302_4[2]; ?></td>
        </tr>
<tr>      
                   <td>   <b>CORRECT ANSWER</b>  <select name="ans_3">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select></td>
        </tr>
    </tbody>
  </table><br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Q4) <?php echo $question_mba302[3]; ?></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td><b>A)</b>  <?php echo $answer_mba302_1[3]; ?></td>
        </tr>
      <tr>
        <td><b>B)</b>  <?php echo $answer_mba302_2[3]; ?></td>
        </tr>        
      <tr>
       <td><b>C)</b>  <?php echo $answer_mba302_3[3]; ?></td>
        </tr>
       <tr>
        <td><b>D)</b>  <?php echo $answer_mba302_4[3]; ?></td>
        </tr>
<tr>      
                   <td>   <b>CORRECT ANSWER</b>  <select name="ans_4">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select></td>
        </tr>
    </tbody>
  </table><br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Q5) <?php echo $question_mba302[4]; ?></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td><b>A)</b>  <?php echo $answer_mba302_1[4]; ?></td>
        </tr>
      <tr>
        <td><b>B)</b>  <?php echo $answer_mba302_2[4]; ?></td>
        </tr>        
      <tr>
       <td><b>C)</b>  <?php echo $answer_mba302_3[4]; ?></td>
        </tr>
       <tr>
        <td><b>D)</b>  <?php echo $answer_mba302_4[4]; ?></td>
        </tr>
<tr>      
                   <td>   <b>CORRECT ANSWER</b>  <select name="ans_5">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select></td>
        </tr>
    </tbody>
  </table><br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Q6) <?php echo $question_mba302[5]; ?></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td><b>A)</b>  <?php echo $answer_mba302_1[5]; ?></td>
        </tr>
      <tr>
        <td><b>B)</b>  <?php echo $answer_mba302_2[5]; ?></td>
        </tr>        
      <tr>
       <td><b>C)</b>  <?php echo $answer_mba302_3[5]; ?></td>
        </tr>
       <tr>
        <td><b>D)</b>  <?php echo $answer_mba302_4[5]; ?></td>
        </tr>
<tr>      
                   <td>   <b>CORRECT ANSWER</b>  <select name="ans_6">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select></td>
        </tr>
    </tbody>
  </table><br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Q7) <?php echo $question_mba302[6]; ?></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td><b>A)</b>  <?php echo $answer_mba302_1[6]; ?></td>
        </tr>
      <tr>
        <td><b>B)</b>  <?php echo $answer_mba302_2[6]; ?></td>
        </tr>        
      <tr>
       <td><b>C)</b>  <?php echo $answer_mba302_3[6]; ?></td>
        </tr>
       <tr>
        <td><b>D)</b>  <?php echo $answer_mba302_4[6]; ?></td>
        </tr>
<tr>      
                   <td>   <b>CORRECT ANSWER</b>  <select name="ans_7">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select></td>
        </tr>
    </tbody>
  </table><br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Q8) <?php echo $question_mba302[7]; ?></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td><b>A)</b>  <?php echo $answer_mba302_1[7]; ?></td>
        </tr>
      <tr>
        <td><b>B)</b>  <?php echo $answer_mba302_2[7]; ?></td>
        </tr>        
      <tr>
       <td><b>C)</b>  <?php echo $answer_mba302_3[7]; ?></td>
        </tr>
       <tr>
        <td><b>D)</b>  <?php echo $answer_mba302_4[7]; ?></td>
        </tr>
<tr>      
                   <td>   <b>CORRECT ANSWER</b>  <select name="ans_8">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select></td>
        </tr>
    </tbody>
  </table><br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Q9) <?php echo $question_mba302[8]; ?></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td><b>A)</b>  <?php echo $answer_mba302_1[8]; ?></td>
        </tr>
      <tr>
        <td><b>B)</b>  <?php echo $answer_mba302_2[8]; ?></td>
        </tr>        
      <tr>
       <td><b>C)</b>  <?php echo $answer_mba302_3[8]; ?></td>
        </tr>
       <tr>
        <td><b>D)</b>  <?php echo $answer_mba302_4[8]; ?></td>
        </tr>
<tr>      
                   <td>   <b>CORRECT ANSWER</b>  <select name="ans_9">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select></td>
        </tr>
    </tbody>
  </table><br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Q10) <?php echo $question_mba302[9]; ?></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td><b>A)</b>  <?php echo $answer_mba302_1[9]; ?></td>
        </tr>
      <tr>
        <td><b>B)</b>  <?php echo $answer_mba302_2[9]; ?></td>
        </tr>        
      <tr>
       <td><b>C)</b>  <?php echo $answer_mba302_3[9]; ?></td>
        </tr>
       <tr>
        <td><b>D)</b>  <?php echo $answer_mba302_4[9]; ?></td>
        </tr>
<tr>      
                   <td>   <b>CORRECT ANSWER</b>  <select name="ans_10">
                            <option value="-1"></option>
                            <option value="A">OPTION A</option>
                            <option value="B">OPTION B</option>
                            <option value="C">OPTION C</option>
                            <option value="D">OPTION D</option>
                    </select></td>
        </tr>
    </tbody>
  </table><br><br>
    
</div> 
<center><button class="button button1" id="submit" type="submit" name="mba_302">SUBMIT</button></center>
<br><br>

</form>



   
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
