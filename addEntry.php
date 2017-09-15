<?php
$myFile = 'Registrations.csv';
$name = $_POST['fName'].' '.$_POST['mName'].' '.$_POST['lName'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$c  = '';
foreach ($course as $key => $value) {
 $c = $c.','.$value;
}
if(stripos($c,'Mehendi')>=0&&stripos($c,'Drawing')>=0)
	$c = ',Both';
if(stripos($c,'Computer')>=0)
	$c = $c.'+1'
$age = $_POST['age'];
$area = $_POST['place'];
if(!file_exists($myFile)){
	$fh = fopen($myFile,'w');
	echo fwrite($fh, "Name,Contact,Course,Gender,Age,Email,Place");
	fclose($fh);
	chmod($myFile,0777);
}
$fh = fopen($myFile,"a");
echo fwrite($fh,"\n".$name.','.$contact.$c.','.$gender.','.$age.','.$email.','.$area);
fclose($fh);
?>