<?php
 
$db = mysqli_connect();
///////// semester 1 //////////////////////////
if (isset($_POST['mca_101'])) {

                    $subject = "MCA 101 - Computer Organisation & Architecture";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
             
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_101";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_101[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_101[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                    $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }



                    if (isset($_POST['mca_102'])) {

                    $subject = "MCA 102 - Bussiness Systems & Application";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
           
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_102";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_102[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_102[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }

                    $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }



                    if (isset($_POST['mca_103'])) {

                    $subject = "MCA 103 - Computer Programming with C";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
              
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_103";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_103[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_103[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                         $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }
                       




                    if (isset($_POST['mm_101'])) {

                    $subject = "MM 101 - Discrete Mathematical Structure";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mm_101";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mm_101[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mm_101[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');
                    }




                     if (isset($_POST['hu_101'])) {

                    $subject = "HU 101 - Bussiness English  Communication";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM hu_101";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_hu_101[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_hu_101[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                           $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }














                    ///////// semester 2 //////////////////////////

                    if (isset($_POST['mca_201'])) {

                    $subject = "MCA 201 - Data Communication & Networks";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_201";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_201[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_201[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }

                    $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }



                    if (isset($_POST['mca_202'])) {

                    $subject = "MCA 202 - Information Syatems Analysis & Design";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_202";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_202[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_202[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }

                    $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }



                    if (isset($_POST['mca_203'])) {

                    $subject = "MCA 203 - Data Structure with C";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_203";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_203[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_203[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }
                       




                    if (isset($_POST['mca_204'])) {

                    $subject = "MCA 204 - Database Management System I";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_204";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_204[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_204[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }




                     if (isset($_POST['mca_205'])) {

                    $subject = "MCA 205 - Object-Oriented Programming with C++";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_205";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_205[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_205[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }
                       


















                       ///////// semester 3 //////////////////////////

                    if (isset($_POST['mca_301'])) {

                    $subject = "MCA 301 - Operating Systems & Systems software";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_301";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_301[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_301[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');
                    }



                    if (isset($_POST['mca_302'])) {

                    $subject = "MCA 302 - Unix & Shell Programming";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_302";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_302[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_302[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                           $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');
                    }



                    if (isset($_POST['mca_303'])) {

                    $subject = "MCA 303 - Intelligent Systems";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_303";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_303[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_303[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }
                       




                    if (isset($_POST['mm_301'])) {

                    $subject = "MM 301 - Statistics & Numerical Techniques";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mm_301";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mm_301[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mm_301[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }




                     if (isset($_POST['mba_301'])) {

                    $subject = "MBA 301 - Bussiness Management";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mba_301";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mba_301[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mba_301[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                           $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }













                     ///////// semester 4 //////////////////////////

                    if (isset($_POST['mca_401'])) {

                    $subject = "MCA 401 - Software Engineering & TQM";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_401";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_401[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_401[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');
                    }



                    if (isset($_POST['mca_402'])) {

                    $subject = "MCA 402 - Graphics & Multimedia";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_402";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_402[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_402[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                           $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');
                    }



                    if (isset($_POST['mca_403'])) {

                    $subject = "MCA 403 - Database Management System II";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_403";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_403[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_403[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }
                       




                    if (isset($_POST['mm_401'])) {

                    $subject = "MM 401 - Operation Research & Optimisation Techniques";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mm_401";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mm_401[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mm_401[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }




                     if (isset($_POST['hu_401'])) {

                    $subject = "HU 401 - Environment & Ecology";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM hu_401";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_hu_401[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_hu_401[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                           $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }

















                     ///////// semester 5 //////////////////////////

                    if (isset($_POST['mca_e501a'])) {

                    $subject = "MCA E501A - Distributed Database Management";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_e501a";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_e501a[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_e501a[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');
                    }



                    if (isset($_POST['mca_e502b'])) {

                    $subject = "MCA E502B - Windows Programming With VB";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_e502b";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_e502b[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_e502b[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                           $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');
                    }



                    if (isset($_POST['mca_e503b'])) {

                    $subject = ">MCA E503B - Object Oriented Programming With Java";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_e503b";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_e503b[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_e503b[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }
                       




                    if (isset($_POST['mca_e504b'])) {

                    $subject = "MCA E504B - E-Commerce";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM mca_e504b";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_mca_e504b[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_mca_e504b[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                          $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }




                     if (isset($_POST['hu_501'])) {

                    $subject = "HU 501 - Values & Ethics Of Profession";
                    $ans_1 = mysqli_real_escape_string($db, $_POST['ans_1']);
                    $ans_2 = mysqli_real_escape_string($db, $_POST['ans_2']);
                    $ans_3 = mysqli_real_escape_string($db, $_POST['ans_3']);
                    $ans_4 = mysqli_real_escape_string($db, $_POST['ans_4']);
                    $ans_5 = mysqli_real_escape_string($db, $_POST['ans_5']);
                    $ans_6 = mysqli_real_escape_string($db, $_POST['ans_6']);
                    $ans_7 = mysqli_real_escape_string($db, $_POST['ans_7']);
                    $ans_8 = mysqli_real_escape_string($db, $_POST['ans_8']);
                    $ans_9 = mysqli_real_escape_string($db, $_POST['ans_9']);
                    $ans_10 = mysqli_real_escape_string($db, $_POST['ans_10']);
                    $correct = 0;
                    $wrong = 0;

                    $answer = array("$ans_1","$ans_2", "$ans_3", "$ans_4", "$ans_5", "$ans_6", "$ans_7", "$ans_8", "$ans_9", "$ans_10");

                    
                     $sql = "SELECT correct FROM hu_501";
                     $result = $db->query($sql);
                    $x = 0;
                    while ($row = $result->fetch_assoc()) {
                        
                        $answerarray_hu_501[$x] = $row['correct'];
                        $x++;
                        
                        }     

                    for($i = 0; $i < 10; $i++ ){

                        if($answer[$i] == $answerarray_hu_501[$i]){
                            $correct++;
                        }
                         else{
                            
                            $wrong++;
                             }
                        }


                           $name = $_SESSION['student_name'];
                    $sql = "SELECT semester FROM studentsignup WHERE username = '$name'";
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    $semester = $row['semester'];
                    $sql = "INSERT INTO result (username, semester, subject, correct, wrong)
                            VALUES ('$name', '$semester', '$subject', '$correct', '$wrong')"; 
                    $result = $db->query($sql); 
                    header('location:/student/student-login.php');

                    }
                       
                       




?>
               
