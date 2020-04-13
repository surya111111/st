
<head>
<meta content="en-us" http-equiv="Content-Language">
<style type="text/css">
.auto-style1 {
	font-size: large;
	font-weight: bold;
}
</style>
</head>
<body background="images.jpg" visible="true" style="height: 793px">

<html>
<head>
<script type="text/javascript" src="validate.js"></script>
</head>
<body>
<form method="POST"action="add_student_save.php">

<table cellpadding="2" bgcolor="99FFFF" align="center"
cellspacing="2" style="width: 100%; height: 800px">

<tr>
<td colspan=2>
<center class="auto-style1">Student Registration Form</center>
</td>
</tr>

<tr>
<td><strong>Name</strong></td>
<td style="width: 668px"><input type=name name=name id="textname" size="30"></td>
</tr>

<tr>
<td>Father Name</td>
<td style="width: 668px"><input type="text" name="father_name" id="fathername"
size="30"></td>
</tr>
<tr>
<td>Postal Address</td>
<td style="width: 668px"><input type="text" name="postal_address" id="postal_address" size="30"></td>
</tr>

<tr>
<td>Personal Address</td>
<td style="width: 668px"><input type="text" name="personal_address"
id="personal_address" size="30"></td>
</tr>

<tr>
<td>Sex</td>
<td style="width: 668px"><select name="sex">
<option value="-1" selected>select..</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></td>
</tr>

<tr>
<td>City</td>
<td style="width: 668px"><select name="city">
<option value="-1" selected>select..</option>
<option value="New Delhi">Hyderabad</option>
<option value="Mumbai">Kurnool</option>
<option value="Goa">Nandyal</option>
<option value="Patna">Dhone</option>
</select></td>
</tr>

<tr>
<td>Course</td>
<td style="width: 668px"><select name="course">
<option value="-1" selected>select..</option>
<option value="Communication Skills Training">Communication Skills Training</option>
<option value="Python">Python</option>
<option value="C,C++">C,C++</option>
<option value="Java">Java</option>
<option value="Placements Assistance and Interview Preperation">Placements Assistance and Interview Preperation</option>
</select></td>
</tr>

<tr>
<td>District</td>
<td style="width: 668px"><select name="district">
<option value="-1" selected>select..</option>
<option value="Kurnool">Kurnool</option>
<option value="Rangareddy">Rangareddy</option>
</select></td>

</tr>

<tr>
<td style="height: 45px">State</td>
<td style="height: 45px; width: 668px;"><select Name="state">
<option value="-1" selected>select..</option>
<option>Andhra Pradesh</option>
<option value="Telangana">Telangana</option>
</select></td>
</tr>
<tr>
<td>PinCode</td>
<td style="width: 668px"><input type="text" name="pin_code" id="pin_code" size="30"></td>

</tr>
<tr>
<td>EmailId</td>
<td style="width: 668px"><input type="text" name="email_id" id="email_id" size="30"></td>
</tr>

<tr>
<td style="height: 39px">DOB</td>
<td style="height: 39px; width: 668px;"><input type="text" name="dob" id="dob" size="30"></td>
</tr>

<tr>
<td>MobileNo</td>
<td style="width: 668px"><input type="text" name="mobile_no" id="mobile_no" size="30"></td>
</tr>
<tr>
<td><input type="reset"></td>
<td colspan="2" style="width: 668px"><input type="submit" value="Submit Form" /></td>
</tr>
</table>
</form>
</body>
</html>
&nbsp;