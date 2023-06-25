<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Without menu - Layouts | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/css/footer.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar layout-without-menu">
    <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                class="layout-navbar navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input
                                type="text"
                                class="form-control border-0 shadow-none"
                                placeholder="Search..."
                                aria-label="Search..."
                            />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->
                        <li class="nav-item lh-1 me-3">
                            <a href="">
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-primary">Postuler</button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('content')
                </div>
                <!-- / Content -->

                <!-- Footer -->


                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

                <footer class="footer_area section_padding_130_0">
                    <div class="container">
                        <div class="row">
                            <!-- Single Widget-->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-footer-widget section_padding_0_130">
                                    <!-- Footer Logo-->
                                    <div class="footer-logo mb-3"></div>
                                    <p>Appland is completely creative, lightweight, clean app landing page.</p>
                                    <!-- Copywrite Text-->
                                    <div class="copywrite-text mb-5">
                                        <p class="mb-0">Made with <i class="lni-heart mr-1"></i>by<a class="ml-1" href="https://wrapbootstrap.com/user/DesigningWorld">Designing World</a></p>
                                    </div>
                                    <!-- Footer Social Area-->
                                    <div class="footer_social_area"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></div>
                                </div>
                            </div>
                            <!-- Single Widget-->
                            <div class="col-12 col-sm-6 col-lg">
                                <div class="single-footer-widget section_padding_0_130">
                                    <!-- Widget Title-->
                                    <h5 class="widget-title">About</h5>
                                    <!-- Footer Menu-->
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Corporate Sale</a></li>
                                            <li><a href="#">Terms &amp; Policy</a></li>
                                            <li><a href="#">Community</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Widget-->
                            <div class="col-12 col-sm-6 col-lg">
                                <div class="single-footer-widget section_padding_0_130">
                                    <!-- Widget Title-->
                                    <h5 class="widget-title">Support</h5>
                                    <!-- Footer Menu-->
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="#">Help</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Term &amp; Conditions</a></li>
                                            <li><a href="#">Help &amp; Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Widget-->
                            <div class="col-12 col-sm-6 col-lg">
                                <div class="single-footer-widget section_padding_0_130">
                                    <!-- Widget Title-->
                                    <h5 class="widget-title">Contact</h5>
                                    <!-- Footer Menu-->
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="#">Call Centre</a></li>
                                            <li><a href="#">Email Us</a></li>
                                            <li><a href="#">Term &amp; Conditions</a></li>
                                            <li><a href="#">Help Center</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
