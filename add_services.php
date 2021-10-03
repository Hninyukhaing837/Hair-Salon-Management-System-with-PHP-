<?php include "include/head.php" ?>
<?php include "include/site-head.php" ?>
<?php
if ($_SESSION["role"] != 1) {
    echo "<script>location.href='http://localhost/hair_salon/login.php'</script>";
  }
?>


<section id="basic-listgroup">
  <div class="row ">
    <!-- add Services Start -->
    <div class="col-lg-4 col-md-12">
      <div class="card">
        <div class="card-header bg-primary bg-primary">
          <h4 class="card-title text-white">Add Services</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <?php
              if (isset($_POST['add_services'])) {
                if (empty($_POST['s_name']) || empty($_POST['s_price'])) {
                  echo '<div class="alert bg-danger alert-icon-left mb-2" role="alert">
                        <strong>Please</strong> fill all inputs!....
                      </div>';
                }else {
                  echo add_service($_POST);
                }
              }

              if (isset($_GET['key'])) {
                  $key = $_GET['key'];
                  $service_del = mysqli_query($con, "UPDATE service SET s_status = 0 WHERE s_id = $key");
                  if ($service_del) {
                    echo "<script>location.href='add_services.php'</script>";                
                    
                  }
                }
             ?>
            <form class="" method="post">
              <fieldset>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Services name" name="s_name" aria-describedby="button-addon2">
                  <input type="number" class="form-control" placeholder="Price" name="s_price" aria-describedby="button-addon2">
                  <div class="input-group-append" id="button-addon2">
                    <button class="btn btn-primary" type="submit" name="add_services"><i class="ft-plus"></i></button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>      
                <th>#</th>                 
                <th>Service</th>                 
                <th>Price</th>                 
                </tr>
              </thead>
              <tbody>
            <?php
              $query = mysqli_query($con, "SELECT * FROM service WHERE s_status = 1");
              while ($out = mysqli_fetch_assoc($query)) {
             ?>
                <tr>                        
                  <th>                    
                    <a href="add_services.php?key=<?php echo $out['s_id']; ?>" onClick="return confirm('Are you sure?')">
                      <i class="ft-trash-2 text-danger"></i>
                    </a>
                </th>
                  <td><?php echo $out['s_name']; ?></td>
                  <td><?php echo $out['s_cost']; ?> MMK</td>                        
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- add Services End -->

    <!-- add Brand start -->
    <div class="col-lg-8 col-md-12">
      <div class="card">
        <div class="card-header bg-primary bg-primary">
          <h4 class="card-title text-white">Add Brand</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <?php
              if (isset($_POST['add_brand'])) {
                if (empty($_POST['b_name']) || empty($_POST['ser_name']) || empty($_POST['b_price'])) {
                  echo '<div class="alert bg-danger alert-icon-left mb-2" role="alert">
                        <strong>Please</strong> fill all inputs!....
                      </div>';
                }else {
                  echo add_brand($_POST);
                }
              }

              if (isset($_GET['del'])) {
                  $del = $_GET['del'];
                  $brand_del = mysqli_query($con, "UPDATE cosmetic SET c_status = 0 WHERE c_id = $del");
                  if ($brand_del) {
                    echo "<script>location.href='add_services.php'</script>";                
                  }
                }
             ?>
            <form method="post">
              <fieldset>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Brand name" name="b_name" aria-describedby="button-addon2">
                  <select class="form-control" id="basicSelect" name="ser_name">
                    <option>Select Services</option>
                    <?php $query = mysqli_query($con, "SELECT * FROM service WHERE s_status = 1");
                      while ($out = mysqli_fetch_assoc($query)) {
                     ?>
                    <option value="<?php echo $out['s_id']; ?>"><?php echo $out['s_name']; ?></option>
                  <?php } ?>
                  </select>
                  <input type="text" class="form-control" placeholder="Price" name="b_price" aria-describedby="button-addon2">
                  <div class="input-group-append" id="button-addon2">
                    <button class="btn btn-primary" type="submit" name="add_brand"><i class="ft-plus"></i></button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>      
                  <th>#</th>                 
                  <th>Brand</th>                 
                  <th>Service</th>                 
                  <th>Price</th>                 
                </tr>
              </thead>
              <tbody>
               <?php
                  $query = mysqli_query($con, "SELECT * FROM (cosmetic INNER JOIN service ON cosmetic.c_service=service.s_id) WHERE c_status = 1 && s_status=1 ORDER BY c_service ASC");
                  while ($out = mysqli_fetch_assoc($query)) {
                ?>              
                <tr>                        
                  <th>                    
                    <a href="add_services.php?del=<?php echo $out['c_id']; ?>" onClick="return confirm('Are you sure?')">
                      <i class="ft-trash-2 text-danger"></i>
                    </a>
                </th>
                  <td><?php echo $out['c_name']; ?></td>
                  <td><?php echo $out['s_name']; ?></td>                  
                  <td><?php echo $out['c_price']; ?> MMK</td>                        
                </tr>              
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- add Brand End -->
  </div>
</section>
<?php include "include/footer.php" ?>
