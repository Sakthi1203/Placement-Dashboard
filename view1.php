<!DOCTYPE html>
<html>
  <head>
    <title>View database</title>
    <script>
      function displayContent() {
        document.getElementById("content").style.display = "block";
      }
    </script>
  </head>
  <body>
    <button onclick="displayContent()">Show</button>
    <div id="content" style="display: none;">
    <?php
        $con= new mysqli("localhost", "root", "", "placement");
        if($con)
          echo "Your data in the table";
        else
          echo " Connection is not established";
        echo "<br>";

$sql="select * from stu_resume";
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
echo "<td>".$row['firstname']."</td>";
echo "<td>".$row['lastname']."</td>";
echo "<td>".$row['dateofbirth']."</td>";
echo "<td>".$row['emailid']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['phonenum']."</td>";
echo "<td>".$row['mothertongue']."</td>";
echo "<td>".$row['X']."</td>";
echo "<td>".$row['Xper']."</td>";
echo "<td>".$row['Xpass']."</td>";
echo "<td>".$row['XII']."</td>";
echo "<td>".$row['XIIper']."</td>";
echo "<td>".$row['XIIpass']."</td>";
echo "<td>".$row['graduation']."</td>";
echo "<td>".$row['graduationper']."</td>";
echo "<td>".$row['graduationpass']."</td>";
echo "<td>".$row['certificate']."</td>";
echo "<td>".$row['skill1']."</td>";
echo "<td>".$row['skill2']."</td>";
echo "<td>".$row['skill3']."</td>";
echo "<td>".$row['skill4']."</td>";
echo "<td>".$row['pro1']."</td>";
echo "<td>".$row['pro2']."</td>";
echo "<td>".$row['pro3']."</td>";
echo "<td>".$row['interest']."</td>";
echo "<td>".$row['lang1']."</td>";
echo "<td>".$row['lang2']."</td>";
echo "<td>".$row['lang3']."</td>";
echo "<td>".$row['hobby']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['pincode']."</td>";
echo "<td>".$row['state']."</td>";
echo "<td>".$row['country']."</td>";
echo "</tr>";
}
echo "</table>";
//mysql_close($con);
?>

    </div>
  </body>
</html>
