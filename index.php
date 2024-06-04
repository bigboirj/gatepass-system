<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "gatepass system updated";
$conn = new mysqli($servername, $username, $password, $databaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
< lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home</title>
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
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="home.html"><img style="width: 50%;" src="images/logo.png" alt="logo"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Answer Form</a></li>
          <li><a class="nav-link scrollto" href="#developer">Developer</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>PSHS-IRC RESIDENCE HALL GATEPASS ACQUISITION SYSTEM</h1>
        </div>
      </div>
      <div class="text-center">
        <a href="#about" class="btn-get-started scrollto">Acquire GatePass</a>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gatepass Form</h2>
          <form id="gatepass-form" action="forms/submit_request.php" class="php-email-form card" style="padding: 20px;">
            <div class="row gy-2 gx-md-3">
              <div class="col-md-2 form-group">
                <input type="text" name="student_id" class="form-control" id="student_id" placeholder="Student ID" required minlength="5">
              </div>
              <div class="col-md-4 form-group">
                <input type="text" name="cname" class="form-control" id="cname" placeholder="Student Name" readonly required>
              </div>
              <div class="col-md-4 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Student Email" readonly required>
              </div>
              <div class="col-md-2 form-group">
                <input type="text" class="form-control" name="batch" id="batch" placeholder="Batch" readonly required>
              </div>
              <div class="col-md-3 form-group">
                <input type="text" class="form-control" name="parent_name" id="parent_name" placeholder="Parent/Guardian Name" required>
              </div>
              <div class="col-md-4 form-group">
                <input type="tel" class="form-control" name="parent_number" id="parent_number" placeholder="Parent/Guardian Contact No." required pattern="^(09|\+639)\d{9}$">
              </div>
              <div class="col-md-5 form-group">
                <input type="text" class="form-control" name="destination" id="destination" placeholder="Destination" required>
              </div>
              <div class="col-md-4 form-group"></div>
              <div class="col-md-4 form-group">
                <label for="travel_date">Travel Date:</label>
                <input type="date" class="form-control" name="travel_date" id="date" required>
              </div>
              <div class="col-md-4 form-group"></div>
              <div class="text-center col-12" style="margin-top: 20px;">
                <button type="submit">Submit Form</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- ======= Developer Section ======= -->
    <section id="developer" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Development Team</h2>
          <p>Our development team, comprising talented professionals with expertise in various programming languages and frameworks, has worked diligently to deliver a high-quality gatepass acquisition system that meets the unique needs of our clients. We appreciate their <em>diversity, creativity, and collaborative spirit</em>, which have been essential to our success.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact Us</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>PSHS-IRC, Mindanao State University, Marawi City</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>pshsirc@gmail.com</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+63 123 456 789</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62662.17795649466!2d124.28287634999999!3d8.000494399999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x325568aff00d40bb%3A0x3233d03f098de77c!2sPhilippine%20Science%20High%20School%20-%20Ilocos%20Region%20Campus!5e0!3m2!1sen!2sph!4v1632222223490!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>PSHS-IRC</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>


<script>
document.getElementById('student_id').addEventListener('input', async function () {
    const student_id = this.value;
    if (student_id.length >= 11) {
        const formData = new FormData();
        formData.append('student_id', student_id);
        try {
            const response = await fetch('forms/contact.php', {
                method: 'POST',
                body: formData
            });
            const result = await response.json();
            if (!result.error) {
                document.getElementById('cname').value = result.cname;
                document.getElementById('email').value = result.email;
                document.getElementById('batch').value = result.batch;
            } else {
                document.getElementById('cname').value = '';
                document.getElementById('email').value = '';
                document.getElementById('batch').value = '';
                alert(result.error);
            }
        } catch (error) {
            console.error('Error fetching student details:', error);
            alert('An error occurred while fetching student details. Please try again.');
        }
    } else {
        document.getElementById('cname').value = '';
        document.getElementById('email').value = '';
        document.getElementById('batch').value = '';
    }
});

document.getElementById('gatepass-form').addEventListener('submit', async function(event) {
  const form = event.target;
  const formData = new FormData(form);

  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = mm + '/' + dd + '/' + yyyy;
  const travel_date = document.getElementById('date').value;
  const student_id = document.getElementById('student_id').value;
  const destination = document.getElementById('destination').value;
  const parent_name = document.getElementById('parent_name').value;
  const parent_no = document.getElementById('parent_no').value;
  const request_date = today;

  

  formData.append('student_id', student_id);
  formData.append('destination', destination);
  formData.append('travel_date', travel_date);
  formData.append('status', "Pending");
  formData.append('request_date', request_date);
  formData.append('parent_name', parent_name);
  formData.append('parent_no', parent_no);

try {
    const response = await fetch('forms/submit_request.php', {
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