<!DOCTYPE html>
<html lang="en">

<body>

<?php 
	
	// Read file
	/* $mydata = fopen("data.txt", "r") or die("File could not be viewed");

	echo fread($mydata, filesize("data.txt"));

	fclose($mydata); */

	//Write file
	$mydata = fopen("data.txt", "w") or die("File could not be viewed");

	$txt1 = "Hello World!!!\n";
	fwrite($mydata, $txt1);
	$txt2 = "PHP File Handling\n";
	fwrite($mydata, $txt2);
	$txt3 = "Write File\n";
	fwrite($mydata, $txt3);

	fclose($mydata);

?>

</body>

</html>