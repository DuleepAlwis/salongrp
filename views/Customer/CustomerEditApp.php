<?php include '../../model/Customer/CustomerEditApp.php'; 
 
?>

<?php include 'header.php'; ?>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="CustomerIndex.php" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Dashboard
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" name="update" class="btn btn-success btn-block">
            <i class="fa fa-check"></i> Save Changes
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-danger btn-block">
            <i class="fa fa-remove"></i> Delete Post
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Leatest Appoinments</h4>
            </div>
            <div class="card-body">
              <form>
               <!--  <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" value="Post One">
                </div>
                <div class="form-group">
                  <label for="title">Category</label>
                  <select class="form-control">
                    <option value="">Web Development</option>
                    <option value="">Tech Gadgets</option>
                    <option value="">Business</option>
                    <option value="">Health & Wellness</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="file">Image Upload</label>
                  <input type="file" class="form-control-file">
                  <small class="form-text text-muted">Max Size 3mb</small>
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <textarea name="editor1" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur vel aliquam a commodi eligendi, esse quos perspiciatis, quas aliquid voluptates iure. Voluptatibus nisi iste voluptatum maxime dicta quisquam, nihil id!</textarea>
                </div> -->
                <input type="hidden" name="id" value="<?php echo $appid; ?>">
               <div class="col-md-12">
               <div class="form-group">
                <label for="category">Service</label>
                <select class="form-control">
                <optgroup label="Hair cutting">
                   <optgroup label="Ladies">
                <option value="">Hair trim(one length)      Rs.300/-</option>
                <option value="">Hait cut without blow dry      Rs.700/-</option>
                <option value="">Hair cut(senior hair dresser)      Rs.1000/-</option>
                <optgroup label="Gents">
                <option value="">Hair cut       Rs.300/-</option>
                <option value="">Hair cut & wash      Rs.400/-</option>
                <option value="">Hair cut &setting(Children)      Rs.450/-</option>
                <optgroup label="Children">
                  <option value="">Hair cut-boy's       Rs.200/-</option>
                  <option value="">Hair cut-girl's       Rs.200/-</option>
                  <option value="">Boy's school hair cut       Rs.300/-onwards</option>
                  <optgroup label="Hair Coloring">
                  <option value="">White hair coverage       Rs.600/-</option>
                  <option value="">Fashion color       Rs.1500/-</option>
                  <option value="">Straking       Rs.2000/-</option>
                  <option value="">Relaxing       Rs.1550/-</option>
                  <option value="">Re bonding       Rs.7500/-</option>
                  <optgroup label="Threading">
                  <option value="">Eye brows       Rs.150/-</option>
                  <option value="">Upper lip       Rs.50/-</option>
                  <option value="">Cheeks       Rs.200/-</option>
                  <optgroup label="Waxing">
                  <option value="">Full arms       Rs.800/-</option>
                  <option value="">Half arms       Rs.600/-</option>
                  <option value="">Upper arms       Rs.200/-</option>
                  <optgroup label="Facials">
                  <option value="">Clean up       Rs.1300/-</option>
                  <option value="">Facial       Rs.1500/-</option>
                  <option value="">Orange facial       Rs.1800/-</option>
                  <optgroup label="Dressing">
                  <option value="">Sari dressing       Rs.150/-</option>
                  <option value="">Make up       Rs.650/-</option>
                  <option value="">Hair style       Rs.900/-</option>
              </select>
              </div>
              </div>
            <div class="col-md-12">
            <div class="form-group">
              <label for="category">Beautician</label>
              <select class="form-control">
                <option value="">Name 1</option>
                <option value="">name 2</option>
                <option value="">name 3</option>
                <option value="">name 4</option>
              </select>
            </div>
            </div>
               <div class="col-md-12">
        <div class="form-group">
          <label for="date">No of persons</label>
           <div class="form-field">
               <input type="text" id="location" class="form-control" placeholder="" value="<?php echo $quantity ?>">
            </div>
         </div>
        </div>
       <div class="col-md-12">
        <div class="form-group">
          <label for="date">Date</label>
           <div class="form-field">
               <input type="date" id="location" class="form-control" placeholder=""  value="<?php echo $date ?>">
            </div>
          </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
          <label for="date">Time</label>
           <div class="form-field">
               <input type="time" id="location" class="form-control" placeholder="" value="<?php echo $time ?>">
            </div>
          </div>
        </div>
              </form>
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

  <script src="../../js/Customer/jquery.min.js"></script>
  <script src="../../js/Customer/popper.min.js"></script>
  <script src="../../js/Customer/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>
