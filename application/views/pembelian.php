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
                                        <font color="black">Riwayat Pembelian (<?php echo $this->session->userdata('nm_user'); ?>) : <br><br></h4>
                                        <div class="row">
                                

                                         <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>No</b></th>
                                    <th><b>Tanggal Transaksi</b></th>
                                    <th><b>Menu yang dibeli</b></th>
                                    <th><b>Jam Booking</b></th>
                                    <th><b>Jumlah Orang</b></th>
                                    <th><b>Total</b></th>
                                    <th><b>Status</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
           <?php $no=1; foreach ($transaksiku as $t): ?>

           <?php
              $listmenu = $this->db->query("SELECT*FROM keranjang LEFT JOIN menu ON menu.id_menu=keranjang.id_menu WHERE keranjang.status=2 AND id_transaksi='$t->id_transaksi' AND keranjang.deleted=0")->result();
            ?>
                 
                                
                                <tr>
                                    <td width="7" align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $t->tgl_transaksi ?></td>
                                    <td>
                                       <?php foreach ($listmenu  as $s): ?>
                                          <ul>
                                          <li><?php echo $s->nm_menu ?> | Qty : <?php echo $s->qty ?> | Rp. <?php echo $s->harga ?> </li>
                                          </ul>
                                       <?php endforeach; ?>
                                    </td>
                                    <td><?php echo $t->jam_booking ?></td>
                                    <td><?php echo $t->jml_org ?></td>
                                    <td align="center">Rp. <?php echo $t->total ?></td>
                                    <td align="center">
                                      
                                      <?php 
                                         $icon="";
                                            $btn="";
                                            $remark="";
                                    if($t->status == 0){
                                            $icon="fas fa-info-circle";
                                            $btn="btn btn-info btn-sm";
                                            $remark="New";
                                      }else if($t->status == 1){
                                            $icon="fas fa-info-circle";
                                            $btn="btn btn-warning btn-sm";
                                            $remark="Proses";
                                      }else if($t->status == 2){
                                            $icon="fas fa-check";
                                            $btn="btn btn-warning btn-sm";
                                            $remark="Terkonfirmasi";
                                      }
                                       ?>
                                       <button class="<?=$btn?>"><i class="<?=$icon?>"></i> &nbsp;<?=$remark?></span></button>
                                    </td>
                                    <td>
                                      <?php
                                           if($t->status == 0){
                                       ?>
                                       <a data-toggle="modal" data-target="#bb-bayar<?php echo $t->id_transaksi ?>" class="btn btn-success waves-effect waves-light"><font color="white"><i class="fas fa-upload"></i> Pembayaran</font></a>

                                        <?php
                                           }
                                       ?>

                                       <?php
                                           if($t->status == 1 || $t->status == 2){
                                       ?>
                                       <a data-toggle="modal" data-target="#bb-see<?php echo $t->id_transaksi ?>" class="btn btn-success waves-effect waves-light"><font color="white"><i class="fas fa-folder-open"></i>&nbsp; Bukti Bayar</font></a>
                                       
                                        <?php
                                           }
                                       ?>
                                      
                                    </td>
                                </tr>
                
            <?php endforeach; ?>
                                                </tbody>
                                            </table>        
                                
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

<?php $no=1; foreach ($transaksiku as $t): ?>
                  <div class="modal fade text-left" id="bb-bayar<?=$t->id_transaksi?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Upload Bukti Pembayaran</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('informasi/pembayaran'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_transaksi" value="<?=$t->id_transaksi?>">
                      <div class="modal-body">
                       
                       <fieldset class="form-group floating-label-form-group">
                          <label for="email">Upload Bukti Pembayaran *pdf</label>
                          <input type="file" name="file_pembayaran" class="form-control">
                        </fieldset>
                         
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-upload"></i>&nbsp;Upload
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>

                  <?php endforeach; ?>


        <?php $no=1; foreach ($transaksiku as $t): ?>
                  <div class="modal fade text-left" id="bb-see<?=$t->id_transaksi?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Bukti Pembayaran</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      
                      <div class="modal-body">
              
                         <?php if ($t->file_pembayaran == "default.png") { ?>
              <center>
            <img src="<?php echo base_url('assets/images/bukti/'.$t->file_pembayaran) ?>" height="450"><br>Tidak ada file pembayaran yang dilampirkan</center>
            <?php }else{ ?>
<embed src="<?php echo base_url('assets/images/bukti/'.$t->file_pembayaran) ?>" width="750px" height="450px" />
             <?php }?> 

                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                      </div>
                    </div>
                    </div>
                  </div>

                  <?php endforeach; ?>
            

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