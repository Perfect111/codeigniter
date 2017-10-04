<div class="modal fade" id="addMaincategory" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">ADD MAINCATEGORY</h4>
      </div>
      <div class="modal-body">
        <form method="post" 
        action='<?php echo site_url() ?>admin/portal_settings/addMainCat'>
      <div class="entry form-group">
        <div class="input-group">
          <input type="text" name="name[]" placeholder="Put the name here" class="input_cat_name">
          <input type="file" name="cat_image[]" placeholder="Put the name here" class="input_cat_image">
          <span class="input-group-addon add-more">+</span>
      </div>
    </div>
    </form>
      </div>    
      <div class="modal-footer vd_bg-white">      
        <button type="button" class="btn_save_category btn btn-primary " data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>