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
<body>

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
                    <a class="nav-link" href="student.php"><i class="fa fa-users"></i> Students</a>
                    <span class="sr-only">(current)</span>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="teacher.php"><i class="fa fa-industry"></i> Faculties</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="attendance"><i class="fa fa-check"></i> Attendance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="report.php"><i class="fa fa-file"></i> Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<center>

<div class="row">

    <div class="content" id="content2">
        <h3>Attendance of <?php echo date('Y-m-d'); ?></h3>
        <br>

        <center><p><?php if(isset($att_msg)) echo $att_msg; if(isset($error_msg)) echo $error_msg; ?></p></center> 

        <form action="" method="post" class="form-horizontal col-md-6 col-md-offset-3">
            <div class="form-group" id="showattbtn">
                <table>
                    <tr>
                        <td>
                            <label class="mr-4">Select Batch</label> 
                        </td>
                        <td></td>
                        <td>
                            <select name="whichbatch" class="select1" id="input1">
                                <option name="eight" value="12">12</option>
                                <option name="seven" value="13">13</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Select Course</label>
                        </td>
                        <td></td>
                        <td>
                            <select name="whichcourse" class="select1" id="input1">
                                <option name="networking" value="networking">Computer Networks</option>
                                <option name="swe" value="swe">Software Engineering</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Show!" name="batch" />  
            </div> 
                
            </form>

        
            <form action="" method="post" id="formbtn">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <tr>
                        <td>Student ID</td>
                        <td>Full Name</td>
                        <td>Department</td>
                        <td>Continue Batch</td>
                        <td>Semester</td>
                        <td>Email</td>
                        <td class="radiostatus">
                            <label>
                                <input type="radio" name="radio" value="Present"> Present
                            </label>
                            <label> 
                                <input type="radio" name="radio" value="Absent"> Absent
                            </label>
                          
                            
                        </td>
                        </tr>
                    </tbody>
                </table>

                <center>
                    <br>
                <input type="submit" style="width: 10%; margin-left: 70%" value="Save!" name="att" />
                </center>

            </form>
        </div>

    </div>

    </center>

<!-- JS -->
<script src="../js/jquery_library.js"></script>
<script src="../js/bootstrap.js"></script>

</body>
</html>
