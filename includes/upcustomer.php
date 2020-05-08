
<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo 'Not connected';
}
if(!mysqli_select_db($con,'sakila')) {
    echo 'Database not Selected';
}

$customer_id= $_POST['customer_id'];
$store_id= $_POST['store_id'];
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];
$address_id= $_POST['address_id'];
$active= $_POST['active'];
$create_date= $_POST['create_date'];


$sql = "UPDATE `customer` SET `store_id`='".$store_id."',`first_name`='".$first_name."',`last_name`='".$last_name."',`email`='".$email."',`address_id`='".$address_id."',`active`='".$active."',`create_date`='".$create_date."' WHERE `customer_id` = $customer_id";


if (mysqli_query($con, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");

