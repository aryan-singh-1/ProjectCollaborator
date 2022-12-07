<?php
include('connection.php');
$userREQSD = $_POST['mentor_username'];
$REQST = $_POST['REQ'];
$from = $_POST['fromUser'];
$proj = $_POST['proj'];
echo $userREQSD;
echo $REQST;
$sql = "INSERT INTO social_info (username, REQ, Accepted, REPLY)
VALUES ('$userREQSD', '$REQST', '$from', '$proj')";

if ($con->query($sql) === TRUE) {
  echo "REQUEST SENT";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>