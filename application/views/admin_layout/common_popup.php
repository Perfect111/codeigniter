<!-- REMOVE LANG -->
<div class="modal fade" id="common_remove_confirm" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-red">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white">REMOVE <?php echo $table_name; ?></h4>
      </div>
      <div class="modal-body">
      </div>	  
      <div class="modal-footer vd_bg-white">		  
        <button type="button" class="btn btn-primary common_delete_button" 
        data-id='<?php echo $id; ?>' data-table='<?php echo $table_name; ?>'
        >CONFIRM</button>
      </div>
    </div>
  </div>
</div>