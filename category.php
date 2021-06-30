<?php
$login_user="";
if(isset($_GET['q'])) {
    $login_user = $_GET['q'];
}

// define variables and set to empty values
$successMsg = $errorMsg = $status = $statusErr = "";
$statusresult = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["status"])) {
    $statusErr = "Category";
  } else {
    $status = test_input($_POST["status"]);
     }
}

if (!empty($_POST["status"]) && $statusErr == "")
{
	$servername= "localhost";
    $usernamed = "root";
    $passwords = "12345";
    $dbname = "crime";
	
    $conn = new mysqli($servername, $usernamed, $passwords, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     }
    
    $sql = "SELECT * from complaint WHERE category= '$status'";
	$result=$conn->query($sql);
    if ($result->num_rows > 0) {
        $successMsg = "records shown below ";
		$statusresult = "<table border='2' style='column-width: 200px;'>
		<tr><th>Complaint ID</th><th>Category</th><th>Category Description</th><th>Bureau Location</th><th>Subject</th><th>Details</th><th>Date</th><th>Crime Location</th><th>Suspect Details</th><th>Status</th><th>Priority</th><th>Bureau Notes</th>
	</tr>";
        while($row = $result->fetch_assoc()) 
		{
			$spec=$row['category'];
			$statusdesc=$row['status'];
			$sql2 = "SELECT * FROM specializations WHERE specialization = '$spec'";
			$sql3 = "SELECT * FROM status WHERE status = '$statusdesc'";
			$result2=$conn->query($sql2);
			$row2=$result2->fetch_assoc();
			$result3=$conn->query($sql3);
			$row3=$result3->fetch_assoc();
            $statusresult = $statusresult . "<tr><td>" . $row['c_id'] . "</td><td>" . $row['category'] . "</td><td>" . $row2["s_desc"]."</td><td>" . $row2["s_location"] . "</td><td>" . $row['subject'] . "</td><td>" . $row['details'] . "</td><td>" . $row['datetime'] . "</td><td>". $row['area'] . "</td><td>" . $row['suspect'] . "</td><td>" . $row["status"] . "</td><td>" . $row['priority'] . "</td><td>" . $row['bureau_notes'] . "</td></tr>";
	
        }
		$statusresult = $statusresult . "</table>";
    } else {
        $errorMsg = "No record !!!";
    }
	$conn->close();
}

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
        <title>Crime portal</title>
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
    <body>

        
           <center> <h1 style=font-size: 50px; color:white;font:bold;">CRIME PORTAL</h1>  </center>
        </div>

        <h3><center>SEARCH BY CATEGORY</center></h3>
		<div style="margin-top: 10px;height: 300px; width: 800px; margin-right:470px;">
            <center>
				<form method="post" action="#">
			<center>	<table border="0.0" style="margin-left:480px; height:200px;width:600px;color:black;font:white;">
					<tr><td >&nbsp;&nbsp;ENTER CATEGORY:</td><td>&nbsp;&nbsp;&nbsp;<input type="text" name="status" placeholder="eg kidnapping/theft/robbery"><span class="error">* <?php echo $statusErr;?></span></td></tr>
					<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="submit" name="submit" value="Submit"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Back" onclick="location.href='adminwelcome.php?q=<?php echo $login_user; ?>';" style="width:65px;"><br><span class="success"><?php echo $successMsg;?></span><span class="error"><?php echo $errorMsg;?></span></td></tr>
				</table></center>
				</form>
			</center>
		</div>
		<div id="statusresult"><?php echo $statusresult;?></div>
	
    </body>
</html>
