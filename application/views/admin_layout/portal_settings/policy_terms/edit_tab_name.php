<!-- EDIT TAB NAME -->
<div class="modal fade" id="editTabName<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">EDIT TAB NAME</h4>
      </div>
      <div class="modal-body form-container">
        <form method="post">			
			<div class="form-group clearfix">
				<div class="controls">
          <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
					<input type="text" name="tab_name" class="form-control" id="tab_name" placeholder="Add Tab Name Here" value="<?php echo $tab_name ?>">
					<span class="help-inline"></span>
				</div>
			</div>
			
		  <div class="text-center"><button type="submit" class="btn btn-primary btn_update_policy">SAVE</button></div>
		</form>
      </div>	  
      <div class="modal-footer vd_bg-white">		  
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>