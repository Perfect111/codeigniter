<div class="vd_content-wrapper" style="min-height: 895px;">
		<div class="vd_container" style="min-height: 895px;">
			<div class="vd_content clearfix">
				<div class="vd_head-section clearfix">
					<div class="vd_panel-header">
						<ul class="breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li><a href="pages-custom-product.html">Pages</a></li>
							<li class="active">All contracts</li>
						</ul>
						<div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step="5" data-position="left">
							<div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"><i class="fa fa-arrows-h"></i></div>
							<div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"><i class="fa fa-arrows-v"></i></div>
							<div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"><i class="glyphicon glyphicon-fullscreen"></i></div>
						</div>
					</div>
				</div><!-- vd_head-section end -->
				<div class="vd_title-section clearfix">
					<div class="vd_panel-header">
						<h1><span class="append-icon icon-briefcase"></span> All contracts</h1>
						<div class="row pdng10 searchBar filterBar contractBar">
							<form>
								<div class="col-md-2">
									<div class="form-group">
										<select id="mySelect">
											<?php 
												for ($i=0;$i<count($category);$i++){
											?>
												<option value="<?php echo $i;?>"><?php echo $category[$i]['name']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-8">
									<button type="button" class="btn vd_btn vd_bg-grey width-100 text-left pdng5 mrgn0-5" data-toggle="modal" data-target="" style="max-height:32px;">All</button>
									<button type="button" class="btn vd_btn vd_bg-blue width-100 text-left pdng5 mrgn0-5" data-toggle="modal" data-target="" style="max-height:32px;">In Progress</button>
									<button type="button" class="btn vd_btn vd_bg-green width-100 text-left pdng5 mrgn0-5" data-toggle="modal" data-target="" style="max-height:32px;">Completed</button>
									<button type="button" class="btn vd_btn vd_bg-red width-100 text-left pdng5 mrgn0-5" data-toggle="modal" data-target="" style="max-height:32px;">Stopped</button>
									<button type="button" class="btn vd_btn vd_bg-yellow width-100 text-left pdng5 mrgn0-5" data-toggle="modal" data-target="" style="max-height:32px;">On Hold</button>
									<button type="button" class="btn vd_btn vd_bg-black width-100 text-left pdng5 mrgn0-5" data-toggle="modal" data-target="" style="max-height:32px;">Waiting</button>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<div class="input-group">
											<input type="text" placeholder="Search">
											<span class="input-group-addon" id="datepicker-icon-trigger" data-datepicker="#datepicker-icon"><i class="fa fa-search"></i></span>
										</div>
									</div>
								</div>
							</form>
						</div>
						<ul class="nav nav-tabs" id="myTab" style="display:none;">
							<li class="active"><a href="#0">Home</a></li>
							<li><a href="#1">Profile</a></li>
							<li><a href="#2">Messages</a></li>
							<li><a href="#3">Settings</a></li>
						</ul>
						<div class="vd_content-section clearfix">
							<div class="row">
								<div class="col-md-12">	
									<div class="tab-content no-bd mrgn0 pdng0">
										<div class="tab-pane active" id="0">
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
													<a href="javascript:void(0);" data-toggle="modal" data-target="#viewContract" title="">
													<div class="col-sm-2 brdRight propImg">
														<img src="img/avatar/briant3.png" alt="" class="projectImg">
														<p class="propName">
															John Doe
															<span>MALO234</span>
														</p>
													</div>
													<div class="col-sm-4 brdRight">
														<h4>Design Concept</h4>
														<p class="mrgn5">Work Start: 05-07-2017 12:05:00</p>
														<p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">In Progress</span></p>
													</div>
													<div class="col-sm-2 text-center brdRight">	
														<div class="circleBar" data-percent="85"><div style="width: 100px; height: 100px;"><div class="ab" style="position: relative; text-align: center; width: 100px; height: 100px; border-radius: 100%; background-color: rgb(239, 239, 239); background-image: linear-gradient(396deg, transparent 50%, rgb(31, 174, 102) 50%), linear-gradient(90deg, rgb(31, 174, 102) 50%, transparent 50%);"><div class="cir" style="position: relative; top: 2px; left: 2px; text-align: center; width: 96px; height: 96px; border-radius: 100%; background-color: rgb(255, 255, 255);"><span class="perc" style="display: block; width: 100px; height: 100px; line-height: 100px; vertical-align: middle; font-size: 15px; font-weight: normal; color: rgb(92, 147, 200);">85%</span></div></div></div></div>
													</div>
													<div class="col-sm-2 brdRight">
														<h4>All Tasks</h4>
														<p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">0</span> Pending</p>
														<p class="mrgn5"><span class="label label-default vd_bg-blue vd_white">1</span> Behind</p>
													</div>
													<!-- <div class="col-sm-2 contractLogo"> -->
													<div class="col-sm-2 propImg">
														<img src="img/logos/boinc.png" alt="" class="contractorLogo">
														<p class="propName">
															Company Super-Dooper Gmbh. Ltd
															<span>Company Id: MALO234</span>
														</p>
													</div>
													</a>
													</div>
											</div><!-- row end -->
										</div>
										<div class="tab-pane" id="1">Profile content</div>
										<div class="tab-pane" id="2">Messages content</div>
										<div class="tab-pane" id="3">Settings content</div>
									</div>
								</div>		
							</div>
						</div>
				</div><!-- vd_title-section end -->
          </div><!-- vd_content-section end -->
        </div><!-- vd_content end -->
      </div><!-- vd_container end -->
    </div>

	<script type="text/javascript">//<![CDATA[
		$(window).load(function(){
		$('#mySelect').on('change', function (e) {
		console.log(    $('#myTab li a').eq($(this).val()).tab('show'));
			$('#myTab li a').eq($(this).val()).tab('show');
		});
		});//]]>

	</script>