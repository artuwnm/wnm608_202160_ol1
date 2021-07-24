<?php 



function productListTemplate($r,$o) {

return $r.<<<HTML

<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">		
	<figure class="figure product">
		<img src="$o->thumbnail" alt="plant">
							
		<figcaption>
			<div>$o->product_name</div>
			<div><strong>&dollar;$o->price</strong></div>
		</figcaption>
	</figure>
</a>
HTML;
}


function cartListTemplate($r,$o) {
return $r.<<<HTML
	
<div class="display-flex">
	<div class="flex-none images-thumbs-small">
		<img src="$o->thumbnail" alt="plant">
	</div>

	<div class="flex-stretch">
		<strong>$o->product_name</strong>
		<a href="#" class="cart-delete">Delete</a>
	</div>

	<div class="flex-none">
		<strong>&dollar;$o->price</strong>
	</div>
</div>


HTML;
}


?>


