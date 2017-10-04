<?php $this->load->view($this->template.'/header'); ?>
<div class="content">
  <div class="container">
	  
<!-- LEFT MENU -->

    <?php $this->load->view($this->template.'/left_menu.php'); ?>

<!-- LEFT MENU END -->
	
<!-- RIGHT MENU -->
		<?php $this->load->view($this->template.'/right_menu.php'); ?>
<!-- RIGHT MENU END -->

<!-- Middle Content Start -->

    <?php $this->load->view($content); ?>
    <!-- .vd_content-wrapper -->

    <!-- Middle Content End -->

  </div>
  <!-- .container -->
</div>
<!-- .content -->

<!-- Footer Start -->
  <?php $this->load->view($this->template.'/footer'); ?>

<!-- Footer Start -->
  <?php $this->load->view($this->template.'/inner_js'); ?>
