
<?php
include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}

$city_id= $_POST['city_id'];
$city= $_POST['city'];
$country_id= $_POST['country_id'];


$sql = "INSERT INTO city (city_id,city, country_id) VALUES ('$city_id','$city','$country_id')";


if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

