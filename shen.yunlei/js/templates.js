

const listItemTemplate = templater(o=>`

	<a class="col-xs-12 col-md-4" href="book_detail.php?id=${o.id}">
		<figure class="figure product">
			<img src="${o.thumbnail}" alt="">
			<figcaption>
				<div>${o.title}</div>
				<div>&dollar;${o.price}</div>
			</figcaption>
		</figure>
	</a>

	`);