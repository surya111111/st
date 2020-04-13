<body background="success1.jpg" visible="true" scroll="no">
<head>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style2 {
	color: #000000;
	font-size: x-large;
	}
	a{
	color:black;
}
.auto-style3 {
	color: white;
}
</style>
</head>
<a href="index.php" class="auto-style3"><strong>Back to Home Page</strong></a><span class="auto-style2"><strong><br><br><br></strong></span>

</div>
<p class="auto-style1">&nbsp;</p>
<?php
print_r($_POST);
?>
<?php

$servername = "localhost";

$username = "root";
$password = "";
$dbname = "management_information_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO add_new_subject (subject_code,unit,pre_requisite,course) VALUES ('" . $_POST["subject_code"] . "','" . $_POST["unit"] . "','" . $_POST["pre_requisite"] . "','" . $_POST["course"] . "')";

if ($conn->query($sql) === TRUE) {
    echo "NEW SUBJECT ADDED SUCCESSFULLY";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>