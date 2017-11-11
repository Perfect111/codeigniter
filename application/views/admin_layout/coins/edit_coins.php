<div class="modal fade editCoins" id="editCoins<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="Add maincategory" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header vd_bg-green">
        <button type="button" class="close vd_white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title vd_white"><span class="append-icon icon-plus3"></span> EDIT COINS</h4>
      </div>
      <div class="modal-body">
        <form method="post">
		  <div class="form-group col-md-6">
		  	<input type="hidden" id="id" name="id" value="<?php echo $id ?>">
		    <input type="text" name="coins_amount" id="coins_amount" placeholder="Coins Amount" class="form-control" value="<?php echo $coins_amount; ?>">
		  </div>
		  <div class="form-group col-md-6">
		    <input type="text" name="price" id="price" placeholder="Price $" class="form-control" value="<?php echo $price; ?>" />
		  </div>
		  <div class="form-group col-md-6">
		    <input type="text" name="service1" id="service1" placeholder="Buy Bids" class="form-control" value="<?php echo $service1; ?>">
		  </div>
		  <div class="form-group col-md-6">
		    <input type="text" name="coin_price1" id="coin_price1" placeholder="Coins Price" class="form-control" value="<?php echo $coin_price1; ?>" />
		  </div>
		  <div class="form-group col-md-6">
		    <input type="text" name="service2" id="service2" placeholder="Contact Request" class="form-control" value="<?php echo $service2; ?>" />
		  </div>
		  <div class="form-group col-md-6">
		    <input type="text" name="coin_price2" id="coin_price2" placeholder="Coins Price" class="form-control" value="<?php echo $coin_price2; ?>" />
		  </div>
		  <!--<button type="submit" class="btn btn-primary">ADD</button>-->
		</form>
      </div>	  
      <div class="modal-footer vd_bg-white">		  
        <button type="button" class="btn btn-primary btn-edit-coins" >Save &amp; Close</button>
      </div>
    </div>
  </div>
</div>