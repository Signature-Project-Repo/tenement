<?php
include 'header.php';


$email=$_SESSION ['email'];

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>User Complaints</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Complaint Management</a></li>
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
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
 
                <?php 
               $sql = "SELECT * FROM complaints WHERE reply='0'";
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
                 <td><?php echo $row['email']?></td>
                 <td>
                 <div class="btn-group">
                            <a class="btn btn-success btn-sm" data-bs-toggle="modal" onclick="passid('<?php echo $row['id'];?>')" data-bs-target="#verticalycentered">Reply</a>
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

    <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Complaints</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                    <form action="php/verifycomplaints.php" method="POST">
                    
                    <label>ID</label>
                        <input type="textx" name="id" id="id">
                        <br>  
                        <label>Reply</label>
                        <input type="text" class="form-control"  name="reply">
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Send Reply</button>
                    </div>
                </form>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

              

  </main><!-- End #main -->


  <script>
    function passid(id)
    {
      //alert(id);

      document.getElementById('id').value=id;
    }
  </script>

<?php 


include 'footer.html';

?>
