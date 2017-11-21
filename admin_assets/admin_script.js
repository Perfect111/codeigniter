$(document).ready(function(){
	/*
	* Add Language
	*/
	$("button#btn_save_language").click(function(){
		var btn_save = $(this);
		var container = "div#addLang";
		var url = btn_save.attr('data-url');

		var fields = {
			'iso' : 'input',
			'icon' : 'select',
			'lang_name' : 'input'
		}

		add_language(btn_save, container, fields, url);
	});


	/*
	* Add company Types
	*/
	$("button.btn-add-company").click(function(){
		var btn_save = $(this);
		var container = "div#addCompany";
		var table_name ="company_type";
		//var url = btn_save.attr('data-url');

		var fields = {
			'company_type' : 'input'		
		}

		common_add_ajax_request(btn_save, container, fields, table_name);
	});

	/*
	* Add coins by common add functionality
	*/

	$("button.btn-add-coins").click(function(){
		var btn_save = $(this);
		var container = "div#addCoins";
		var table_name ="coins";
		//var url = btn_save.attr('data-url');

		var fields = {
			'coins_amount' : 'input',		
			'price' : 'input',		
			'service1' : 'input',		
			'coin_price1' : 'input',		
			'service2' : 'input',		
			'coin_price2' : 'input',		
		}

		common_add_ajax_request(btn_save, container, fields, table_name);
	});

	/*
	* Update category by common update functionality
	*/

	//$("a.cat-edit").click

	/*
	* Update Coins by common update functionality
	*/

	$("button.btn-edit-coins").click(function(){
		var btn_save = $(this);
		var container = "div.editCoins";
		var table_name ="coins";
		//var url = btn_save.attr('data-url');

		var fields = {
			'id' : 'input',
			'coins_amount' : 'input',		
			'price' : 'input',		
			'service1' : 'input',		
			'coin_price1' : 'input',		
			'service2' : 'input',		
			'coin_price2' : 'input',		
		}

		common_update_ajax_request(btn_save, container, fields, table_name);
	});

	/*
	* Update Sub Category by common update functionality
	*/

	$("body").on("click", "button.btn_update_sub_cat", function(){
		var btn_save = $(this);
		var container = "div#editSubcategoryPopup";
		var table_name ="category";
		//var url = btn_save.attr('data-url');

		var fields = {
			'id' : 'input',
			'parent_id' : 'select',		
			'name' : 'input'		
		}

		common_update_ajax_request(btn_save, container, fields, table_name);
	});


	function common_update_ajax_request(btn_save, 
		container, fields, table_name){
console.log(fields)
	var form_container = btn_save.closest(container);
	
	var url = site_url+"admin/CommonController/commonUpdate";

	var data = {};


	for(var prop in fields){
		var value = form_container.find(fields[prop]+"#"+prop).val();
		data[prop] = value;
	}

	data['table_name'] = table_name;

	console.log(data);
	
	$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
	}).done(function(data){
		var obj = JSON.parse(data);

		if(obj.status){
			alert(obj.msg);
			location.reload();
		}
	});
	

}



	function common_add_ajax_request(btn_save, container, fields, table_name){

	var form_container = btn_save.closest(container);
	
	var url = site_url+"admin/CommonController/commonadd";

	var data = {};


	for(var prop in fields){
		var value = form_container.find(fields[prop]+"#"+prop).val();
		data[prop] = value;
	}

	data['table_name'] = table_name;

	console.log(data);
	
	$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
	}).done(function(data){
		var obj = JSON.parse(data);

		if(obj.status){
			alert(obj.msg);
			location.reload();
		}
	});
	

}



	/*
	* Deleted Language entry
	*/

	$("body").on("click", "a.each_language_delete", function(){
		$("div#delete_language_container").html('');
		var btn_action = $(this);
		var url = btn_action.closest("table").attr('data-delete-lang-url');

		var id = btn_action.attr('data-id');
		var table_name = "languages";

		var data = {
			id : id
		};

		$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
		}).done(function(data){
			var obj = JSON.parse(data);


			$("div#delete_language_container").html(obj.html);

				$("div#delete_language_container").find("div#removeLang").modal();
		});
	});

	/*
	* Confirm delete language
	*/
	$("body").on("click", "button.lang_delete_button", function(){
		var btn_action = $(this);

		var url = btn_action.attr('data-url');
		var id = btn_action.attr('data-lang-id');


		var data = {
			id : id
		};

		//console.log(data);

		$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
		}).done(function(data){
			var obj = JSON.parse(data);
			
			if(obj.status){
				location.reload();
			}
		});
	});

	




	/*
	* Retreave data
	*/

	$("a.each_language").click(function(){
		$("div#edit_lang_container").html('');
		var btn_action = $(this);
		var lang_id = btn_action.attr('data-id');
		var lang_name = btn_action.attr('data-lang-name');

		var url = btn_action.closest("table.language_list").attr('data-edit-lang-url');

		var data = {
			id : lang_id,
			lang_name : lang_name
		};

		$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
		}).done(function(data){
			var obj = JSON.parse(data);

				$("div#edit_lang_container").html(obj.text);

				$("div#edit_lang_container").find("div#editLang").modal();
			
		});
				
	});

	/*
	* Edit translation
	*/

	$("body").on("click", "a.btn_translation_edit", function(){
		$("div#edit_translation_container").html('');
		var btn_action = $(this);

		var lang_table_id = btn_action.attr('data-lang-table-id');
		var data_lang_id = btn_action.attr('data-lang-id');
		var data_lang_name = btn_action.attr('data-lang-name');
		var url = btn_action.closest("table").attr('data-action-url');

		var data = {
			lang_table_id : lang_table_id,
			data_lang_id : data_lang_id,
			data_lang_name : data_lang_name
		};


		$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
		}).done(function(data){
			var obj = JSON.parse(data);

			$("div#edit_translation_container").html(obj.text);

			$("div#edit_translation_container").find("div#editTranslation").modal();
		});
	});


	/*
	* Save translation
	*/

	$("body").on("click", "button.btn_save_translation", function(){

		var btn_action = $(this);
		var url = btn_action.closest("div#editTranslation").find("form").attr('data-url');

		var ids = new Array();
		var trans_string = new Array();

		btn_action.closest("div#editTranslation").find("input.translated_id")
			.each(function(){
				ids.push($(this).val());
		});

		btn_action.closest("div#editTranslation").find("input.translated_string")
		.each(function(){
			trans_string.push($(this).val());
		});

		var data = {
			ids : ids,
			trans_string : trans_string
		};

		$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
		}).done(function(data){
			var obj = JSON.parse(data);

			if(obj.status){
				location.reload();
			}else{
				alert("Already Saved");
			}
		});


		console.log(ids)
		console.log(trans_string)


	});



	/*
	*  Add category js
	*/

	/*$("body").on("click", "input.btn_save_category", function(){
		var btn_action = $(this);
		var form_element = btn_action.closest("div#addMaincategory").find("form");
		var url = btn_action.closest("div#addMaincategory").find("form").attr('action');

		var cat_names = new Array();
		//var cat_image = new Array();
		var cat_image = new FormData(form_element);

		btn_action.closest("div#addMaincategory").find("input.input_cat_name").each(function(){
			cat_names.push($(this).val());
		});

		//var file_data = btn_action.closest("div#addMaincategory").find("input.input_cat_image").prop('files')[0]; 

		var form_data = {
			cat_names : cat_names,
			file_data : file_data
		};
console.log("cat_names");		
console.log(cat_names);
		//form_data.append('cat_names', cat_names);
		//form_data.append('file', file_data);
console.log(form_data);
		$.ajax({
			url : url,
			method : "POST",
			datatype : 'JSON',

			data : form_data
		}).done(function(data){
			var obj = JSON.parse(data);

			if(!obj.status){
				alert(obj.msg);
			}else{
				location.reload();
			}
		});

	});*/

	/*
	* Edit category js 
	*/

	/*$("body").on("click", "input.btn_update_category", function(){
		var btn_action = $(this);
		var form_element = btn_action.closest("div#addMaincategory").find("form");
		var url = btn_action.closest("div#addMaincategory").find("form").attr('action');

		var cat_names = $this->input->post('name');
		
		var cat_image = new FormData(form_element);


		//var file_data = btn_action.closest("div#addMaincategory").find("input.input_cat_image").prop('files')[0]; 

		var form_data = {
			cat_names : cat_names,
			file_data : file_data
		};

		$.ajax({
			url : url,
			method : "POST",
			datatype : 'JSON',

			data : form_data
		}).done(function(data){
			var obj = JSON.parse(data);

			if(!obj.status){
				alert(obj.msg);
			}else{
				location.reload();
			}
		});

	});*/


	/*
	* Add sub category
	*/

	$("body").on("click", "button.btn_add_sub_cat", function(){
		var btn_action = $(this);
		var url = btn_action.closest("div#addSubcategory").find("form").attr('action');

		var cat_names = new Array();
		var main_cat_id = btn_action.closest("div#addSubcategory").find("select.parent").val();
		
		if(main_cat_id == 0){
			alert('Please select main category first.');
			return;
		}
		btn_action.closest("div#addSubcategory").find("input.input_subcat_name").each(function(){
			cat_names.push($(this).val());
		});

		var data = {
			main_cat_id : main_cat_id,
			cat_names : cat_names
		};

		$.ajax({
			url : url,
			method : "POST",
			datatype : 'JSON',
			data : data
		}).done(function(data){
			var obj = JSON.parse(data);

			if(!obj.status){
				alert(obj.msg);
			}else{
				location.reload();
			}
		});
	});

	/*
	* Show pop up for edit subCat
	*/
	$("body").on("click", "a.editSubCat", function(){
		var btn_action = $(this);
		var id = btn_action.attr('data-id');
		var main_cat_id = btn_action.attr('data-parent-cat-id');
		var sub_cat_name = btn_action.closest("tr").find('td.sub_cat_name').text();
		var url = btn_action.attr('data-url');

		var data = {
			id : id,
			main_cat_id : main_cat_id,
			sub_cat_name : sub_cat_name
		};

		console.log(data)

		$.ajax({
			url : url,
			method : "POST",
			datatype : 'JSON',
			data : data
		}).done(function(data){
			var obj = JSON.parse(data);
			$("div#edit_sub_category_container").html(obj.html);
			$("div#edit_sub_category_container").find("div#editSubcategoryPopup").modal();
		});
	});
	


	/*
	* Add sub category from pop up list
	*/

	$("body").on("click", "button.btn_add_sub_cat_from_popup", function(){
		var btn_action = $(this);
		var url = btn_action.closest("div#addSubcategoryPopup").find("form").attr('action');

		var cat_names = new Array();
		var main_cat_id = btn_action.closest("div#addSubcategoryPopup").find("select.parent").val();
		
		if(main_cat_id == 0){
			alert('Please select main category first.');
			return;
		}
		btn_action.closest("div#addSubcategoryPopup").find("input.input_subcat_name").each(function(){
			cat_names.push($(this).val());
		});

		var data = {
			main_cat_id : main_cat_id,
			cat_names : cat_names
		};

		$.ajax({
			url : url,
			method : "POST",
			datatype : 'JSON',
			data : data
		}).done(function(data){
			var obj = JSON.parse(data);

			if(!obj.status){
				alert(obj.msg);
			}else{
				location.reload();
			}
		});
	});


	/*
	* Add keywords
	*/ 

	$("body").on("click", "button.btn_save_keywords", function(){
		var btn_action = $(this);
		var url = btn_action.closest("div#addKeyword").find("form").attr('action');

		var keywords_name = new Array();
		var cat_id = btn_action.closest("div#addKeyword").find("select.category_id").val();
		var main_cat_id = btn_action.closest("div#addKeyword").
							find("select.category_id option:selected").attr('data-main-cat-id');
		
		if(cat_id == 0){
			alert('Please select main category first.');
			return;
		}
		btn_action.closest("div#addKeyword").find("input.input_keyword_name").each(function(){
			keywords_name.push($(this).val());
		});

		var data = {
			cat_id : cat_id,
			main_cat_id : main_cat_id,
			keywords_name : keywords_name
		};

		console.log(data)

		$.ajax({
			url : url,
			method : "POST",
			datatype : 'JSON',
			data : data
		}).done(function(data){
			var obj = JSON.parse(data);

			if(!obj.status){
				alert(obj.msg);
			}else{
				location.reload();
			}
		});
	});

	/*
	* Show subcat
	*/
	$("body").on("click", "a.btn_show_subcat", function(){
			$("div#portal_sub_cat_popup").html('');
		var root_cat_id = $(this).closest("tr.service_listing_tr").attr('data-main-cat-id');
		var url = site_url+"admin/Portal_Settings/showSubCatPopUp";

		var data = {
			root_cat_id : root_cat_id
		};

		$.ajax({
			url : url,
			method : "POST",
			datatype : 'JSON',
			data : data
		}).done(function(data){
			var obj = JSON.parse(data);
			$("div#portal_sub_cat_popup").html(obj.html);
			$("div#portal_sub_cat_popup").find("div#subcategories").modal();
		});

	});

	/*
	* Show addsubcat popup
	*/
	$("body").on("click", "button.addSubcategoryPopup", function(){
			$("div#portal_add_sub_cat_from_popup").html('');
		var root_cat_id = $(this).attr("data-parent-cat-id");

		var url = site_url+"admin/Portal_Settings/showAddSubCatPopup";

		var data = {
			root_cat_id : root_cat_id
		};

		$.ajax({
			url : url,
			method : "POST",
			datatype : 'JSON',
			data : data
		}).done(function(data){
			var obj = JSON.parse(data);
			$("div#portal_add_sub_cat_from_popup").html(obj.html);
			$("div#portal_add_sub_cat_from_popup").find("div#addSubcategoryPopup").modal();
		});

	});


	/*
	* Show keyword popup
	*/
	$("body").on("click", "a.btn_show_keyword", function(){
			$("div#portal_keyword_listing").html('');
		var root_cat_id = $(this).closest("tr.service_listing_tr").attr('data-main-cat-id');
		var url = site_url+"admin/Portal_Settings/showKeywordPopUp";

		var data = {
			root_cat_id : root_cat_id
		};

		$.ajax({
			url : url,
			method : "POST",
			datatype : 'JSON',
			data : data
		}).done(function(data){
			var obj = JSON.parse(data);
			$("div#portal_keyword_listing").html(obj.html);
			$("div#portal_keyword_listing").find("div#keywords").modal();
		});

	});


	/*
	* Delete Category
	*/

	$("body").on("click", "a.btn_cat_delete", function(){
		var btn_action = $(this);

		var table_name = "category";
		var id = btn_action.attr('data-id');

		common_delete_function(table_name, id);
	});

	/*
	* Delete sub category
	*/
	$("body").on("click", "a.btn_delete_sub_cat", function(){
		var btn_action = $(this);

		var table_name = "category";
		var id = btn_action.attr('data-id');

		common_delete_function(table_name, id);
	});

	/*
	* Delete kewords
	*/

	$("body").on("click", "a.btn_delete_keywords", function(){
		var btn_action = $(this);

		var table_name = "keywords";
		var id = btn_action.attr('data-id');

		common_delete_function(table_name, id);
	});


	/*
	* Delete Coins
	*/

	$("body").on("click", "a.delete_coins", function(){
		var btn_action = $(this);

		var table_name = "coins";
		var id = btn_action.attr('data-id');

		common_delete_function(table_name, id);
	});




	/*
	* Confirm delete language
	*/
	$("body").on("click", "button.common_delete_button", function(){
		var btn_action = $(this);

		var url = site_url+"admin/CommonController/commonDeleteConfirm";
		var id = btn_action.attr('data-id');
		var table_name = btn_action.attr('data-table');



		var data = {
			id : id,
			table_name : table_name
		};

		//console.log(data);

		$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
		}).done(function(data){
			var obj = JSON.parse(data);
			
			if(obj.status){
				location.reload();
			}
		});
	});


	//edit company type
	$('a.edit-company-type').click(function(){
    	var company_type = $(this).closest('tr').find('td.company_type').text();
    	var id = $(this).attr('data-id');

    	$(this).closest("body").find("div#editCompany").find("input#company_type").val(company_type);
    	$(this).closest("body").find("div#editCompany").find("input#company_type_id").val(id);
    	$("div#editCompany").modal();
    });


    $("button.btn-edit-company").click(function(){ // edit company type action

    	var data = {
    		id : $(this).closest("div#editCompany").find("input#company_type_id").val(),
    		company_type : $(this).closest("div#editCompany").find("input#company_type").val()
    	};

    	$.ajax({
		url : site_url+"admin/Portal_Settings/edit_company_type",
		method : "POST",
		datatype : 'JSON',
		data : data
		}).done(function(data){
			var obj = JSON.parse(data);
			
			if(obj.status){
				location.reload();
			}
		});
    });


}); // end document.ready


function get_all_data_from_table(table_name, url){
	
	var data = {
		table_name : table_name
	};

	$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
	}).done(function(data){
		var obj = JSON.parse(data);

		if(obj.status){
			alert(obj.msg);
			location.reload();
		}
	});
}

function add_language(btn_save, container, fields, url){

	var form_container = btn_save.closest(container);
	
	console.log(url);

	var data = {};

	for(var prop in fields){
		var value = form_container.find(fields[prop]+"#"+prop).val();
		data[prop] = value;
	}
	
	$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
	}).done(function(data){
		var obj = JSON.parse(data);

		if(obj.status){
			alert(obj.msg);
			location.reload();
		}
	});
	

}

function common_delete_function(table_name, id){
	$("div#common_popup_container").html('');
		var btn_action = $(this);
		var url = site_url+"admin/CommonController/commonDelete";


		var data = {
			id : id,
			table_name : table_name
		};

		$.ajax({
		url : url,
		method : "POST",
		datatype : 'JSON',
		data : data
		}).done(function(data){
			var obj = JSON.parse(data);


			$("div#common_popup_container").html(obj.html);
			$("div#common_popup_container").find("div#common_remove_confirm").modal();
		});
}