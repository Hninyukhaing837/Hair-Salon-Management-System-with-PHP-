<?php include "include/head.php" ?>
<?php include "include/site-head.php" ?>

    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="card-header card-head-inverse bg-primary">
            <h4 class="card-title">Register</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          </div>
          <div class="card-content">

            <!-- register form -->
           
            <div class="card-body">
               <?php 

              if (isset($_POST["reg"])) {
                
                  if(empty($_POST["name"]) || empty($_POST["uname"]) || empty($_POST["pass"]) || empty($_POST["role"]) || empty($_POST["phone"])){
                    echo '<div class="alert bg-danger alert-icon-left mb-2" role="alert">                          
                          <strong>Please</strong> fill all inputs!....
                        </div>';
                  }else{

                     if(!reg_user($_POST)){

                      echo '<div class="alert bg-danger alert-icon-left mb-2" role="alert">                          
                          <strong>User</strong> already exit.....
                        </div>';

                     }else{

                      echo '<div class="alert bg-primary alert-icon-left alert-dismissible mb-2" role="alert">                          
                          <strong>Register</strong> success....
                        </div>';

                     }

                  }

              }

            ?>
              <form method="post">
              <fieldset class="form-group position-relative has-icon-left">
                <input class="form-control"  name="name" placeholder="Name" type="text">
                <div class="form-control-position">
                  <i class="ft-user primary"></i>
                </div>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <select class="custom-select block" id="customSelect" name="role">
                  <option selected="">Select Role</option>
                  <option value="1">Admin</option>
                  <option value="2">Cahser</option>
                  <option value="3">Employee</option>
                </select>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <input class="form-control"  name="uname" placeholder="Username" type="text">
                <div class="form-control-position">
                  <i class="ft-user-check primary"></i>
                </div>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <input class="form-control"  name="pass" placeholder="Password" type="password">
                <div class="form-control-position">
                  <i class="ft-lock primary"></i>
                </div>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <input class="form-control"  name="phone" placeholder="Phone" type="number">
                <div class="form-control-position">
                  <i class="ft-phone primary"></i>
                </div>
              </fieldset>
              
              <button type="submit" class="btn btn-primary btn-min-width mr-1 mb-1" name="reg">
                <i class="ft-save"></i> Register
              </button>
            <!-- register form -->

            </form>
            </div>
          </div>
        </div>
      </div>




      <div class="col-md-8 col-sm-12">
        <div class="card">
          <div class="card-header card-head-inverse bg-primary">
            <h4 class="card-title">User Information</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body result">
            </div>

              <div class="table-responsive">
                <table class="table table-hover mb-0">
                  <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th> 
                        <th scope="col">Action</th>

                      </tr>
                  </thead>
                     <tbody>

                      <?php

                        $out_arr = get_user_info();
                        $length = count($out_arr);

                          for ($i=0; $i <$length ; $i++) { 
                        ?>

                           
                            <tr id="clear-row">
                              <td scope="row"><?php echo $out_arr[$i]['u_id']; ?></td>
                              <td><?php echo $out_arr[$i]['u_name']; ?></td>
                              <td>
                                <?php

                                  $role_arr = ["admin","casher","stylish"];
                                  echo $role_arr[$out_arr[$i]['u_role']-1]; 

                                ?>                                  
                              </td>
                              <td><?php echo $out_arr[$i]['u_uname']; ?></td>
                              <td class="pass<?php echo $out_arr[$i]['u_id'];?>" >
                                <input autofocus="" name="password_edit" placeholder="Change Password" disabled="disabled" class="form-control change_pass<?php echo $out_arr[$i]['u_id'];?>" type="password">
                              </td> 
                              <td>
                                  <i onclick="user_info_id('<?php echo $out_arr[$i]['u_id'];?>')" class="ft-edit text-info"></i>
                                  <i  store_id="<?php echo $out_arr[$i]['u_id'];?>" class="ft-save text-danger"></i>
                                  
                              </td>
                            </tr>                   


                          <?php } ?>
                    </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
      </div>
    </div>
  </div>
  <footer class="footer footer-static footer-dark navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; <?php echo date("Y") ?></span>

    </p>
  </footer>

  <script src="<?php echo $base ?>/assets/js/scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="<?php echo $base ?>/assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script src="<?php echo $base ?>/assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <!-- <script src="<?php //echo $base ?>/assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script> -->
  <script src="<?php echo $base ?>/assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
  <script src="<?php echo $base ?>/assets/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
  <script src="<?php echo $base ?>/assets/js/core/app-menu.min.js" type="text/javascript"></script>
  <script src="<?php echo $base ?>/assets/js/core/app.min.js" type="text/javascript"></script>
  <script src="<?php echo $base ?>/assets/js/scripts/customizer.min.js" type="text/javascript"></script>
  <!-- <script src="<?php// echo $base ?>/assets/js/scripts/pages/dashboard-ecommerce.min.js" type="text/javascript"></script> -->

  <!-- Footer -->





<script type="text/javascript">

    function user_info_id(id) {
      // console.log(id);

      $(".change_pass"+id).removeAttr("disabled","disabled");
      // $(".change_pass"+id).css("outline","none");
      // $(".change_pass"+id).css("border","none");
      // $(".change_pass"+id).css("border-bottom","1px solid black");


      $(".change_pass"+id).removeAttr("type","password");
      $(".change_pass"+id).attr('type','text');


      $('.ft-save').click(function () {


        var store = $(this).attr('store_id');
        console.log(store);

        if ( store == id ) {

          var pass_edit = $(".change_pass"+id).val();

          if (pass_edit.length >= 4) {

            console.log(id); 
            console.log(pass_edit);  

              $.post("no_load/update_pass.php", {

              user_id:id,
              pass_update:pass_edit,             

            },
             function (data) {
              
              if (data != "fail") {
                  console.log(data);
                  $('.result').html('<div class="alert bg-primary alert-icon-left alert-dismissible mb-2" role="alert"><strong>Congratulation</strong> your password changing is complete</div>');

              }else if (data == "fail") {
                $('.result').html('<div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert"><strong>Password</strong> changing fail</div>');
              }else{
                console.log('fluck');
              }

            });


          }else{
            alert('Password must be grather than 4 character');
          }

        }
        

      });



    }

</script>


</body>
</html>