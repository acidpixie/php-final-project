<?php

	function total_price($cart){
		$totalPrice = 0.0;
		if(is_array($cart)){
		  	foreach($cart as $id => $qty){
		  		$albumprice = getPrice($id);
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
			foreach($cart as $id => $qty){
				$items += $qty;
			}
		}
		return $items;
	}