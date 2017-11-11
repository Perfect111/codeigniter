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
						<h1><span class="append-icon icon-archive"></span> Create Coins</h1>
					</div>
				</div><!-- vd_title-section end -->
				
				<div class="vd_content-section clearfix">
					<div class="row mrgn15-0">
				<div class="col-md-4"></div>
				<div class="col-md-4">
						<button type="button" class="btn vd_btn vd_bg-blue btn-lg btn-block" data-toggle="modal" data-target="#addCoins"><span class="append-icon"><i class="fa fa-plus-square"></i></span>Create Coins</button>
				</div>
				<div class="col-md-4"></div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<table class="discountTable table">
						<colgroup>
							<col width="5%">
							<col width="10%">
							<col width="10%">
							<col width="17%">
							<col width="3%">
							<col width="20%">
						</colgroup>
						<thead>
							<tr>
								<th>No.</th>
								<th>Coins</th>
								<th>Price</th>
								<th colspan="2">Service 1</th>
								<th colspan="2">Service 2</th>
								<th>Option</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=0; foreach($all_coins as $coin): ?>
							<tr>
								<td><?php echo ++$i; ?></td>
								<td><?php echo $coin['coins_amount'] ?></td> 
								<td class="menu-action"><?php echo $coin['price'] ?></td>
								<td><?php echo $coin['service1'] ?></td>
								<td><?php echo $coin['coin_price1'] ?></td>
								<td><?php echo $coin['service2'] ?></td>
								<td><?php echo $coin['coin_price2'] ?></td>
								<td>
									<div class="pdng5">
										<a data-id="<?php echo $coin['id'] ?>" data-toggle="modal" data-target="#editCoins<?php echo $coin['id'] ?>" class="btn menu-icon edit_coins vd_bd-yellow vd_yellow"><i class="fa fa-pencil" data-original-title="Edit" data-toggle="tooltip" data-placement="top" ></i></a>

										<a data-id="<?php echo $coin['id'] ?>" data-toggle="modal" data-target="#" class="btn delete_coins menu-icon vd_bd-red vd_red"><i class="fa fa-trash-o" data-original-title="Remove" data-toggle="tooltip" data-placement="top" ></i></a>
									</div>
								</td>
							</tr>
							<?php 
								$this->load->view('admin_layout/coins/edit_coins', $coin);
								endforeach; 
							?>
						</tbody>
					</table>
				</div><!-- col-md-12 end --> 
			</div><!-- row end --> 	
					
          </div><!-- vd_content-section end -->
        </div><!-- vd_content end -->
      </div><!-- vd_container end -->
    </div><!-- vd_content-wrapper end -->

    <?php 
    $this->load->view('admin_layout/coins/add_coins');
    ?>