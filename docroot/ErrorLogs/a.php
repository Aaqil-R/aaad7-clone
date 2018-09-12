<?php 
	require('init.php');
	echo "AAA Debug Page <br>";
?>

<!-- Rendering the form for easy access -->
<form  method="get" id="searchform"> 
	<input  type="text" name="ID">
	<input type="date" name="date" min="2015-01-01">
  <input  type="submit" value="submit"> 
</form> 

<?php
if(isset($_GET['ID']) || isset($_GET['date'])){ 
	//do  something here in code 
	$sql = "SELECT * FROM stripe_error_log ";
	if($_GET['ID'] != ''){
		$sql = $sql.'where ID = '.$_GET['ID'];
	}
	if($_GET['date'] != ''){
		if($_GET['ID'] != ''){
			$sql = $sql.' and datatime > '.$_GET['date'];
		}
		else{
			$sql = $sql.' where datatime > '.strtotime($_GET['date']);	
		}
	}
	echo $sql."<br>";
	displayTable($sql);
} 
else{ 
	echo  "<p>Please enter a search query</p>"; 
}
?>

<?php

function displayTable($sql){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testdb";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    echo $result->num_rows." results Found";
    echo "<table border='1'>";
    echo "<thead><tr><td>ID</td><td>Form ID</td><td>Date</td><td>Result</td></tr></thead>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
      echo "<td valign='top'><pre>" . $row["ID"]. "</pre></td>";
      echo "<td valign='top'><pre>" . $row["formid"]. "</pre></td>";
      echo "<td valign='top'><pre>";
      	print_r(date('m/d/Y H:i:s', $row["datatime"]));
      echo "</pre></td>";
      echo "<td valign='top'><pre>";
      	print_r(unserialize( $row["result"] ));
      echo "</pre></td>";
      echo"</tr>";
    }
    echo"</table>";
	} else {
	    echo "0 results";
	}
	$conn->close();
}
?>