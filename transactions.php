<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shoolinian Bank</title>
<link rel="stylesheet" href="style_transactions.css">
  </head>

  <body>
<div class="navbar">
<center>
  <hr color="grey" width=70% size=1>
  <h1> Shoolinian Bank </h1>
  <a  href="index.php">Home</a>
  <a href="sendmoney.php">Send Money</a>
  <a href="customers.php">View All Customers</a>
  <a class="active"  href="transactions.php">Transactions</a>
  <a href="about.php">About Us</a>

      <hr color="grey" width=70% size=1>
      </center>
</div>

<div class="container">
<div class="header"> Welcome to Shoolinian Bank </div>
<img src="logo.png" height=50% width=25% alt="Welcome to Shoolinian Bank" style="padding: 5px; margin-right: 8vw; margin-top:8vh; float:right"> 
</div>

<!--  container closed -->
<br>
<div class="contentbox">
  <center>
<h1> TRANSACTION HISTORY </h1>
  <center>
<table class="customer">
<th> ID </th>
<th> SENDER'S ACCOUNT NO. </th>
<th> SENDER'S NAME </th>
<th> RECEIVER'S ACCOUNT NO. </th>
<th> RECEIVER'S NAME </th>
<th> AMOUNT TRANSFERRED </th>
<th> SENDER'S BALANCE </th>
<th> RECEIVER'S BALANCE </th>
<th> TRANSACTION STATUS </th>
<th> TIME </th>
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
$sql="Select * from transactions WHERE ID>0
";
$result= $con-> query($sql);
if ($result-> num_rows>0){
  while ($row = $result-> fetch_assoc()){
    echo "<tr><td>".$row["ID"]."</td><td>".$row["Sender_AccountNo"]."</td><td>".$row["Sender_Name"]."</td><td>".$row["Receiver_AccountNo"]."</td><td>".$row["Receiver_Name"]."</td><td>".$row["Amount_transferred"]."</td><td>".$row["Sender_Balance"]."</td><td>".$row["Receiver_Balance"]."</td><td>".$row["Status"]."</td><td>".$row["TIME"]."</td></tr>";
  }
  echo "</table>";
}
else{
  echo "</table> <br>";
  echo "0 Result Found!";
}
$con->close();
?>

</div>
<br> <br>
<br> <br>   
<br> <br> 
<br> <br> 
<br> <br> 
<br> <br>
<br> <br>
<br> <br>


<center>
<div class="pagebreak">
</div>
<div style="width: 80%; color: white; padding:  20px">
<h5>“A bank is a place that will lend you money, if you can prove that you don't need it.”
</h5>
</div>
</center>


<div class="pagebreak">
</div>
<div class="footer"> <center>
&copycopyright Ritesh Roushan
</center>
</div>
</center>
  </body>
</html>