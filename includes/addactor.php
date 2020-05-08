
<?php
include_once 'dbh.php';

if(!$conn)
{
     echo 'Not connected';
}
if(!mysqli_select_db($conn,'sakila')) {
    echo 'Database not Selected';
}

$actor_id= $_POST['actor_id'];
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];


$sql = "INSERT INTO actor (actor_id,first_name, last_name) VALUES ('$actor_id','$first_name', '$last_name')";


    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }

header("refresh:2; url=../insert.php");