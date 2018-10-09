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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
</head>
<body>
<?php
include "../layout/EmployeeLayout.php";
?>

  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-pencil"></i> View Appointments</h1>
        </div>
      </div>
    </div>
  </header>


  <!-- ACTIONS -->
  

  <!-- POSTS -->
  <section id="posts"><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Appointments</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Type</th>
                  <th>Service</th>
                  <th>Payment</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td scope="row">1</td>
                  <td></td>
                  <td>Hair Cutting</td>
                  <td>Rs. 200.00</td>
                  <td>10/09/2018</td>
                  <td>10.30 AM</td>
                </tr>
                <tr>
                  <td scope="row">2</td>
                  <td></td>
                  <td>Hair Colouring</td>
                  <td>Rs. 800.00</td>
                  <td>11/09/2018</td>
                  <td>04.00 PM</td>
                </tr>
                <tr>
                  <td scope="row">3</td>
                  <td></td>
                  <td>Facial</td>
                  <td>Rs. 2000.00</td>
                  <td>11/09/2018</td>
                  <td>05.30 PM</td>
                </tr>
              </tbody>
              
            </table>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Appointments</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> 6
              </h1>
              <a href="posts.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- calender -->
  


  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; Salon Sanrooka</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- POST MODAL -->
  

  <!-- CATEGORY MODAL -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Category</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- USER MODAL -->
  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Add User</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control">
            </div>
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
          <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

<<<<<<< HEAD:views/Beautician/employee_viewappointments.php
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
=======
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
>>>>>>> 68bde942519064024c5cc733eeaa6d9840cc9744:views/employee_viewappointments.html
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <!-- Date Picker -->
  <script src="js/bootstrap-datepicker.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>
