<?php
session_start();
include_once("controller.php");

switch($_SESSION['id']) {
	case null:
	case "":
	case "-1":
	case "0":
		header("Location: index.php");
		break;

}

$result = getHorse($_SESSION['id']);
?>

<html>
<head>
<title>Horstel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<div style="float: right;text-align: right;">
	<a href='findstable.php'>Back</a>
</div>
<h1>Add horse</h1>
<form action="controller.php?t=ah" method="POST">
  	Name:<input type="text" name="name" value="">
  	<br><br>
  	<input type="submit" value="Submit">
</form>
<br><br>
<?php
$count = 1;

$countSplit = explode(";", $result);

for($i=0;$i<$countSplit[0];$i++) {
	$stringSplit = explode(",", $countSplit[$count]);
	echo $stringSplit[0] . " - <a href='#'>link</a>";
	echo "<br>";
	$count++;
}
?>

</body>
</html>