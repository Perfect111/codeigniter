<div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> </li>
                <li><a href="pages-custom-product.html">Pages</a> </li>
                <li class="active">Add / Manage Languages</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>

</div>

            </div>
          </div>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <h1><span class="append-icon icon-language"></span> Add / Manage Languages</h1>
            </div>
          </div>
          <div class="vd_content-section clearfix">
			
			<div class="row mrgn15-0">
				<div class="col-md-4"></div>
				<div class="col-md-4">
						<button type="button" class="btn vd_btn vd_bg-blue btn-lg btn-block" data-toggle="modal" data-target="#addLang"><span class="append-icon"><i class="fa fa-plus-square"></i></span>Add Language</button>
				</div>
				<div class="col-md-4"></div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<table class="discountTable table language_list"
					data-edit-lang-url='<?php echo site_url()."admin/Portal_Settings/get_edit_language_data" ?>'
					data-delete-lang-url='<?php echo site_url()."admin/Portal_Settings/delete_language_data" ?>'
					>
						<colgroup>
							<col width="10%">
							<col width="15%">
							<col width="40%">
							<col width="10%">
							<col width="10%">
							<col width="15%">
						</colgroup>
						<thead>
							<tr>
								<th>Icon</th>
								<th>Language</th>
								<th>Progress</th>
								<th>Done</th>
								<th>Total</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
							<?php 
								
								$this->load->view('admin_layout/portal_settings/language_list'); 
							?>
						</tbody>
					</table>
				</div><!-- col-md-12 end --> 
			</div><!-- row end --> 	
							
          </div>
          <!-- .vd_content-section -->

        </div>
        <!-- .vd_content -->
      </div>
      <!-- .vd_container -->
    </div>
	
	<!-- ADD LANG -->
	<?php $this->load->view($template."/portal_settings/add_lang"); ?>
	
	<!-- EDIT LANG -->
	<div id="edit_lang_container">
	<?php //$this->load->view($template."/portal_settings/edit_lang"); ?>
	</div>
	
	<!-- EDIT TRANSLATION -->
	<div id="edit_translation_container">
		<?php //$this->load->view($template."/portal_settings/edit_translation"); ?>
	</div>

	<div id="delete_language_container">
		<?php //$this->load->view($template."/portal_settings/edit_translation"); ?>
	</div>