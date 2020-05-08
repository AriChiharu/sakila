
<?php
$include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}

$country_id= $_POST['country_id'];
$country= $_POST['country'];


$sql = "UPDATE `country` SET `country`='".$country."' WHERE `country_id` = $country_id";


if (mysqli_query($conn, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");

