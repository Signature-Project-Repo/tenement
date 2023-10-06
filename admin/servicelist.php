<?php
include 'header.php';


$email=$_SESSION ['email'];

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Service Requests</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Service Requests</li>
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
            <h5 class="card-title">Service requests</h5>
          

         
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Sl No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Address</th>
                    <th scope="col">Instructions</th>
                    <th scope="col">Location URL</th>
                    
                  </tr>
                </thead>
                <tbody>
 
                <?php 
               $sql = "SELECT * FROM `booking` WHERE status='0'";
             // echo $sql;

                $data=select_data($sql);

                $n=1;

                while ($row = mysqli_fetch_assoc($data)) {
                  
                  ?>
                  <tr>
                 <th scope='row'><?php echo $n++; ?></th>
                 <td><?php echo  $row['name'] ?></td>
                 <td> <?php echo $row['phone'] ?></td>
                 <td><?php echo $row['date'] ?></td>
                 <td><?php echo $row['time']?></td>
                 <td> <?php echo $row['address']  ?></td>
                 <td> <?php echo $row['instructions'] ?></td>
                 <td> <?php echo  $row['url'] ?> </td>


                 <td>
                          <div class="btn-group">
                            <a href="#" class="btn btn-success btn-sm">Approve</a>
                            <a href="#" class="btn btn-danger btn-sm">Reject</a>
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
