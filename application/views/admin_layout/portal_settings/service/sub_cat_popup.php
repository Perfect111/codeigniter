<div class="modal fade" id="subcategories" tabindex="-1" role="dialog" aria-labelledby="All subcategories" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white" id="myModalLabel">SUBCATEGORIES</h4>
      </div>
      <div class="modal-body">
        <table class="table table-hover">
		  <thead>
			<tr>
			  <th>Subcategory Name</th>
			  <th>Actions</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach($sub_category as $cat): ?>
            <tr>
              <td><?php echo $cat['name'] ?></td>
              <td class="menu-action">
                <a data-id="<?php echo $cat['id'] ?>" data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"><i class="fa fa-edit"></i></a>

                <a data-id="<?php echo $cat['id'] ?>" data-original-title="remove" data-toggle="tooltip" data-placement="top" class="btn_delete_sub_cat btn menu-icon vd_bd-red vd_red"><i class="fa fa-times"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
            <!--<tr>
              <td>Health</td>
              <td class="menu-action">
                <a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"><i class="fa fa-edit"></i></a>
                <a data-original-title="remove" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red"><i class="fa fa-times"></i></a>
              </td>
            </tr>			  
            <tr>
              <td>Salon</td>
              <td class="menu-action">
                <a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"><i class="fa fa-edit"></i></a>
                <a data-original-title="remove" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red"><i class="fa fa-times"></i></a>
              </td>
            </tr>
            <tr>
              <td>Health</td>
              <td class="menu-action">
                <a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"><i class="fa fa-edit"></i></a>
                <a data-original-title="remove" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red"><i class="fa fa-times"></i></a>
              </td>
            </tr>			  
            <tr>
              <td>Salon</td>
              <td class="menu-action">
                <a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow"><i class="fa fa-edit"></i></a>
                <a data-original-title="remove" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red"><i class="fa fa-times"></i></a>
              </td>
            </tr>-->
          </tbody>
        </table>
      </div>	  
      <div class="modal-footer vd_bg-white">
		  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSubcategory"><i class="fa fa-plus-circle"></i> Add New</button>
        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>