<?php
include 'header.php';


$email=$_SESSION ['email'];

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>My Complaints</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Employee</a></li>
          <li class="breadcrumb-item active">Complaints</li>
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
            <h5 class="card-title">Complaints</h5>
          

         
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Sl No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
 
                <?php 
               $sql = "SELECT * FROM `complaints` WHERE reply='0' AND status='1'";
             // echo $sql;

                $data=select_data($sql);

                $n=1;

                while ($row = mysqli_fetch_assoc($data)) {
                  
                  ?>
                  <tr>
                 <th scope='row'><?php echo $n++; ?></th>
                 <td><?php echo  $row['title'] ?></td>
                 <td> <?php echo $row['description'] ?></td>
                 <td><?php echo $row['priority'] ?></td>
                 <td><?php echo $row['date']?></td>
                     

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
