<div class="modal fade addhold" id="holdThisJob<?php echo $job_id?>" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title vd_white">HOLD THIS JOB</h4>
      </div>
      <div class="modal-body">
        <form method="post">
		  <div class="form-group">
		    <select class="custom-select">
				<option selected="">Select the Hold reason</option>
				<option value="1">Because of</option>
				<option value="2">Because of</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <input type="text" name="add_hold" id="add_hold" placeholder="Put the reason here" class="form-control" />
        <input type="hidden" name="job_id" id="job_id" class="form-control" value="<?php echo $job_id?>" />
        <input type="hidden" name="company_id" id="company_id" class="form-control" value = "<?php echo $company_id?>" />
		  </div>
		  <button type="submit" class="btn btn-primary btn-add-hold">OK</button>
		</form>
      </div>	  
      <div class="modal-footer vd_bg-white">		  
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>