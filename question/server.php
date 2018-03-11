<?php

// connect to database for semester 1
$db = mysqli_connect();
//if the submit button  is clicked
if (isset($_POST['mca_101'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);

    $sql = "SELECT * FROM mca_101";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){

    $sql = "INSERT INTO mca_101 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);

    header('location:mca_101.php'); }

}
if (isset($_POST['mca_102'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
    $sql = "SELECT * FROM mca_102";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_102 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_102.php');} //redirect to home page
}

if (isset($_POST['mca_103'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_103";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_103 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_103.php'); }//redirect to home page
}
if (isset($_POST['mm_101'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mm_101";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mm_101 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mm_101.php');} //redirect to home page
}
if (isset($_POST['hu_101'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM hu_101";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO hu_101 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:hu_101.php'); }//redirect to home page
}

///////////////////////////////////////////////////////
//////////////////////////////////////////////////////

// connect to database for semester 2


//if the submit button  is clicked
if (isset($_POST['mca_201'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_201";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_201 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_201.php'); }//redirect to home page
}
if (isset($_POST['mca_202'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_202";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_202 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_202.php');} //redirect to home page
}

if (isset($_POST['mca_203'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_203";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_203 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_203.php');} //redirect to home page
}
if (isset($_POST['mca_204'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_204";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_204 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_204.php');} //redirect to home page
}
if (isset($_POST['mca_205'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_205";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_205 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_205.php'); }//redirect to home page
}

///////////////////////////////////////////////////////
//////////////////////////////////////////////////////

// connect to database for semester 3


//if the submit button  is clicked
if (isset($_POST['mca_301'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_301";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_301 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_301.php'); }//redirect to home page
}
if (isset($_POST['mca_302'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_302";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_302 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_302.php');} //redirect to home page
}

if (isset($_POST['mca_303'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_303";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_303 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_303.php'); }//redirect to home page
}
if (isset($_POST['mm_301'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mm_301";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mm_301 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mm_301.php');} //redirect to home page
}
if (isset($_POST['mba_301'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mba_301";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mba_301 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mba_301.php');} //redirect to home page
}
if (isset($_POST['mba_302'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mba_302";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mba_302 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mba_302.php'); }//redirect to home page
}

///////////////////////////////////////////////////////
//////////////////////////////////////////////////////

// connect to database for semester 4


//if the submit button  is clicked
if (isset($_POST['mca_401'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_401";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_401 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_401.php');} //redirect to home page
}
if (isset($_POST['mca_402'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_402";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_402 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_402.php'); }//redirect to home page
}

if (isset($_POST['mca_403'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_403";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_403 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_403.php'); }//redirect to home page
}
if (isset($_POST['mm_401'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mm_401";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mm_401 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mm_401.php');} //redirect to home page
}
if (isset($_POST['hu_401'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM hu_401";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO hu_401 (question, A, B, C, D, correct)
							VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:hu_401.php');} //redirect to home page
}

///////////////////////////////////

// connect to database for semester 5


//if the submit button  is clicked
if (isset($_POST['mca_e501a'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
    $sql = "SELECT * FROM mca_e501a";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_e501a (question, A, B, C, D, correct)
                            VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_e501a.php');} //redirect to home page
}
if (isset($_POST['mca_e502b'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_e502b";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_e502b (question, A, B, C, D, correct)
                            VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_e502b.php');} //redirect to home page
}

if (isset($_POST['mca_e503b'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_e503b";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_e503b (question, A, B, C, D, correct)
                            VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_e503b.php');} //redirect to home page
}
if (isset($_POST['mca_e504b'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM mca_e504b";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO mca_e504b (question, A, B, C, D, correct)
                            VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:mca_e504b.php');} //redirect to home page
}
if (isset($_POST['hu_501'])) {
    $question = mysqli_real_escape_string($db, $_POST['question']);
    $op_1 = mysqli_real_escape_string($db, $_POST['A']);
    $op_2 = mysqli_real_escape_string($db, $_POST['B']);
    $op_3 = mysqli_real_escape_string($db, $_POST['C']);
    $op_4 = mysqli_real_escape_string($db, $_POST['D']);
    $correct = mysqli_real_escape_string($db, $_POST['correct']);
     $sql = "SELECT * FROM hu_501";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) < 10){
    $sql = "INSERT INTO hu_501 (question, A, B, C, D, correct)
                            VALUES ('$question', '$op_1', '$op_2', '$op_3', '$op_4', '$correct')";
    mysqli_query($db, $sql);
    header('location:hu_501.php'); }//redirect to home page
}









/////////////////////delete question bank ///////////////////
if (isset($_POST['rmca_101'])) {
    $sql = "DELETE FROM mca_101";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_102'])) {
    $sql = "DELETE FROM mca_102";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_103'])) {
    $sql = "DELETE FROM mca_103";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmm_101'])) {
    $sql = "DELETE FROM mm_101";
    mysqli_query($db, $sql);
}
if (isset($_POST['rhu_101'])) {
    $sql = "DELETE FROM hu_101";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_201'])) {
    $sql = "DELETE FROM mca_201";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_202'])) {
    $sql = "DELETE FROM mca_202";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_203'])) {
    $sql = "DELETE FROM mca_203";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_204'])) {
    $sql = "DELETE FROM mca_204";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_205'])) {
    $sql = "DELETE FROM mca_205";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_301'])) {
    $sql = "DELETE FROM mca_301";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_302'])) {
    $sql = "DELETE FROM mca_302";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_303'])) {
    $sql = "DELETE FROM mca_303";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmm_301'])) {
    $sql = "DELETE FROM mm_301";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmba_301'])) {
    $sql = "DELETE FROM mba_301";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmba_302'])) {
    $sql = "DELETE FROM mba_302";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_401'])) {
    $sql = "DELETE FROM mca_401";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_402'])) {
    $sql = "DELETE FROM mca_402";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_403'])) {
    $sql = "DELETE FROM mca_403";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmm_401'])) {
    $sql = "DELETE FROM mm_401";
    mysqli_query($db, $sql);
}
if (isset($_POST['rhu_401'])) {
    $sql = "DELETE FROM hu_401";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_e501a'])) {
    $sql = "DELETE FROM mca_e501a";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_e502b'])) {
    $sql = "DELETE FROM mca_e502b";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_e503b'])) {
    $sql = "DELETE FROM mca_e503b";
    mysqli_query($db, $sql);
}
if (isset($_POST['rmca_e504b'])) {
    $sql = "DELETE FROM mca_e504b";
    mysqli_query($db, $sql);
}
if (isset($_POST['rhu_501'])) {
    $sql = "DELETE FROM hu_501";
    mysqli_query($db, $sql);
}