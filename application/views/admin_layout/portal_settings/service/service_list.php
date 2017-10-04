<?php $i=1; foreach ($service_listing as $key => $value): ?>
<tr class="service_listing_tr" data-main-cat-id="<?php echo $value['id']; ?>">
    <td ><?php echo $i++; ?></td>
    <td><?php echo $value['name']; ?></td>
    <td><a class="btn_show_subcat" href="javascript:void(0);" data-toggle="modal" 
    data-target="#subcategories"><?php echo $value['sub_cat_count']; ?></a></td>

    <td><a class="btn_show_keyword" href="javascript:void(0);" data-toggle="modal" 
    data-target="#keywords"><?php echo $value['keyword_count']; ?></a></td>

    <td class="menu-action">
      <a class="btn menu-icon vd_bd-blue vd_blue" data-toggle="modal" data-target="#addMaincategory">
        <i class="fa fa-plus" data-toggle="tooltip" data-original-title="add new" data-placement="top"></i>
      </a>


      <a data-id="<?php echo $value['id']; ?>" data-original-title="edit" data-toggle="modal"
      data-target="#editMaincategory" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow">
        <i class="fa fa-edit"></i>
      </a>


      <a data-id="<?php echo $value['id']; ?>" data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-green vd_green">
        <i class="fa fa-eye"></i>
      </a>


      <a data-id="<?php echo $value['id']; ?>" data-original-title="remove" data-toggle="tooltip" data-placement="top" class="btn_cat_delete btn menu-icon vd_bd-red vd_red">
        <i class="fa fa-times"></i>
      </a>
    </td>
  </tr>
<?php endforeach; ?>

  <!--<tr>
    <td >2</td>
    <td>Internet</td>
    <td><a href="javascript:void(0);" data-toggle="modal" data-target="#subcategories">10</a></td>
    <td><a href="javascript:void(0);" data-toggle="modal" data-target="#keywords">20</a></td>
    <td class="menu-action">
      <a class="btn menu-icon vd_bd-blue vd_blue" data-toggle="modal" data-target="#addMaincategory">
        <i class="fa fa-plus" data-toggle="tooltip" data-original-title="add new" data-placement="top"></i>
      </a>
      <a data-original-title="edit" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow">
        <i class="fa fa-edit"></i>
      </a>
      <a data-original-title="view" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-green vd_green">
        <i class="fa fa-eye"></i>
      </a>
      <a data-original-title="remove" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-red vd_red">
        <i class="fa fa-times"></i>
      </a>
    </td>
  </tr>-->