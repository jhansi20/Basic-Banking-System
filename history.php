<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TSF Bank</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body background="2.jpg">
	<!-- Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TSF Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view.php">View Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="history.php">Transfer History</a>
        </li>
        
</div>


      </ul>
      
    </div>
  </div>
</nav>
<br><br>
<table border="2" style= "background-color: #e3c77b; color: #761a9b; margin: 0 auto; width: 500px;" >
  <tr>
          <th>Sender name</th>
          <th>Receiver name</th>
          <th>Amount</th>
        </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM transfer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
       echo "<tr><td>" . $row["sname"] . "</td><td>" . $row["rname"]."</td><td>" . $row["amount"] . "</td></tr>";
  }
} 
$conn->close();
?>
</body>
</html>