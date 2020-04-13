<style>
body{
	font-family: sans-serif;
}
</style>
<body background="background.jpg" visible="true">
<strong>Edit</strong> 
<form method="post" action="add_new_subject_edit_save.php">
<?php
echo($_GET["id"]);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "management_information_system";
$mysqli = new mysqli($servername,$username,$password,$dbname);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM add_new_subject WHERE id=" . $_GET["id"];
if ($result = $mysqli -> query($sql)) {
	echo("<table>");
while ($obj = $result -> fetch_object()) {
	echo("<tr>");
	echo("<td>");
	echo("<input name=\"course\" value=\"");
	echo($obj->course);
	echo("\">");
	echo("</td>");
	echo("</tr>");
	echo("<tr>");
	echo("<td>");
	echo("<input name=\"subject_code\" value=\"");
	echo($obj->subject_code);
	echo("\">");
	echo("</td>");
  	echo("</tr>");
  	echo("<tr>");
	echo("<td>");
	echo("<input name=\"pre_requisite\" value=\"");
	echo($obj->pre_requisite);
	echo("\">");
	echo("</td>");
  	echo("</tr>");
  	echo("<tr>");
	echo("<td>");
	echo("<input name=\"description\" value=\"");
	echo($obj->description);
	echo("\">");
	echo("</td>");
  	echo("</tr>");

    //printf("%s (%s)\n", $obj->Lastname, $obj->Age);//
  }
  echo("</table>");
  $result -> free_result();
}

$mysqli -> close();
?>
<input type="submit" value="Save">
</form>
</body>

