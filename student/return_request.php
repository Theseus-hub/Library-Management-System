<?php
require('dbconn.php');

$id=$_GET['id'];

$ID=$_SESSION['ID'];

$sql="insert into LMS.return (ID,BookId) values ('$ID','$id')";

if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:0.01; url=current.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
    header( "Refresh:0.01; url=current.php", true, 303);

}




?>