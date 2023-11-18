<?php
require 'header.php';
$email = $_SESSION['emailid'];

//count of total members
$sql1 = "SELECT user_register.*
       FROM user_register
       JOIN loginpage ON user_register.email = loginpage.email
       WHERE loginpage.status = '1'";

$data1 = select_data($sql1);
$count1 = mysqli_num_rows($data1);



//count of pending users
$sql4 = "SELECT * FROM loginpage where status='0' and usertype='1'";
$data4 = select_data($sql4);
$count4 = mysqli_num_rows($data4);

//count of suspended users
$sql5 = "SELECT * FROM loginpage where status='-1' and usertype='1'";
$data5 = select_data($sql5);
$count5 = mysqli_num_rows($data5);

//count of rejected users
$sql6 = "SELECT * FROM loginpage where status='-2' and usertype='1'";
$data6 = select_data($sql6);
$count6 = mysqli_num_rows($data6);



//count of total members
$sql2 = "SELECT employee_register.*
       FROM employee_register
       JOIN loginpage ON employee_register.email = loginpage.email
       WHERE loginpage.status = '1'";

$data2 = select_data($sql2);
$count2 = mysqli_num_rows($data2);



//count of pending users
$sql3 = "SELECT * FROM loginpage where status='0' and usertype='2'";
$data3 = select_data($sql3);
$count3 = mysqli_num_rows($data3);

//count of suspended users
$sql7 = "SELECT * FROM loginpage where status='-1' and usertype='2'";
$data7 = select_data($sql7);
$count7 = mysqli_num_rows($data7);

//count of rejected users
$sql8 = "SELECT * FROM loginpage where status='-2' and usertype='2'";
$data8 = select_data($sql8);
$count8 = mysqli_num_rows($data8);






?>





<main id="main" class="main">

  <div class="pagetitle">
    <h1>User List</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <!-- Website Traffic -->

  <div class="row">
    <div class="col-lg-6">

      <div class="card">

        <div class="card-body pb-0">

          <div class="row">
            <div class="col-md-11">
              <h5 class="card-title">Users</h5>
            </div>
            <div class="col-md-1 pt-3">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">


                  <li><a class="dropdown-item" href="pendinguser.php">Pending Users</a></li>
                  <li><a class="dropdown-item" href="suspendeduser.php">Suspended Users</a></li>
                  <li><a class="dropdown-item" href="rejecteduser.php">Rejected Users</a></li>
                </ul>
              </div>

            </div>
          </div>


          <div id="trafficChartUsers" style="min-height: 400px;" class="echart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              echarts.init(document.querySelector("#trafficChartUsers")).setOption({
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  top: '0%',
                  left: 'center',
                },
                series: [{
                  name: '',
                  type: 'pie',
                  radius: ['40%', '70%'],
                  avoidLabelOverlap: false,
                  label: {
                    show: false,
                    position: 'center'
                  },
                  emphasis: {
                    label: {
                      show: true,
                      fontSize: '18',
                      fontWeight: 'bold'
                    }
                  },
                  labelLine: {
                    show: false
                  },
                  data: [{
                      value: <?php echo $count4 ?>,
                      name: 'Pending Users'
                    },
                    {
                      value: <?php echo $count1 ?>,
                      name: 'Active Users'
                    },
                    {
                      value: <?php echo $count5 ?>,
                      name: 'Suspended Users'
                    },
                    {
                      value: <?php echo $count6 ?>,
                      name: 'Rejected Users'
                    }
                  ]
                }]
              });
            });
          </script>

        </div>
      </div>



      <!-- End Website Traffic -->
    </div>

    <div class="col-lg-6">

      <div class="card">


        <div class="card-body pb-0">
          <div class="row">
            <div class="col-md-11">
              <h5 class="card-title">Employees</h5>
            </div>
            <div class="col-md-1 pt-3">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="pendingartist.php">Pending Employees</a></li>
                  <li><a class="dropdown-item" href="suspendedartist.php">Suspended Employees</a></li>
                  <li><a class="dropdown-item" href="rejectedartist.php">Rejected Employees</a></li>
                </ul>
              </div>
            </div>
          </div>



          <div id="trafficChartEmployees" style="min-height: 400px;" class="echart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              echarts.init(document.querySelector("#trafficChartEmployees")).setOption({
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  top: '0%',
                  left: 'center'
                },
                series: [{
                  name: '',
                  type: 'pie',
                  radius: ['40%', '70%'],
                  avoidLabelOverlap: false,
                  label: {
                    show: false,
                    position: 'center'
                  },
                  emphasis: {
                    label: {
                      show: true,
                      fontSize: '18',
                      fontWeight: 'bold'
                    }
                  },
                  labelLine: {
                    show: false
                  },
                  data: [{
                      value: <?php echo $count3 ?>,
                      name: 'Pending Employees'
                    },
                    {
                      value: <?php echo $count2 ?>,
                      name: 'Active Employees'
                    },
                    {
                      value: <?php echo $count7 ?>,
                      name: 'Suspended Employees'
                    },
                    {
                      value: <?php echo $count8 ?>,
                      name: 'Rejected Employees'
                    }
                  ]
                }]
              });
            });
          </script>

        </div>
      </div><!-- End Website Traffic2 -->
    </div>

  </div>
  <script>
    let count = [];
    let artform = [];
  </script>


  <!-- Website Traffic2 -->

  <?php

  $sql10 = "SELECT * from addservice ";

  $data10 = select_data($sql10);
  while ($row11 = mysqli_fetch_assoc($data10)) {

    $item_id = $row11['serviceid'];
    $count11 = mysqli_num_rows($data10);

    $name = $row11['services'];


    $sql20 = "SELECT * from booking where serviceid='$item_id'";
    $data20 = select_data($sql20);
    $count12 = mysqli_num_rows($data20);
   

    ?>
  <script>
     count.push('<?php echo  $count12; ?>');
     artform.push('<?php echo $name; ?>');
  </script>

<?php

      }
  ?>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Bar Chart</h5>

        <!-- Bar Chart -->
        <div id="barChart" style="min-height: 400px;" class="echart"></div>

        <script>
         
          document.addEventListener("DOMContentLoaded", () => {
            echarts.init(document.querySelector("#barChart")).setOption({
              xAxis: {
                type: 'category',
                data: service
              },
              yAxis: {
                type: 'value'
              },
              series: [{
                data: count,
                type: 'bar'
              }]
            });
          });
        </script>
      </div>
    </div>
  </div>
  <!-- End Bar Chart -->





</main><!-- End #main -->



<?php

require 'footer.html';

?>