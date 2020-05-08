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
            <h1 class="mt-4">Update</h1>
            <p>actor</p>
            <form action="includes/upactor.php" method="post">
                <input type="number" name="actor_id" placeholder="actor_id"/><br><p></p>
                <input type="text" name="first_name" placeholder="New first_name"/>
                <input type="text" name="last_name" placeholder="New last_name"/>
                <input type="submit"/>
            </form>
            <br>
            <p>address</p>
            <form action="includes/upaddress.php" method="post">
                <input type="number" name="address_id" placeholder="address_id"/><br><p></p>
                <input type="text" name="address" placeholder="New address"/>
                <input type=text" name="address2" placeholder="New address2"/>
                <input type="text" name="district" placeholder="New district"/>
                <input type="number" name="city_id" placeholder="New city_id"/>
                <input type="number" name="postal_code" placeholder="New postal_code"/>
                <input type="tel" name="phone" placeholder="New phone"/>
                <input type="submit"/>
            </form>
            <br>
            <p>category</p>
            <form action="includes/upcategory.php" method="post">
                <input type="number" name="category_id" placeholder="category_id"/><br><p></p>
                <input type="text" name="name" placeholder="New name"/>
                <input type="submit"/>
            </form>
            <br>
            <p>city</p>
            <form action="includes/upcity.php" method="post">
                <input type="number" name="city_id" placeholder="city_id"/><br><p></p>
                <input type="text" name="city" placeholder="New city"/>
                <input type="number" name="country_id" placeholder="New country_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>country</p>
            <form action="includes/upcountry.php" method="post">
                <input type="number" name="country_id" placeholder="country_id"/><br><p></p>
                <input type="text" name="country" placeholder="New country"/>
                <input type="submit"/>
            </form>
            <br>
            <p>customer</p>
            <form action="includes/upcustomer.php" method="post">
                <input type="number" name="customer_id" placeholder="customer_id"/><br><p></p>
                <input type="number" name="store_id" placeholder="New store_id"/>
                <input type="text" name="first_name" placeholder="New first_name"/>
                <input type="text" name="last_name" placeholder="New last_name"/>
                <input type="email" name="email" placeholder="New email"/>
                <input type="number" name="address_id" placeholder="New address_id"/>
                <input type="number" name="active" placeholder="New active"/>
                <input type="datetime-local" name="create_date" placeholder="New create_date"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film</p>
            <form action="includes/upfilm.php" method="post">
                <input type="number" name="film_id" placeholder="film_id"/><br><p></p>
                <input type="text" name="title" placeholder="New title"/>
                <input type="text" name="description" placeholder="New description"/>
                <input type="number" name="release_year" placeholder="New release_year"/>
                <input type="number" name="language_id" placeholder="New language_id"/>
                <input type="number" name="original_language_id" placeholder="New original_language_id"/>
                <input type="number" name="rental_duration" placeholder="New rental_duration"/>
                <input type="number" step="0.01" name="rental_rate" placeholder="New rental_rate"/>
                <input type="number" name="length" placeholder="New length"/>
                <input type="number" step="0.01" name="replacement_cost" placeholder="New replacement_cost"/>
                <input type="text" name="rating" placeholder="New rating"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film_actor</p>
            <form action="includes/upfilm_actor.php" method="post">
                <input type="number" name="actor_id" placeholder="actor_id"/>
                <input type="number" name="film_id" placeholder="film_id"/><br><p></p>
                <input type="number" name="upactor_id" placeholder="New actor_id"/>
                <input type="number" name="upfilm_id" placeholder="New film_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film_category</p>
            <form action="includes/upfilm_category.php" method="post">
                <input type="number" name="film_id" placeholder="film_id"/><br><p></p>
                <input type="number" name="category_id" placeholder="New category_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film_feature</p>
            <form action="includes/upfilm_feature.php" method="post">
                <input type="number" name="film_id" placeholder="film_id"/>
                <input type="number" name="feature_id" placeholder="feature_id"/><br><p></p>
                <input type="number" name="upfilm_id" placeholder="New film_id"/>
                <input type="number" name="upfeature_id" placeholder="New feature_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>inventory</p>
            <form action="includes/upinventory.php" method="post">
                <input type="number" name="inventory_id" placeholder="inventory_id"/><br><p></p>
                <input type="number" name="film_id" placeholder="New film_id"/>
                <input type="number" name="store_id" placeholder="New store_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>language</p>
            <form action="includes/uplanguage.php" method="post">
                <input type="number" name="language_id" placeholder="language_id"/><br><p></p>
                <input type="text" name="name" placeholder="New name"/>
                <input type="submit"/>
            </form>
            <br>
            <p>payment</p>
            <form action="includes/uppayment.php" method="post">
                <input type="number" name="payment_id" placeholder="payment_id"/><br><p></p>
                <input type="number" name="customer_id" placeholder="New customer_id"/>
                <input type="number" name="staff_id" placeholder="New staff_id"/>
                <input type="number" name="rental_id" placeholder="New rental_id"/>
                <input type="number" step="0.01" name="amount" placeholder="New amount"/>
                <input type="datetime-local" name="payment_date" placeholder="New payment_date"/>
                <input type="submit"/>
            </form>
            <br>
            <p>rental</p>
            <form action="includes/uprental.php" method="post">
                <input type="number" name="rental_id" placeholder="rental_id"/><br><p></p>
                <input type="datetime-local" name="rental_date" placeholder="New rental_date"/>
                <input type="number" name="inventory_id" placeholder="New inventory_id"/>
                <input type="number" name="customer_id" placeholder="New customer_id"/>
                <input type="datetime-local" name="return_date" placeholder="New return_date"/>
                <input type="number" name="staff_id" placeholder="New staff_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>special_features</p>
            <form action="includes/upspecial_features.php" method="post">
                <input type="number" name="feature_id" placeholder="feature_id"/><br><p></p>
                <input type="text" name="name" placeholder="New name"/>
                <input type="submit"/>
            </form>
            <br>
            <p>staff</p>
            <form action="includes/upstaff.php" method="post">
                <input type="number" name="staff_id" placeholder="staff_id"/><br><p></p>
                <input type="text" name="first_name" placeholder="New first_name"/>
                <input type="text" name="last_name" placeholder="New last_name"/>
                <input type="number" name="address_id" placeholder="New address_id"/>
                <input type="url" name="picture" placeholder="New picture"/>
                <input type="email" name="email" placeholder="New email"/>
                <input type="number" name="store_id" placeholder="New store_id"/>
                <input type="number" name="active" placeholder="New active"/>
                <input type="text" name="username" placeholder="New username"/>
                <input type="text" name="password" placeholder="New password"/>
                <input type="submit"/>
            </form>
            <br>
            <p>store</p>
            <form action="includes/upstore.php" method="post">
                <input type="number" name="store_id" placeholder="store_id"/><br><p></p>
                <input type="number" name="manager_staff_id" placeholder="New manager_staff_id"/>
                <input type="number" name="address_id" placeholder="New address_id"/>
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


