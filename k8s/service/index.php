<html>
<head>


<title>Employee Regisration App</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: left;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 100px;
  border-radius: 200px;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$servername = "db";
$username = "root";
$password = "whizlabs";
$dbname = "company";
$name=$_POST["name"];
$phone=$_POST["mobile"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO employee (name, mobile)
VALUES ('".$name."', '".$phone."')";

if ($conn->query($sql) === TRUE) {
    echo  "Record created successfully" ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
</head>
<body>
<h2> Employee Registration Form </h2>
<form action="index.php" method="POST">
        <div class="imgcontainer">
    <img src="image.png" alt="Avatar" class="avatar">
  </div>

<div class="container">
    <label for="name"><b>Employee Name</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>
     <br />
    <label for="mobile"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter mobile" name="mobile" required>
     <br />
    <button type="submit">Add Employee</button>
  </div>

        </form>
</body>
</html>
