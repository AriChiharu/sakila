
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


$sql = "INSERT INTO customer (customer_id,store_id,first_name,last_name,email,address_id,active,create_date) VALUES ('$customer_id','$store_id','$first_name','$last_name','$email','$address_id','$active','$create_date')";


if (mysqli_query($con, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

