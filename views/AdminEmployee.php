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
                <h1>Employee</h1>
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
            <div class="col-md-6"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new</button></div>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Add Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-primary">
                <form name="registeremp" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>>

                    <div class="form-row">
                        NIC:
                        <input type="text" class="form-control" id="inputnic" placeholder="nic" required>

                        Name:
                        <input type="text" class="form-control" id="inputName" placeholder="Name" pattern="[A-Za-z]{255}" required>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" minlength="7" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
                    </div>
                    <div class="form-group">
                        <label for="inputMobile">Mobile No</label>
                        <input type="text" class="form-control" id="inputMobile" placeholder="01123456789" pattern="[0-9]{10}" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputJdate">Joined date</label>
                            <input type="date" class="form-control" id="inputJdate">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputGender" class="form-control">
                                <option selected>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" name="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit"  class="btn btn-primary">Save</button>
                    </div>
                </form>.
            </div>

        </div>
    </div>
</div>
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
                        <th>TPNO</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Join-Date</th>
                        <th>Gender</th>
                        <th></th>
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

                        <td><button class="btn btn-info">View</button></td>
                        <td><button class="btn btn-danger">Remove</button></td>


                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>John Doe</td>
                        <td>jdoe@gmail.com</td>
                        <td>jdoe@gmail.com</td>
                        <td>jdoe@gmail.com</td>
                        <td>jdoe@gmail.com</td>
                        <td>jdoe@gmail.com</td>

                        <td><button class="btn btn-info">View</button></td>
                        <td><button class="btn btn-danger">Remove</button></td>


                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>

</section>



<script src="../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>