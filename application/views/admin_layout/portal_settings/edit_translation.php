<div class="modal right fade" id="editTranslation" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true" style="z-index: 1050;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green text-center">
        <button type="button" class="vd_white close" data-dismiss="modal" aria-label="Close" style="float:left;opacity:1;font-size:3rem;">
          <span aria-hidden="true"><i class="fa fa-arrow-circle-right"></i></span>
        </button>
        <h4 class="modal-title vd_white">EDIT <?php echo $data_lang_name; ?> TRANSLATION</h4>
      </div>
      <div class="modal-body">
        <form method="post" data-url='<?php echo site_url()."admin/Portal_Settings/edit_translation_data" ?>'>
    			<div class="form-group clearfix">
    				<h4 class="col-sm-4 control-label text-right">ENGLISH</h4>
    				<h4 class="col-sm-7 "><?php echo $data_lang_name; ?></h4>
    			</div>

          <?php foreach($all_translation as $translaton) :?>
      			<div class="form-group clearfix">
      				<label class="col-sm-4 control-label text-right"><?php echo $translaton['eng_string']; ?></label>
      				<div class="col-sm-7 controls">
      					<div>
                  <input class="translated_id" type="hidden" name="translated_id[]" placeholder="Title" value="<?php echo $translaton['id']; ?>">

      						<input class="translated_string" type="text" name="translated_string[]" placeholder="Title" value="<?php echo $translaton['translated_string']; ?>">
      					</div>
      				</div>
      			</div>
          <?php endforeach; ?>
    			<!--<div class="form-group clearfix">
    				<label class="col-sm-4 control-label text-right">Activities</label>
    				<div class="col-sm-7 controls">
    					<div>
    						<input type="text" placeholder="Title" value="Arabic text">
    					</div>
    				</div>
    			</div>
    			<div class="form-group clearfix">
    				<label class="col-sm-4 control-label text-right">Activity</label>
    				<div class="col-sm-7 controls">
    					<div>
    						<input type="text" placeholder="Title" value="Arabic text">
    					</div>
    				</div>
    			</div>-->
		</form>
      </div>	  
      <div class="modal-footer vd_bg-white">		  
        <button type="button" class="btn btn-primary btn_save_translation">Save</button>
      </div>
    </div>
  </div>
</div>

