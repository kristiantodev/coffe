<li class="has-submenu">
                                <a href="<?php echo site_url();?>informasi/"><i class="fas fa-glass-martini"></i>Home</a>
                            </li>

                            <li class="has-submenu">
                                <a href="<?php echo site_url();?>informasi/menu"><i class="fas fa-coffee"></i>Menu Utama</a>
                            </li>
<?php if($this->session->userdata('level') == "Pelanggan"){ ?>
                             <li class="has-submenu">
                                <a href="<?php echo site_url();?>informasi/cart"><i class="fas fa-shopping-cart"></i>Keranjang <span class="badge badge-success">
                                        
                                        <?php $array = array('status' => 1, 'deleted' => 0, 'id_user' => $this->session->userdata('id_user'));
  echo $totalNew1 = $this->db->where($array)->count_all_results('keranjang');?> </span></a> 
                            </li>
                            <li class="has-submenu">
                                <a href="<?php echo site_url();?>informasi/pembelian"><i class="fas fa-shopping-bag"></i>Pembelian</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?= base_url('login/logout')?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
                            </li>
    <?php }else{ ?>
                          <li class="has-submenu">
                                <a href="<?php echo site_url();?>login"><i class="fas fa-lock"></i>Login</a>
                            </li>

                             <li class="has-submenu">
                                <a href="<?php echo site_url();?>login/register"><i class="far fa-registered"></i>Register User</a>
                            </li>
    <?php } ?>
                            