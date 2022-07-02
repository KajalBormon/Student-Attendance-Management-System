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
<!-- Start Navbar -->
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
                    <span class="sr-only">(current)</span>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="student.php"><i class="fa fa-users"></i> Student</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="account.php"><i class="fa fa-user"></i> My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="report.php"><i class="fa fa-file"></i> My Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<center>

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="row">
  <div class="content" id="content2">
    <h3>Student Report</h3>
    <br>
    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3 selectform">

        <div class="form-group">
            <table>
                <tr>
                    <td>
                        <label style="font-size: 20px;" for="input1" class="control-label mr-4">Select Course</label>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="form-group">
                            <select name="whichcourse" class="form-control select1" id="input1">
                                <option name="networking" value="networking">Computer Networks</option>
                                <option name="swe" value="swe">Software Engineering</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="font-size: 20px;" for="input1" class="control-label">Your ID</label>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="changeplaceholder">
                            <input type="number" name="sr_id"  class="form-control" id="input1" placeholder="Enter Your Id" />
                        </div> 
                    </td>
                </tr>
            </table>
            <input type="submit" id="show" value="Show!" name="sr_btn" />

        </div>
        
    </form>
    <br>

    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
    <table class="table table-striped">
     <tbody>
      <tr>
          <td>Student ID: </td>
          <td>18102014</td>
      </tr>

      <tr>
          <td>Student Name: </td>
          <td>Kajal Bormon</td>
      </tr>
      
      <tr>
          <td>Department: </td>
          <td>CSE</td>
      </tr>
      
      <tr>
          <td>Batch: </td>
          <td>12</td>
      </tr> 
      <tr>
        <td>Total Class (Days): </td>
        <td>32 </td>
      </tr>

      <tr>
        <td>Present (Days): </td>
        <td>10 </td>
      </tr>

      <tr>
        <td>Absent (Days): </td>
        <td>20 </td>
      </tr>

    </tbody>
    </table>
  </form>
  </div>

</div>
<!-- Contents, Tables, Forms, Images ended -->

</center>




<!-- JS -->
<script src="../js/jquery_library.js"></script>
<script src="../js/bootstrap.js"></script>


</body>
</html>
