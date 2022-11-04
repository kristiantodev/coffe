<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Brohans Caffe</title>
        
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/logo.png">

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/style-login.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                   <a class="logo">
                        <span>
                            <img src="<?php echo base_url();?>assets/images/logo.png" alt="" height="60">
                        </span>
                    </a>

                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="navbar-right d-flex list-inline float-right mb-0">
                            
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
    
    
    
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <?php $this->load->view('menu'); ?>

                           
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

          <!-- page wrapper start -->
        <div class="wrapper">
            <div class="page-title-box">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                              <div class="card">
                                <div class="card-body">
                                    <h4>
                                        <font color="black">

<?php if($this->session->userdata('level') == "Pelanggan"){ ?>
                                          Hallo <?php echo $this->session->userdata('nm_user'); ?>, Selamat Datang di Brohans Caffe
                                    <?php }else{ ?>
                                        Selamat Datang di Brohans Caffe
                                    <?php } ?>

                                        </font><br><br>
                                        <div class="row">
                                
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <!-- Simple card -->
                                    <div class="card m-b-30">
                                        <img class="card-img-top" src="<?php echo base_url('assets/images/1.jpeg') ?>" height="350" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-16 mt-0"></h4>
                                           
                                        </div>
                                    </div>

                                </div><!-- end col -->

                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <!-- Simple card -->
                                    <div class="card m-b-30">
                                        <img class="card-img-top" src="<?php echo base_url('assets/images/2.jpeg') ?>" height="350" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-16 mt-0"></h4>
                                           
                                        </div>
                                    </div>

                                </div><!-- end col -->

                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <!-- Simple card -->
                                    <div class="card m-b-30">
                                        <img class="card-img-top" src="<?php echo base_url('assets/images/3.jpeg') ?>" height="350" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-16 mt-0"></h4>
                                           
                                        </div>
                                    </div>

                                </div><!-- end col -->

                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <!-- Simple card -->
                                    <div class="card m-b-30">
                                        <img class="card-img-top" src="<?php echo base_url('assets/images/4.jpeg') ?>" height="350" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-16 mt-0"></h4>
                                           
                                        </div>
                                    </div>

                                </div><!-- end col -->

                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <!-- Simple card -->
                                    <div class="card m-b-30">
                                        <img class="card-img-top" src="<?php echo base_url('assets/images/5.jpeg') ?>" height="350" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-16 mt-0"></h4>
                                           
                                        </div>
                                    </div>

                                </div><!-- end col -->

                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <!-- Simple card -->
                                    <div class="card m-b-30">
                                        <img class="card-img-top" src="<?php echo base_url('assets/images/6.jpeg') ?>" height="350" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-16 mt-0"></h4>
                                           
                                        </div>
                                    </div>

                                </div><!-- end col -->

                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <!-- Simple card -->
                                    <div class="card m-b-30">
                                        <img class="card-img-top" src="<?php echo base_url('assets/images/7.jpeg') ?>" height="350" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-16 mt-0"></h4>
                                           
                                        </div>
                                    </div>

                                </div><!-- end col -->

                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <!-- Simple card -->
                                    <div class="card m-b-30">
                                        <img class="card-img-top" src="<?php echo base_url('assets/images/8.jpeg') ?>" height="350" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title font-16 mt-0"></h4>
                                           
                                        </div>
                                    </div>

                                </div><!-- end col -->
                           


            
                                
                            </div>
                            <!-- end row -->
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end container-fluid -->
            
            </div>
            <!-- page-title-box -->

            

        </div>
        <!-- page wrapper end -->
        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        © 2022 <span class="d-none d-sm-inline-block"> - All right reserved
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/js/waves.min.js"></script>

        <script src="<?php echo base_url();?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

    </body>

</html>