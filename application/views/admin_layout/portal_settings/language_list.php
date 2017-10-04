<?php foreach($all_language as $lang): ?>
<tr>
	<td><img src="<?php echo $assets_uri; ?>img/flags/<?php echo $lang['iso'] ?>.png" alt="" width="48" height="32"></td>
	<td><?php echo $lang['lang_name'] ?></td> 
	<td>
		<div class="menu-info mrgn0">
        <div class="progress progress-sm mrgn0">
            <div style="width:<?php echo $lang['percent'] ?>%" class="progress-bar progress-bar-info"> 
            	<?php echo $lang['percent'] ?>%
            </div>
        </div>
     </div>
	</td> 
	<td><?php echo $lang['translated'] ?></td> 
	<td><?php echo $lang['total'] ?></td> 
	<td class="menu-action">
		<div class="pdng5">
			<a data-id="<?php echo $lang['id']; ?>"
			 data-lang-name="<?php echo $lang['lang_name'] ?>" data-toggle="modal" data-target="#editLang" class="btn menu-icon vd_bd-yellow vd_yellow each_language"><i class="fa fa-pencil" data-original-title="Edit" data-toggle="tooltip" data-placement="top" ></i></a>

			<a data-id="<?php echo $lang['id']; ?>" data-toggle="modal" data-target="#removeLang" class="each_language_delete btn menu-icon vd_bd-red vd_red"><i class="fa fa-trash-o" data-original-title="Remove" data-toggle="tooltip" data-placement="top" ></i></a>
		</div>
	</td>
</tr>

<?php endforeach; ?>

<!--<tr>
	<td><img src="<?php //echo $assets_uri; ?>img/flags/GB.png" alt="" width="48" height="32"></td>
	<td>English</td> 
	<td>
		<div class="menu-info mrgn0">
        <div class="progress progress-sm mrgn0">
            <div style="width:45%" class="progress-bar progress-bar-info"> 
            	45%
            </div>
        </div>
     </div></td> 
	<td>1543</td> 
	<td>1345</td> 
	<td class="menu-action">
		<div class="pdng5">
			<a data-toggle="modal" data-target="#editLang" class="btn menu-icon vd_bd-yellow vd_yellow"><i class="fa fa-pencil" data-original-title="Edit" data-toggle="tooltip" data-placement="top" ></i></a>
			<a data-toggle="modal" data-target="#removeLang" class="btn menu-icon vd_bd-red vd_red"><i class="fa fa-trash-o" data-original-title="Remove" data-toggle="tooltip" data-placement="top" ></i></a>
		</div>
	</td>
</tr>-->