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
						<form>
							<select id="mySelect">
								<?php
									for ($i=0;$i<count($category);$i++){
								?>	
									<option value="<?php echo $i;?>"><?php echo $category[$i]['name'];?></option>
								<?php
									}
								?>
							</select>
						</form>
					</div>		
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
						<ul class="nav nav-tabs" style = "display :none;" id="myTab">
							<li  class="active"><a href="<?php echo '#';echo 0;?>"></a></li>
							<?php
								for ($i=1;$i<count($category);$i++){					
							?>
							<li><a href="<?php echo '#';echo $i;?>"></a></li>
							<?php
								}
							?>
						</ul>
						<div class="vd_content-section clearfix">
							<div class="row">
								<div class="col-md-12">	
									<div class="tab-content no-bd mrgn0 pdng0">
										<div class="tab-pane active in" id="0">
											<div class="panel widget container-fluid">
												<?php
													for($i=0;$i<count($job_title);$i++)
													{
														if ($job_title[$i]['company_id'] == $category[0]['id']){
												?>
												<div class="row mrgn30-0 projectRow">
													<div class="vd_panel-menu">
														<input type="text" style = "display:none;" id = '<?php echo $i;?>' value="<?php echo $job_title[$i]['job_id']?>">
														<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
															<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
																<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
																	<div class="child-menu">
																		<div class="content-list content-menu">
																			<ul class="list-wrapper pd-lr-10">
																				<li>
																					<a class="vd_yellow holdjob" data-id="<?php echo $job_title[$i]['job_id']?>" data-toggle="modal" data-target="#holdThisJob<?php echo $job_title[$i]['job_id']?>"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
																				</li>
																				<li>
																					<a class="vd_yellow denyjob" data-id="<?php echo $job_title[$i]['job_id']?>" data-toggle="modal" data-target="#denyThisJob<?php echo $job_title[$i]['job_id']?>"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
																				</li>
																				<li>
																					<a class="vd_yellow blockjob" data-id="<?php echo $job_title[$i]['job_id']?>" data-toggle="modal" data-target="#blockThisJob<?php echo $job_title[$i]['job_id']?>"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
																				</li>
																				<li>
																					<a class="vd_red removejob" data-id="<?php echo $job_title[$i]['job_id']?>" data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
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
															<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white"><?php echo $job_title[$i]['job_id'];?></span></p>
														</div>
														<div class="col-sm-2 brdRight">
															<h4><?php echo $job_title[$i]['job_name']?></h4>
															<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white"><?php echo $job_title[$i]['job_date']?></span></p>
															<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white"><?php
																// if ($job_title[$i]['job_type']==0) echo "Offer";
																// else echo "Hire";
																echo "Fire";
															?></span></p>
														</div>
														<div class="col-sm-2 brdRight">
															<h4>All Task</h4>
															<p class="mrgn0"><span class="label label-default vd_bg-green vd_white">120</span></p>
															<!--<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>-->
														</div>
														<div class="col-sm-2 brdRight">
															<h4>Job Budget</h4>
															<p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white"><?php 
															// echo $job_title[$i]['job_budget'];
															echo "123";
															?></span> </p>
															<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white"><?php
																// if ($job_title[$i]['budget_type']==0) echo "Hourly";
																// else echo "Fixed";
																echo "Fixed";
															?></span> </p>
														</div>
														<div class="col-sm-2 brdRight">
															<h4>Work Start</h4>
															<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white"><?php
															//  echo $job_title[$i]['start_date'];
															 	// echo $job_title[$i]['work_start'];
															 ?></span></p>
															<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white"><?php 
															//echo $job_title[$i]['deliver_date'];

															?></span> </p>
														</div>
														</a>
														<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
														<div class="col-sm-2">
															<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
															<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white"><?php 
															// echo $job_title[$i]['proposals_accept'];
															echo "120"?></span> </p>
															<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white"><?php 
															// echo $job_title[$i]['proposals_denied']
															echo "30";?></span></p>
														</div></a>
														<div>
															<?php $this->load->view('admin_layout/activity/projects/holdjob',$job_title[$i])?>
															<?php $this->load->view('admin_layout/activity/projects/denyjob',$job_title[$i])?>
															<?php $this->load->view('admin_layout/activity/projects/blockjob',$job_title[$i])?>
														</div>
												</div>
													<?php
															}
														}
													?>
											</div>
										</div>
										<?php 
											for($i=1;$i<count($category);$i++){
										?>
										<div class="tab-pane" id="<?php echo $i?>"><div class="panel widget container-fluid">
											<?php
												for($k=0;$k<count($job_title);$k++)
												{
													if ($job_title[$k]['company_id'] == $category[$i]['id']){
											?>
											<div class="row mrgn30-0 projectRow">
													<div class="vd_panel-menu">
														<div class="menu entypo-icon smaller-font" data-placement="top" data-toggle="tooltip" data-original-title="Config">
															<div data-action="click-trigger" class="menu-trigger"><i class="icon-cog"></i></div>
																<div class="vd_mega-menu-content  width-xs-2  left-xs" data-action="click-target" style="display: none;">
																	<div class="child-menu">
																		<div class="content-list content-menu">
																			<ul class="list-wrapper pd-lr-10">
																				<li>
																					<a class="vd_yellow holdjob" data-toggle="modal" data-target="#holdThisJob"><span class="iconOption"><i class="fa fa-pause"></i></span> Hold</a>
																				</li>
																				<li>
																					<a class="vd_yellow denyjob" data-toggle="modal" data-target="#denyThisJob"><span class="iconOption"><i class="fa fa-times"></i></span> Deny</a>
																				</li>
																				<li>
																					<a class="vd_yellow blockjob" data-toggle="modal" data-target="#blockThisJob"><span class="iconOption"><i class="fa fa-lock"></i></span> Block</a>
																				</li>
																				<li>
																					<a class="vd_red removejob" data-toggle="modal"  data-target="#removeThisJob"><span class="iconOption"><i class="fa fa-trash-o"></i></span> Remove</a>
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
															<p class="mrgn0">ID: <span class="label label-default vd_bg-green vd_white"><?php echo $job_title[$k]['job_id'];?></span></p>
														</div>
														<div class="col-sm-2 brdRight">
															<h4><?php echo $job_title[$k]['job_name']?></h4>
															<p class="mrgn0">Post Time: <br><span class="label label-default vd_bg-blue vd_white"><?php echo $job_title[$k]['job_date']?></span></p>
															<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white"><?php
																// if ($job_title[$k]['job_type']==0) echo "Offer";
																// else echo "Hire";
																echo "Hire";
															?></span></p>
														</div>
														<div class="col-sm-2 brdRight">
															<h4>All Task</h4>
															<p class="mrgn0"><span class="label label-default vd_bg-green vd_white">120</span></p>
															<!--<p class="mrgn0">Job Type: <br><span class="label label-default vd_bg-gray vd_white">Offer</span></p>-->
														</div>
														<div class="col-sm-2 brdRight">
															<h4>Job Budget</h4>
															<p class="mrgn0">Budget: <br><span class="label label-default vd_bg-blue vd_white"><?php
															//  echo $job_title[$k]['job_budget']
															echo "123"?></span> </p>
															<p class="mrgn0">Type: <br><span class="label label-default vd_bg-gray vd_white"><?php
																// if ($job_title[$k]['budget_type']==0) echo "Hourly";
																// else echo "Fixed";
																echo "Fixed";
															?></span> </p>
														</div>
														<div class="col-sm-2 brdRight">
															<h4>Work Start</h4>
															<p class="mrgn0">Startdate: <br><span class="label label-default vd_bg-blue vd_white"><?php 
															// echo $job_title[$k]['work_start'];?></span></p>
															<p class="mrgn0">Deliverdate: <br><span class="label label-default vd_bg-green vd_white"><?php 
															// echo $job_title[$k]['work_end'];?></span></p>
														</div>
														</a>
														<a href="javascript:void(0);" data-toggle="modal" data-target="#viewProposals" title="" class="propModalLink">
														<div class="col-sm-2">
															<h4><span data-original-title="view proposals" data-toggle="tooltip" data-placement="top">Proposals</span></h4>
															<p class="mrgn0">Accepted: <br><span class="label label-default vd_bg-green vd_white"><?php 
															// echo $job_title[$k]['proposals_accept']
															echo "120"?></span> </p>
															<p class="mrgn0">Denied: <br><span class="label label-default vd_bg-red vd_white"><?php
															//  echo $job_title[$k]['proposals_denied']
															
															echo "20"?></span></p>
														</div></a>
														</div>
													<?php
															}
														}
													?>
											</div></div>
										<?php
											}
										?>
									</div>
								</div>	
							</div>
						</div>
				</div><!-- row end -->
      </div><!-- vd_content-section end -->
  </div><!-- vd_container end -->
