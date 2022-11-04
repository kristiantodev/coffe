

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                <h3 class="page-title"><b><i class='fas fa-glass-martini'></i>&nbsp;Selamat Datang di Brohans Coffe</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Brohans Coffe</li>
                                    </ol>
               
                                    
                                </div>
                            </div>
                        </div>
                       
                        <div class="page-content-wrapper">
                            <div class="row">
             <div class="col-xl-4 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Coffe</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href='<?php echo site_url();?>adm/alumni' class="text-white">Total</a></h6>
                                                    <h4 class="mb-3 mt-0"><b> 
                                                    <?php $array = array('deleted' => 0);
  echo $total = $this->db->where($array)->count_all_results('menu');?> Menu</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-glass-martini display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Coffe</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href='<?php echo site_url();?>adm/alumni' class="text-white">Total</a></h6>
                                                    <h4 class="mb-3 mt-0"><b> 
                                                    <?php $array = array('level' => 'Pelanggan');
  echo $total = $this->db->where($array)->count_all_results('user');?> Pelanggan</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-glass-martini display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
     

                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Coffe</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href="" class="text-white">Total</a></h6>
                                                    <h4 class="mb-3 mt-0"><b>
                                                    <?php $array = array();
  echo $total = $this->db->where($array)->count_all_results('transaksi');?> Transaksi</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-glass-martini display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                   
                            </div>
                            <!-- end row -->

                           <div class="row">
                                <!-- <div class="col-xl-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <center><h4 class="mt-0 header-title"><b>Harga Bahan Pokok Tertinggi</b></h4></center>
            
                                                        
                                            <canvas id="pokok_8" height="200"></canvas>
            
                                        </div>
                                    </div>
                                </div> -->
            
                                
                            </div> 

                            
                               
                            


                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
               
   <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
                <!-- ChartJS -->
    <script src="<?php echo base_url();?>assets/Chart.min.js"></script>
    <!-- Superieur Admin for Chart purposes -->
    <script src="<?php echo base_url();?>assets/widget-charts2.js"></script>     