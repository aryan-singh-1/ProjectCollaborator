<?php
/* 
include('connection.php');

    $username = $_POST['username'];
    $projnm = $_POST['project_nm'];
    #$Abs = $_POST['Abstract'];
    #$prob = $_POST['Problem Statement'];
    #$Obj = $_POST['Objectives'];
    #$Compr = $_POST['Comprehensive'];
    #$link = $_POST['Links'];
    #$memb1 = $_POST['memb1_username'];
    #$memb2 = $_POST['memb2_username'];
    #$ment = $_POST['mentor_username'];  
 
$sqlquery = "INSERT INTO table project_info VALUES
    ('$username','$projnm')"; #,'$Abs','$Obj','$Compr','$link','$memb1','$memb2','$ment')"; #,'$prob'
 
if ($con->query($sqlquery) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "record not inserted";
}
*/

include('connection.php');
$username = $_POST['username'];
$projnm = $_POST['project_nm'];
$Abs = $_POST['Abstract'];
$mentor_username = $_POST['mentor_username'];
/*$query = mysqli_query($con, "INSERT INTO project_info (username, project_nm, Abstract) VALUES ('$username', '$projnm', '$Abs')" );
while($row = mysqli_fetch_array($query))
{
echo"Success";
}*/
$sql = "INSERT INTO project_info (username, project_nm, Abstract)
VALUES ('$username', '$projnm', '$Abs')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>