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
	$topic = $_POST['topic'];
  $text  = $_POST['text'];
  $sermon = $_POST['sermon'];
  $prayer  = $_POST['prayer'];

  // attempt insert query execution
  $sql = "INSERT INTO wordfortheday (topic, text, sermon, prayer)
        VALUES ('$topic', '$text', '$sermon', '$prayer')";
  if(mysqli_query($link, $sql)){
    echo "Records added successfully.
    <p class='link'>Click here to <a href='C:\xampp\htdocs\reg\admin\wordfortheday.php'>Continue</a></p>";
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}
// close connection
mysqli_close($link);
?>