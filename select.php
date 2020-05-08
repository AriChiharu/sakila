<?php
include_once 'includes/dbh.php';
?>

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
        </nav>

        <div class="container-fluid">
            <h1 class="mt-4">Select</h1>
            <form action="actor.php">
                <input type="submit" value="Actor" />
            </form>
            <br>
            <form action="address.php">
                <input type="submit" value="Address" />
            </form>
            <br>
            <form action="category.php">
                <input type="submit" value="Category" />
            </form>
            <br>
            <form action="city.php">
                <input type="submit" value="City" />
            </form>
            <br>
            <form action="country.php">
                <input type="submit" value="Country" />
            </form>
            <br>
            <form action="customer.php">
                <input type="submit" value="Customer" />
            </form>
            <br>
            <form action="film.php">
                <input type="submit" value="Film" />
            </form>
            <br>
            <form action="film_actor.php">
                <input type="submit" value="Film_Actor" />
            </form>
            <br>
            <form action="film_category.php">
                <input type="submit" value="Film_Category" />
            </form>
            <br>
            <form action="film_feature.php">
                <input type="submit" value="Film_Feature" />
            </form>
            <br>
            <form action="inventory.php">
                <input type="submit" value="Inventory" />
            </form>
            <br>
            <form action="language.php">
                <input type="submit" value="Language" />
            </form>
            <br>
            <form action="payment.php">
                <input type="submit" value="Payment" />
            </form>
            <br>
            <form action="rental.php">
                <input type="submit" value="Rental" />
            </form>
            <br>
            <form action="special_features.php">
                <input type="submit" value="Special_Features" />
            </form>
            <br>
            <form action="staff.php">
                <input type="submit" value="Staff" />
            </form>
            <br>
            <form action="store.php">
                <input type="submit" value="Store" />
            </form>
            <br>

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

