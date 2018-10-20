<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Register</title>

        <!-- Fontfaces CSS-->
        <link href="<?= base_url("assets") ?>/css/font-face.css" rel="stylesheet" media="all">
        <link href="<?= base_url("assets") ?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="<?= base_url("assets") ?>/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="<?= base_url("assets") ?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="<?= base_url("assets") ?>/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="<?= base_url("assets") ?>/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="<?= base_url("assets") ?>/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="<?= base_url("assets") ?>/vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="<?= base_url("assets") ?>/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="<?= base_url("assets") ?>/vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="<?= base_url("assets") ?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="<?= base_url("assets") ?>/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="<?= base_url("assets") ?>/css/theme.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="#">
                                    <img src="images/icon/logo.png" alt="CoolAdmin">
                                </a>
                            </div>
                            <div class="login-form">
                                <?php
                                if ($msg=$this->session->flashdata("error")) {
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error!</strong> <?=$msg?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                                }
                                ?>
                                
                                
                                
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input class="au-input au-input--full" value="<?=set_value("name")?>" type="text" name="name" placeholder="Full name">
                                        <?php echo form_error('name'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input class="au-input au-input--full" value="<?=set_value("email")?>" type="email" name="email" placeholder="Email">
                                        <?php echo form_error('email'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full" value="<?=set_value("password")?>" type="password" name="password" placeholder="Password">
                                        <?php echo form_error('password'); ?>
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="aggree">Agree the terms and policy
                                        </label>
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>

                                </form>
                                <div class="register-link">
                                    <p>
                                        Already have account?
                                        <a href="<?= base_url("merchant/auth") ?>">Sign In</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="<?= base_url("assets") ?>/vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="<?= base_url("assets") ?>/vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="<?= base_url("assets") ?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="<?= base_url("assets") ?>/vendor/slick/slick.min.js">
        </script>
        <script src="<?= base_url("assets") ?>/vendor/wow/wow.min.js"></script>
        <script src="<?= base_url("assets") ?>/vendor/animsition/animsition.min.js"></script>
        <script src="<?= base_url("assets") ?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="<?= base_url("assets") ?>/vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?= base_url("assets") ?>/vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="<?= base_url("assets") ?>/vendor/circle-progress/circle-progress.min.js"></script>
        <script src="<?= base_url("assets") ?>/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="<?= base_url("assets") ?>/vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="<?= base_url("assets") ?>/vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="<?= base_url("assets") ?>/js/main.js"></script>

    </body>

</html>
<!-- end document-->