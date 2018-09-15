<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../icontop.jpg">
    <title>Salon Sanrooka</title>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="">

<nav class='navbar navbar-expand-sm navbar-dark bg-dark p-0'>
    <div class='container'>
        <img src='../img/icons/image13.png' width='10%' height='10%'><a href='index.php' class='navbar-brand'>Salon Sanrooka</a>
        <button class='navbar-toggler' data-toggle='collapse' data-target='#navbarNav'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <span style='display: inline-block;width=350px'></span>
        <div class='collapse navbar-collapse justify-content-end' style='align-content: right;' id='navbarNav'>


            <ul class='navbar-nav ml-auto justify-content-end'>
                <li class='nav-item dropdown mr-3'>
                    <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>
                        <img src='../img/icons/user.png' width='35%' height='35%'></i><?php echo "aaa"; ?>
                    </a>
                    <div class='dropdown-menu' style='z-index: 999'>
                        <a href='profile.html' class='dropdown-item'>
                            <i class='fa fa-user-circle'></i> Profile
                        </a>
                        <a href='settings.html' class='dropdown-item'>
                            <i class='fa fa-gear'></i> Logout
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
</nav>

<header id="main-header" class="py-2 bg-warning text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Customers</h1>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-2"><a href="AdminDashboard.php"><h1>Dashboard</h1></a></div>
        </div>
    </div>
</header>

<!-- ACTIONS -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
              <button class="btn btn-warning">Search</button>
            </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- USERS -->
<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col">

                    <table class="table table-striped" style="overflow-y: auto">
                        <thead class="thead-inverse">
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Terms</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Gender</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="bg-light text-primary">
                        <tr>
                            <td scope="row">1</td>
                            <td>John Doe</td>
                            <td>jdoe@gmail.com</td>
                            <td>jdoe@gmail.com</td>
                            <td>jdoe@gmail.com</td>
                            <td>jdoe@gmail.com</td>
                            <td>jdoe@gmail.com</td>
                            <td>jdoe@gmail.com</td>
                            <td><button class="btn btn-info">View</button></td>

                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>John Doe</td>
                            <td>jdoe@gmail.com</td>
                            <td>jdoe@gmail.com</td>
                            <td>jdoe@gmail.com</td>
                            <td>jdoe@gmail.com</td>
                            <td>jdoe@gmail.com</td>
                            <td>jdoe@gmail.com</td>
                            <td><button class="btn btn-info">View</button></td>


                        </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

</section>



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>