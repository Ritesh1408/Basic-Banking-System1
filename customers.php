<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shoolinian Bank</title>
<link rel="stylesheet" href="style_customers.css">
  </head>

  <body>
<div class="navbar">
<center>
    <hr color="grey" width=70% size=1>
  <h1> Shoolinian Bank </h1>
  <a  href="index.php">Home</a>
  <a href="sendmoney.php">Send Money</a>
  <a class="active" href="customers.php">View All Customers</a>
  <a href="transactions.php">Transactions</a>
  <a href="about.php">About Us</a>

      <hr color="grey" width=70% size=1>
      </center>
</div>

<div class="container">
<div class="header"> Welcome to Shoolinian Bank </div>
<img src="logo.png" height=50% width=25% alt="Welcome to Shoolinian Bank" style="padding: 5px; margin-right: 8vw; margin-top:8vh; float:right"> 
</div>
<center>
<div class="contentbox" cellspacing="20px" cellpadding="20px">
  <h1> ALL CUSTOMERS </h1>

<table class="customer" style="color: white">
<th> Name </th>
<th> Email </th>
<th> Account No </th>
<th> Balance </th>
</tr>

<?php
$server="localhost";
$username="root";
$password="";
$dbname="bank_db";

//create connections
$con=mysqli_connect( $server, $username, $password, $dbname);
//check for connection success
if (!$con){
 die("Connection to this database failed due to ".mysqli_connect_error());
}

$sql="Select Name, Email, Account_no, Balance from customers";
$result= $con-> query($sql);
if ($result-> num_rows>0){
  while ($row = $result-> fetch_assoc()){
    echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Account_no"]."</td><td>".$row["Balance"]."</td></tr>";
  }
  echo "</table>";
}
else{
  echo "0 Result Found!";
}
$con->close();
?>
  
</div>
<div class="pagebreak">
</div>
<div style="width: 80%; color: white; padding: 20px">
<h5>“A bank is a place that will lend you money, if you can prove that you don't need it.”
</h5>
</div>
<div class="pagebreak">
</div>
<div class="footer"> <center>
&copy copyright Ritesh Roushan
</center>
</div>
</center>
  </body>
</html>