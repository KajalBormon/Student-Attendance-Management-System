<?php
    include 'connection.php';  
    session_start();
    if(isset($_POST['Login'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $pass = md5($_POST['Password']);
        $type = mysqli_real_escape_string($conn, $_POST['type']);

        if($username == "" || $pass == ""){
            $err = "<font color='red' align='center'>Enter a Valid Username & Password</font>";
        }else{
            $sql = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$pass}' AND type='{$type}'";
            $query = mysqli_query($conn,$sql);
            $result = mysqli_num_rows($query);
            if($result>0 && $type=='student'){
                $_SESSION['username'] = $_POST['username'];
                header("location:{$host}/student/");
            }
            else if($result>0 && $type=='teacher'){
                $_SESSION['username'] = $_POST['username'];
                header("location:{$host}/teacher/");
            }
            else if($result>0 && $type=='admin'){
                $_SESSION['username'] = $_POST['username'];
                header("location:{$host}/admin/");
            }
            else{
                $err = "<font color='red'>Username, Password or Role is Wrong try again...!</font>";
            }

        }
    }

?>

<!DOCTYPE html>
<html>
<head>

	<title>Student Attendance Management System</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Bitter:wght@100;300;400&family=Bree+Serif&family=Handlee&family=Numans&family=Odibee+Sans&family=PT+Serif:wght@400;700&family=Patrick+Hand&family=Simonetta:ital,wght@0,400;0,900;1,400&family=Trade+Winds&family=Volkhov:wght@400;700&display=swap" rel="stylesheet"> 
	<!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css.map">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
   

</head>


<body>
	
<nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #5a0533; border-bottom:1px solid black;box-shadow: 3px 3px 5px;">
    <div class="container" style = "font-family:'PT Serif';font-size:22px;padding-right:0px;margin-right:0%;">
        <a class="navbar-brand" href="index.php">
            <h3 style = "font-family:'Bitter';" ><img src="images/logo.png" width="70" style = "border-radius:50%;border:1px black;" height="70" alt="JKKNIU"/> <span class = "mh3">JKKNIU</span><br /><p style = "margin-left:6%;font-size:12px;margin-top:0;position:absolute;top:60px">Trishal,Mymensingh<br />Estd. 2006</p></h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mnav" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
                    <span class="sr-only">(current)</span>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="help.php"><i class="fa fa-question"></i> Help</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>




<!-- JS -->
<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>