<!-- Middle Content Start -->
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> </li>
                <li><a href="pages-custom-product.html">Pages</a> </li>
                <li class="active">Company Type</li>
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
              <h1><i class="append-icon fa fa-fw fa-asterisk"></i> Company Type</h1>
            </div>
          </div>
        <div class="vd_content-section clearfix">
			
			<div class="row mrgn15-0">
				<div class="col-md-4"></div>
				<div class="col-md-4">
						<button type="button" class="btn vd_btn vd_bg-blue btn-lg btn-block" data-toggle="modal" data-target="#addCompany"><span class="append-icon"><i class="fa fa-plus-square"></i></span>Add Company Type</button>
				</div>
				<div class="col-md-4"></div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<table class="discountTable table">
						<colgroup>
							<col width="10%">
							<col width="60%">
							<col width="30%">
						</colgroup>
						<thead>
							<tr>
								<th>No.</th>
								<th>Company Type</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>

							<?php $i=0; foreach($model_data as $company_type): ?>
							<tr>
								<td><?php echo ++$i; ?></td>
								<td class="company_type"><?php echo $company_type['company_type'] ?></td> 

								<td class="menu-action">
									<div class="pdng5">
										<a data-id="<?php echo $company_type['id']; ?>" data-toggle="modal" data-target="#" 
										class="edit-company-type btn menu-icon vd_bd-yellow vd_yellow"><i class="fa fa-pencil" data-original-title="Edit" data-toggle="tooltip" data-placement="top" ></i></a>

										<a data-id="<?php echo $company_type['id']; ?>" data-toggle="modal" data-target="#" class="delete_company_type btn menu-icon vd_bd-red vd_red"><i class="fa fa-trash-o" data-original-title="Remove" data-toggle="tooltip" data-placement="top" ></i></a>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
							<!--<tr>
								<td>2</td>
								<td>Another one type</td> 
								<td class="menu-action">
									<div class="pdng5">
										<a data-toggle="modal" data-target="#" class="btn menu-icon vd_bd-yellow vd_yellow"><i class="fa fa-pencil" data-original-title="Edit" data-toggle="tooltip" data-placement="top" ></i></a>
										<a data-toggle="modal" data-target="#" class="btn menu-icon vd_bd-red vd_red"><i class="fa fa-trash-o" data-original-title="Remove" data-toggle="tooltip" data-placement="top" ></i></a>
									</div>
								</td>
							</tr>-->
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
    <!-- .vd_content-wrapper -->

    <!-- Middle Content End -->

    <!-- COMPANY TYPES -->
    <div id="portal_sub_cat_popup">
    <?php $this->load->view($this->template."/portal_settings/company_type/add_company");

    $this->load->view($this->template."/portal_settings/company_type/edit_company_type");
       ?>
    </div>

