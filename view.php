<html>
    <head>
        <style>
            .label{
                font-family:Georgia, 'Times New Roman', Times, serif;
                font-weight:bold;
                display:inline-block;
                width:150px;
                margin-left:50px;
                font-size:20px;
                text-transform:capitalize;
            }
            body
            {
                background-image:url(bg1.jpg);
                background-repeat:no-repeat;
                background-size:3200px;
                
            }
            img{
                height:200px;
                width:200px;
                border-radius:400px;
                padding:20px;
                
            }
            section{
                border:3px dotted black;
                width:900px;
                margin-left:200px;
            }
            
    .data {
        /* Add your desired CSS styles here */
        color:blue;
        font-size: 18px;
        display:inline-block;
        margin-left:10px;
        font-weight: bold;
        /* ... */
    }
    .custom-button {
  background-color:#ff0000 ; /* Set the background color */
  color: white; /* Set the text color */
  padding: 10px 20px; /* Set padding to create some spacing around the text */
  font-size: 16px; /* Set the font size */
  border: none; /* Remove the border */
  cursor: pointer; /* Add a cursor pointer on hover */
  border-radius: 4px; /* Add some rounded corners */
  margin-left:400px;
}

.custom-button:hover {
  background-color: #45a049; /* Change the background color on hover */
}



        </style>
    </head>
    <body>
        <h2>Hello User!</h2>
        <img src="user.jpg"/>
        <section>
        <?php
// Assuming you have already established a database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "placement";
// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get the phone number from the URL parameter
$phoneNumber = $_POST['phone'];
// Prepare the SQL statement
$stmt = $conn->prepare("SELECT * FROM stu_resume WHERE phonenum = ?");
$stmt->bind_param("s", $phoneNumber);
$stmt->execute();
// Retrieve the result
$result = $stmt->get_result();
// Check if the record was found
if ($result->num_rows > 0) {
    // Display the record data
    $row = $result->fetch_assoc();
    echo "<p><span class='label'>First Name    :</span> <span class='data'> " . $row['firstname'] . "</span><br>";
    echo "<p><span class='label'>Last Name     :</span> <span class='data'> " . $row['lastname'] . "</span><br>";
    echo "<p><span class='label'>Date of Birth :</span> <span class='data'> " . $row['dateofbirth'] . "</span><br>";
    echo "<p><span class='label'>Email ID      :</span> <span class='data'> " . $row['emailid'] . "</span><br>";
    echo "<p><span class='label'>Gender        :</span> <span class='data'> ". $row['gender']."</span><br>";
    echo "<p><span class='label'>Phone Number  :</span> <span class='data'> " . $row['phonenum'] . "</span><br>";
    echo "<p><span class='label'>Mother Tongue :</span> <span class='data'> ".$row['mothertongue']."</span><br>";
    echo "<p><span class='label'>X Board       :</span> <span class='data'> ".$row['X']."</span><br>";
    echo "<p><span class='label'>X Percentage  :</span> <span class='data'> ".$row['Xper']."</span><br>";
    echo "<p><span class='label'>X Passed Out  :</span> <span class='data'> ".$row['Xpass']."</span><br>";
    echo "<p><span class='label'>XII Board     :</span> <span class='data'> ".$row['XII']."</span><br>";
    echo "<p><span class='label'>XII Percentage:</span> <span class='data'> ".$row['XIIper']."</span><br>";
    echo "<p><span class='label'>XII Passed Out:</span> <span class='data'> ".$row['XIIpass']."</span><br>";
    echo "<p><span class='label'>Graduation    :</span> <span class='data'> ".$row['graduation']."</span><br>";
    echo "<p><span class='label'>Graduation Percentage  :</span> <span class='data'> ".$row['graduationper']."</span><br>";
    echo "<p><span class='label'>Passed Out    :</span> <span class='data'> ".$row['graduationpass']."</span><br>";
    echo "<p><span class='label'>Certificate   :</span> <span class='data'> ".$row['certificate']."</span><br>";
    echo "<p><span class='label'>Skill1        :</span> <span class='data'> ".$row['skill1']."</span><br>";
    echo "<p><span class='label'>Skill2        :</span><span class='data'>  ".$row['skill2']."</span><br>";
    echo "<p><span class='label'>Skill3        :</span> <span class='data'> ".$row['skill3']."</span><br>";
    echo "<p><span class='label'>Skill4        :</span> <span class='data'> ".$row['skill4']."</span><br>";
    echo "<p><span class='label'>Project1      :</span> <span class='data'> ".$row['pro1']."</span><br>";
    echo "<p><span class='label'>Project2      :</span> <span class='data'> ".$row['pro2']."</span><br>";
    echo "<p><span class='label'>Project3      :</span> <span class='data'> ".$row['pro3']."</span><br>";
    echo "<p><span class='label'>Interest      :</span> <span class='data'> ".$row['interest']."</span><br>";
    echo "<p><span class='label'>Hobby         :</span><span class='data'>  ".$row['hobby']."</span><br>";
    echo "<p><span class='label'>Address       :</span> <span class='data'> ".$row['address']."</span><br>";
    echo "<p><span class='label'>City          :</span> <span class='data'> ".$row['city']."</span><br>";
    echo "<p><span class='label'>Pincode       :</span><span class='data'>  ".$row['pincode']."</span><br>";
    echo "<p><span class='label'>State         :</span> <span class='data'> ".$row['state']."</span><br>";
    echo "<p><span class='label'>Country       :</span><span class='data'> ".$row['country']."</span><br>";
} else {
    echo "No record found for the given phone number.";
}

// Close the database connection
$stmt->close();
$conn->close();
?><br>
<button class="custom-button"onclick="location.href='Welcome.php'">Back</button>
        </section>

    </body>
</html>
