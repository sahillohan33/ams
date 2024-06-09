<?php
    include "./Includes/dbcon.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logo/attnlg.jpg" rel="icon">
    <title>AMS Welcome Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7e3ad9a431.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7e3ad9a431.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="img/logo/attnlg.jpg" width="50px" height="50px" /><a class="navbar-brand px-3" href="#">AMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#feature">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="./adminlogin.php" target="_blank">Admin Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="./teacherlogin.php" target="_blank">Teacher Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Image Slider Section -->
    <section class="image-slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner h-50">
                <div class="carousel-item active">
                    <img src="./img/a1.png" class="d-block w-100" alt="Image Not Found">
                </div>
                <div class="carousel-item">
                    <img src="./img/a2.png" class="d-block w-100" alt="Image Not Found">
                </div>
                <div class="carousel-item">
                    <img src="./img/a3.avif" class="d-block w-100" alt="Image Not Found">
                </div>
                <div class="carousel-item">
                    <img src="./img/a6.jpg" class="d-block w-100" alt="Image Not Found">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="welcome">
        <marquee behavior="scroll" direction="left" scrolldelay="5" onmouseover="this.stop()" onmouseout="this.start()">

            <h1>Welcome To Attendance Management System Website</h1>
        </marquee>

    </section>
    <!-- About section  -->
    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About <span style="color:#ff9100;">Us</span></p>
                <h2>About Student Attendance Management System</h2>
                <p>Moving on, this student attendance management project in PHP focuses mainly on the management of
                    students’ daily attendance. Also, the system displays all the lists of students according to their
                    classes. In addition, the system allows managing teacher, class, and student information too. This
                    project is divided into two categories: Admin, and Teacher. In an overview of this web application,
                    a teacher can simply view his/her student’s details. With it, the teacher has an access to maintain
                    all the attendance within the system. Each class contains a class teacher, so a teacher has to
                    handle the daily attendance of that particular class of students. Also, the teacher can view
                    attendance reports such as overall attendance, selective students under certain dates. Besides, the
                    user can download the attendance report in excel format.</p>
            </div>
            <div class="about-img">
                <img src="./img/a3.avif" alt="Image Not found">
            </div>
        </div>
    </section>
    <!-- Feature Section -->
    <section class="feature" id="feature">
        <h4 class="feature-title">Features</h4>
        <div class="container-feature">
            <div class="wrapper">
                <div class="box-area">

                    <h6>Admin Panel</h6>

                </div>
                <div class="box-area custom">

                    <h6> Class Teacher Panel</h6>

                </div>
                <div class="box-area custom">

                    <h6>Manage, Class, Section</h6>

                </div>
                <div class="box-area custom">

                    <h6>Assign Class Teacher</h6>

                </div>

                <div class="box-area custom">

                    <h6>Student Management</h6>

                </div>

                <div class="box-area custom">

                    <h6>Attendance Management</h6>

                </div>
                <div class="box-area custom">

                    <h6>Manage Session and Terms</h6>

                </div>
                <div class="box-area custom">

                    <h6>View Attendance Report</h6>

                </div>
                <div class="box-area">
                    <h6>Download Attendance Report</h6>
                </div>
            </div>
        </div>

    </section>

    <!-- Contact section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="heading text-center">
                <h2>Contact
                    <span> Us </span>
                </h2>
                <p><em>Let us know your questions, suggestions and concerns by filling out the contact form
                        below.</em>
                </p>

            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>Contact detail</h3>
                    </div>
                    <div class="content">


                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">PHONE :
                                <br>
                                <a href="tel:+91 9306563821" target="_blank" style="text-decoration: none;"><span>+91
                                        9306563821</span></a>
                            </h4>
                        </div>

                        <div class="info">
                            <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block">EMAIL :
                                <br>
                                <a href="mailto:sahillohan12@gmail.com" target="_blank"
                                    style="text-decoration: none;"><span>sahillohan12@gmail.com</span></a>
                            </h4>
                        </div>

                        <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">ADDRESS :<br>
                                <span>Narnaund Hisar Haryana 125039</span>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <form action="https://api.web3forms.com/submit" method="post">
                        <input type="hidden" name="access_key" value="c837099e-36e0-422b-bd8a-cccde660b2b0">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="Name"
                                    placeholder="Please Enter the Full Name" autocomplete="off" required
                                    style="border:0.01px solid #aaa;">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="EmailId"
                                    placeholder="Please Enter the Email Id" autocomplete="off" required
                                    style="border:0.01px solid #aaa;">
                            </div>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="class"
                                    placeholder="Please Enter the Class" autocomplete="off" required
                                    style="border:0.01px solid #aaa;">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="rollno"
                                    placeholder="Please Enter the Roll Number" autocomplete="off" required
                                    style="border:0.01px solid #aaa;">
                            </div>
                            <div class="col-sm-6">
                                <input type="tel" class="form-control" name="phoneno"
                                    placeholder="Please Enter the Phone Number" pattern="{0-9}{10}" autocomplete="off"
                                    required style="border:0.01px solid #aaa;">
                            </div>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="subject"
                                    placeholder="Please Enter the Subject" autocomplete="off" required
                                    style="border:0.01px solid #aaa;">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" name="description""
                                placeholder=" Please Description full detail" required autocomplete="off"
                                style="border:0.01px solid #aaa;"></textarea>
                        </div>

                        <button class="btn btn-block" type="submit">Send Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Site footer -->
    <footer class="site-footer mt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About Us</h6>
                    <p class="text-justify">Moving on, this student attendance management project in PHP focuses
                        mainly
                        on the management of students’ daily attendance. Also, the system displays all the lists of
                        students according to their classes. In addition, the system allows managing teacher, class,
                        and
                        student information too. This project is divided into two categories: Admin, and Teacher. In
                        an
                        overview of this web application, a teacher can simply view his/her student’s details. With
                        it,
                        the teacher has an access to maintain all the attendance within the system. Each class
                        contains
                        a class teacher, so a teacher has to handle the daily attendance of that particular class of
                        students. Also, the teacher can view attendance reports such as overall attendance,
                        selective
                        students under certain dates. Besides, the user can download the attendance report in excel
                        format.
                    </p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Address</h6>
                    <ul class="footer-links">
                        <li><a href="mailto:sahillohan12@gmail.com">Sahillohan12@gmail.com</a></li>
                        <li><a href="tel:+91 9306563821">+91 9306563821</a></li>
                        <li><a href="#">Narnaund Hisar Haryana</a>
                        <li><a href="#contact">Contact Us</a>

                        </li>

                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#feature">Features</a></li>
                        <li><a href="#contact">Contact Us</a></li>

                        <li><a href="./adminlogin.php" target="_blank">Admin Login</a></li>
                        <li><a href="./teacherlogin.php" target="_blank">Class Teacher Login</a></li>

                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text"><span style="font-size: 14px; color:#fff;">Copyright &copy; <script>
                            document.write(new Date().getFullYear());
                            </script> - Developed And Designing By 💗 Sahil Lohan
                            STUDENT ATTENDANCE MANAGEMENT SYSTEM
                        </span>
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/search/top/?q=Sahil%20Lohan"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="instagram" href="https://www.instagram.com/sahillohan08/"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li><a class="github" href="https://github.com/sahillohan33"><i class="fa fa-github"></i></a>
                        </li>
                        <li><a class="linkedin"
                                href="https://www.linkedin.com/in/sahil-lohan-594b2a1b7/?originalSubdomain=in"><i
                                    class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script>
    ScrollReveal({
        // reset: true,
        distance: '60px',
        duration: 2500,
        delay: 400
    });
    ScrollReveal().reveal('.contact', {
        delay: 500,
        origin: 'bottom'
    });
    ScrollReveal().reveal('.feature', {
        delay: 500,
        origin: 'bottom'
    });
    </script>
    <!-- Login Content -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

</body>

</body>

</html>