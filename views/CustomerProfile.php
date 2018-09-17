<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Salon Sanrooka</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="icon" type="image/x-icon" href="../icontop.jpg">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php
include "logallow.php";
?>
<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fa fa-user"></i>My Profile</h1>
            </div>

        </div>
    </div>
</header>

<!-- ACTIONS -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mr-auto">
                <a href="CustomerHome.php" class="btn btn-light btn-block">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#passwordModal">
                    <i class="fa fa-lock"></i> Change Password
                </a>
            </div>
            <div class="col-md-3">
                <a href="logout.php" class="btn btn-success btn-block">
                    <i class="fa fa-lock"></i> Logout
                </a>
            </div>

        </div>
    </div>
</section>

<!-- PROFILE EDIT -->
<section id="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form name="register">
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <label for="inputName">Name</label>
                                    <input type="text" name="Name" class="form-control" id="inputName" placeholder="Name" value="<?php echo $_SESSION['name']; ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="Email" class="form-control" id="inputEmail" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $_SESSION['email'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Address1</label>
                                    <input type="email" name="Address" class="form-control" id="inputAddress" placeholder="" value="<?php echo $_SESSION['address'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">City</label>
                                    <input type="text" name="city" class="form-control" id="inputAddress" placeholder="" value="<?php echo $_SESSION['city'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">District</label>
                                    <input type="text" name="district" class="form-control" id="inputAddress" placeholder="" value="<?php echo $_SESSION['district'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputMobile">Mobile Number</label>
                                    <input type="text" name="Mobile" class="form-control" id="inputMobile" placeholder="" value="<?php echo $_SESSION['tpno'] ?>">
                                </div>
                            </div>




                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h3>Your Avatar</h3>
                <img src="img/avatar.png" alt="" class="d-block img-fluid mb-3">
                <button class="btn btn-primary btn-block">Edit Image</button>
                <button class="btn btn-danger btn-block">Delete Image</button>
            </div>
        </div>
    </div>
</section>



<!-- PASSWORD MODAL -->
<div class="modal fade" id="passwordModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Change Password</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="password" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" data-dismiss="modal">Update Password</button>
            </div>
        </div>
    </div>
</div>


<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>
