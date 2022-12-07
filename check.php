<?php 
include('connection.php');

//if ( isset($_POST['check']) ) {
//$check = on;
//} else { 
//  $check = "";
//}

//$query = mysqli_query($con,"INSERT INTO project_info (check) VALUES ('$check')");
//$row = mysqli_fetch_array($query);
//while($row = mysqli_fetch_array($query)){
//echo"checked";
//}


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

$result = mysqli_query($con, "select * from social_info");

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($rows as $row) {
    printf("%s (%s)\n", $row["username"], $row["REPLY"]);
}
?>