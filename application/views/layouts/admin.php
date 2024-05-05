<!doctype html>
<html lang="en" class="light-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Synrok - Mobile HTML Template</title>

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/metismenu/metisMenu.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/metismenu/mm-vertical.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/slick/slick-theme.css" />

    <!--CSS Files-->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/dark-theme.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" />
</head>

<body>

    <!--page loader-->
    <div class="loader-wrapper">
        <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
            <div class="spinner-border text-white" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <!--end loader-->

    <!--start wrapper-->
    <div class="wrapper">

        <!--start to header-->
        <header class="top-header fixed-top border-bottom d-flex align-items-center">
            <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">

                <div class="brand-logo">
                    Hi, <?php echo $this->session->userdata('fullname') ?>
                </div>
            </nav>
        </header>
        <!--end to header-->

        <!--start to page content-->
        <div class="page-content">

            <?php $this->load->view($content_admin); ?>

        </div>
        <!--end to page content-->


        <!--start to footer-->
        <footer class="page-footer fixed-bottom border-top d-flex align-items-center">
            <nav class="navbar navbar-expand p-0 flex-grow-1">
                <div class="navbar-nav align-items-center justify-content-between w-100">
                    <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon"><i class="color-menu bi bi-house-fill"></i></div>
                            <div class="color-menu">Home</div>
                        </div>
                    </a>
                    <a class="nav-link" href="category-list.html">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon"><i class="bi bi-grid"></i></div>
                            <div class="name">Category</div>
                        </div>
                    </a>
                    <a class="nav-link" href="profile.html">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon"><i class="bi bi-person"></i></div>
                            <div class="name">Profile</div>
                        </div>
                    </a>
                    <a class="nav-link" href="contact-us.html">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon"><i class="bi bi-question-circle"></i></div>
                            <div class="name">Contact</div>
                        </div>
                    </a>

                </div>
            </nav>
        </footer>
        <!--end to footer-->

    </div>
    <!--end wrapper-->


    <!--JS Files-->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/cookies-theme-switcher.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/metismenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/slick/slick.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/product-details.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <script src="<?php echo base_url() ?>assets/js/index.js"></script>
    <script src="<?php echo base_url() ?>assets/js/loader.js"></script>

</body>

</html>