<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
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
	<span class="auto-style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span></span><span class="auto-style4"><strong><span class="auto-style14"><span class="auto-style15">SUSHANTH SOFTWARE TECHNOLOGIES<br></span></span></strong></span><br>
<body>
    <div class="auto-style16">
        <h1>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>... Welcome 
		SUSHANTH SOFTWARE TECHNOLOGIES.</h1>
    </div>



	</div>
		<strong>
		<span class="auto-style1">



		<span class="auto-style13">

<?php if ($_SESSION["loggedin"] ){ ?>
		<a href="addpayment.php">
	<button type="button" class="auto-style10" style="height: 44px; width: 150px">
	ADD PAYMENTS </button></a></span>&nbsp;&nbsp;&nbsp; <a href="add_new_subject.php">
	<button type="button" class="auto-style8" style="height: 44px">
	<span class="auto-style11" width: 150px">ADD 
		COURSE</span> </button></a>&nbsp;&nbsp;&nbsp; <span class="auto-style12">
		<a href="add_student.php">
	<button type="button" class="auto-style10" style="height: 44px; width: 150px">
	ADD STUDENTS </button></a>&nbsp;
	<p>
        <a href="reset-password.php" class="btn btn-warning"><strong>Reset Your Password</strong></a>
        <strong>
		<span class="auto-style1">



		<span class="auto-style12">

	<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></span></span></strong></p>
&nbsp;<?php } else { ?><a href="login.php">
<button type="button" class="auto-style10" style="height: 44px; width: 150px">
	Login </button></a>&nbsp;
<?php } ?> 

		
	
	


		
		<a href="add_new_subject.php">
	&nbsp;</a></span></span></strong><html lang="en"><body>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
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
    .auto-style16 {
		font-weight: bold;
		border-left-style: solid;
		border-left-width: 1px;
		border-right-style: solid;
		border-right-width: 1px;
		border-top-style: solid;
		border-top-width: 1px;
		border-bottom: 1px solid #eee;
		margin-left: 0;
		margin-right: 0;
		margin-top: 40px;
		margin-bottom: 20px;
		padding-left: 4px;
		padding-right: 4px;
		padding-top: 1px;
		padding-bottom: 9px;
	}
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New Employee</a>
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
            </div>        
        </div>
    </div>
</body>
</html>