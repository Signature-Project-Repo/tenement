<?php
session_start();

include 'header.php';
$email=$_SESSION['email'];


?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Manage Services</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Services</li>
      </ol>
    </nav>

  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">



      <div class=col-md-6>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Services</h5>


            <form class="row g-3" action="php/add.php" method="POST">
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="services" placeholder="Your Name" maxlength="100">
                  <label for="services">Services</label>
                </div>
              </div>

              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Address" name="description" style="height: 100px;" maxlength="200"></textarea>
                  <label for="floatingTextarea">Description</label>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Add</button>

              </div>
            </form><!-- End floating Labels Form -->

          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"></h5>
            

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Sl No.</th>
                  
              
                  <th scope="col">Service</th>
                  <th scope="col">Description</th>

                  
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php
                $sql="SELECT * FROM items ";
                $data=select_data($sql);
                $n=1;
                while($user=mysqli_fetch_assoc($data)){
                  ?>

                  <th scope="row"><?php echo $n++?></th>
                  <td><?php echo $user['services']?></td>
                  <td><?php echo $user['description']?></td>
                
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

include 'footer.html';

?>