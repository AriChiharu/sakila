
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
                    <option value="actor3.php">actor</option>
                    <option value="address3.php">address</option>
                    <option value="category3.php">category</option>
                    <option value="city3.php">city</option>
                    <option value="country3.php">country</option>
                    <option value="customer3.php">customer</option>
                    <option value="film3.php">film</option>
                    <option value="film_actor3.php">film_actor</option>
                    <option value="film_category3.php">film_category</option>
                    <option value="film_feature3.php">film_feature</option>
                    <option value="inventory3.php">inventory</option>
                    <option value="language3.php">language</option>
                    <option value="payment3.php">payment</option>
                    <option value="rental3.php">rental</option>
                    <option value="special_features3.php">special_features</option>
                    <option value="staff3.php">staff</option>
                    <option value="store3.php">store</option>
                </select>
                <input type=button value="Go" onclick="goToNewPage()" />
            </form>
            <br>
            <p>customer</p>
            <form action="includes/delcustomer.php" method="post">
                <input type="number" name="customer_id" placeholder="customer_id"/>
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


