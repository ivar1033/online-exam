<?php

$db = mysqli_connect();

if (isset($_POST['submit_sem1'])) {
        $sem_1 = mysqli_real_escape_string($db, $_POST['sem_1']);
       
    
          $sql = "SELECT sem_1 FROM examset";
                $result = $db->query($sql);
                
                if ($result->num_rows == 0) {
                   
                    $sql = "INSERT INTO examset (sem_1)
                            VALUES ('$sem_1')";
                    mysqli_query($db, $sql); 
                }
                else{
                   
                    $sql = "UPDATE examset SET sem_1 = '$sem_1' ";
                    mysqli_query($db, $sql);            
                    }
        
            }
if (isset($_POST['submit_sem2'])) {
        $sem_2 = mysqli_real_escape_string($db, $_POST['sem_2']);
       
    
          $sql = "SELECT sem_2 FROM examset";
                $result = $db->query($sql);
                
                if ($result->num_rows == 0) {
                   
                    $sql = "INSERT INTO examset (sem_2)
                            VALUES ('$sem_2')";
                    mysqli_query($db, $sql); 
                }
                else{
                   
                    $sql = "UPDATE examset SET sem_2 = '$sem_2' ";
                    mysqli_query($db, $sql);            
                    }
        
            }
if (isset($_POST['submit_sem3'])) {
        $sem_3 = mysqli_real_escape_string($db, $_POST['sem_3']);
       
    
          $sql = "SELECT sem_3 FROM examset";
                $result = $db->query($sql);
                
                if ($result->num_rows == 0) {
                   
                    $sql = "INSERT INTO examset (sem_3)
                            VALUES ('$sem_3')";
                    mysqli_query($db, $sql); 
                }
                else{
                   
                    $sql = "UPDATE examset SET sem_3 = '$sem_3' ";
                    mysqli_query($db, $sql);            
                    }
        
            }
if (isset($_POST['submit_sem4'])) {
        $sem_4 = mysqli_real_escape_string($db, $_POST['sem_4']);
       
    
          $sql = "SELECT sem_4 FROM examset";
                $result = $db->query($sql);
                
                if ($result->num_rows == 0) {
                   
                    $sql = "INSERT INTO examset (sem_4)
                            VALUES ('$sem_4')";
                    mysqli_query($db, $sql); 
                }
                else{
                   
                    $sql = "UPDATE examset SET sem_4 = '$sem_4' ";
                    mysqli_query($db, $sql);            
                    }
        
            }
if (isset($_POST['submit_sem5'])) {
       
        $sem_5 = mysqli_real_escape_string( $db, $_POST['sem_5']);
    
          $sql = "SELECT sem_5 FROM examset";
                $result = $db->query($sql);
                
                if ($result->num_rows == 0) {
                   
                    $sql = "INSERT INTO examset (sem_5)
                            VALUES ('$sem_5')";
                    mysqli_query($db, $sql); 
                }
                else{
                   
                    $sql = "UPDATE examset SET sem_5 = '$sem_5' ";
                    mysqli_query($db, $sql);            
                    }
        
            }



///////////to delete all /////////

            if (isset($_POST['del_student'])) {
            $sql = "DELETE FROM studentsignup";
            mysqli_query($db, $sql);
            }

            if (isset($_POST['del_college'])) {
            $sql = "DELETE FROM collegesignup";
            mysqli_query($db, $sql);
            }

            if (isset($_POST['del_teacher'])) {
            $sql = "DELETE FROM teachersignup";
            mysqli_query($db, $sql);
            }


    ?>