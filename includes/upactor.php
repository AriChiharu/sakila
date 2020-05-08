
<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo 'Not connected';
}
if(!mysqli_select_db($con,'sakila')) {
    echo 'Database not Selected';
}

$actor_id= $_POST['actor_id'];
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];


$sql = "UPDATE `actor` SET `first_name`='".$first_name."',`last_name`='".$last_name."' WHERE `actor_id` = $actor_id";


if (mysqli_query($con, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");