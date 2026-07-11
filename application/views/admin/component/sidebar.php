<?php
    $controller_name=$this->router->fetch_class();   
    $method_name=$this->router->fetch_method();
?>
    <li class="<?=$controller_name=='DashboardController' ? 'active' : ''?>">
        <a href="<?=base_url('admin/dashboard')?>"><i class="fa fa-th-large"></i> <span class="nav-label">DASHBOARD</span></a>
    </li> 
    <!-- USER -->
    <li class="">
        <a href="<?=base_url('admin/view_price')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Add Price</span></a>
    </li>
    <!-- USER END -->

        <!-- SETTING -->
    <li class="">
            <a href="javascript:void(0)"><i class="fa fa-cog"></i> <span class="nav-label">Report</span> <span class="fa arrow arr"></span></a>
            <ul class="nav nav-second-level collapse">
                <li class=""><a href="<?=base_url('today_report')?>"><i class="fa fa-flag" aria-hidden="true"></i> <span class="nav-label">Today Report </span></a></li>
      
        <!-- AboutUs -->
            <li class=""><a href="<?=base_url('all_report')?>"><i class="fa fa-address-card" aria-hidden="true"></i> <span class="nav-label">All Report</span></a></li>        
     
        </ul>
    </li> 
        <!-- SETTING END -->
    <li class="<?=$controller_name=='AdminController' ? 'active' : ''?>">
        <a href="<?=base_url('admin/changepassword')?>"><i class="fa fa-key"></i> <span class="nav-label">Change Password</span></a>
    </li>  
  

    
    </ul>
      <ul class="nav metismenu log-out-menu">
                
                <li>
                    <a href="<?=base_url('admin/AdminController/logout')?>"><i class="fa fa-sign-out"></i> <span class="nav-label">Log Out</span> </a>
                    
                </li>
            </ul>
</div>
</nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
            <form role="search" class="navbar-form-custom" action="#">
               
            </form>  
        </div>
               <ul class="nav navbar-top-links navbar-right">
                <li><?php
                    $this->db->where('status', 'Inactive');
                    $this->db->order_by('id', 'desc');
                    
                    $price_data=$this->db->get('tbl_price_manegment')->row();
                   // pr($price_data);die();
                    if($price_data && $price_data->status=='Inactive')
                    {
                        ?>
                        <a  style="color: red" href="<?=base_url('live-draw')?>">
                        <i class="fa fa-play"></i> Live Draw
                    </a>
                    <?php }
                    else
                    {
                    }
                 ?>
                    
                </li>
                <li>
                    <span class="m-r-sm text-muted welcome-message"><span style="color: #999c9e">Welcome to</span> <b>Altaf Lottery ADMIN SYSTEM</b></span>
                </li>            
                <li>
                    <a class="logout-icon" href="<?=base_url('admin/AdminController/logout')?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>   
            </ul>
        </nav>
    </div>

    