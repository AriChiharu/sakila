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
            <h1 class="mt-4">Insert</h1>
            <p>actor</p>
            <form action="includes/addactor.php" method="post">
                <input type="number" name="actor_id" placeholder="actor_id"/>
                <input type="text" name="first_name" placeholder="first_name"/>
                <input type="text" name="last_name" placeholder="last_name"/>
                <input type="submit"/>
            </form>
            <br>
            <p>address</p>
            <form action="includes/addaddress.php" method="post">
                <input type="number" name="address_id" placeholder="address_id"/>
                <input type="text" name="address" placeholder="address"/>
                <input type=text" name="address2" placeholder="address2"/>
                <input type="text" name="district" placeholder="district"/>
                <input type="number" name="city_id" placeholder="city_id"/>
                <input type="number" name="postal_code" placeholder="postal_code"/>
                <input type="tel" name="phone" placeholder="phone"/>
                <input type="submit"/>
            </form>
            <br>
            <p>category</p>
            <form action="includes/addcategory.php" method="post">
                <input type="number" name="category_id" placeholder="category_id"/>
                <input type="text" name="name" placeholder="name"/>
                <input type="submit"/>
            </form>
            <br>
            <p>city</p>
            <form action="includes/addcity.php" method="post">
                <input type="number" name="city_id" placeholder="city_id"/>
                <input type="text" name="city" placeholder="city"/>
                <input type="number" name="country_id" placeholder="country_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>country</p>
            <form action="includes/addcountry.php" method="post">
                <input type="number" name="country_id" placeholder="country_id"/>
                <input type="text" name="country" placeholder="country"/>
                <input type="submit"/>
            </form>
            <br>
            <p>customer</p>
            <form action="includes/addcustomer.php" method="post">
                <input type="number" name="customer_id" placeholder="customer_id"/>
                <input type="number" name="store_id" placeholder="store_id"/>
                <input type="text" name="first_name" placeholder="first_name"/>
                <input type="text" name="last_name" placeholder="last_name"/>
                <input type="email" name="email" placeholder="email"/>
                <input type="number" name="address_id" placeholder="address_id"/>
                <input type="number" name="active" placeholder="active"/>
                <input type="datetime-local" name="create_date" placeholder="create_date"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film</p>
            <form action="includes/addfilm.php" method="post">
                <input type="number" name="film_id" placeholder="film_id"/>
                <input type="text" name="title" placeholder="title"/>
                <input type="text" name="description" placeholder="description"/>
                <input type="number" name="release_year" placeholder="release_year"/>
                <input type="number" name="language_id" placeholder="language_id"/>
                <input type="number" name="ori_language_id" placeholder="ori_language_id"/>
                <input type="number" name="rental_duration" placeholder="rental_duration"/>
                <input type="number" step="0.01" name="rental_rate" placeholder="rental_rate"/>
                <input type="number" name="length" placeholder="length"/>
                <input type="number" step="0.01" name="replacement_cost" placeholder="replacement_cost"/>
                <input type="text" name="rating" placeholder="rating"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film_actor</p>
            <form action="includes/addfilm_actor.php" method="post">
                <input type="number" name="actor_id" placeholder="actor_id"/>
                <input type="number" name="film_id" placeholder="film_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>film_category</p>
                <form action="includes/addfilm_category.php" method="post">
                    <input type="number" name="film_id" placeholder="film_id"/>
                    <input type="number" name="category_id" placeholder="category_id"/>
                    <input type="submit"/>
                </form>
            <br>
            <p>film_feature</p>
            <form action="includes/addfilm_feature.php" method="post">
                <input type="number" name="film_id" placeholder="film_id"/>
                <input type="number" name="feature_id" placeholder="feature_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>inventory</p>
            <form action="includes/addinventory.php" method="post">
                <input type="number" name="inventory_id" placeholder="inventory_id"/>
                <input type="number" name="film_id" placeholder="film_id"/>
                <input type="number" name="store_id" placeholder="store_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>language</p>
            <form action="includes/addlanguage.php" method="post">
                <input type="number" name="language_id" placeholder="language_id"/>
                <input type="text" name="name" placeholder="name"/>
                <input type="submit"/>
            </form>
            <br>
            <p>payment</p>
            <form action="includes/addpayment.php" method="post">
                <input type="number" name="payment_id" placeholder="payment_id"/>
                <input type="number" name="customer_id" placeholder="customer_id"/>
                <input type="number" name="staff_id" placeholder="staff_id"/>
                <input type="number" name="rental_id" placeholder="rental_id"/>
                <input type="number" step="0.01" name="amount" placeholder="amount"/>
                <input type="datetime-local" name="payment_date" placeholder="payment_date"/>
                <input type="submit"/>
            </form>
            <br>
            <p>rental</p>
            <form action="includes/addrental.php" method="post">
                <input type="number" name="rental_id" placeholder="rental_id"/>
                <input type="datetime-local" name="rental_date" placeholder="rental_date"/>
                <input type="number" name="inventory_id" placeholder="inventory_id"/>
                <input type="number" name="customer_id" placeholder="customer_id"/>
                <input type="datetime-local" name="return_date" placeholder="return_date"/>
                <input type="number" name="staff_id" placeholder="staff_id"/>
                <input type="submit"/>
            </form>
            <br>
            <p>special_features</p>
            <form action="includes/addspecial_features.php" method="post">
                <input type="number" name="feature_id" placeholder="feature_id"/>
                <input type="text" name="name" placeholder="name"/>
                <input type="submit"/>
            </form>
            <br>
            <p>staff</p>
            <form action="includes/addstaff.php" method="post">
                <input type="number" name="staff_id" placeholder="staff_id"/>
                <input type="text" name="first_name" placeholder="first_name"/>
                <input type="text" name="last_name" placeholder="last_name"/>
                <input type="number" name="address_id" placeholder="address_id"/>
                <input type="url" name="picture" placeholder="picture"/>
                <input type="email" name="email" placeholder="email"/>
                <input type="number" name="store_id" placeholder="store_id"/>
                <input type="number" name="active" placeholder="active"/>
                <input type="text" name="username" placeholder="username"/>
                <input type="text" name="password" placeholder="password"/>
                <input type="submit"/>
            </form>
            <br>
            <p>store</p>
            <form action="includes/addstore.php" method="post">
                <input type="number" name="store_id" placeholder="store_id"/>
                <input type="number" name="manager_staff_id" placeholder="manager_staff_id"/>
                <input type="number" name="address_id" placeholder="address_id"/>
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


