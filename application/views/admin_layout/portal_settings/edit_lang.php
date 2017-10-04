<div class="modal right fade" id="editLang" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index: 1049;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green text-center">
        <button type="button" class="vd_white close" data-dismiss="modal" aria-label="Close" style="float:left;opacity:1;font-size:3rem;">
          <span aria-hidden="true"><i class="fa fa-arrow-circle-right"></i></span>
        </button>
        <h4 class="modal-title vd_white">EDIT <?php echo $lang_name; ?> LANGUAGE</h4>
      </div>
      <div class="modal-body h100">		  
			<div class="row">
				<div class="col-md-12">
					<table class="discountTable table"
					data-action-url='<?php echo site_url()."admin/portal_settings/get_edit_translatoin_data" ?>'>
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
								<th>Type</th>
								<th>File</th>
								<th>Progress</th>
								<th>Done</th>
								<th>Total</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($all_lang_table as $table): ?>
							<tr>
								<td><?php echo $table['name'] ?></td>
								<td>Task</td> 
								<td>
									<div class="menu-info mrgn0">
                                    <div class="progress progress-sm mrgn0">
                                        <div style="width:<?php echo $table['percent'] ?>%" class="progress-bar progress-bar-info"> 
                                        	<?php echo $table['percent'] ?>%
                                        </div>
                                    </div>
                                 </div>
								</td> 
								<td><?php echo $table['translated'] ?> </td> 
								<td><?php echo $table['total'] ?></td> 
								<td class="menu-action">
									<div class="pdng5">
										<a data-lang-table-id="<?php echo $table['id']; ?>" 
										data-lang-id="<?php echo $lang_id; ?>"
										data-lang-name="<?php echo $lang_name; ?>"
										data-toggle="modal" data-target="#editTranslation" class="btn_translation_edit btn menu-icon vd_bd-yellow vd_yellow"><i class="fa fa-pencil" data-original-title="Edit" data-toggle="tooltip" data-placement="top" ></i></a>
									</div>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div><!-- col-md-12 end --> 
			</div><!-- row end -->
      </div>	  
      <div class="modal-footer vd_bg-white">		  
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>