<!-- Middle Content Start -->

    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> </li>
                <li><a href="pages-custom-product.html">Pages</a> </li>
                <li class="active">Our Services</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>

</div>

            </div>
          </div>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <h1><i class="append-icon glyphicon glyphicon-qrcode"></i> Our Services</h1>
            </div>
          </div>
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-md-4">
                <div class="mgbt-xs-10">
                      <button type="button" class="btn vd_btn vd_bg-blue btn-lg btn-block" data-toggle="modal" data-target="#addMaincategory"><span class="append-icon"><i class="fa fa-plus-circle fa-fw"></i></span>Add Maincategory</button>
                    </div>
              </div>
              <div class="col-md-4">
                <div class="mgbt-xs-10">
                      <button type="button" class="btn vd_btn vd_bg-blue btn-lg btn-block" data-toggle="modal" data-target="#addSubcategory"><span class="append-icon"><i class="fa fa-plus-circle fa-fw"></i></span>Add Subcategory</button>
                    </div>
              </div>
              <div class="col-md-4">
                <div class="mgbt-xs-10">
                      <button type="button" class="btn vd_btn vd_bg-blue btn-lg btn-block" data-toggle="modal" data-target="#addKeyword"><span class="append-icon"><i class="fa fa-plus-circle fa-fw"></i></span>Add Keywords</button>
                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="panel widget">
                  <div class="panel-body table-responsive">
                    <table class="table table-hover center">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Maincategory</th>
                          <th>Subcategory</th>
                          <th>Keywords</th>
                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $this->load->view($this->template."/portal_settings/service/service_list"); ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>




          </div>
          <!-- .vd_content-section -->

        </div>
        <!-- .vd_content -->
      </div>
      <!-- .vd_container -->
    </div>

    <!-- CATEGORIES LISTING-->
    <div id="portal_sub_cat_popup">
    <?php //$this->load->view($this->template."/portal_settings/service/sub_cat_popup");
       ?>
    </div>



     <!-- KEYWORDS POPUP-->
    <div id="portal_keyword_listing">
    <?php //$this->load->view($this->template."/portal_settings/service/keywords_popup");
       ?>
    </div>

    <!-- ADD MAIN CATEGORIES -->
    <div id="portal_sett_cat_listing">
    <?php $this->load->view($this->template."/portal_settings/service/add_cat");
       ?>
    </div>

    <!-- Edit MAIN CATEGORIES -->
    <div id="edit_main_category_container">
    <?php 
        //$this->load->view($this->template."/portal_settings/service/edit_cat");
       ?>
    </div>

    <!-- ADD SUB CATEGORIES -->
    <div id="portal_sett_cat_listing">
    <?php $this->load->view($this->template."/portal_settings/service/add_subcat");
       ?>
    </div>

    <!-- Edit SUB CATEGORIES -->
    <div id="edit_sub_category_container">
    
    </div>

    <!-- Add Sub Cat from pop up -->
    <div id="portal_add_sub_cat_from_popup">
    
    </div>

    <!-- ADD KEYWORDS -->
    <div id="portal_sett_cat_listing">
    <?php $this->load->view($this->template."/portal_settings/service/add_keyword");
       ?>
    </div>

    <!-- Add KEYWORDS pop up from list-->
    <div id="portal_add_keyword_from_popup">
    
    </div>

    <!-- INNER JS -->
    <div id="portal_sett_cat_listing">
    <?php //$this->load->view($this->template."/portal_settings/service/inner_js");
       ?>
    </div>



