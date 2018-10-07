<?php include '../../model/Customer/CustomerViewApp.php'; ?>

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
       
      </div>
    </div>
  </section>

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


  $conn = mysqli_connect($servername, $username, $password, $dbname);


$quary = 'SELECT * FROM appoinment';

$results = mysqli_query($conn, $quary);

mysqli_close($conn);
?>

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
                <!-- <tr>
                  <td scope="row">1</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="CustomerEditApp.php" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">2</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="CustomerEditApp.php"s class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">3</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="CustomerEditApp.php" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">4</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="CustomerEditApp.php" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr> -->
                <?php
        
        while ($row = mysqli_fetch_array($results))
        {
          
          echo '<tr>
              <td>'.$row['appid'].'</td>
              <td>'.$row['service'].'</td>
              <td>'.$row['beautician'].'</td>
              <td>'.$row['quantity'].'</td>
              <td><a href="CustomerEditApp.php?edit=<?php echo $row[appid]; ?>" class="btn btn-secondary" >
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
            </tr>';
          
        }?>
                 

              </tbody>
            </table>
          </div>
        </div>
    
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
          <form action="../../model/Customer/CustomerIndex.php" method="POST">
             
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
                  <option value="Hair-cut boy's">Hair-cut boy's       Rs.200/-</option>
                  <option value="Hair-cut girl's">Hair-cut girl's       Rs.200/-</option>
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
                <option value="name 1">name 1</option>
                <option value="name 2">name 2</option>
                <option value="name 3">name 3</option>
                <option value="name 4">name 4</option>
              </select>
            </div>
            </div>
          
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

  <script src="../../js/Customer/jquery.min.js"></script>
  <script src="../../js/Customer/popper.min.js"></script>
  <script src="../../js/Customer/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>
