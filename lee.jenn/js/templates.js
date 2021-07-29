

const listItemTemplate = templater(o=>`
<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">		
	<figure class="figure product">
		<img src="${o.thumbnail}" alt="plant">
							
		<figcaption>
			<div>${o.product_name}</div>
			<div><strong>&dollar;${o.price.toFixed(2)}</strong></div>
		</figcaption>
	</figure>
</a>
`);