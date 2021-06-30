<?php
$login_user="";
if(isset($_GET['q'])) {
    $login_user = $_GET['q'];
}

$mycomplaints = $errorMsg = $spec = "";

$servername= "localhost";
$usernamed = "root";
$passwords = "12345";
$dbname = "crime";

$conn = new mysqli($servername, $usernamed, $passwords, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
 }

$sql2 = "SELECT * FROM police WHERE police_id = '$login_user'";
$result2=$conn->query($sql2);
$row2=$result2->fetch_assoc();
$spec=$row2["specialization"];
$spec=test_input($spec);

$sql = "SELECT * FROM complaint WHERE category = '$spec'";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
	$mycomplaints = "<table border='2' style='column-width: 200px; color:white;'>
	<tr><th>Complaint ID</th><th>Category</th><th>Subject</th><th>Details</th><th>Date</th><th>Crime Location</th><th>Suspect Details</th><th>Status</th><th>Priority</th><th>Bureau Notes</th><th>action</th>
	</tr>";
	while($row = $result->fetch_assoc()) 
	{
		$compid=$row['c_id'];
		$linkc = "<a href='viewandupdatecomplaint.php?q=$login_user&c=$compid'>View and Update</a>";
		$mycomplaints = $mycomplaints . "<tr><td>" . $row['c_id'] . "</td><td>" . $row['category'] . "</td><td>"  . $row['subject'] . "</td><td>" . $row['details'] . "</td><td>" . $row['datetime'] . "</td><td>". $row['area'] . "</td><td>" . $row['suspect'] . "</td><td>" . $row["status"] . "</td><td>" . $row['priority'] . "</td><td>" . $row['bureau_notes'] . "</td><td>" . $linkc ."</td></tr>";
	}
	$mycomplaints = $mycomplaints . "</table>";
} else {
	$errorMsg = "No $spec category complaints in the system at this point!!!";
}
$conn->close();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>crime portal</title>
        <link rel="icon" href="favicon.ico">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		.error 
		{
			color: #FF0000;
		}
		.success 
		{
			color: #008000;
		}
		</style>
    </head>
    <body style="background-color:black";>
        <div style="background-color: black;">
             <h1 style="margin-left:50px;font-size: 50px; color:whitesmoke;font:bold;">CRIME PORTAL</h1>  
        </div>
		<div><h2><a href="policewelcome.php?q=<?php echo $login_user;?>">Back</a></h2></div>
        <h2 style="margin-left:460px;font:bold;font-size:45px; color:white;"><i><?php echo $spec; ?></i>&nbsp;&nbsp;Complaints</h2>
		<br><br>
		<div><span class="error"><?php echo $errorMsg;?></span></div>
		<div id="mycomplaints"><?php echo $mycomplaints;?></div>
    
    </body>
</html>
