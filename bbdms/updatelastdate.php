<?php
session_start();

include('includes/config.php');
$pid = $_POST['pid'];

if(!empty($_POST['action1'] && $_POST['pid']))
  {
$last_donate_date=$_POST['last_donate_date'];





$sql = "UPDATE donner SET  last_donate_date = '$last_donate_date'   WHERE id='$pid'";
$result = $conn->query($sql);

if ($result === TRUE) {
    echo "Record updated successfully";
    header('Location: ' . 'profile.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();}
?>