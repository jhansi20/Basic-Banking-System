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
$from=$_POST['from'];
$to=$_POST['to'];
$amount=$_POST['amount'];
$sql = "SELECT * FROM customer where cname = '$from' ";
$result = $conn->query($sql);
$sql1 = "SELECT * FROM customer where cname = '$to' ";
$result1 = $conn->query($sql1);
if ($result->num_rows > 0 && $result1->num_rows > 0) {
  $row = $result->fetch_assoc();
  $row1 = $result1->fetch_assoc();
  if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }
    else if($amount > $row['amount']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }
     else {
        
                // deducting amount from sender's account
                $newbalance = $row['amount'] - $amount;
                $s = "UPDATE customer set amount=$newbalance where cname='$from'";
                mysqli_query($conn,$s);
             

                // adding amount to reciever's account
                $newbalance = $row1['amount'] + $amount;
                $sq = "UPDATE customer set amount=$newbalance where cname='$to'";
                mysqli_query($conn,$sq);
                
                $sender = $row['cname'];
                $receiver = $row1['cname'];
                $sql = "INSERT INTO transfer(`sname`, `rname`, `amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Hurray! Transaction is Successful');
                                     window.location='history.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
}
else{
  echo "<script> alert('Please select valid names');
                                     window.location='view.php';
                           </script>";
  }