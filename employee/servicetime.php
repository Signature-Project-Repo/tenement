<?php
// Include your header.php file
include 'header.php';

// Function to check if service is overdue
function isServiceOverdue($service)
{
    date_default_timezone_set('Asia/Kolkata');

    // Current date and time
    $currentTime = strtotime(date('Y-m-d H:i:s'));

    // Due date and time from the database
    $dueDateTime = strtotime($service['date'] . ' ' . $service['time']);

    // Compare the date and time
    return $currentTime > $dueDateTime;
}

$email = $_SESSION['email'];
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Service Overdue</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Service overdue</li>
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
                                            <th scope="col">Service</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">District</th>
                                            <th scope="col">Location URL</th>
                                            <th scope="col">View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        date_default_timezone_set('Asia/Kolkata');
                                        $time = date("H");
                                        date_default_timezone_set('Asia/Kolkata');
                                        $date = date("Y-m-d");

                                        $sql1 = "SELECT b.*, a.services FROM booking b 
                                                 JOIN addservice a ON a.serviceid = b.serviceid 
                                                 WHERE (b.date < '$date' OR (b.date = '$date' AND b.time <= '$time')) AND b.status = '1'";
                                        $data1 = select_data($sql1);

                                        $n = 1;

                                        while ($row = mysqli_fetch_assoc($data1)) {
                                            $isOverdue = isServiceOverdue($row);

                                            // Add CSS class based on whether the service is overdue or not
                                            $rowClass = $isOverdue ? 'table-danger' : '';
                                        ?>
                                            <tr class="<?php echo $rowClass; ?>">
                                                <th scope='row'><?php echo $n++; ?></th>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['services'] ?></td>
                                                <td><?php echo $row['date'] ?></td>
                                                <td><?php echo $row['time'] ?></td>
                                                <td><?php echo $row['district'] ?></td>
                                                <td> <a class="btn btn-secondary btn-sm" target="_blank" href="<?php echo $row['url'] ?>"><i class="ri-map-pin-2-fill"></i> View in Map</a></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered2" onclick="passdes('<b>Name: </b><?php echo $row['name']; ?><br><b>Phone: </b><?php echo $row['phone']; ?><br><b>Service: </b><?php echo $row['services']; ?><br><b>Date: </b><?php echo $row['date']; ?><br><b>Time: </b><?php echo $row['time']; ?><br><b>Address: </b><?php echo $row['address']; ?><br><b>District: </b><?php echo $row['district']; ?><br><b>City: </b><?php echo $row['city']; ?><br><b>Instructions: </b><?php echo $row['instructions']; ?><br><b>Landmark: </b><?php echo $row['landmark']; ?><br><b>Email: </b><?php echo $row['email']; ?>')">View Details</a>
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
            </div><!-- End Vertically centered Modal-->
        </div>
    </section>
</main><!-- End #main -->

<script>
    function passdes(valuee) {
        document.getElementById("mod").innerHTML = valuee;
    }
</script>

<?php
echo "admin :";
echo $email;
?>

</div>
</section>
</main><!-- End #main -->

<?php
// Include your footer.html file
include 'footer.html';
?>
