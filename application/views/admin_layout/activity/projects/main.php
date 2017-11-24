<!-- Middle Content Start -->

<div class="vd_content-wrapper">
	<div class="vd_container">
		<div class="vd_content clearfix">
			<div class="vd_head-section clearfix">
				<div class="vd_panel-header">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li><a href="pages-custom-product.html">Pages</a></li>
						<li class="active">Projects</li>
					</ul>
					<div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
						<div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"><i class="fa fa-arrows-h"></i></div>
						<div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"><i class="fa fa-arrows-v"></i></div>
						<div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"><i class="glyphicon glyphicon-fullscreen"></i></div>
					</div>
				</div>
			</div><!-- vd_head-section end -->
			<div class="vd_title-section clearfix">
				<div class="vd_panel-header">
					<h1><span class="append-icon icon-archive"></span> Projects</h1>
				</div>
			</div><!-- vd_title-section end -->
			<div class="row pdng10-0 searchBar">
					<div class="col-md-2 col-md-offset-1">
							<select>
								<!--<option value="" disabled selected>Status</option>-->
								<option value="category1" data-toggle="tab">Category 1</option>
								<option value="category2" data-toggle="tab">Category 2</option>
								<option value="category3" data-toggle="tab">Category 3</option>
								
							</select>
							
					</div><!-- Categories Menu end -->
					<form>
					<div class="col-md-2">
						<div>
							<input class="ui-autocomplete-input" type="text" placeholder="Project ID" id="project-autocomplete" autocomplete="off"> 
						</div>
					</div>
					<div class="col-md-2">
						<div>								
							<input class="ui-autocomplete-input" type="text" placeholder="Company Name" id="company-autocomplete" autocomplete="off"> 
						</div>
					</div>
					<div class="col-md-2">
						<div>
							<select>
								<option value="" disabled selected>Status</option>
								<option value="1">On Hold</option>
								<option value="2">Denied</option>
								<option value="3">Blocked</option>
								<option value="4">Removed</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn vd_btn vd_bg-blue" data-toggle="modal" data-target="" style="max-height:32px;"><span class="append-icon"><i class="fa fa-search fa-fw"></i></span>Search Projects</button>
					</div>
					</form>
				</div>
			<div class="vd_content-section clearfix">
				
				<div class="row">
						
						
						<div class="col-md-12">								
							<div class="tab-content no-bd mrgn0 pdng0">
								
								<div class="tab-pane active fade in" id="category1">
						
						<div class="panel widget container-fluid">
							<div class="row mrgn30-0 projectRow">
								
								<div class="vd_panel-menu">
									<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
										<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
										<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
											<div class="child-menu">
												<div class="content-list content-menu">
													<ul class="list-wrapper pd-lr-10">
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#holdThisJob"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#denyThisJob"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
														</li>
														<li>
															<a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
								<div class="col-sm-2 brdRight">
									<img src="<?php echo $assets_uri ?>img/avatar/briant.png" alt="" class="projectImg">
									<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Design Concept</h4>
									<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
									<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>All Task</h4>
									<p class="mrgn0"><span class="label label-default vd_bg-green vd_white">120</span></p>
									<!--<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>-->
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Job Budget</h4>
									<p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
									<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Work Start</h4>
									<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
									<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
								</div>
								</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
								<div class="col-sm-2">
									<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
									<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white">120</span> </p>
									<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white">800</span></p>
								</div></a>
							</div>
							<div class="row mrgn30-0 projectRow">
								<div class="vd_panel-menu">
									<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
										<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
										<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
											<div class="child-menu">
												<div class="content-list content-menu">
													<ul class="list-wrapper pd-lr-10">
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#holdThisJob"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#denyThisJob"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
														</li>
														<li>
															<a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
								<div class="col-sm-2 brdRight">
									<img src="<?php echo $assets_uri ?>img/avatar/briant3.png" alt="" class="projectImg">
									<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Design Concept</h4>
									<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
									<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>All Task</h4>
									<p class="mrgn0"><span class="label label-default vd_bg-green vd_white">120</span></p>
									<!--<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>-->
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Job Budget</h4>
									<p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
									<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Work Start</h4>
									<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
									<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
								</div>
								</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
								<div class="col-sm-2">
									<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
									<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white">120</span> </p>
									<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white">800</span></p>
								</div></a>
							</div>
							<div class="row mrgn30-0 projectRow">
								<div class="vd_panel-menu">
									<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
										<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
										<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
											<div class="child-menu">
												<div class="content-list content-menu">
													<ul class="list-wrapper pd-lr-10">
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#holdThisJob"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#denyThisJob"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
														</li>
														<li>
															<a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
								<div class="col-sm-2 brdRight">
									<img src="<?php echo $assets_uri ?>img/avatar/briant2.png" alt="" class="projectImg">
									<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Design Concept</h4>
									<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
									<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>All Task</h4>
									<p class="mrgn0"><span class="label label-default vd_bg-green vd_white">120</span></p>
									<!--<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>-->
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Job Budget</h4>
									<p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
									<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Work Start</h4>
									<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
									<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
								</div>
								</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
								<div class="col-sm-2">
									<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
									<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white">120</span> </p>
									<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white">800</span></p>
								</div></a>
							</div>
						</div>
						</div><!--tab-pane end -->
						
						<div class="tab-pane fade" id="category2">
						
						<div class="panel widget container-fluid">
							
							<div class="row mrgn30-0 projectRow">
								<div class="vd_panel-menu">
									<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
										<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
										<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
											<div class="child-menu">
												<div class="content-list content-menu">
													<ul class="list-wrapper pd-lr-10">
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#holdThisJob"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#denyThisJob"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
														</li>
														<li>
															<a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
								<div class="col-sm-2 brdRight">
									<img src="<?php echo $assets_uri ?>img/avatar/briant3.png" alt="" class="projectImg">
									<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Design Concept</h4>
									<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
									<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>All Task</h4>
									<p class="mrgn0"><span class="label label-default vd_bg-green vd_white">120</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Job Budget</h4>
									<p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
									<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Work Start</h4>
									<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
									<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
								</div>
								</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
								<div class="col-sm-2">
									<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
									<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white">120</span> </p>
									<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white">800</span></p>
								</div></a>
							</div>
							<div class="row mrgn30-0 projectRow">
								<div class="vd_panel-menu">
									<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
										<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
										<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
											<div class="child-menu">
												<div class="content-list content-menu">
													<ul class="list-wrapper pd-lr-10">
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#holdThisJob"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#denyThisJob"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
														</li>
														<li>
															<a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
								<div class="col-sm-2 brdRight">
									<img src="<?php echo $assets_uri ?>img/avatar/briant2.png" alt="" class="projectImg">
									<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
								</div>
								<div class="col-sm-4 brdRight">
									<h4>Design Concept</h4>
									<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
									<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Job Budget</h4>
									<p class="mrgn0"><span class="label label-default vd_bg-green vd_white">120</span></p>
									<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Work Start</h4>
									<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
									<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
								</div>
								</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
								<div class="col-sm-2">
									<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
									<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white">120</span> </p>
									<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white">800</span></p>
								</div></a>
							</div>
							
							<div class="row mrgn30-0 projectRow">									
								<div class="vd_panel-menu">
									<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
										<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
										<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
											<div class="child-menu">
												<div class="content-list content-menu">
													<ul class="list-wrapper pd-lr-10">
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#holdThisJob"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#denyThisJob"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
														</li>
														<li>
															<a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
								<div class="col-sm-2 brdRight">
									<img src="<?php echo $assets_uri ?>img/avatar/briant.png" alt="" class="projectImg">
									<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
								</div>
								<div class="col-sm-4 brdRight">
									<h4>Design Concept</h4>
									<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
									<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Job Budget</h4>
									<p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
									<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Work Start</h4>
									<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
									<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
								</div>
								</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
								<div class="col-sm-2">
									<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
									<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white">120</span> </p>
									<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white">800</span></p>
								</div></a>
							</div>
						</div>
						</div><!--tab-pane end -->
						
						
						<div class="tab-pane fade" id="category3">
						
						<div class="panel widget container-fluid">							
							
							<div class="row mrgn30-0 projectRow">
								<div class="vd_panel-menu">
									<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
										<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
										<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
											<div class="child-menu">
												<div class="content-list content-menu">
													<ul class="list-wrapper pd-lr-10">
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#holdThisJob"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#denyThisJob"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
														</li>
														<li>
															<a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
								<div class="col-sm-2 brdRight">
									<img src="<?php echo $assets_uri ?>img/avatar/briant2.png" alt="" class="projectImg">
									<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
								</div>
								<div class="col-sm-4 brdRight">
									<h4>Design Concept</h4>
									<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
									<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Job Budget</h4>
									<p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
									<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Work Start</h4>
									<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
									<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
								</div>
								</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
								<div class="col-sm-2">
									<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
									<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white">120</span> </p>
									<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white">800</span></p>
								</div></a>
							</div>
							
							<div class="row mrgn30-0 projectRow">									
								<div class="vd_panel-menu">
									<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
										<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
										<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
											<div class="child-menu">
												<div class="content-list content-menu">
													<ul class="list-wrapper pd-lr-10">
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#holdThisJob"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#denyThisJob"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
														</li>
														<li>
															<a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
								<div class="col-sm-2 brdRight">
									<img src="<?php echo $assets_uri ?>img/avatar/briant.png" alt="" class="projectImg">
									<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
								</div>
								<div class="col-sm-4 brdRight">
									<h4>Design Concept</h4>
									<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
									<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Job Budget</h4>
									<p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
									<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Work Start</h4>
									<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
									<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
								</div>
								</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
								<div class="col-sm-2">
									<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
									<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white">120</span> </p>
									<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white">800</span></p>
								</div></a>
							</div>
						</div>
						
						<div class="row mrgn30-0 projectRow">
								<div class="vd_panel-menu">
									<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
										<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
										<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
											<div class="child-menu">
												<div class="content-list content-menu">
													<ul class="list-wrapper pd-lr-10">
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#holdThisJob"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#denyThisJob"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
														</li>
														<li>
															<a class="vd_yellow" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
														</li>
														<li>
															<a class="vd_red" data-toggle="modal" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewThisJob" title="">
								<div class="col-sm-2 brdRight">
									<img src="<?php echo $assets_uri ?>img/avatar/briant3.png" alt="" class="projectImg">
									<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white">1122445669</span></p>
								</div>
								<div class="col-sm-4 brdRight">
									<h4>Design Concept</h4>
									<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017 12:05:00</span></p>
									<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Job Budget</h4>
									<p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white">2.500 €</span> </p>
									<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white">Fix / Hourly</span> </p>
								</div>
								<div class="col-sm-2 brdRight">
									<h4>Work Start</h4>
									<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white">05-07-2017</span></p>
									<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white">05-07-2017</span> </p>
								</div>
								</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
								<div class="col-sm-2">
									<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
									<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white">120</span> </p>
									<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white">800</span></p>
								</div></a>
							</div>
							
						</div><!--tab-pane end -->
						
						</div><!-- tab-content end -->
						</div> <!-- Projects List col-md-10 end -->
				</div><!-- row end -->
      </div><!-- vd_content-section end -->
    </div><!-- vd_content end -->
  </div><!-- vd_container end -->
</div><!-- vd_content-wrapper end -->
    
<!-- Middle Content End -->

<!-- VIEW PROJECT -->
<?php $this->load->view('admin_layout/activity/projects/view_projects'); ?>
<?php $this->load->view('admin_layout/activity/projects/view_proposals'); ?>
<?php $this->load->view('admin_layout/activity/projects/view_profile'); ?>
<?php $this->load->view('admin_layout/activity/projects/user_profile'); ?>