<div class="modal fade" id="addSubcategory" tabindex="-1" role="dialog" aria-labelledby="Add subcategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">ADD SUBCATEGORY</h4>
      </div>
      <div class="modal-body">
        <form method="post"
        action='<?php echo site_url() ?>admin/portal_settings/addSubCat'>
      <div class="form-group">
        <select class="custom-select parent" name="parent">
              <option value="0" selected="selected">Please select main category</option>
        <?php if(count($main_category) > 0): ?>
          <?php foreach ($main_category as $cat): ?>
              <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
          <?php endforeach; ?>
        <?php endif; ?>
      </select>
      </div>
      <div class="entry form-group">
        <div class="input-group">
          <input type="text" name="name[]" class="input_subcat_name" placeholder="Put the name here">
          <span class="input-group-addon add-more">+</span>
      </div>
    </div>
    </form>
      </div> 
      <div class="modal-footer vd_bg-white">      
        <button type="button" class="btn btn-primary btn_add_sub_cat" 
        >Save</button>
      </div>
    </div>
  </div>
</div>