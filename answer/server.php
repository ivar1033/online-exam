 <?php include('../server.php'); ?>

 <?php
            // connect to database for semester 1
          
           $db = mysqli_connect();
        ////////////////////////////////// FOR SEMESTER - 1 ///////////////////////////////////////////////////////////////
            

                    ////////MCA-101 /////////
                $sql = "SELECT question  FROM mca_101";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca101[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_101";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca101_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_101";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca101_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_101";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca101_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_101";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca101_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }











                
                  ////////MCA-102 /////////
                $sql = "SELECT question  FROM mca_102";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca102[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_102";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca102_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_102";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca102_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_102";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca102_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_102";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca102_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }






                ///////MCA-103 /////////
                $sql = "SELECT question  FROM mca_103";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca103[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_103";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca103_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_103";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca103_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_103";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca103_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_103";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca103_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }





                  ////////MM-101 /////////
                $sql = "SELECT question  FROM mm_101";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mm101[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mm_101";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm101_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mm_101";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm101_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mm_101";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm101_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mm_101";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm101_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }





                    ////////HU-101 /////////
                $sql = "SELECT question  FROM hu_101";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_hu101[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM hu_101";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu101_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM hu_101";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu101_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM hu_101";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu101_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM hu_101";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu101_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }











              ////////////////////////////////// FOR SEMESTER - 2 ///////////////////////////////////////////////////////////////
            

                    ////////MCA-201 /////////
                $sql = "SELECT question  FROM mca_201";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca201[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_201";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca201_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_201";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca201_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_201";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca201_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_201";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca201_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }











                
                  ////////MCA-202 /////////
                $sql = "SELECT question  FROM mca_202";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca202[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_202";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca202_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_202";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca202_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_202";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca202_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_202";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca202_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }






                ////////MCA-203 /////////
                $sql = "SELECT question  FROM mca_203";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca203[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_203";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca203_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_203";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca203_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_203";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca203_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_203";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca203_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }  





                  ////////MCA-204 /////////
                $sql = "SELECT question  FROM mca_204";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca204[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_204";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca204_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_204";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca204_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_204";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca204_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_204";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca204_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }





                    ////////MCA-205 /////////
                $sql = "SELECT question  FROM mca_205";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca205[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_205";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca205_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_205";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca205_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_205";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca205_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_205";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca205_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }








////////////////////////////////// FOR SEMESTER - 3 ///////////////////////////////////////////////////////////////
            

                    ////////MCA-301 /////////
                $sql = "SELECT question  FROM mca_301";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca301[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_301";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca301_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_301";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca301_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_301";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca301_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_301";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca301_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }











                
                  ////////MCA-302 /////////
                $sql = "SELECT question  FROM mca_302";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca302[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_302";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca302_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_302";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca302_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_302";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca302_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_302";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca302_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }






                ////////MCA-303 /////////
                $sql = "SELECT question  FROM mca_303";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca303[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_303";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca303_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_303";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca303_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_303";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca303_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_303";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca303_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }  





                  ////////MM-301 /////////
                $sql = "SELECT question  FROM mm_301";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mm301[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mm_301";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm301_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mm_301";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm301_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mm_301";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm301_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mm_301";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm301_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }





                    ////////MBA-301 /////////
                $sql = "SELECT question  FROM mba_301";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mba301[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mba_301";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mba301_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mba_301";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mba301_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mba_301";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mba301_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mba_301";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mba301_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }


        


                    ////////MBA-302 /////////
                $sql = "SELECT question  FROM mba_302";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mba302[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mba_302";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mba302_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mba_302";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mba302_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mba_302";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mba302_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mba_302";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mba302_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }













              ////////////////////////////////// FOR SEMESTER - 4 ///////////////////////////////////////////////////////////////
            

                    ////////MCA-401 /////////
                $sql = "SELECT question  FROM mca_401";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca401[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_401";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca401_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_401";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca401_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_401";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca401_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_401";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca401_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }











                
                  ////////MCA-402 /////////
                $sql = "SELECT question  FROM mca_402";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca402[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_402";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca402_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_402";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca402_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_402";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca402_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_402";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca402_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }






                ////////MCA-403 /////////
                $sql = "SELECT question  FROM mca_403";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mca403[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_403";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca403_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_403";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca403_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_403";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca403_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_403";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mca403_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }  





                  ////////MM-401 /////////
                $sql = "SELECT question  FROM mm_401";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mm401[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mm_401";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm401_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mm_401";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm401_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mm_401";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm401_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mm_401";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mm401_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }





                    ////////HU-401 /////////
                $sql = "SELECT question  FROM hu_401";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_hu401[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM hu_401";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu401_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM hu_401";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu401_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM hu_401";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu401_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM hu_401";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu401_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }













                 ////////////////////////////////// FOR SEMESTER - 5 ///////////////////////////////////////////////////////////////
            

                    ////////HU-501 /////////
                $sql = "SELECT question  FROM hu_501";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_hu501[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM hu_501";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu501_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM hu_501";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu501_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM hu_501";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu501_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM hu_501";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_hu501_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }











                
                  ////////MCA-E502B /////////
                $sql = "SELECT question  FROM mca_e502b";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mcae502b[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_e502b";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae502b_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_e502b";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae502b_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_e502b";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae502b_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_e502b";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae502b_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }






                ////////MCA-E503B  /////////
                $sql = "SELECT question  FROM mca_e503b";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mcae503b[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_e503b";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae503b_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_e503b";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae503b_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_e503b";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae503b_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_e503b";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae503b_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }  





                  ////////MCA-E504B /////////
                $sql = "SELECT question  FROM mca_e504b";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mcae504b[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_e504b";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae504b_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_e504b";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae504b_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_e504b";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae504b_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_e504b";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae504b_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }





                    ////////MCA-E501A /////////
                $sql = "SELECT question  FROM mca_e501a";
                $result = $db->query($sql);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $question_mcae501a[$x] = $row['question'];
                        $x++;
                        
                    }
                    // echo "</table>";
                } else {
                    echo "No Questions in Database";
                }


                $sql1 = "SELECT A FROM mca_e501a";
                $result = $db->query($sql1);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae501a_1[$x] = $row['A'];
                        $x++;
                        
                    }
                    
                }
                $sql2 = "SELECT B FROM mca_e501a";
                $result = $db->query($sql2);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae501a_2[$x] = $row['B'];
                        $x++;
                        
                    }
                    
                }
                 $sql3 = "SELECT C FROM mca_e501a";
                $result = $db->query($sql3);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae501a_3[$x] = $row['C'];
                        $x++;
                        
                    }
                    
                }
                 $sql4 = "SELECT D FROM mca_e501a";
                $result = $db->query($sql4);
                $q = 1;
                $x = 0;
                if ($result->num_rows > 0) {
                   
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        $answer_mcae501a_4[$x] = $row['D'];
                        $x++;
                        
                    }
                    
                }

?>