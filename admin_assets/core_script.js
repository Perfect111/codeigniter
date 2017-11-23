$("button.store-common").click(function(){
	var btn_save = $(this);
	var container = btn_save.attr('data-container');
	var table_name = btn_save.attr('data-table');
	

	var fields = {
		'tab_name' : 'input'	
	}

	common_add_ajax_request(btn_save, container, fields, table_name);
});


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