<?php
include 'header.php';


$email=$_SESSION ['email'];

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Employee List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Employee List</li>
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
            <h5 class="card-title">Employee List</h5>
          

         
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Sl No.</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">District</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">View Details</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
 
                <?php 
               $sql = "SELECT * FROM `employee_register` WHERE email IN (SELECT email FROM `loginpage` WHERE status = 1)";
             // echo $sql;

                $data=select_data($sql);

                $n=1;

                while ($row = mysqli_fetch_assoc($data)) {
                  
                  ?>
                  <tr>
                 <th scope='row'><?php echo $n++; ?></th>
                 <td><?php echo  $row['fname'] ?></td>
                 <td> <?php echo $row['lname'] ?></td>
                 <td> <?php echo $row['district']  ?></td>
               
                 <td> <?php echo  $row['dob'] ?> </td>
                 <td> <?php echo  $row['gender'] ?> </td>
                
                 <td><?php echo $row['email'] ?></td>
                
                 <td>
                 <div class="btn-group">
                  <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered2" onclick="passdes('<b>Name :</b> <?php echo $row['fname'];?> <?php echo $row['lname'];?> <br> <b>Housename :</b><?php echo $row['housename'];?><br> <b>Street :</b><?php echo $row['street'];?><br> <b>District :</b><?php echo $row['district'];?><br> <b>State :</b><?php echo $row['state'];?><br> <b>Zip :</b><?php echo $row['zip'];?><br> <b>DOB :</b><?php echo $row['dob'];?><br> <b>Gender :</b><?php echo $row['gender'];?><br> <b>Phone :</b><?php echo $row['phonenumber'];?><br> <b>Email :</b><?php echo $row['email'];?><br> <b>Aadhar :</b><?php echo $row['aadhar'];?>')">View Details</a>
                 </div>
                </td>
                <td>
                  <div class="btn-group">

                 
                 <a href="php/verifyemployee.php?email=<?php echo $row['email'];?>&status=-2" class="btn btn-warning btn-sm">Suspend</a>
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
    <div class="modal fade" id="verticalycentered2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>Details</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="mod">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!-- End Vertically centered Modal -->

  </main><!-- End #main -->


      <?php 

      echo "admin :";
      echo $email;

      ?>




      </div>
    </section>

  </main><!-- End #main -->
  <script>
  function passdes(valuee) {
    document.getElementById("mod").innerHTML = valuee;
  }
</script>

<?php 


include 'footer.html';

?>
