<?php 
    include '../connection.php'; 
    session_start();

    if(isset($_POST['save'])){
        $batch1 = $_POST['batch_st'];
        $course_name = $_POST['course_name_st'];

        echo $batch1;
        echo $course_name;
        
        
  
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
                <!-- <li class="nav-item">
                    <a class="nav-link" href="student.php"><i class="fa fa-users"></i> Students</a>
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


<center>

<div class="row">

    <div class="content" id="content2">
        <h3>Attendance of <?php echo date('Y-m-d'); ?></h3>
        <br>

        <center><p><?php echo @$err; ?></p></center> 

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
                                <?php
                                    $sql1 = "SELECT * FROM teacher WHERE username = '{$_SESSION['username']}'";
                                    $res1 = mysqli_query($conn, $sql1);
                                    if(mysqli_num_rows($res1)>0){
                                       while( $row1 = mysqli_fetch_assoc($res1)){   
                                ?>
                                <option name="batch_st" value="<?php echo $row1['batch']; ?>"><?php echo $row1['batch']; ?></option>
                             <?php } }  ?>
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
                                <?php
                                    $sql1 = "SELECT * FROM teacher WHERE username = '{$_SESSION['username']}'";
                                    $res1 = mysqli_query($conn, $sql1);
                                    if(mysqli_num_rows($res1)>0){
                                       while( $row1 = mysqli_fetch_assoc($res1)){   
                                ?>
                                <option name="course_name_st" value="<?php echo $row1['course_name']; ?>"><?php echo $row1['course_name']; ?></option>
                                <?php } } ?>
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
                        <th scope="col">Student ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <?php
                            
                            if(isset($_POST['batch'])){

                            $i=0;
                            $radio = 0;
                            $batch = $_POST['whichbatch'];
                            $sql = "SELECT * FROM students WHERE batch='$batch' ORDER BY sid ASC"; 
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)>0){
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $i++;
                        ?>
                        <tr>
                            <td><?php echo $row['sid']; ?></td><input type="hidden" name="stat_id[]" value="<?php echo $data['st_id']; ?>"> </td>
                            <td style="text-transform: capitalize;"><?php echo $row['fname'].' '.$row['lname']; ?></td>
                            <td style="text-transform: uppercase;"><?php echo $row['dept']; ?></td>
                            <td><?php echo $row['batch']; ?></td>
                            <td><?php echo $row['mail']; ?></td>
                            <td class="radiostatus">
                                <label>
                                    <input type="radio" name="status[<?php echo $radio; ?>]" value="Present" checked> Present
                                </label>
                                <label> 
                                    <input type="radio" name="status[<?php echo $radio; ?>]" value="Absent"> Absent
                                </label>    
                            </td>
                        </tr>
                        <?php 
                            $radio++;
                                } 
                            } 
                        }
                        ?>
                    </tbody>
                </table>

                <center>
                    <br>
                <input type="submit" style="width: 10%; margin-left: 70%" value="Save!" name="save" />
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
