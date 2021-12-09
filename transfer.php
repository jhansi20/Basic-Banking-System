<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TSF Bank</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
  	div.reg {
  background-color: lightgrey;
  width: 300px;
  border: 2px solid black;
  padding: 50px;
  padding-top: 10px;
  margin: 20px;
}
  </style>
</head>
<body background="5.jpg">
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
<center>
<div class="reg">
    <h1>Transfer</h1>
<div id="reg-form">
		<form method="POST" name="f1" action="validate.php">
			<div>
			<label for="sname" style="padding-right: 20px;">Sender Name:</label>
			<input type="text" name="from" placeholder="Sender Name" required style="border-color: #6254AAFF;">
			</div>
			<div>
			<label for="rname" style="padding-right: 20px;">Receiver Name:</label>
			<input type="text" name="to" placeholder="Receiver Name" required style="border-color: #6254AAFF;">
			</div>
			<div>
			<label for="amount" style="padding-right: 20px;">Amount:</label>
			<input type="text" name="amount" placeholder="Amount" required style="border-color: #6254AAFF;">
			</div>
			<div style="padding-top: 20px;">
				<button type="submit">Transfer</button>
			</div>
		</form>
	</div>
</div>
<label name="result"></label>
</body>
</html>