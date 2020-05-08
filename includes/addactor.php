
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


$sql = "INSERT INTO actor (actor_id,first_name, last_name) VALUES ('$actor_id','$first_name', '$last_name')";


    if (mysqli_query($con, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
    }

header("refresh:2; url=../insert.php");