</div><!-- vd_content-wrapper end -->
    
<!-- Middle Content End -->
<script>
	$(document).ready(function(){
    });
	$(window).load(function(){
		$('#mySelect').on('change', function (e) {
			console.log($('#myTab li a').eq($(this).val()).tab('show'));
			$('#myTab li a').eq($(this).val()).tab('show'); 
		});	
	});
	// $('.holdjob').click(function(){
	// 	var id1 = $('.holdjob');
	// 	var id = $('.holdjob').attr('data-num');
	// 	var url = site_url+"admin/CommonController/commonUpdate";
	// 	// console.log(id1);
	// 	// console.log($('.holdjob').attr('data-num'));
	// 	var data = {
	// 		id : id,
	// 		is_accept : 0,
	// 		table_name : 'job_detail'
	// 	};
	// 	$.ajax({
	// 		url : url,
	// 		method : "POST",
	// 		datatype : 'JSON',
	// 		data : data
	// 	}).done(function(data){
	// 		var obj = JSON.parse(data);
	// 		if(obj.status){
	// 			url = site_url+"admin/Activity/send_message";
	// 			var data1 = {
	// 				id : id,
	// 				is_accept : 0,
	// 				table_name : 'job_detail'
	// 			};

	// 			$.ajax({
	// 				url : url,
	// 				method : "POST",
	// 				datatype : 'JSON',
	// 				data : data1
	// 			}).done(function(data){
	// 				var obj = JSON.parse(data);
	// 				alert(obj);
	// 				location.reload();
	// 			});
	// 		}
	// 	});
	// });
	// $('.denyjob').click(function(){
	// 	var id = $('.denyjob').attr('name');
	// 	var url = site_url+"admin/CommonController/commonUpdate";
		
	// 	var data = {
	// 		id : id,
	// 		is_accept : 1,
	// 		table_name : 'job_detail'
	// 	};
	// 	$.ajax({
	// 		url : url,
	// 		method : "POST",
	// 		datatype : 'JSON',
	// 		data : data
	// 	}).done(function(data){
	// 		var obj = JSON.parse(data);
	// 		if(obj.status){
	// 			url = site_url+"admin/Activity/send_message";
	// 			var data1 = {
	// 				id : id,
	// 				is_accept : 1,
	// 				table_name : 'job_detail'
	// 			};

	// 			$.ajax({
	// 				url : url,
	// 				method : "POST",
	// 				datatype : 'JSON',
	// 				data : data1
	// 			}).done(function(data){
	// 				var obj = JSON.parse(data);
	// 				alert(obj);
	// 				location.reload();
	// 			});
	// 		}
	// 	});
	// });
	// $('.blockjob').click(function(){
	// 	var id = $('.blockjob').attr('name');
	// 	var url = site_url+"admin/CommonController/commonUpdate";
		
	// 	var data = {
	// 		id : id,
	// 		is_accept : 2,
	// 		table_name : 'job_detail'
	// 	};
	// 	$.ajax({
	// 		url : url,
	// 		method : "POST",
	// 		datatype : 'JSON',
	// 		data : data
	// 	}).done(function(data){
	// 		var obj = JSON.parse(data);
	// 		if(obj.status){
	// 			url = site_url+"admin/Activity/send_message";
	// 			var data1 = {
	// 				id : id,
	// 				is_accept : 2,
	// 				table_name : 'job_detail'
	// 			};

	// 			$.ajax({
	// 				url : url,
	// 				method : "POST",
	// 				datatype : 'JSON',
	// 				data : data1
	// 			}).done(function(data){
	// 				var obj = JSON.parse(data);
	// 				alert(obj);
	// 				location.reload();
	// 			});

	// 		}
	// 	});
	// });
	// $('.removejob').click(function(){
	// 	var id = $('.removejob').attr('name');
	// 	var url = site_url+"admin/Activity/send_message";
		


	// 	var data = {
	// 		id : id,
	// 		is_accept : 3,
	// 		table_name : 'job_detail'
	// 	};
	// 	console.log(data);
				
	// 	$.ajax({
	// 		url : url,
	// 		method : "POST",
	// 		datatype : 'JSON',
	// 		data : data
	// 	}).done(function(data){
	// 			var obj = JSON.parse(data);
	// 			url = site_url+"admin/CommonController/commonDeleteConfirm";
	// 			data = {
	// 				id : id,
	// 				table_name : 'job_detail'
	// 			};
	// 			$.ajax({
	// 				url : url,
	// 				method : "POST",
	// 				datatype : 'JSON',
	// 				data : data
	// 			}).done(function(data){
	// 				var obj = JSON.parse(data);
	// 				if(obj.status){
	// 					alert('Success');
	// 					location.reload();
	// 				}
	// 			});
			
	// 	});
	// });
</script>

<!-- VIEW PROJECT -->

<?php $this->load->view('admin_layout/activity/projects/view_projects'); ?>
<?php $this->load->view('admin_layout/activity/projects/view_proposals'); ?>
<?php $this->load->view('admin_layout/activity/projects/view_profile'); ?>
<?php $this->load->view('admin_layout/activity/projects/user_profile'); ?>

