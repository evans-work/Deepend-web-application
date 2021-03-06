<?php $this->load->view('head');?>
    <?php $this->load->view('menus/main_menu');?>
    <div id="dashboard">
      <section id="sidebar">
        <?php $this->load->view('dashboard_views/sidebar')?>
      </section>
      <section id="dashboard-content">
        <?php
        switch ($view) 
        {
          case 'profiles':
            $this->load->view("dashboard_views/$view",$profiles);
            break;
          case 'jobs':
            $this->load->view("dashboard_views/$view",$jobs);
            break;
          case 'proposals':
            $this->load->view("dashboard_views/$view",$proposals);
            break;
          case 'settings':
            $this->load->view("dashboard_views/$view",$personal_data);
            break;
          default:
            $this->load->view("dashboard_views/$view");
            break;
        }?>
      </section>
      </div>
      <script src="<?=base_url()?>assets/js/profile.js"></script>
      <?php $this->load->view('footer')?>
      
