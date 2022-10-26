<!--Counter Inbox-->
<?php
    $query  = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $query3 = $this->db->query("SELECT * FROM tbl_register WHERE reg_status='1'");
    $jum_pesan    = $query->num_rows();
    $jum_comment  = $query2->num_rows();
    $jum_register = $query3->num_rows();
?>
<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">FB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">FSI-BLOG</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user-plus"></i>
              <span class="label label-success"><?php echo $jum_register;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Anda memiliki <?php echo $jum_register;?> Registrasi</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <?php
                    $registrasi=$this->db->query("SELECT aa.*,DATE_FORMAT(aa.`reg_created_date`,'%d %b %Y') AS tanggal FROM tbl_register aa WHERE aa.reg_status ='1' ORDER BY aa.`reg_id` DESC LIMIT 5");
                    foreach ($registrasi->result_array() as $reg) :
                        $reg_id=$reg['reg_id'];
                        $reg_name=$reg['reg_name'];
                        $reg_tgl=$reg['tanggal'];
                        $reg_company=$reg['reg_company'];
                ?>
                  <li><!-- start message -->
                    <a href="<?php echo base_url().'admin/register'?>">
                      <div class="pull-left">
                        <img src="<?php echo base_url().'assets/images/user_blank.png'?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        <?php echo $reg_name;?>
                        <small><i class="fa fa-clock-o"></i> <?php echo $reg_tgl;?></small>
                      </h4>
                      <p><?php echo $reg_company;?></p>
                    </a>
                  </li>
                  <!-- end message -->
                  <?php endforeach;?>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url().'admin/register'?>">Lihat Semua Registrasi</a></li>
            </ul>
          </li>
          
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php echo $jum_pesan;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Anda memiliki <?php echo $jum_pesan;?> pesan</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <?php
                    $inbox=$this->db->query("SELECT tbl_inbox.*,DATE_FORMAT(inbox_tanggal,'%d %M %Y') AS tanggal FROM tbl_inbox WHERE inbox_status='1' ORDER BY inbox_id DESC LIMIT 5");
                    foreach ($inbox->result_array() as $in) :
                        $inbox_id=$in['inbox_id'];
                        $inbox_nama=$in['inbox_nama'];
                        $inbox_tgl=$in['tanggal'];
                        $inbox_pesan=$in['inbox_pesan'];
                ?>
                  <li><!-- start message -->
                    <a href="<?php echo base_url().'it/inbox'?>">
                      <div class="pull-left">
                        <img src="<?php echo base_url().'assets/images/user_blank.png'?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        <?php echo $inbox_nama;?>
                        <small><i class="fa fa-clock-o"></i> <?php echo $inbox_tgl;?></small>
                      </h4>
                      <p><?php echo $inbox_pesan;?></p>
                    </a>
                  </li>
                  <!-- end message -->
                  <?php endforeach;?>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url().'it/inbox'?>">Lihat Semua Pesan</a></li>
            </ul>
          </li>

          <?php
              $id_admin=$this->session->userdata('idadmin');
              $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
              $c=$q->row_array();
          ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'assets/images/'.$c['pengguna_photo'];?>" class="user-image" alt="">
              <span class="hidden-xs"><?php echo $c['pengguna_nama'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/images/'.$c['pengguna_photo'];?>" class="img-circle" alt="">

                <p>
                  <?php echo $c['pengguna_nama'];?>
                  <?php if($c['pengguna_level']=='1'):?>
                    <small>Admin</small>
                  <?php elseif($c['pengguna_level']=='2'):?>
                    <small>IT</small>
                  <?php endif;?>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url().'it/login/logout'?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo base_url().''?>" target="_blank" title="Lihat Website"><i class="fa fa-globe"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
