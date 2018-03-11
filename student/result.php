<?php include('server.php'); ?> 
<?php include('../server.php'); 

if (empty($_SESSION['student_name'])) {
    header('location: ../index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f21370;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #66ba2e;
}
</style>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>

<ul>
  <li><a href="../index.php?logout='1'" style="color: white;">Logout</a></li>
  <li><a href="" style="color: yellow;">WELCOME ( <?php echo $_SESSION['student_name']; ?> )</a></li>
  
  <li><a href="student-login.php">Home</a></li>
</ul>
<div align="center">
        
        <br>
            <?php
                $usr = $_SESSION['student_name'];
                $sql = "SELECT  *  FROM result WHERE username = '$usr'";
                $result = $db->query($sql);
                $q = 1;
                if ($result->num_rows > 0) {
                 ?><h2><strong><?php echo $stu_name; ?></strong></h2>
                <br><br>
                   <?php  echo "<table class='w3-table-all w3-card-4 w3-large'><tr class='w3-yellow'><th>SUBJECT</th><th>MARKS</th></tr>";
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                          $marks = $row['correct']*10;
                          
                        echo "<tr><td>" . $row["subject"] . "</td><td>" . $marks . " </td></tr>";
                        
                    }
                    echo "</table>";
                } else {
                    echo "No Result in Database";
                }

                $db->close();

            ?>
            
        </div>
</body>
</html>





































































