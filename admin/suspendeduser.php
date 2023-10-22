<?php
include 'header.php';


$email = $_SESSION['email'];

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Suspended User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Suspended Users</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">User List</h5>



                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                    <th scope="col">Sl No.</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">State</th>
                      <th scope="col">District</th>
                      <th scope="col">Dob</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phonenumber</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $sql = "SELECT * FROM `user_register` WHERE email IN (SELECT email FROM `loginpage` WHERE status = -2)";
                    // echo $sql;
                    
                    $data = select_data($sql);

                    $n = 1;

                    while ($row = mysqli_fetch_assoc($data)) {

                      ?>
                      <tr>
                        <th scope='row'>
                          <?php echo $n++; ?>
                        </th>
                        <td>
                          <?php echo $row['fname'] ?>
                        </td>
                        <td>
                          <?php echo $row['lname'] ?>
                        </td>
                        <td>
                          <?php echo $row['state'] ?>
                        </td>
                        <td>
                          <?php echo $row['district'] ?>
                        </td>
                        <td>
                          <?php echo $row['dob'] ?>
                        </td>
                        <td>
                          <?php echo $row['gender'] ?>
                        </td>
                        <td>
                          <?php echo $row['email'] ?>
                        </td>
                        <td>
                          <?php echo $row['phonenumber'] ?>
                        </td>
                       
                        <td>
                        <div class="btn-group">
                 <a href="php/verifyuser.php?email=<?php echo $row['email'];?>&status=1" class="btn btn-success btn-sm">Reinstate</a>
                          </div>
            
                        </td>

                      </tr>

                      <?php
                    }
                    ?>

                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

              </div>
            </div>

          </div>
        </div>
      </section>

</main><!-- End #main -->


<?php

echo "admin :";
echo $email;

?>




</div>
</section>

</main><!-- End #main -->

<?php


include 'footer.html';

?>