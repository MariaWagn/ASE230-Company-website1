<?php
require_once('lib/plain-text-read.php');
require_once('lib/json-read.php');
require_once('lib/csv-read.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo 'NaturaTech Solutions Inc.'; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
        <meta content="Themesbrand" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" />

        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="20">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                  </div>
            </div>
        </div>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top" id="navbar">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="index-1.html">
                    <h4 class="mb-4 hero-3-title"><?php echo 'NaturaTech Solutions Inc.'; ?></h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active"><?php echo 'Home'; ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link"><?php echo 'Services'; ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#awards" class="nav-link"><?php echo 'Awards'; ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#team" class="nav-link"><?php echo 'Team'; ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link"><?php echo 'Contact Us'; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end container -->
        </nav>
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="hero-3 bg-center position-relative" style="background-image: url(images/hero-3-bg.png);" id="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h3 class="font-weight-semibold mb-4"><?php readText('mission'); ?></h3>
                            <p class="mb-5 text-muted subtitle w-75 mx-auto"><?php readText('overview'); ?></p>  
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </section>
        <!-- Hero End -->

        <!-- Awards start -->
        <section class="section" id="awards">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold"><?php echo 'Our Awards';?></h2>
                        <p class="text-muted"><?php echo 'below are some of the awards and achievements of NaturaTech Solutions Inc.'; ?></p>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
				<?php readCsv('awards')?>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->

        </section>
        <!-- Awards end -->

        <!-- Services start -->
        <section class="section bg-light" id="services">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold"><?php echo 'Our Services'; ?></h2>
                        <p class="text-muted"><?php echo 'Below are some of our key products and services.'; ?></p>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
				<?php 
				$array3=readJson('services');
				foreach($array3 as $service){
					?>
                <div class="row align-items-center mb-5">
                    <div class="order-2 order-md-1 mt-md-0 mt-5">
                        <h2 class="mb-4"><?php echo $service['service'];?></h2>
                        <h4 class="text-muted mb-5"><?php echo $service['desc'];?></h4>
						<h5 class="mb-4"><?php echo 'Applications'; ?></h5>
						<p class="text-muted mb-5"><?php echo $service['Application1'].'</br>'.$service['Application2'].'</br>'.$service['Application3'];?></p>
					</div>
                    <!-- end col -->
                </div>
				<?php
				};
				?>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!--  Services end -->

        <!-- Team start -->
        <section class="section bg-light" id="team">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-7 text-center">
                        <h2 class="fw-bold"><?php echo 'Our Team Members'?></h2>
                        <p class="text-muted"><?php echo 'Below is our amazing team. Feel free to contact anyone down below regarding your questions or concerns'?></p>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
				<?php 
				$array2=readJson('team');
				$i=1;
				foreach($array2 as $person){
					?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box mt-4 position-relative overflow-hidden rounded text-center">
                            <div class="position-relative overflow-hidden">
                                <img src="images/team/<?php echo $i;?>.jpg" alt="" class="img-fluid d-block mx-auto" />
                            </div>
                            <div class="p-4">
                                <h5 class="font-size-19 mb-1"><?php echo $person['name'];?></h5>
                                <p class="text-muted font-size-14 mb-0"><?php echo $person['desc'];?></p>
                            </div>
                        </div>
                    </div>
				<?php
				$i+=1;
				};
				?>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Team end -->

        <!-- Contact us start -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-4"><?php echo 'Get in Touch'; ?></h2>
                        <p class="text-muted mb-5"><?php echo 'Got any questions about our products or services? Get in touch with us by sending us a message.'; ?></p>
                       
                        <div>
                            <form method="post" name="myForm" onsubmit="return validateForm()">
                                <p id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="name" class="text-muted form-label"><?php echo 'Name'; ?></label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter name*" >
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="email" class="text-muted form-label"><?php echo 'Email'; ?></label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Enter email*">
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label for="subject" class="text-muted form-label"><?php echo 'Subject'; ?></label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject.." />
                                        </div>
    
                                        <div class="mb-4 pb-2">
                                            <label for="comments" class="text-muted form-label"><?php echo 'Message'; ?></label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter message..."></textarea>
                                        </div>
    
                                        <button type="submit" id="submit" name="send" class="btn btn-primary"><?php echo 'Send Message'; ?></button>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-5 ms-lg-auto">
                        <div class="mt-5 mt-lg-0">
                            <img src="images/contact.png" alt="" class="img-fluid d-block" />
                            <p class="text-muted mt-5 mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="mail"></i><?php echo 'Support@info.com'; ?></p>
                            <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="phone"></i><?php echo ' +91 123 4556 789'; ?></p>
                            <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="map-pin"></i><?php echo ' 2976 Edwards Street Rocky Mount, NC 27804'; ?></p>
                            <ul class="list-inline pt-4">
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Contact us end -->

        <!-- Footer Start -->
        <footer class="footer" style="background-image: url(images/footer-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-5">
                            <p class="text-white-50 f-15 mb-0">
                                <script>
                                document.write(new Date().getFullYear())
                            </script><?php echo ' © NaturaTech Solutions Inc. Design By Maria Wagner'; ?></p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- Footer End -->

        <!-- Style switcher -->
        <div id="style-switcher">
            <div class="bottom">
                <a href="javascript: void(0);" id="mode" class="mode-btn text-white">
                    <i class="mdi mdi-white-balance-sunny mode-light"></i>
                    <i class="mdi mdi-moon-waning-crescent mode-dark"></i>
                </a>
                <a href="javascript: void(0);" class="settings" onclick="toggleSwitcher()"><i class="mdi mdi-cog  mdi-spin"></i></a>
            </div>
        </div>

        <!-- javascript -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/smooth-scroll.polyfills.min.js"></script>

        <script src="https://unpkg.com/feather-icons"></script>

        <!-- App Js -->
        <script src="js/app.js"></script>
    </body>
</html>
