<!-- REMOVE LANG -->
<div class="modal fade" id="removeLang" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-red">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">REMOVE LANGUAGE</h4>
      </div>
      <div class="modal-body">
      </div>	  
      <div class="modal-footer vd_bg-white">		  
        <button type="button" class="btn btn-primary lang_delete_button" 
        data-lang-id='<?php echo $lang_id; ?>' 
        data-url='<?php echo site_url()."admin/Portal_Settings/confirm_delete_language" ?>'
        >CONFIRM</button>
      </div>
    </div>
  </div>
</div>