<?php
$yes = $_POST["yes"];


if ($yes == 1) {

	$random = (rand() % 1000000);
	echo "Setting up user id <span style=\"font-size:20px;font-weight:bold\">$random</span><br><br>";
	if (is_dir("subjects/$random/"))
		die("Error. Try again");
	system("mkdir subjects/$random/", $ret);
	if ($ret == 0) {

		system("subjects/$random/", $ret);
		if ($ret == 0)
			echo "User id <span style=\"font-size:20px;font-weight:bold\">$random</span> ready to annotate!";
		echo "<br><a href=\"http://130.233.245.37/neurocinematics/localizer/\">SAVE THE ID AND CONTINUE HERE</a>";
	} else	
		echo "There was an error. Email enrico.glerean@aalto.fi";
} else {
?>

	<form action="makesubj.php" method="POST">
		<input type="hidden" name="yes" value="1">
		<input type="submit" name="submit" value="generate id" />
	</form>
<?php
}
?>