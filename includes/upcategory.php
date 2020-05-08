
<?php
$include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}

$category_id= $_POST['category_id'];
$name= $_POST['name'];


$sql = "UPDATE `category` SET `name`='".$name."' WHERE `category_id` = $category_id";


if (mysqli_query($conn, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");

