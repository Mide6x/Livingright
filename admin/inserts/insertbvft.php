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
	$firstverse = $_POST['firstverse'];
  $secondverse  = $_POST['secondverse'];
  $thirdverse = $_POST['thirdverse'];
  $fourthverse  = $_POST['fourthverse'];
  $fifthverse  = $_POST['fifthverse'];

  // attempt insert query execution
  $sql = "INSERT INTO bibleverses (firstverse, secondverse, thirdverse, fourthverse, fifthverse)
        VALUES ('$firstverse', '$secondverse', '$thirdverse', '$fourthverse', '$fifthverse')";
  if(mysqli_query($link, $sql)){
    echo "Records added successfully.
    <p class='link'>Click here to <a href='C:\xampp\htdocs\reg\admin\bibleverses.php'>Continue</a></p>";
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}
// close connection
mysqli_close($link);
?>