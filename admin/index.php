<?php

include 'header.php';

?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Manage Items</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Items</li>
      </ol>
    </nav>

  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">



      <div class=col-md-6>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Labels Form</h5>


            <form class="row g-3">
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                  <label for="floatingName">Services</label>
                </div>
              </div>

              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
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
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Designer</td>
                  <td>28</td>
                  <td>2016-05-25</td>
                </tr>
          
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