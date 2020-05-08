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
            <h1 class="mt-4">Delete</h1>
            <p>actor</p>
            <form action="includes/delactor.php" method="post">
                <input type="number" name="actor_id" placeholder="actor_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>address</p>
            <form action="includes/deladdress.php" method="post">
                <input type="number" name="address_id" placeholder="address_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>category</p>
            <form action="includes/delcategory.php" method="post">
                <input type="number" name="category_id" placeholder="category_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>city</p>
            <form action="includes/delcity.php" method="post">
                <input type="number" name="city_id" placeholder="city_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>country</p>
            <form action="includes/delcountry.php" method="post">
                <input type="number" name="country_id" placeholder="country_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>customer</p>
            <form action="includes/delcustomer.php" method="post">
                <input type="number" name="customer_id" placeholder="customer_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film</p>
            <form action="includes/delfilm.php" method="post">
                <input type="number" name="film_id" placeholder="film_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film_actor</p>
            <form action="includes/delfilm_actor.php" method="post">
                <input type="number" name="actor_id" placeholder="actor_id"/>
                <input type="number" name="film_id" placeholder="film_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film_category</p>
            <form action="includes/delfilm_category.php" method="post">
                <input type="number" name="film_id" placeholder="film_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film_feature</p>
            <form action="includes/delfilm_feature.php" method="post">
                <input type="number" name="film_id" placeholder="film_id"/>
                <input type="number" name="feature_id" placeholder="feature_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>inventory</p>
            <form action="includes/delinventory.php" method="post">
                <input type="number" name="inventory_id" placeholder="inventory_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>language</p>
            <form action="includes/dellanguage.php" method="post">
                <input type="number" name="language_id" placeholder="language_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>payment</p>
            <form action="includes/delpayment.php" method="post">
                <input type="number" name="payment_id" placeholder="payment_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>rental</p>
            <form action="includes/delrental.php" method="post">
                <input type="number" name="rental_id" placeholder="rental_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>special_features</p>
            <form action="includes/delspecial_features.php" method="post">
                <input type="number" name="feature_id" placeholder="feature_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>staff</p>
            <form action="includes/delstaff.php" method="post">
                <input type="number" name="staff_id" placeholder="staff_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>store</p>
            <form action="includes/delstore.php" method="post">
                <input type="number" name="store_id" placeholder="store_id"/>
                <input type="submit"/>
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


