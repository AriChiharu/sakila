
<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo 'Not connected';
}
if(!mysqli_select_db($con,'sakila')) {
    echo 'Database not Selected';
}

$city_id= $_POST['city_id'];
$city= $_POST['city'];
$country_id= $_POST['country_id'];


$sql = "UPDATE `city` SET `city`='".$city."', `country_id`='".$country_id."' WHERE `city_id` = $city_id";

if (mysqli_query($con, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");

