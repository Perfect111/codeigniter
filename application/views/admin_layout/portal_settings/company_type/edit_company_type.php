<!-- ADD COMPANY TYPE -->
<div class="modal fade" id="editCompany" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">EDIT COMPANY TYPE</h4>
      </div>
      <div class="modal-body">
        <form method="post">
		  <div class="form-group">
        <input type="hidden" id="company_type_id" name="company_type">
		    <input type="text" id="company_type" name="company_type" placeholder="Enter Company Type">
		  </div>
		  <button type="button" class="btn btn-primary btn-edit-company">SAVE</button>
		</form>
      </div>	  
      <div class="modal-footer vd_bg-white">		  
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>