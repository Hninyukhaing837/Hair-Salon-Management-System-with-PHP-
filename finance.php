<?php include "include/head.php"; ?>
<?php include "include/site-head.php"; ?>
<?php
if ($_SESSION["role"] != 1) {
    echo "<script>location.href='http://localhost/hair_salon/login.php'</script>";
  }
?>
	<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-head-inverse bg-primary">
              <h4 class="card-title">Basic Elements</h4>
            </div>
            <?php 

             $out_date = get_date();
             // print_r($out_date);
             $start = current($out_date);
             $end = end($out_date);

            


            ?>

            <div class="card-content">
              <div class="card-body">
                <form method="post">
                <div class="row">
                
                  <div class="col-4 col-md-4">
                    <fieldset class="form-group position-relative has-icon-left round">
		                <input type="date" value="<?php echo date('Y-m-d'); ?>" name="start" min="<?php print_r($start); ?>" max="<?php print_r($end); ?>" class="form-control" >
          			</fieldset>
                  </div>
                  <div class="col-4 col-md-4 ">
                    <fieldset class="form-group position-relative has-icon-left round">
		                <input type="date" value="<?php echo date('Y-m-d'); ?>"  min="<?php print_r($start); ?>" max="<?php print_r($end); ?>" name="end" class="form-control">
          			</fieldset>
                  </div>        
                  <div class="col-4 col-md-4">
                  	<button type="submit" name="find" class="btn btn-primary">Transition <i class="ft-thumbs-up position-right"></i></button>
                  </div> 
                          
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 ">
        <div class="card">
          <div class="card-header card-head-inverse bg-success">
            <h4 class="card-title">Today income List</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          </div>
            <div class="card-content collapse show" style="">
                <div class="table-responsive">
                  <table class="table mb-0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Services</th>
                        <th>Brand</th>
                        <th>Stylish</th>
                        <th>Cost</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                        <?php 

                        if(isset($_POST["find"])){              

                          $income = get_rate($_POST);
                          // print_r($user);
                          for($i=0;$i < count($income);$i++){ 

                        ?>
	                      <tr>
                          <td><?php echo $income[$i]["i_cname"] ?></td>
	                        <td><?php echo $income[$i]["s_name"] ?></td>
                          <td><?php echo $income[$i]["c_name"] ?></td>
                          <td><?php echo $income[$i]["u_name"] ?></td>
                          <td><?php echo $income[$i]["s_cost"]+$income[$i]["c_price"] ?></td>
                        </tr>
                      <?php
                      		} 

                      	}
                      ?>
                      <?php 
                      		if(isset($_POST["find"])){
                       ?>
                      <tr>
                        <th colspan="4" class="text-center">TOTAL INCOME</th>
                        <th><?php echo get_rate_sum($_POST); ?></th>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
<?php include "include/footer.php" ?>


