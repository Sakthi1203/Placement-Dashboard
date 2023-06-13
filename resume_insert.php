<?php
$firstname = $_POST['tfname'];
$lastname = $_POST['tlname'];
$dateofbirth=$_POST['tdate'];
$emailid=$_POST['temail'];
$gender=$_POST['tgender'];
$phonenum=$_POST['tphoneno'];
$mothertongue=$_POST['tmother'];
$X=$_POST['tClassX_Board'];
$Xper=$_POST['tClassX_Percentage'];
$Xpass=$_POST['tClassX_Year_of_passing'];
$XII=$_POST['tClassXII_Board'];
$XIIper=$_POST['tClassXII_Percentage'];
$XIIpass=$_POST['tClassXII_Year_of_passing'];
$graduation=$_POST['tGraduation_Board'];
$graduationper=$_POST['tGraduation_Percentage'];
$graduationpass=$_POST['tGraduation_Year_of_passing'];
$certificate=$_POST['tcertification'];
$skill1=$_POST['tskills1'];
$skill2=$_POST['tskills2'];
$skill3=$_POST['tskills3'];
$skill4=$_POST['tskills4'];
$pro1=$_POST['tproject1'];
$pro2=$_POST['tproject2'];
$pro3=$_POST['tproject3'];
$interest=$_POST['tinterest'];
$lang1=$_POST['tlanguage1'];
$lang2=$_POST['tlanguage2'];
$lang3=$_POST['tlanguage3'];
$hobby=$_POST['thobbies'];
$address=$_POST['taddress'];
$city=$_POST['tcity'];
$pincode=$_POST['tPin_code'];
$state=$_POST['tstate'];
$country=$_POST['tcountry'];
$con = mysqli_connect('localhost','root','','placement');
	if($con)
	{
    	echo "Connection Established"."<br>";
	}
	else
	{
    	echo "Connection Not Established"."<br>";
	}

$db=mysqli_select_db($con,"placement");
if ($db)
{
	echo "Database selected"."<br>";
}
else
{
	echo "Database not selected"."<br>";
}

$sql="INSERT INTO stu_resume values('$firstname','$lastname','$dateofbirth','$emailid','$gender','$phonenum','$mothertongue','$X','$Xper','$Xpass','$XII','$XIIper','$XIIpass','$graduation','$graduationper','$graduationpass','$certificate','$skill1','$skill2','$skill3','$skill4','$pro1','$pro2','$pro3','$interest','$lang1','$lang2','$lang3','$hobby','$address','$city','$pincode','$state','$country')";
if(mysqli_query($con,$sql))
{
	echo "Record inserted successfully";
	header('Location:insert.php');
}


else
echo "Record not inserted";
mysqli_close($conn);
?>
