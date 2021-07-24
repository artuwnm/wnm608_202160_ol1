<?php 



function bookListTemplate($r,$o){

	return $r.<<<HTML

	<a class="col-xs-12 col-md-4" href="book_detail.php?id=$o->id">
		<figure class="figure product">
			<img src="$o->thumbnail" alt="">
			<figcaption>
				<div>$o->title</div>
				<div>&dollar;$o->price</div>
			</figcaption>
		</figure>
	</a>


	HTML;
}

function cartListTemplate($r,$o){
	return $r.<<<HTML
	<div class="display-flex">

	<div class="flex-none image-thumbs">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->title</strong>
		<div>Delete</div>
	</div>
	<div class="flex-none">
		&dollar;$o->price
	</div>

	</div>


	HTML;
}


