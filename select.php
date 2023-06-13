<html>
    <style>
        body{
            font-family:Georgia, 'Times New Roman', Times, serif;
            background-color:papayawhip;
        }
        form{
            margin-left:410px;
            margin-top:200px;
        }
        button{
            background-color: #ff0000;
            color: white; /* Set the text color */
  padding: 10px 20px; /* Set padding to create some spacing around the text */
  font-size: 16px; /* Set the font size */
  border: none; /* Remove the border */
  cursor: pointer; /* Add a cursor pointer on hover */
  border-radius: 4px; /* Add some rounded corners */
  margin-left:140px;
        }
        button:hover{
            background-color: #4CAF50;
        }
        
    </style>
    <body>
        <form action="view.php" method="post">
        <h2>Hello user!</h2>
        
        <h3>View Your Data:</h3>
            Enter Your phone number: <input type="text" name="phone"/><br><br>
        <button>View</button>
        </form>
    </body>
</html>