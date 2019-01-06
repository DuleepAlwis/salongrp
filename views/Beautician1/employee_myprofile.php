<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Salon Sanrooka</title>
  <link rel="stylesheet" href="../../css/font-awesome.min1.css">
  <link rel="stylesheet" href="../../css/bootstrap1.css">
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<?php
include "../layout/EmployeeLayout.php";
?>

  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-user"></i> My Profile</h1>
        </div>

        <!-- <div class="col-md-3">
          <a href="employee_viewappointments.html" type="button" class="btn btn-success btn-lg" style="width: 80%">View Appointments</a>

        </div>

        <div class="col-md-3">
          <a href="employee_postpone.html" type="button" class="btn btn-success btn-lg" style="width: 80%">Apply Leave</a>

        </div> -->

      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-3 mr-auto">
          <a href="index.html" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Dashboard
          </a>
        </div> -->
        <!-- <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#passwordModal">
            <i class="fa fa-lock"></i> Change Password
          </a>
        </div> -->
        <!-- <div class="col-md-3">
          <a href="#" class="btn btn-danger btn-block">
            <i class="fa fa-remove"></i> Delete Account
          </a>
         --></div>
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
              <h4>My Profile</h4>
            </div>
            <div class="card-body">
              <form>
                  
                <div class="form-group row">
                  <label for="staticname" class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="staticname" value="Pasindu Dilshan">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticmobilenumber" class="col-sm-3
                  col-form-label">Mobile Number</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="staticmobilenumber" value="0776557560">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="jkpasindudilshan@gmail.com">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticpassword" class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="staticpassword" value="**********">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticaddress" class="col-sm-3 col-form-label">Address</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="staticaddress" value="Walgama North, Matara">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="staticdistrict" class="col-sm-3 col-form-label">District</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="staticdistrict" value="Matara">
                  </div>
                </div>  

                <div class="form-group row">
                  <label for="staticcity" class="col-sm-3 col-form-label">City</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="staticcity" value="Matara">
                  </div>
                </div>
                <br><br>

          <a href="employee_editprofile.html" type="submit" class="btn btn-primary">Edit Profile</a>

              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <!-- <h3>Your Avatar</h3> -->
          <img src="img/avatar.png" alt="" class="d-block img-fluid mb-3">
          
        </div>
      </div>
    </div>
  </section>

  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; Salon Sanrooka</p>
        </div>
      </div>
    </div>
  </footer>

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


<<<<<<< HEAD:views/Beautician/employee_myprofile.php
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
=======
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
>>>>>>> 68bde942519064024c5cc733eeaa6d9840cc9744:views/employee_myprofile.html
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>
