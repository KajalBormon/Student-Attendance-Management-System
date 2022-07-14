<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:http://localhost/studentAMS/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Attendance Management System</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
	<!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css.map">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/singup.css">
    

</head>
<body style="background-color: white;">

<nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #5a0533; border-bottom:1px solid black;box-shadow: 3px 3px 5px;">
    <div class="container" style = "font-family:'PT Serif';font-size:22px;padding-right:0px;margin-right:0%;">
        <a class="navbar-brand" href="index.php">
            <h3 style = "font-family:'Bitter';" ><img src="../images/logo.png" width="70" style = "border-radius:50%;border:1px black;" height="70" alt="JKKNIU"/> <span class = "mh3">JKKNIU</span><br /><p style = "margin-left:6%;font-size:12px;margin-top:0;position:absolute;top:60px">Trishal,Mymensingh<br />Estd. 2006</p></h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mnav" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="student.php"><i class="fa fa-users"></i> Student</a>
                    <span class="sr-only">(current)</span>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="Index.php"><i class="fa fa-home"></i> Home</a>
                    <span class="sr-only">(current)</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addteacher.php"><i class="fa fa-plus"></i> Add Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="teacher.php"><i class="fa fa-user"></i> My Report</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="attendance.php"><i class="fa fa-check"></i> Attendance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="report.php"><i class="fa fa-file"></i> Student Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="row">
    <div class="content">
        <h3 style="text-align: center; margin-bottom: 30px">My Class Information</h3>
        <table class="table table-stripped">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Department</th>
                <th scope="col">Course Name</th>
                <th scope="col">Course Code</th>
                <th scope="col">Batch</th>
                <th scope="col">Semester</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../connection.php';
                    $sql = "SELECT * FROM teacher WHERE username = '{$_SESSION['username']}'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                <td style="text-transform: capitalize;"><?php echo $row['fname'].' '.$row['lname']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td style="text-transform: uppercase;"><?php echo $row['dept']; ?></td>
                <td style="text-transform: capitalize;"><?php echo $row['course_name']; ?></td>
                <td style="text-transform: uppercase;"><?php echo $row['course_code']; ?></td>
                <td><?php echo $row['batch']; ?></td>
                <td><?php echo $row['sem']; ?></td>
                <td><?php echo $row['mail']; ?></td>
                </tr>
                <?php } } ?>
            </tbody>       
        </table>
    </div>
</div>


<!-- JS -->
<script src="../js/jquery_library.js"></script>
<script src="../js/bootstrap.js"></script>

</body>
</html>
