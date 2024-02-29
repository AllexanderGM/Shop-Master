<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="../assets/css/styles.css" />

    <title>Xtreme Bootstrap Admin</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="../assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body p-5">
                                <a href="../main/index.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                    <b class="logo-icon">
                                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                        <!-- Dark Logo icon -->
                                        <img src="../assets/images/logos/logo-icon.svg" alt="homepage" class="dark-logo" />
                                        <!-- Light Logo icon -->
                                        <img src="../assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo" />
                                    </b>
                                    <!--End Logo icon -->
                                    <!-- Logo text -->
                                    <span class="logo-text">
                                        <!-- dark Logo text -->
                                        <img src="../assets/images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2" />
                                        <!-- Light Logo text -->
                                        <img src="../assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage" />
                                    </span>
                                </a>
                                <div class="row">
                                    <div class="col-6 mb-2 mb-sm-0">
                                        <a class="btn btn-link border border-muted  d-flex align-items-center justify-content-center rounded-2 py-8 text-decoration-none" href="javascript:void(0)" role="button">
                                            <img src="../assets/images/svgs/google-icon.svg" alt="" class="img-fluid me-2" width="18" height="18">
                                            Google
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn btn-link border border-muted  d-flex align-items-center justify-content-center rounded-2 py-8 text-decoration-none" href="javascript:void(0)" role="button">
                                            <img src="../assets/images/svgs/facebook-icon.svg" alt="" class="img-fluid me-2" width="18" height="18">
                                            Facebook
                                        </a>
                                    </div>
                                </div>
                                <div class="position-relative text-center my-4">
                                    <p class="mb-0 fs-4 px-3 d-inline-block bg-white z-3 position-relative">or sign Up with</p>
                                    <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                                </div>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleInputtext" aria-describedby="textHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <a href="./authentication-login.html" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign Up</a>
                                    <div class="d-flex align-items-center">
                                        <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                                        <a class="text-primary fw-medium ms-2" href="./authentication-login.html">Sign In</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Search Bar -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content rounded-1">
                    <div class="modal-header border-bottom">
                        <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
                        <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                            <i class="ti ti-x fs-5 ms-3"></i>
                        </a>
                    </div>
                    <div class="modal-body message-body" data-simplebar="">
                        <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                        <ul class="list mb-0 py-2">
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Modern</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Dashboard</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Contacts</span>
                                    <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Posts</span>
                                    <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Detail</span>
                                    <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Shop</span>
                                    <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Modern</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Dashboard</span>
                                    <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Contacts</span>
                                    <span class="fs-3 text-muted d-block">/apps/contacts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Posts</span>
                                    <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  h6 mb-0 d-block">Detail</span>
                                    <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                                </a>
                            </li>
                            <li class="p-1 mb-1 px-2 rounded bg-hover-light-black">
                                <a href="#">
                                    <span class="fs-3  fw-normal d-block">Shop</span>
                                    <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/app.init.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="../assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/feather.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>

</body>

</html>