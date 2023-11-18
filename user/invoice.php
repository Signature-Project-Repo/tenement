<?php
// session_start();

include 'header.php';
$email = $_SESSION['email'];
$bookingid = $_GET['bookingid'];



?>
<?php

$sql1 = "SELECT b.*,a.services,a.rate from booking b,addservice a WHERE status='2' AND bookingid=$bookingid";
//echo $sql1;
$data1 = select_data($sql1);
$row = mysqli_fetch_assoc($data1);
?>

<style>
  
    .card-footer-btn {
        display: flex;
        align-items: center;
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
    }

    .text-uppercase-bold-sm {
        text-transform: uppercase !important;
        font-weight: 500 !important;
        letter-spacing: 2px !important;
        font-size: .85rem !important;
    }

    .hover-lift-light {
        transition: box-shadow .25s ease, transform .25s ease, color .25s ease, background-color .15s ease-in;
    }

    .justify-content-center {
        justify-content: center !important;
    }

    .btn-group-lg>.btn,
    .btn-lg {
        padding: 0.8rem 1.85rem;
        font-size: 1.1rem;
        border-radius: 0.3rem;
    }

    .btn-dark {
        color: #fff;
        background-color: #1e2e50;
        border-color: #1e2e50;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(30, 46, 80, .09);
        border-radius: 0.25rem;
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .p-5 {
        padding: 3rem !important;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.5rem 1.5rem;
    }

    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
    }

    .table td,
    .table th {
        border-bottom: 0;
        border-top: 1px solid #edf2f9;
    }

    .table>:not(caption)>*>* {
        padding: 1rem 1rem;
        background-color: var(--bs-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .px-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .table thead th,
    tbody td,
    tbody th {
        vertical-align: middle;
    }

    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
    }

    .mt-5 {
        margin-top: 3rem !important;
    }

    .icon-circle[class*=text-] [fill]:not([fill=none]),
    .icon-circle[class*=text-] svg:not([fill=none]),
    .svg-icon[class*=text-] [fill]:not([fill=none]),
    .svg-icon[class*=text-] svg:not([fill=none]) {
        fill: currentColor !important;
    }

    .svg-icon>svg {
        width: 1.45rem;
        height: 1.45rem;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Invoice</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Invoice</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section>
        <div class="row">
            <div class="container mt-6 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-xl-7">
                        <div class="card">
                            <div class="card-body p-5">
                                <h2>
                                    Hey <?php echo $row['name'];?>,
                                </h2>
                                <p class="fs-sm">
                                    This is the receipt for a payment of <strong>₹<?php echo $row['rate'];?></strong> (INR) you made to <strong>TENEMENT</strong> for the purchase of <strong><?php echo $row['services'];?></strong> service.
                                </p>

                                <div class="border-top border-gray-200 pt-4 mt-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-muted mb-2">Payment No.</div>
                                            <strong><?php echo $row['bookingid'];?></strong>
                                        </div>
                                        <div class="col-md-6 text-md-end">
                                            <div class="text-muted mb-2">Payment Date</div>
                                            <strong><?php echo $row['date'];?></strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-top border-gray-200 mt-4 py-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-muted mb-2">Client</div>
                                            <strong>
                                            <?php echo $row['name'];?>
                                            </strong>
                                            <p class="fs-sm">
                                            <?php echo $row['address'];?>
                                            <br>
                                            <?php echo $row['city'];?>
                                            <br>
                                            <?php echo $row['landmark'];?>
                                            <br>
                                            <?php echo $row['district'];?>
                                                <br>
                                                <a href="#!" class="text-purple"><?php echo $row['email'];?>
                                                </a>
                                                <br>
                                                <i class="bi bi-telephone"></i>  <?php echo $row['phone'];?>
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-md-end">
                                            <div class="text-muted mb-2">Payment To</div>
                                            <strong>
                                                TENEMENT
                                            </strong>
                                            <p class="fs-sm">
                                                
                                                <br>
                                                <a href="#!" class="text-purple">
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <table class="table border-bottom border-gray-200 mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm px-0">Description</th>
                                            <th scope="col" class="fs-sm text-dark text-uppercase-bold-sm text-end px-0">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-0"><?php echo $row['services'];?> Service</td>
                                            <td class="text-end px-0">₹<?php echo $row['rate'];?></td>
                                        </tr>
                                      
                                    </tbody>
                                </table>

                                <div class="mt-5">
                                    <div class="d-flex justify-content-end">
                                        <p class="text-muted me-3">Subtotal:</p>
                                        <span>₹<?php echo $row['rate'];?></span>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <p class="text-muted me-3">Discount:</p>
                                        <span>₹0.00</span>
                                    </div>
                                    <div class="d-flex justify-content-end mt-3">
                                        <h5 class="me-3">Total:</h5>
                                        <h5 class="text-success">₹<?php echo $row['rate'];?> INR</h5>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <a href="#!" class="btn btn-dark btn-lg card-footer-btn justify-content-center text-uppercase-bold-sm hover-lift-light">
                                <span class="svg-icon text-white me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                                        <title>ionicons-v5-g</title>
                                        <path d="M336,208V113a80,80,0,0,0-160,0v95" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                        <rect x="96" y="208" width="320" height="272" rx="48" ry="48" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></rect>
                                    </svg>
                                </span>
                                Pay Now
                            </a>
-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






</main><!-- End #main -->


<?php

include 'footer.html';

?>