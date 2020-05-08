<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sakila Database</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Sakila Database </div>
        <div class="list-group list-group-flush">
            <a href="select.php" class="list-group-item list-group-item-action bg-light">Select</a>
            <a href="insert.php" class="list-group-item list-group-item-action bg-light">Insert</a>
            <a href="update.php" class="list-group-item list-group-item-action bg-light">Update</a>
            <a href="delete.php" class="list-group-item list-group-item-action bg-light">Delete</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Menu</button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            </div>
        </nav>

        <div class="container-fluid">
            <?php
            include_once 'includes/dbh.php';
            $sql = "SELECT * FROM film;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0)
            {
                echo "<table>";
                echo "<tr>";
                echo "<th>film_id</th>";
                echo "<th>title</th>";
                echo "<th>description</th>";
                echo "<th>release_year</th>";
                echo "<th>language_id</th>";
                echo "<th>original_language_id</th>";
                echo "<th>rental_duration</th>";
                echo "<th>rental_rate</th>";
                echo "<th>length</th>";
                echo "<th>replacement_cost</th>";
                echo "<th>rating</th>";
                echo "<th>last_update</th>";
                echo "</tr>";
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['film_id']."</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['release_year'] . "</td>";
                    echo "<td>" . $row['language_id'] . "</td>";
                    echo "<td>" . $row['original_language_id'] . "</td>";
                    echo "<td>" . $row['rental_duration'] . "</td>";
                    echo "<td>" . $row['rental_rate'] . "</td>";
                    echo "<td>" . $row['length'] . "</td>";
                    echo "<td>" . $row['replacement_cost'] . "</td>";
                    echo "<td>" . $row['rating'] . "</td>";
                    echo "<td>" . $row['last_update'] . "</td>";
                }
                echo "</table>";
            }
            else {
                echo "No records matching your query were found.";
            }
            ?>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>



