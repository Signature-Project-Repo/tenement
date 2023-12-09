<?php
require 'header.php';
$email = $_SESSION['email'];

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
$sql5 = "SELECT * FROM loginpage where status='-2' and usertype='1'";
$data5 = select_data($sql5);
$count5 = mysqli_num_rows($data5);

//count of rejected users
$sql6 = "SELECT * FROM loginpage where status='-1' and usertype='1'";
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
$sql7 = "SELECT * FROM loginpage where status='-2' and usertype='2'";
$data7 = select_data($sql7);
$count7 = mysqli_num_rows($data7);

//count of rejected users
$sql8 = "SELECT * FROM loginpage where status='-1' and usertype='2'";
$data8 = select_data($sql8);
$count8 = mysqli_num_rows($data8);


//user complaints
$sql10 = "SELECT * FROM complaints where status='0' and reply='0'";
$data10 = select_data($sql10);
$count10 = mysqli_num_rows($data10);

//user resolved complaints
$sql11 = "SELECT * FROM complaints where status='0' and reply!='0'";
$data11 = select_data($sql11);
$count11 = mysqli_num_rows($data11);


//Employee complaints
$sql12 = "SELECT * FROM complaints where status='1' and reply='0'";
$data12 = select_data($sql12);
$count12 = mysqli_num_rows($data12);

//Employee resolved complaints
$sql13 = "SELECT * FROM complaints where status='1' and reply!='0'";
$data13 = select_data($sql13);
$count13 = mysqli_num_rows($data13);






?>





<main id="main" class="main">

  <div class="pagetitle">
    <h1>Admin Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  




<div class="row">
    <div class="col-lg-4">

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






          <div id="pieChart" style="min-height: 400px;" class="echart"></div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    echarts.init(document.querySelector("#pieChart")).setOption({

      tooltip: {
        trigger: 'item'
      },
      legend: {
        orient: 'vertical',
        left: 'right'
      },
      series: [{
        name: 'Access From',
        type: 'pie',
        radius: '50%',
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
        ],
        emphasis: {
          itemStyle: {
            shadowBlur: 10,
            shadowOffsetX: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)'
          }
        }
      }]
    });
  });
</script>
<!-- End Pie Chart -->

</div>
</div>
</div>


<!--Employees-->

    <div class="col-lg-4">

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


                  <li><a class="dropdown-item" href="pendingemployee.php">Pending employees</a></li>
                  <li><a class="dropdown-item" href="suspendedemployee.php">Suspended employees</a></li>
                  <li><a class="dropdown-item" href="rejectedemployee.php">Rejected employees</a></li>
                </ul>
              </div>

            </div>
          </div>

          <div id="pieChart3" style="min-height: 400px;" class="echart"></div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    echarts.init(document.querySelector("#pieChart3")).setOption({

      tooltip: {
        trigger: 'item'
      },
      legend: {
        orient: 'vertical',
        left: 'right'
      },
      series: [{
        name: 'Access From',
        type: 'pie',
        radius: '50%',
        data: [{
            value: <?php echo $count3 ?>,
            name: 'Pending Users'
          },
          {
            value: <?php echo $count2 ?>,
            name: 'Active Users'
          },
          {
            value: <?php echo $count7 ?>,
            name: 'Suspended Users'
          },
          {
            value: <?php echo $count8 ?>,
            name: 'Rejected Users'
          }
        ],
        emphasis: {
          itemStyle: {
            shadowBlur: 10,
            shadowOffsetX: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)'
          }
        }
      }]
    });
  });
</script>
<!-- End Pie Chart -->

</div>
</div>
</div>


<!--Complaints-->

    <div class="col-lg-4">

      <div class="card">

        <div class="card-body pb-0">

          <div class="row">
            <div class="col-md-11">
              <h5 class="card-title">Complaints</h5>
            </div>
            <div class="col-md-1 pt-3">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">


                  <li><a class="dropdown-item" href="mycomplaints.php">user complaints</a></li>
                  <li><a class="dropdown-item" href="resolvedcomplaints.php">user resolved complaints</a></li>
                  <li><a class="dropdown-item" href="employeecomplaints.php">employee complaints</a></li>
                  <li><a class="dropdown-item" href="resolvedemployeecomplaints.php">employee resolved complaints</a></li>
                </ul>
              </div>

            </div>
          </div>






              <!-- Pie Chart -->
              <div id="pieChart2" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#pieChart2")).setOption({
              
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      orient: 'vertical',
                      left: 'right'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: '50%',
                      data: [{
                          value: <?php echo $count10 ?>,
                          name: 'User Complaints'
                        },
                        {
                          value: <?php echo $count11 ?>,
                          name: 'Resolved User Complaints'
                        },
                        {
                          value: <?php echo $count12 ?>,
                          name: 'Employee Complaints'
                        },
                        {
                          value: <?php echo $count13 ?>,
                          name: 'Resolved Employee Complaints'
                        }
                      ],
                      emphasis: {
                        itemStyle: {
                          shadowBlur: 10,
                          shadowOffsetX: 0,
                          shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                      }
                    }]
                  });
                });
              </script>
              <!-- End Pie Chart -->

            </div>
          </div>
        </div>








</main><!-- End #main -->



<?php

require 'footer.html';

?>