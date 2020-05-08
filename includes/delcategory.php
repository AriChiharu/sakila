
<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo 'Not connected';
}
if(!mysqli_select_db($con,'sakila')) {
    echo 'Database not Selected';
}

$category_id= $_POST['category_id'];



$sql = "DELETE FROM category WHERE `category_id` = $category_id";


if (mysqli_query($con, $sql)) {
    echo "Record has been deleted successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../delete.php");

