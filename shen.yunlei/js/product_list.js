
const showResults = d => {
	$(".product").html(
		d.error?d.error:
		d.result.length?listItemTemplate(d.result):
		'Not Results');
}

query({type:'products_all'}).then(showResults);

$(()=>{

	$("#product_search").on("submit",function(e){
		e.preventDefault();
		let search = $(this).find("input").val();
		query({'type':'product_search',search:search}).then(showResults);
	})

	$("[data-filter]").on("click",function(e){
		let column = $(this).data("filter");
		let value = $(this).data("value");
		query(
			value==""?{type:'products_all'}:
			{type:'product_filter',column:column,value:value}
			).then(showResults);
	})

	$(".js-sort").on("change",function (e){
		(
			this.value==1 ? query({type:'product_sort',column:'date_create',dir:'DESC'}):
			this.value==2 ? query({type:'product_sort',column:'date_create',dir:'ASC'}):
			this.value==3 ? query({type:'product_sort',column:'price',dir:'ASC'}):
			this.value==4 ? query({type:'product_sort',column:'price',dir:'DESC'}):
			query({type:'products_all'})
		).then(showResults);
	})
})