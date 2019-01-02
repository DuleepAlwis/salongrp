<?php include 'header.php'; ?>


  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
            <i class="fa fa-plus"></i> Make Appoinments
          </a>
        </div>
        <!-- <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fa fa-plus"></i> Add Category
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">
            <i class="fa fa-plus"></i> Add User
          </a>
        </div> -->
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>New Appoinments</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Service</th>
                  <th>Beautician</th>
                  <th>No of persons</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">1</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="CustomerEditApp.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">2</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="CustomerEditApp.html"s class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">3</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="CustomerEditApp.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">4</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="CustomerEditApp.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <!-- <tr>
                  <td scope="row">5</td>
                  <td>Post Five</td>
                  <td>Web Development</td>
                  <td>July 15 2017</td>
                  <td><a href="CustomerEditApp.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">6</td>
                  <td>Post Six</td>
                  <td>Health & Wellness</td>
                  <td>July 16, 2017</td>
                  <td><a href="CustomerEditApp.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
       <!--  <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Posts</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> 6
              </h1>
              <a href="posts.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
 -->
        <!--   <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Categories</h3>
              <h1 class="display-4">
                <i class="fa fa-folder-open-o"></i> 4
              </h1>
              <a href="categories.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Users</h3>
              <h1 class="display-4">
                <i class="fa fa-users"></i> 2
              </h1>
              <a href="users.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

 <!--  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2017 Blogen</p>
        </div>
      </div>
    </div>
  </footer>
 -->





  <!-- POST MODAL -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Make New Appoinment</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="CustomerIndex.php" method="POST">
            
            <div class="col-md-12">
               <div  class="form-group">
                <label for="category">Service</label>
                <select name="service" class="form-control">
                <optgroup label="Hair cutting">
                   <optgroup label="Ladies">
                <option value="Hair trim(one length)">Hair trim(one length)      Rs.300/-</option>
                <option value="Hait cut without blow dry">Hait cut without blow dry      Rs.700/-</option>
                <option value="Hair cut(senior hair dresser)">Hair cut(senior hair dresser)      Rs.1000/-</option>
                <optgroup label="Gents">
                <option value="Hair cut">Hair cut       Rs.300/-</option>
                <option value="Hair cut & wash">Hair cut & wash      Rs.400/-</option>
                <option value="Hair cut &setting(Children)">Hair cut &setting(Children)      Rs.450/-</option>
                <optgroup label="Children">
                  <option value="Hair cut-boy's">Hair cut-boy's       Rs.200/-</option>
                  <option value="Hair cut-girl's">Hair cut-girl's       Rs.200/-</option>
                  <option value="Boy's school hair cut">Boy's school hair cut       Rs.300/-onwards</option>
                  <optgroup label="Hair Coloring">
                  <option value="White hair coverage">White hair coverage       Rs.600/-</option>
                  <option value="Fashion color">Fashion color       Rs.1500/-</option>
                  <option value="Straking">Straking       Rs.2000/-</option>
                  <option value="Relaxing">Relaxing       Rs.1550/-</option>
                  <option value="Re bonding">Re bonding       Rs.7500/-</option>
                  <optgroup label="Threading">
                  <option value="Eye brows">Eye brows       Rs.150/-</option>
                  <option value="Upper lip">Upper lip       Rs.50/-</option>
                  <option value="Cheeks">Cheeks       Rs.200/-</option>
                  <optgroup label="Waxing">
                  <option value="Full arms">Full arms       Rs.800/-</option>
                  <option value="Half arms">Half arms       Rs.600/-</option>
                  <option value="Upper arms">Upper arms       Rs.200/-</option>
                  <optgroup label="Facials">
                  <option value="Clean up">Clean up       Rs.1300/-</option>
                  <option value="Facial">Facial       Rs.1500/-</option>
                  <option value="Orange facial">Orange facial       Rs.1800/-</option>
                  <optgroup label="Dressing">
                  <option value="Sari dressing">Sari dressing       Rs.150/-</option>
                  <option value="Make up">Make up       Rs.650/-</option>
                  <option value="Hair style">Hair style       Rs.900/-</option>
              </select>
              </div>
              </div>
          
          <div class="col-md-12">
            <div class="form-group">
              <label for="category">Beautician</label>
              <select name="beautician" class="form-control">
                <option value="Sarala Ekanayake">Sarala Ekanayake</option>
                <option value="Kavisha Mihirangi">Kavisha Mihirangi</option>
                <option value="Saduni Mihirangi">Saduni Mihirangi</option>
                <option value="Malsha samarakoon">Malsha samarakoon</option>
              </select>
            </div>
            </div>
           <!-- choose image -->
            <!-- <div class="form-group">
              <label for="file">Image Upload</label>
              <input type="file" class="form-control-file">
              <small class="form-text text-muted">Max Size 3mb</small>
            </div> -->
            <div class="col-md-12">
				<div class="form-group">
				  <label for="date">No of persons</label>
				   <div class="form-field">
				       <input type="text" name="quantity" id="location" class="form-control" required="required" pattern="[0-9]{1,2}" title="Only  1 or 2 Numbers" placeholder="">
				    </div>
				 </div>
			  </div>
			 <div class="col-md-12">
				<div class="form-group">
				  <label for="date">Date</label>
				   <div name="AppDate"class="form-field">
				       <input type="date" name="AppDate" id="location" class="form-control" required="required" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder="">
				    </div>
				  </div>
			  </div>
			  <div class="col-md-12">
				<div class="form-group">
				  <label for="time">Time</label>
				   <div name="AppTime" class="form-field">
				       <input type="time" name="AppTime" id="location" class="form-control" required="required" required="required" pattern="[0-9]{2}/[0-9]{2}/[A-Z]{2}" placeholder="">
				    </div>
				  </div>
			  </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <!-- CATEGORY MODAL -->
 <!--  <div class="modal fade" id="addCategoryModal">
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
 -->
  <!-- USER MODAL -->
 <!--  <div class="modal fade" id="addUserModal">
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
          <button class="btn btn-warning" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </div> -->

  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$service = $_POST['service'];
$beautician = $_POST['beautician'];
$quantity = $_POST['quantity'];
$AppDate = $_POST['AppDate'];
$AppTime = $_POST['AppTime'];
$sql = "INSERT INTO appoinment (service, beautician, quantity, date, time)
VALUES ('$service', '$beautician', $quantity , '$AppDate' , '$AppTime')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
