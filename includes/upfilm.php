
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
$original_language_id= $_POST['original_language_id'];
$rental_duration= $_POST['rental_duration'];
$rental_rate= $_POST['rental_rate'];
$length= $_POST['length'];
$replacement_cost= $_POST['replacement_cost'];
$rating= $_POST['rating'];



$sql = "UPDATE `film` SET `title`='".$title."',`description`='".$description."',`release_year`='".$release_year."',`language_id`='".$language_id."',`original_language_id`='".$original_language_id."',`rental_duration`='".$rental_duration."',`rental_rate`='".$rental_rate."',`length`='".$length."',`replacement_cost`='".$replacement_cost."',`rating`='".$rating."' WHERE `film_id` = $film_id";


if (mysqli_query($conn, $sql)) {
    echo "Record has been updated successfully !";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
}

header("refresh:2; url=../update.php");


