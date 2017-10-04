<div class="modal fade" id="addKeyword" tabindex="-1" role="dialog" aria-labelledby="Add service" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">ADD KEYWORD</h4>
      </div>
      <div class="modal-body">
        <form method="post"
        action='<?php echo site_url() ?>admin/portal_settings/addKeword'>
          <div class="form-group">
            <select class="custom-select category_id" name="category_id">
                    <option value="0">Please Select Category</option>
              <?php foreach($all_category as $key => $all_sub_cat): 
                $key_array = explode("#", $key);
              ?>
                <optgroup data label="<?php echo $key_array[1]; ?>">
                  <?php foreach($all_sub_cat as $cat): ?>
                    <option data-main-cat-id='<?php echo $key_array[0]; ?>' value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
                  <?php endforeach; ?>
                </optgroup>
              <?php endforeach; ?>

              <!--<optgroup label="Internet">
                <option value="1">One</option>
                <option value="2">Two</option>
              </optgroup> -->

          </select>
          </div>
        <div class="entry form-group">
          <div class="input-group">
            <input class="input_keyword_name" type="text" placeholder="Put the name here">
            <span class="input-group-addon add-more">+</span>
        </div>
      </div>
    </form>
      </div>    
      <div class="modal-footer vd_bg-white">      
        <button type="button" class="btn btn-primary btn_save_keywords" data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>