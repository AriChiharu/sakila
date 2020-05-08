
<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo 'Not connected';
}
if(!mysqli_select_db($con,'sakila')) {
    echo 'Database not Selected';
}

$address_id= $_POST['address_id'];
$address= $_POST['address'];
$address2= $_POST['address2'];
$district= $_POST['district'];
$city_id= $_POST['city_id'];
$postal_code= $_POST['postal_code'];
$phone= $_POST['phone'];

$sql = "UPDATE `address` SET `address`='".$address."',`address2`='".$address2."',`district`='".$district."',`city_id`='".$city_id."',`postal_code`='".$postal_code."',`phone`='".$phone."' WHERE `address_id` = $address_id";


if (mysqli_query($con, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

