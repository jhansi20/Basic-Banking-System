<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TSF Bank</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: yellow;}

</style>
<script type="text/javascript">
  function fun(){
     location.replace("transfer.php")
  }
</script>
</head>
<body background="3.jpg">
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
        


      </ul>
      
    </div>
  </div>
</nav>
<br><br>
<table border="2" style= "background-color: #e3c77b; color: #761a9b; margin: 0 auto; width: 900px;" >
  <tr>
    <th>Customer id</th>
          <th>Customer name</th>
          <th>Customer Email</th>
          <th>Customer Balance</th>
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
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <tr onclick="fun()"><td>
      <?php echo $row["cid"]."</td>" . "<td>" . $row["cname"]."</td>" ."<td>". $row["email"] . "</td>" . "<td>" . $row["amount"] . "</td></tr>"; 
  }
} 
else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>