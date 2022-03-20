<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "loginsystem");
// Check connection
if($link === false){
 die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if submit button is clicked
if(isset($_POST['submit'])){
	$list = $_POST['list'];

  // attempt insert query execution
  $sql = "INSERT INTO tdlist (list)
        VALUES ('$list')";
  if(mysqli_query($link, $sql)){
    echo "Records added successfully.
    <p class='link'>Click here to <a href='C:\xampp\htdocs\reg\admin\dashboard.php'>Continue</a></p>";
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}
// close connection
mysqli_close($link);
?>