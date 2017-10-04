<div class="modal fade" id="addLang" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">ADD LANGUAGE</h4>
      </div>
      <div class="modal-body" test="100">
        <form method="post" action="">
        	<div class="form-group clearfix">
				<label class="col-sm-4 control-label text-right">ISO</label>
				<div class="col-sm-7 controls">
					<div>
						<input type="text" placeholder="ISO" name="iso" id="iso">
					</div>
				</div>
			</div>

		  <div class="form-group"><label class="col-sm-4 control-label text-right">Icon</label>
				<div class="col-sm-7 controls">
					<div>
						<select class="langSelect" class="my-select" name="icon" id="icon">
				<option selected>Choose a language</option>
				<option value="AE" data-img-src="img/miniflags/AE.png">Arabic</option>
				<option value="GB" data-img-src="img/miniflags/GB.png">English (GB)</option>
				<option value="US" data-img-src="img/miniflags/US.png">English (USA)</option>
				<option value="FR" data-img-src="img/miniflags/FR.png">French</option>
				<option value="DE" data-img-src="img/miniflags/DE.png">Deutsch</option>
				<option value="IT" data-img-src="img/miniflags/IT.png">Italian</option>
				<option value="ES" data-img-src="img/miniflags/ES.png">Spanish</option>
			</select>
					</div>
				</div>
		    
		  </div>
		  
			<div class="form-group clearfix">
				<label class="col-sm-4 control-label text-right">Title</label>
				<div class="col-sm-7 controls">
					<div>
						<input type="text" placeholder="Title" name="lang_name" id="lang_name">
					</div>
				</div>
			</div>
		</form>
      </div>	  
      <div class="modal-footer vd_bg-white">		  
        <button id="btn_save_language" data-url="<?php echo site_url()."admin/portal_settings/add_language" ?>" type="button" class="btn btn-primary ">Save</button>
      </div>
    </div>
  </div>
</div>