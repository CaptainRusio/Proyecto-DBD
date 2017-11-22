$(function(){
	$('#select-region').on('change', onSelectProvinces());

});

function onSelectProvinces(){
	var region_id = $(this).val();

	alert(region_id);

	$.get('/api/region/'+region_id+'/provinces',function(data){

		var select_province = '<option value = ""></option>';
		for(var i = 0; i< data.length ; i ++){
			select_province = '<option value = "'+data[i].id+'">'+data[i].name+ '</option>';
		}

		$('#select-province').html(select_province);
	});

}