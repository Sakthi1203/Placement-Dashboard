<?php
$con= new mysqli("localhost", "root", " ", "placement");

if($con)
  echo "Connection Established";
else
  echo " Connection is not established";
echo "<br>";

$sql="select * from stu_resume where from='$'";
$res=mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>DATE OF BIRTH</th>
<th>EMAILID</th>
<th>GENDER</th>
<th>PHONE NUMBER</th>
<th>MOTHER TONGUE</th>
<th>X BOARD</th>
<th>X PERCENTAGE</th>
<th>X PASS OUT</th>
<th>XII BOARD</th>
<th>XII PERCENTAGE</th>
<th>XII PASS OUT</th>
<th>GRADUATIOM BOARD</th>
<th>GRADUATION PERCENTAGE</th>
<th>GRADUATION PASS OUT</th>
<th>CERTIFICATE</th>
<th>SKILL 1</th>
<th>SKILL 2</th>
<th>SKILL 3</th>
<th>SKILL 4</th>
<th>PROJECT 1</th>
<th>PROJECT 2</th>
<th>PROJECT 3</th>
<th>INTEREST</th>
<th>LANGUAGE 1</th>
<th>LANGUAGE 2</th>
<th>LANGUAGE 3</th>
<th>HOBBY</th>
<th>ADDRESS</th>
<th>CITY</th>
<th>PINCODE</th>
<th>STATE</th>
<th>COUNTRY</th>
</tr>";
while($row = mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row['FIRST NAME']."</td>";
echo "<td>".$row['LAST NAME']."</td>";
echo "<td>".$row['DATE OF BIRTH']."</td>";
echo "<td>".$row['EMAILID']."</td>";
echo "<td>".$row['GENDER']."</td>";
echo "<td>".$row['PHONE NUMBER']."</td>";
echo "<td>".$row['MOTHER TONGUE']."</td>";
echo "<td>".$row['X BOARD']."</td>";
echo "<td>".$row['X PERCENTAGE']."</td>";
echo "<td>".$row['X PASS OUT']."</td>";
echo "<td>".$row['XII BOARD']."</td>";
echo "<td>".$row['XII PERCENTAGE']."</td>";
echo "<td>".$row['XII PASS OUT']."</td>";
echo "<td>".$row['GRADUATION BOARD']."</td>";
echo "<td>".$row['GRADUATION PERCENTAGE']."</td>";
echo "<td>".$row['GRADUATION PASS OUT']."</td>";
echo "<td>".$row['CERTIFICATE']."</td>";
echo "<td>".$row['SKILL 1']."</td>";
echo "<td>".$row['SKILL 2']."</td>";
echo "<td>".$row['SKILL 3']."</td>";
echo "<td>".$row['SKILL 4']."</td>";
echo "<td>".$row['PROJECT 1']."</td>";
echo "<td>".$row['PROJECT 2']."</td>";
echo "<td>".$row['PROJECT 3']."</td>";
echo "<td>".$row['INTEREST']."</td>";
echo "<td>".$row['LANGUAGE 1']."</td>";
echo "<td>".$row['LANGUAGE 2']."</td>";
echo "<td>".$row['LANGUAGE 3']."</td>";
echo "<td>".$row['HOBBY']."</td>";
echo "<td>".$row['ADDRESS']."</td>";
echo "<td>".$row['CITY']."</td>";
echo "<td>".$row['PINCODE']."</td>";
echo "<td>".$row['STATE']."</td>";
echo "<td>".$row['COUNTRY']."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
