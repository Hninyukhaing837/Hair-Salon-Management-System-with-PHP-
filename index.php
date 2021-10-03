<?php include "include/head.php" ?>
<?php include "include/site-head.php" ?>
<div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="p-2 text-center bg-primary bg-darken-2">
                  <i class="icon-briefcase font-large-2 white"></i>
                </div>
                <div class="p-2 bg-gradient-x-primary white media-body">
                  <h5>Employees</h5>
                  <h5 class="text-bold-400 mb-0"><?php echo get_employees(); ?></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="p-2 text-center bg-danger bg-darken-2">
                  <i class="icon-users font-large-2 white"></i>
                </div>
                <div class="p-2 bg-gradient-x-danger white media-body">
                  <h5>Customers</h5>
                  <h5 class="text-bold-400 mb-0"><?php echo customers(); ?></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="p-2 text-center bg-warning bg-darken-2">
                  <i class="icon-wallet font-large-2 white"></i>
                </div>
                <div class="p-2 bg-gradient-x-warning white media-body">
                  <h5>Today Income</h5>
                  <h5 class="text-bold-400 mb-0"><?php echo( today_income(date('Y-m-d'))['todayincome']) ?> MMK</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch">
                <div class="p-2 text-center bg-success bg-darken-2">
                  <i class="icon-calendar font-large-2 white"></i>
                </div>
                <div class="p-2 bg-gradient-x-success white media-body">
                  <h5>Date</h5>
                  <h5 class="text-bold-400 mb-0"><?php echo date('Y-m-d') ?></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Daily Income</h4>
              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collapse show">
              <div class="card-body">
                <div id="smooth-area-chart" class="height-400"></div>
              </div>
            </div>
          </div>
      </div>
    </div>

          

<?php include "include/footer.php" ?>
<script type="text/javascript">
  var include =  <?php echo json_encode(income_last10());  ?>;
  $(window).on("load", function() {
    Morris.Area({
        element: "smooth-area-chart",
        data: <?php echo json_encode(income_last10());  ?>,
        xkey: "date",
        ykeys: ["dailyincome"],
        labels: ["dailyincome"],
        behaveLikeLine: !0, 
        resize: !0,
        pointSize: 3,
        pointStrokeColors: ["#ddd"],
        smooth: !0,
        gridLineColor: "#e3e3e3",
        numLines: 6,
        gridtextSize: 14,
        lineWidth: 0,
        fillOpacity: .6,
        hideHover: "auto",
        lineColors: ["#00A5A8"]
    })
});
</script>