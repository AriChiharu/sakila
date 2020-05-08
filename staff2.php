
<!DOCTYPE html>
<html lang="en">

<head>
    <head>
        <script type="text/javascript">
            function goToNewPage()
            {
                var url = document.getElementById('list').value;
                if(url != 'none') {
                    window.location = url;
                }
            }
        </script>

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
            <form>
                <select name="list" id="list" accesskey="target">
                    <option value='none' selected>Choose a table</option>
                    <option value="actor2.php">actor</option>
                    <option value="address2.php">address</option>
                    <option value="category2.php">category</option>
                    <option value="city2.php">city</option>
                    <option value="country2.php">country</option>
                    <option value="customer2.php">customer</option>
                    <option value="film2.php">film</option>
                    <option value="film_actor2.php">film_actor</option>
                    <option value="film_category2.php">film_category</option>
                    <option value="film_feature2.php">film_feature</option>
                    <option value="inventory2.php">inventory</option>
                    <option value="language2.php">language</option>
                    <option value="payment2.php">payment</option>
                    <option value="rental2.php">rental</option>
                    <option value="special_features2.php">special_features</option>
                    <option value="staff2.php">staff</option>
                    <option value="store2.php">store</option>
                </select>
                <input type=button value="Go" onclick="goToNewPage()" />
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


