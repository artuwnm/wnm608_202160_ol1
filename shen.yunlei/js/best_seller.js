
const showResults = d => {
	$(".best-seller").html(
		d.error?d.error:
		d.result.length?bestItemTemplate(d.result):
		'Not Results');
}

query({type:'products_3'}).then(showResults);
