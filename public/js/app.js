function abrirProductos(){

	$.ajax(
	{
		url:  '/productos' ,
		type: 'GET',
		success:  function(data){
			$('#page-wrapper').html(data);
		}
	});

}