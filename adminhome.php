<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "gatepass system updated";

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Requests</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <script src="DataTables/datatables.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
.table td.approved {
  background-color: #b3f7b3;
}

.table td.rejected {
  background-color: #ffcccc;
}
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

        <a href="adminhome.html"><img style="width: 44.5%;" src="images/logo.png" alt="logo"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="getstarted scrollto" href="#" data-bs-toggle="modal" data-bs-target="#addAdminModal">ADD ADMIN ACCOUNT</a></li>
                    <a href="#" class="user" data-bs-toggle="modal" data-bs-target="#updatePasswordModal">
                        <i class="bx bx-user" style="font-size: 24px; padding: 10px;"></i>
                    </a>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section class="inner-page" style="padding-top:125px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>GatePass Management</h4>
                            <div class="mb-3">
                                <label for="statusFilter" class="form-label">Filter by Status:</label>
                                <select class="form-select" id="statusFilter">
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approved</option>
                                    <option value="denied">Denied</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Requester</th>
                                        <th>Gate Pass Details</th>
                      
                                        <th id="extraHeader"></th>
                             
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Add Admin Account Modal -->
    <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAdminModalLabel">Add Admin Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your form fields for adding admin account here -->
                <form id="addAdminForm">
    <!-- Surname and Firstname Combined Field -->
    <div class="mb-3">
        <label for="fullname" class="form-label">Full Name (Surname, Firstname)</label>
        <input type="text" class="form-control" id="fullname" name="fullname" pattern="[A-Za-z]+, [A-Za-z]+"  required>
    </div>
    <!-- Email Field -->
    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <!-- Password Field -->
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Account</button>
</form>
            </div>

            
            
        </div>
    </div>
</div>


    <!-- Update Password Modal -->
    <div class="modal fade" id="updatePasswordModal" tabindex="-1" aria-labelledby="updatePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updatePasswordModalLabel">Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your form fields for updating password here -->
                    <form id="updatePasswordForm">
                        <!-- Form fields -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="https://www.facebook.com/pshsilocosregioncampus" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://irc.pshs.edu.ph/" class="globe"><i class="bx bx-globe"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const statusFilter = document.getElementById('statusFilter');
        const extraHeader = document.getElementById('extraHeader');

        statusFilter.addEventListener('change', function() {
            const status = this.value;
            window.location.href = `?status=${status}`;
        });

        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status') || 'pending';

        statusFilter.value = status;

        if (status === 'approved') {
            extraHeader.innerText = 'Date Approved and Approved By';
        } else if (status === 'denied') {
            extraHeader.innerText = 'Date Denied, Denied By, and Reason';
         }else if (status === 'pending') {
            extraHeader.innerText = 'Action';
        } else {
            extraHeader.innerText = '';
        }
    });
    // JavaScript to handle dropdown filter change
document.getElementById('statusFilter').addEventListener('change', function() {
    const status = this.value;
    // Filter requests based on selected status
    // You can use AJAX to fetch filtered data from the server
});

// JavaScript to show Add Admin Account Modal
document.querySelector('.add-admin-btn').addEventListener('click', function() {
    $('#addAdminModal').modal('show');
});

document.getElementById('addAdminForm').addEventListener('submit', async function(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    const form = event.target;
    const formData = new FormData(form);

    try {
        const response = await fetch('forms/addAdmin.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        console.log('Server Response:', response);
        console.log('Parsed JSON Result:', result);

        if (response.ok) {
            alert(result.success);
            form.reset();
        } else {
            throw new Error(result.error || 'Unknown error occurred.');
        }
    } catch (error) {
        alert('An error occurred while submitting the form. Please try again.' + error);
    }
});


  </script>

</html>
