<?php include('server.php'); ?> 
<?php include('../server.php'); 

if (empty($_SESSION['admin_name'])) {
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
  <li><a href="" style="color: yellow;">WELCOME ( <?php echo $_SESSION['admin_name']; ?> )</a></li>
  
  <li><a href="/admin/admin.php">Home</a></li>
</ul>
<form method="post">
<div align="center">
    <br>
            <h2><strong>REGISTERED STUDENTS</strong></h2>
       
            <?php
               
                $sql = "SELECT  *  FROM studentsignup ";
                $result = $db->query($sql);
                $q = 1;
                if ($result->num_rows > 0) {
                 ?>
                <br><br>
                   <?php  echo "<table class='w3-table w3-striped w3-bordered w3-card-4 w3-large'><tr class='w3-yellow'><th>NAME</th><th>ROLL</th><th>COURSE</th><th>COLLEGE</th><th>SEMESTER</th><th>EMAIL</th></tr>";
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                          
                          
                        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["roll"] . "</td><td>" . $row["course"] . "</td><td>" . $row["college"] . "</td><td>" . $row["semester"] . "</td><td>" . $row["email"] . "</td></tr>";
                        
                    }
                    echo "</table>";
                } else {
                    echo "No Students in Database";
                }

               

            ?>
            <br>
            <h4><strong> <button class="button button2" name="del_student" type="submit">DELETE ALL STUDENTS </button> </strong></h4>
        </div>
<br>
        <div align="center">
    <br>
            <h2><strong>REGISTERED COLLEGE</strong></h2>
       
            <?php
               
                $sql = "SELECT  *  FROM collegesignup ";
                $result = $db->query($sql);
                $q = 1;
                if ($result->num_rows > 0) {
                 ?>
                <br><br>
                   <?php  echo "<table class='w3-table w3-striped w3-bordered w3-card-4 w3-large'><tr class='w3-yellow'><th>NAME</th><th>EMAIL</th><th>COLLEGE-ID</th></tr>";
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                          
                          
                        echo "<tr><td>" . $row["collegename"] . "</td><td>" . $row["email"] . "</td><td>" . $row["collegeid"] . "</td></tr>";
                        
                    }
                    echo "</table>";
                } else {
                    echo "No College in Database";
                }

               

            ?>
            <br>
            <h4><strong> <button class="button button2" name="del_college" type="submit">DELETE ALL COLLEGE </button> </strong></h4>
            
        </div>

        <br>
        <div align="center">
    <br>
            <h2><strong>REGISTERED TEACHERS</strong></h2>
       
            <?php
               
                $sql = "SELECT  *  FROM teachersignup ";
                $result = $db->query($sql);
                $q = 1;
                if ($result->num_rows > 0) {
                 ?>
                <br><br>
                   <?php  echo "<table class='w3-table w3-striped w3-bordered w3-card-4 w3-large'><tr class='w3-yellow'><th>NAME</th><th>EMAIL</th><th>COLLEGE</th></tr>";
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                          
                          
                        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["emailid"] . "</td><td>" . $row["college"] . "</td></tr>";
                        
                    }
                    echo "</table>";
                } else {
                    echo "No Teachers in Database";
                }

                $db->close();

            ?>
            <br>
            <h4><strong> <button class="button button2" name="del_teacher" type="submit">DELETE ALL TEACHERS </button> </strong></h4>
        </div>

        
    </form>
</body>
</html>


