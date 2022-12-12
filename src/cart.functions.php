<?php

	function total_price($cart){
		$totalPrice = 0.0;
		if(is_array($cart)){
		  	foreach($cart as $product_id => $qty){
		  		$albumprice = getPrice($product_id);
		  		if($albumprice){
		  			$totalPrice += $albumprice * $qty;
		  		}
		  	}
		}
		return $totalPrice;
	}

	function total_items($cart){
		$items = 0;
		if(is_array($cart)){
			foreach($cart as $product_id => $qty){
				$items += $qty;
			}
		}
		return $items;
	}