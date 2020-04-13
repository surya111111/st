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
</style>
</head>
<a href="index.php">Back to Home Page</a><span class="auto-style2"><strong><br><br><br></strong></span>

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

$sql = "INSERT INTO add_students (name,father_name,postal_address,personal_address,sex,city,course,district,state,pin_code,email_id,dob,mobile_no)VALUES ('" . $_POST["name"] . "','" . $_POST["father_name"] . "','" . $_POST["postal_address"] . "','" . $_POST["personal_address"] . "','" . $_POST["sex"] . "','" . $_POST["city"] . "','" . $_POST["course"] . "','" . $_POST["district"] . "','" . $_POST["state"] . "','" . $_POST["pin_code"] . "','" . $_POST["email_id"] . "','" . $_POST["dob"] . "','" . $_POST["mobile_no"] . "')";



if ($conn->query($sql) === TRUE) {

    echo "NEW STUDENT REGISTERED SUCCESSFULLY";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>