<?php include "include/head.php" ?>
<?php include "include/site-head.php" ?>

<?php
if ($_SESSION["role"] != 3) {
    echo "<script>location.href='http://localhost/hair_salon/login.php'</script>";
  }
?>

    <div class="row">
      <div class="col-md-12 col-sm-12">
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
                          $income = get_list(date("Y-m-d"));
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
                        <th><?php echo get_total(date("Y-m-d")); ?></th>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
<?php include "include/footer.php" ?>
