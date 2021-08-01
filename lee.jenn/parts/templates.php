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

function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>"; 
	}
	$output .= "</select>";
	return $output;
}


function cartListTemplate($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount($o->amount, 5);

  
	return $r.<<<HTML

<div class="display-flex">
	<div class="flex-none images-thumbs-small">
		<img src="$o->thumbnail" alt="plant">
	</div>

	<div class="flex-stretch">
		<strong>$o->product_name</strong>
		<form action="cart_actions.php?action=delete-cart-item" method="post">
			<input type="hidden" name="id" value="$o->id">
			<input type="submit" class="form-button-delete inline" value="Delete" style="font-size:0.8em">
		</form>
	</div>

	<div class="flex-none">
		<strong>&dollar;$totalfixed</strong>
			<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
				<input type="hidden" name="id" value="$o->id">
				<div class="form-select cart-select-btn">	
					$selectamount
				</div>
			</form>
	</div>
</div>


HTML;
}


// function emptyCart ($r,$o) {
// 	return $r.<<<HTML
// 		<p>Your Cart is Empty</p><br>
// 		<a href="../index.php"
// 	HTML;
// }



function cartTotals() {
	$cart = getCartItems();
	$cartprice = array_reduce($cart,function($r,$o){ return $r + $o->total;},0);
	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML
	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Sub Total</strong></div>
		<div class="flex-none">&dollar;$pricefixed</div>
	</div>
	<hr size="1px" width="100%" color="#f1f1f1">

	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Taxes</strong></div>
		<div class="flex-none">&dollar;$taxfixed</div>
	</div>
	<hr size="1px" width="100%" color="#f1f1f1">

	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Total</strong></div>
		<div class="flex-none">&dollar;$taxedfixed</div>
	</div>
	<hr size="1px" width="100%" color="#f1f1f1">

	<div class="card-section display-flex checkout-box">
		<a href="payment.php" class="button-style btn-primary btn-checkout">Buy Now</a>
	</div>
HTML;
}




function recommendedProducts($a) {
$products = array_reduce($a,'productListTemplate');
echo <<<HTML
<div class="grid gap productlist">$products</div>
HTML;
}



function recommendedCategory($cat,$limit=3) {
$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' ORDER BY `date_create` DESC LIMIT $limit");
recommendedProducts($result);
}


function recommendedSimilar($cat,$id=0,$limit=3) {
$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' AND `id`<>$id ORDER BY rand() LIMIT $limit");
recommendedProducts($result);
}



?>


