<!-- Middle Content Start -->

    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> </li>
                <li><a href="pages-custom-product.html">Pages</a> </li>
                <li class="active">Policy &amp; Terms</li>
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
              <h1><i class="append-icon fa fa-fw fa-gavel"></i> Policy &amp; Terms</h1>
            </div>
          </div>
        <div class="vd_content-section clearfix">
			
			<div class="form-wizard condensed">
				<div class="row">
					<div class="col-md-3">
						<div class="mgbt-xs-10">
								<button type="button" class="btn vd_btn vd_bg-blue btn-lg btn-block" data-toggle="modal" data-target="#addTab"><span class="append-icon"><i class="fa fa-plus"></i></span>Add New Tab</button>
							</div>
							
							<div class="form-group">
							    <select class="custom-select">
									<option selected>Sort by Name</option>
									<option value="1">A to Z</option>
									<option value="2">Z to A</option>
								</select>
							</div>
						<ul class="nav nav-tabs nav-stacked">
							<?php $i=1; foreach($policy_terms as $terms): ?>
								<li class="<?php if($i == 1) echo 'active ' ?>widget"><a data-toggle="tab" href="#<?php echo $terms['id'] ?>">
									<div class="menu-icon"><i class="fa fa-file-text-o"></i></div>
									<?php echo $terms['tab_name'] ?></a>
									<div class="vd_panel-menu">
										<div data-toggle="modal" data-target="#editTabName" class=" menu entypo-icon smaller-font"><i class="icon-pencil" data-action="remove" data-original-title="Remove" data-rel="tooltip"></i></div>
										<div data-action="remove" data-original-title="Remove" data-rel="tooltip" class=" menu entypo-icon smaller-font"><i class="icon-cross"></i></div>
									</div>
								</li>
							<?php $i++; endforeach; ?>
							<!--<li class="widget"><a data-toggle="tab" href="#disclaimer">
								<div class="menu-icon"><i class="fa fa-file-text"></i></div>
								Disclaimer</a>
								<div class="vd_panel-menu">
									<div data-toggle="modal" data-target="#editTabName" class=" menu entypo-icon smaller-font"><i class="icon-pencil" data-action="remove" data-original-title="Remove" data-rel="tooltip"></i></div>
									<div data-action="remove" data-original-title="Remove" data-rel="tooltip" class=" menu entypo-icon smaller-font"><i class="icon-cross"></i></div>
								</div>
							</li>-->
                          </ul>
                        </div>
                        <div class="col-md-9">
                          <div class="tab-content no-bd mrgn0 pdng0">
                            <?php $i=1; foreach($policy_terms as $terms): ?>
	                            <div class="tab-pane fade <?php if($i == 1) echo ' active in' ?>" id="<?php echo $terms['id'] ?>">
									<div class="panel-body-list">
										<form class="form-horizontal" action="#" role="form">
											<div class="form-group">
												<div class="col-sm-12 controls">
													<textarea name="editor1" data-rel="ckeditor" rows="3" ></textarea>
												</div>
											</div>
										</form>
									</div>
	                            </div>
	                        <?php $i++; endforeach; ?>
                            
                            <!--<div class="tab-pane fade" id="disclaimer">
								<div class="panel-body-list">
									<form class="form-horizontal" action="#" role="form">
										<div class="form-group">
											<div class="col-sm-12 controls">
												<textarea name="editor1" data-rel="ckeditor" rows="3" ></textarea>
											</div>
										</div>
									</form>
								</div>
                            </div>-->
                            
                          </div>
                        </div><!-- row end -->
                      </div><!-- form-wizard -->
			
			
							
          </div>
          <!-- .vd_content-section -->

        </div>
        <!-- .vd_content -->
      </div>
      <!-- .vd_container -->
    </div>
    <!-- .vd_content-wrapper -->

    <!-- Middle Content End -->

  </div>



  <!-- ADD NEW TAB -->
<div class="modal fade" id="addTab" tabindex="-1" role="dialog" aria-labelledby="Add subcategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">ADD NEW TAB</h4>
      </div>
      <div class="modal-body" id="form-container">
        <form method="post">
		  <div class="form-group">
		    <input type="text" name="tab_name" class="form-control" id="tab_name" placeholder="Add Tab Name Here">
		  </div>
		  <button type="button" data-container="div#form-container" data-table="policy_terms" class="btn btn-primary store-common">ADD</button>
		</form>
      </div>	  
      <div class="modal-footer vd_bg-white">		  
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	