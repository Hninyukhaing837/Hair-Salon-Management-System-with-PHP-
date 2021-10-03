<?php include "include/head.php" ?>
<?php include "include/site-head.php" ?>

<?php

if ($_SESSION["role"] == 3) {
    echo "<script>location.href='http://localhost/hair_salon/login.php'</script>";
  }

?>

    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-header card-head-inverse bg-primary">
            <h4 class="card-title">Check Out</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          </div>
          <div class="card-content">
            <div class="card-body">
              <?php 

              if (isset($_POST['reg'])) {
                if (empty($_POST['cname']) || empty($_POST['service']) || empty($_POST['stylish'])) {
                   echo '<div class="alert bg-danger alert-icon-left mb-2" role="alert">
                        <strong>Please</strong> fill all inputs!....
                      </div>';
                }else if(upload($_POST)){
                  echo '<script type="text/javascript">location.href="check_out.php"</script>';
                 }else{
                  echo "error";
                 }
              }

               ?>
              <form method="post">               

              <fieldset class="form-group position-relative has-icon-left">
                <input class="form-control" id="iconLeft4" name="cname" placeholder="Customer Name" type="text">
                <div class="form-control-position">
                  <i class="ft-user primary"></i>
                </div>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <select class="custom-select block" name="service" id="service">
                  <option selected="" value="0">Services</option>
                  <?php 

                    $service = get_service();
                    // print_r($service);
                    for($i=0;$i < count($service);$i++){ ?>

                  <option value="<?php echo $service[$i]['s_name'].'/'.$service[$i]['s_cost'] ?>" data="<?php echo $service[$i]['s_id'] ?>"><?php echo $service[$i]['s_name']; ?></option>
                <?php } ?>
                </select>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <select class="custom-select block" id="brand" name="brand">
                  <option selected="" value="0">Brand</option>
                </select>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <select class="custom-select block" id="stylish" name="stylish">
                  <option selected="" value="0">Stylish List</option>
                  <?php 

                    $user = get_user();
                    // print_r($user);
                    for($i=0;$i < count($user);$i++){ ?>

                  <option value="<?php echo $user[$i]['u_id']; ?>/<?php echo $user[$i]['u_uname']; ?>"><?php echo $user[$i]['u_name']; ?></option>
                <?php } ?>
                </select>
              </fieldset>
              <button type="submit" class="btn btn-primary btn-min-width mr-1 mb-1" name="reg"><i class="ft-save"></i> Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12">
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

                          $income = get_income(date("Y-m-d"));
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
                      <?php } ?>
                      <tr>
                        <th colspan="4" class="text-center">TOTAL INCOME</th>
                        <th><?php echo get_sum(date("Y-m-d")); ?></th>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
<?php include "include/footer.php" ?>
<script type="text/javascript">
                var cosmetic_arr =  <?php echo json_encode(get_cosmetic()) ?>;

                $('#service').change(function() {
                  console.log(cosmetic_arr);
                  var option_data = $(this).find('option:selected').attr('data');
                  $('#brand').empty();
                  for(var i = 0; i < cosmetic_arr.length;i++){
                    if (option_data == cosmetic_arr[i]['c_service']) {
                      $('#brand').append('<option value="'+cosmetic_arr[i]['c_name']+'/'+cosmetic_arr[i]['c_price']+'">'+cosmetic_arr[i]['c_name']+'</option>')
                    }
                    
                  }
                });
              </script>
