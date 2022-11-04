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
                                        <font color="black">Keranjang Menu (<?php echo $this->session->userdata('nm_user'); ?>) : <br><br></h4>
                                        <div class="row">
                                

                                         <form action="<?php echo site_url('informasi/checkout'); ?>" method="post">
                <select name="jam_booking" id="select" required class="custom-select">
                            <option value="">-- Pilih Jam Booking --</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                            <option value="22:00">22:00</option>
                            <option value="23:00">23:00</option>
                  
                </select>
                Jumlah Orang :
                <input type="number" name="jml_org" class="form-control  round <?php echo form_error('nm_kecamatan') ? 'is-invalid':'' ?>" id="email" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                <br>
            <table class="table table-striped table-bordered dt-responsive nowrap" width="100%">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>Pilih</b></th>
                                    <th><b>Nama menu</b></th>
                                    <th><b>Harga</b></th>
                                    <th><b>Qty</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no=1;
         foreach ($menuku as $menu): ?>
                                
                                <tr>
                                    <td width="7" align="center"><input type="checkbox" name="pilihanku[]" value="<?php echo $menu->id_keranjang ?>" id="md_checkbox_<?php echo $no++; ?>" class="filled-in chk-col-navy"/></td>
                                    <td>&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/coffe/'.$menu->foto) ?>" alt="" class="thumb-md rounded-circle"> &nbsp;&nbsp;&nbsp;<?php echo $menu->nm_menu ?></td>
                                    <td>Rp. <?php echo $menu->harga ?></td>
                                    <td><input type="number" name="qty[]" min="0" value="<?php echo $menu->qty ?>"/></td>

                                    <input type="hidden" name="keranjang[]" value="<?php echo $menu->id_keranjang ?>" id="md_checkbox_<?php echo $no++; ?>" class="filled-in chk-col-navy"/>
                                    
                                </tr>
                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                            </font>
                                            <p align="">
                                              <button type="submit"  class="btn btn-primary">
                                    <i class="fas fa-money-bill-alt"></i>&nbsp; Checkout Pembelian
                                </button>
                                            </p>
                                            
                                          </form>                          
                                
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