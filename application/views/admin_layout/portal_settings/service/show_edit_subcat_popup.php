<div class="modal fade" id="editSubcategoryPopup" tabindex="-1" role="dialog" aria-labelledby="Add subcategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">Edit SUBCATEGORY</h4>
      </div>
      <div class="modal-body">
        <form method="post"
        action='<?php echo site_url() ?>admin/Portal_Settings/addSubCat'>
      <div class="form-group">
        <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
        <select class="custom-select parent" name="parent_id" id="parent_id">
              <option value="0">Please select main category</option>
        <?php if(count($main_category) > 0): ?>
          <?php foreach ($main_category as $cat): ?>
              <option <?php if($cat['id'] == $root_cat_id) 
              echo "selected" ?> value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
      </div>
      <div class="entry form-group">
        <div class="input-group">
          <input type="text" name="name" id="name" class="input_subcat_name" placeholder="Put the name here" value="<?php echo $sub_cat_name ?>">
          <span class="input-group-addon "></span>
      </div>
    </div>
    </form>
      </div> 
      <div class="modal-footer vd_bg-white">      
        <button type="button" class="btn btn-primary btn_update_sub_cat" 
        >Save</button>
      </div>
    </div>
  </div>
</div>