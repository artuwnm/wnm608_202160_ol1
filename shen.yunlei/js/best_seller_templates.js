const bestItemTemplate = templater(o=>`

	<a class="col-xs-12 col-md-4" href="book_detail.php?id=${o.id}">
		<figure class="figure product-overlay">
			<img src="${o.thumbnail}" alt="">
			<figcaption>
				<div></div>
				<div class="caption-body">
					<div>${o.title}</div>
					<div>&dollar;${o.price}</div>
				</div>
			</figcaption>
		</figure>
	</a>

	`);