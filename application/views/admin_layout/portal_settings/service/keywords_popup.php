<div class="modal fade" id="keywords" tabindex="-1" role="dialog" aria-labelledby="All services" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white" id="myModalLabel">KEYWORDS</h4>
      </div>
      <div class="modal-body">
        <table class="table table-hover">
		  <thead>
			<tr>
			  <th>Keyword</th>
			  <th>Actions</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach($keywords as $Keyword): ?>
            <tr>
              <td><?php echo $Keyword['name']; ?></td>
              <td class="menu-action">
                <a data-id="<?php echo $Keyword['id']; ?>" 
                  data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"><i class="fa fa-edit"></i></a>

                <a data-id="<?php echo $Keyword['id']; ?>" data-original-title="remove" data-toggle="tooltip" data-placement="top" class="btn_delete_keywords btn menu-icon vd_bd-red vd_red"><i class="fa fa-times"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
            
          </tbody>
        </table>
      </div>	  
      <div class="modal-footer vd_bg-white">
		  <button type="button" class="btn btn-primary show_add_keyword_popup" 
      data-cat-id ="<?php echo $root_cat_id; ?>"
      data-toggle="modal"><i class="fa fa-plus-circle"></i> Add New</button>
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>