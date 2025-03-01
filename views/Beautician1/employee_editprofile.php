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
          <h1><i class="fa fa-user"></i> Edit Profile</h1>
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
              <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="inputname">Name</label>
                  <input type="text" class="form-control" id="inputname" placeholder="Name">
                </div>

                <div class="form-group">
                  <label for="inputmobilenum">Mobile Number</label>
                  <input type="text" class="form-control" id="inputmobilenum" placeholder="eg: 0715524851" pattern="[0-9]{10}" required>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                </div>
                
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputcity">City</label>
                    <select id="inputcity" class="form-control">
                      <option selected>Choose...</option>
                      <option>Ampara</option>
                      <option>Anuradhapura</option>
                      <option>Badulla</option>
                      <option>Batticaloa</option>
                      <option>Colombo</option>
                      <option>Galle</option>
                      <option>Gampaha</option>
                      <option>Hambantota</option>
                      <option>Jaffna</option>
                      <option>Kalutara</option>
                      <option>Kandy</option>
                      <option>Kegalle</option>
                      <option>Kilinochchi</option>
                      <option>Kurunegala</option>
                      <option>Mannar</option>
                      <option>Matale</option>
                      <option>Matara</option>
                      <option>Monaragala</option>
                      <option>Mullaitivu</option>
                      <option>Nuwara Eliya</option>
                      <option>Polonnaruwa</option>
                      <option>Puttalam</option>
                      <option>Ratnapura</option>
                      <option>Trincomalee</option>
                      <option>Vavuniya</option>
                    </select>
                    
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputdistrict">District</label>
                    <input type="text" class="form-control" id="inputdistrict" placeholder="District">
                  </div>
                </div>
                
                <br><br>
                <a href="#" type="submit" class="btn btn-primary">Save Changes</a>

                <a href="#" type="submit" class="btn btn-primary">Cancel</a>

              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <!-- <h3>Your Avatar</h3> -->
          <img src="img/avatar.png" alt="" class="d-block img-fluid mb-3">
          <button class="btn btn-primary btn-block">Change Image</button>
          <!-- <button class="btn btn-danger btn-block">Delete Image</button> -->
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


<<<<<<< HEAD:views/Beautician/employee_editprofile.php
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
=======
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
>>>>>>> 68bde942519064024c5cc733eeaa6d9840cc9744:views/employee_editprofile.html
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>
