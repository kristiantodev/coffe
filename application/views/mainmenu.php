<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Brohans Caffe</title>
        
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/logo.png">
        <link href="<?php echo base_url();?>assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

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

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>
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
                                        <font color="black">Daftar Menu : </font><br><br>
                                        <div class="row">
                                
                                <?php $no=1; foreach ($menuList as $m): ?>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <!-- Simple card -->
                                    <div class="card m-b-30">
                                        <img class="card-img-top" src="<?php echo base_url('assets/images/coffe/'.$m->foto) ?>" height="325" alt="Card image cap">
                                        <div class="card-body">
                                            <font color="black">
                                            <h4 class="card-title font-16 mt-0"><center><?php echo $m->nm_menu ?></font> &nbsp;<font color="red"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></font></center></h4>
                                            <center>
                                           <a onclick="deleteConfirm('<?php echo site_url('informasi/keranjang/'.$m->id_menu); ?>')" href="#!" data-toggle="tooltip" class="btn btn-primary waves-effect waves-light tombol-hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fas fa-cart-arrow-down "></i> &nbsp;Beli Menu </span><span class="btn-text"></span></a>
                                           </center>
                                        </div>
                                    </div>

                                </div><!-- end col -->
<?php endforeach; ?>
                                                                   
                                
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

                             <!-- modal -->
<div class="modal modal-primary fade" id="modal-danger">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
      <h5 class="modal-title"><font color='white'>Masukan ke Keranjang</font></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
      </div>
      <div class="modal-body">
      <p>Apakah anda yakin memasukan menu ini ke keranjang ?</p>
      </div>
      <div class="modal-footer">
      <a type="button" class="btn btn-secondary" data-dismiss="modal"><font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font></a>
      <a href="#" id="btn-delete" type="button" class="btn btn-primary mr-1"><i class="fas fa-cart-arrow-down"></i>&nbsp;Masukan Keranjang</a>
      </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

<script>
function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>

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

                   <!-- Sweet-Alert  -->
        <script src="<?php echo base_url();?>assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="<?php echo base_url();?>assets/pages/sweet-alert.init.js"></script>
        <script src="<?php echo base_url();?>assets/alert.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

    </body>

</html>