<?php
session_start();

include('includes/config.php');
$pid = $_POST['pid'];

if(!empty($_POST['action'] && $_POST['pid']))
  {
$house_no=$_POST['house_no'];
$road_no=$_POST['road_no'];
$word_no=$_POST['word_no'];
$area_name=$_POST['area_name'];
$thana=$_POST['thana'];
$post_code=$_POST['post_code'];
$district=$_POST['district'];
$division=$_POST['division'];


$sql = "UPDATE donner SET  house_no ='$house_no', road_no='$road_no',word_no='$word_no',area_name='$area_name',thana='$thana',post_code='$post_code',district='$district',division='$division'  WHERE id='$pid'";
$result = $conn->query($sql);

if ($result === TRUE) {
    echo "Record updated successfully";
    header('Location: ' . 'profile.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();}
?>