
<?php
include_once 'dbh.php';

if(!$conn)
{
    echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}

$film_id= $_POST['film_id'];
$title= $_POST['title'];
$description= $_POST['description'];
$release_year= $_POST['release_year'];
$language_id= $_POST['language_id'];
$ori_language_id= $_POST['ori_language_id'];
$rental_duration= $_POST['rental_duration'];
$rental_rate= $_POST['rental_rate'];
$length= $_POST['length'];
$replacement_cost= $_POST['replacement_cost'];
$rating= $_POST['rating'];



$sql = "INSERT INTO film (film_id,title,description,release_year,language_id,original_language_id,rental_duration,rental_rate,length,replacement_cost,rating) VALUES ('$film_id','$title','$description','$release_year','$language_id','$ori_language_id','$rental_duration','$rental_rate','$length','$replacement_cost','$rating')";


if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../insert.php");

