<?php
// Initialize the session
session_start();
print_r($_SESSION);
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome 
		SUSHANTH SOFTWARE TECHNOLOGIES.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning"><strong>Reset Your Password</strong></a>
        <a href="logout.php" class="btn btn-danger"><strong>Sign Out of Your Account</strong></a>
    </p>
    <body background="center.jpg" visible="true" scroll="yes"background-position="center" background-repeat="no"> 
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    .auto-style1 {
		text-align: center;
		font-size: xx-large;
		color: #FF0000;
	}
	.auto-style2 {
		float: left;
		font-size: x-large;
		text-decoration: underline;
		background-color: #FFFFFF;
	}
    .auto-style10 {
		font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
		font-weight: bold;
		font-size: small;
		margin-top: 11;
	}
    .auto-style11 {
		font-size: small;
	}
    .auto-style12 {
		color: #FF0000;
	}
    </style>
<meta content="en-us" http-equiv="Content-Language">
<style type="text/css">
.auto-style1 {
	color: #FFFFFF;
	font-size: medium;
	margin-left: 25px;
}
.auto-style2 {
	background-color: #FFFFFF;
}
.auto-style3 {
	font-size: xx-large;
	color: #FF0000;
}
.auto-style4 {
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.auto-style8 {
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	font-weight: bold;
}
.auto-style13 {
	border-style: solid;
	border-width: 1px;
}
.auto-style14 {
	font-size: x-large;
	color: #FF0000;
}
.auto-style15 {
	text-decoration: underline;
}
</style>
</head>
<div class="text-center">
	<span class="auto-style3">&nbsp;
	&nbsp;&nbsp;
	<span class="auto-style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span></span><span class="auto-style4"><strong><span class="auto-style14"><span class="auto-style15">SUSHANTH SOFTWARE TECHNOLOGIES</span></span></strong></span><br>




	</div>
		<strong>
		<span class="auto-style1">



		<span class="auto-style13">



		<a href="addpayment.php">
	<button type="button" class="auto-style10" style="height: 44px; width: 150px">
	ADD PAYMENTS </button></a></span>&nbsp;&nbsp;&nbsp; <a href="add_new_subject.php">
	<button type="button" class="auto-style8" style="height: 44px">
	<span class="auto-style11" width: 150px">ADD 
		COURSE</span> </button></a>&nbsp;&nbsp;&nbsp; <span class="auto-style12">
		
		<a href="login.php">
	<button type="button" class="auto-style10" style="height: 44px; width: 150px">
	LOGIN </button></a>&nbsp;
	<a href="add_student.php">
	<button type="button" class="auto-style10" style="height: 44px; width: 150px">
	ADD STUDENTS </button></a>&nbsp;


		
		<a href="add_new_subject.php">
	&nbsp;</a></span><form method="post">
		</span> </span></strong>
		
		
		</span> </span></strong>  

				
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
		<br>

				
</form>
	<html lang="en">

	<head>
</head>

	<body>
    <form method="post">
		<div class="auto-style1">
			<strong><br></strong></div>
	</form>
	<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">&nbsp;</h2>
						<h2 class="pull-left">&nbsp;</h2>
						<h2 class="auto-style2"><strong>Employees Details</strong></h2>
                        <a href="create.php" class="btn btn-success pull-right" style="color: #000000">
						<strong>Add New Employee</strong></a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Salary</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            	<br>
            </div>        
        </div>
    </div>
</body>
</html>
</body>
</html>