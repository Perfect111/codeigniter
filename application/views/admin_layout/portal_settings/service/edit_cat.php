<div class="modal fade" id="editMaincategory<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">Edit MAINCATEGORY</h4>
      </div>
      <div class="modal-body">
        <form method="post" 
        action='<?php echo site_url() ?>admin/Portal_Settings/editMainCat' enctype="multipart/form-data">
      <div class="entry form-group">
        <div class="input-group">
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <input type="text" name="name" placeholder="Put the name here" class="input_cat_name" value="<?php echo $name; ?>" required>
          <input type="file" name="cat_image[]" value="Put the name here" class="input_cat_image">
          <span class="input-group-addon"></span>
          
      </div>
      <div>
        <img width="50px" height="50px" src="<?php echo site_url()."uploads/images/category/".$image ?>">
      </div>
    </div>
    <div class="modal-footer vd_bg-white">      
        <input type="submit" class="btn btn-primary" value="Save" />
      </div>
    </form>
      </div>    
      
    </div>
  </div>
</div>