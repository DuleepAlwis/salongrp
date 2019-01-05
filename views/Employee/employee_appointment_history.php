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
<<<<<<< HEAD:views/Employee/employee_appointment_history.php
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="../../index1.html" class="navbar-brand">Salon Sanrooka</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="employee_viewappointments.html" class="nav-link">View Appointments</a>
          </li>
          <li class="nav-item px-2">
            <a href="employee_postpone.html" class="nav-link active">Apply Leave</a>
          </li>
        </ul> -->



        <ul class="navbar-nav ml-auto">
          <li class="nav-item px-2">
            <a href="employee_viewappointments.php" class="nav-link">View Appointments</a>
          </li>
          <li class="nav-item px-2">
            <a href="employee_appointment_history.php" class="nav-link">Appointment History</a>
          </li>
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i> 
            </a>
            <div class="dropdown-menu">
              <a href="employee_myprofile.php" class="dropdown-item">
                <i class="fa fa-user-circle"></i> Profile
              </a>
              <a href="#" class="dropdown-item">
                <i class="fa fa-gear"></i> Logout
              </a>
            </div>
          </li>
      </div>
    </div>
  </nav>

=======
<?php
include "../layout/EmployeeLayout.php";
?>
>>>>>>> 206f80d1d073d59e03bd845d011335882dc32cc8:views/Beautician/employee_postpone.php
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-pencil"></i> Apply Leave</h1>
        </div>

      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <!-- <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-primary">Search</button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section id="posts"><br><br><br>
  <div class="container">
    <div class="row">
    
      <form>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" cols="60"></textarea>
  </div>
  <a href="#" type="submit" class="btn btn-primary">Submit</a>
</form>
    </div>
  </div>
  </section>


  <!-- POSTS -->
  <!-- <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
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
                  <td>Post One</td>
                  <td>Web Development</td>
                  <td>July 12, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">2</td>
                  <td>Post Two</td>
                  <td>Tech Gadgets</td>
                  <td>July 13, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">3</td>
                  <td>Post Three</td>
                  <td>Web Development</td>
                  <td>July 14, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">4</td>
                  <td>Post Four</td>
                  <td>Business</td>
                  <td>July 14, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">5</td>
                  <td>Post Five</td>
                  <td>Web Development</td>
                  <td>July 15 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">6</td>
                  <td>Post Six</td>
                  <td>Health & Wellness</td>
                  <td>July 16, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
              </tbody>
            </table> -->

            <!-- <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">Next</a></li>
              </ul>
            </nav> -->
          <!-- </div>
        </div>
      </div>
    </div>
  </section> -->

  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; Salon Sanrooka</p>
        </div>
      </div>
    </div>
  </footer>

<<<<<<< HEAD:views/Beautician/employee_postpone.php
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
=======
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
>>>>>>> 68bde942519064024c5cc733eeaa6d9840cc9744:views/employee_postpone.html
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>
