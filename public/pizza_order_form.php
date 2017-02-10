<? php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pizza Order Form</title>
	</head>
	<body>
	<!--Personal Information-->
		<h2>Pizza Order Form</h2>
		<h3><strong>Personal Information:</h3></strong>
		<form action="pizza_order.php" method="POST">
				<h4>Name- </h4>
			<p>
				<label for="first_name">First Name</label>
				<input type="text" name="first_name" id="first_name" placeholder="Enter First Name Here" required>
			</p>
			<p>
				<label for="last_name">Last Name</label>
				<input type="text" name="last_name" id="last_name" placeholder="Enter Last Name Here" required>
			</p>
				<h4>Address- </h4>
			<p>
				<label for="address">Address</label>
				<input type="text" address="address" id="address" placeholder="Enter Address Here" required>
			</p>
			<p>
				<h4>Delivery or Carryout?</h4>
			<label>
				<input type="radio" name="q1" value="delivery">Delivery
			</label>
			<label>
				<input type="radio" name="q1" value="carryout" checked>Carryout
			</label>
			</p>
	<!--Build Pizza-->
			<p>
		<h3><strong>Build Your Pizza:</h3></strong>
				<h4>Pizza Size- </h4>
				<label>
					<input type="radio" name="q2" value="small">Small 10"
				</label>
				<label>
					<input type="radio" name="q2" value="medium">Medium 12"
				</label>
				<label>
					<input type="radio" name="q2" value="large" checked>Large 14"
				</label>
				<label>
					<input type="radio" name="q2" value="extra_large">Extra Large 16"
				</label>
			</p>
			<p>
				<h4>Crust- </h4>
				<label>
					<input type="radio" name="q3" id="hand_tossed" checked>Hand Tossed
				</label>
				<label>
					<input type="radio" name="q3" id="deep_dish">Deep Dish
				</label>
				<label>
					<input type="radio" name="q3" id="pan">Pan
				</label>
				<label>
					<input type="radio" name="q3" id="cheese_stuffed">Cheese Stuffed
				</label>
				<label>
					<input type="radio" name="q3" id="thin">Thin
				</label>
				<label>
					<input type="radio" name="q3" id="gluten_free">Gluten Free
				</label>
			</p>
			<p>
				<h4>Cheese-</h4>
				<label>
					<input type="radio" name="q4" id="extra">Extra
				</label>
				<label>
					<input type="radio" name="q4" id="regular" checked>Regular
				</label>
				<label>
					<input type="radio" name="q4" id="easy">Easy
				</label>
				<label>
					<input type="radio" name="q4" id="none">None
				</label>
				<label>
					<input type="radio" name="q4" id="dairy_free">Dairy Free
				</label>
			</p>
			<p>
				<h4>Toppings-</h4> 
				<h5>Meat:</h5>
				<label>
					<input type="checkbox" id="mt1" name="os[]" value="pepperoni" checked>Pepperoni
				</label>
				<label>
					<input type="checkbox" id="mt2" name="os[]" value="sausage">Sausage
				</label>
				<label>
					<input type="checkbox" id="mt3" name="os[]" value="salami">Salami
				</label>
				<label>
					<input type="checkbox" id="mt4" name="os[]" value="meatballs">Meatballs
				</label>
				<label>
					<input type="checkbox" id="mt5" name="os[]" value="ham">Ham
				</label>
				<label>
					<input type="checkbox" id="mt6" name="os[]" value="bacon">Bacon
				</label>
				<label>
					<input type="checkbox" id="mt7" name="os[]" value="chicken">Chicken
				</label>
				<label>
					<input type="checkbox" id="mt8" name="os[]" value="beef">Beef
				</label>
				<label>
					<input type="checkbox" id="mt9" name="os[]" value="pork">Pork
				</label>
				<label>
					<input type="checkbox" id="mt10" name="os[]" value="anchovies">Anchovies
				</label>
				<label>
					<input type="checkbox" id="mt11" name="os[]" value="steak">Steak
				</label>
				
				<h5>Non Meat:</h5>
				<label>
					<input type="checkbox" id="nm1" name="os[]" value="mushroom">Mushroom
				</label>
				<label>
					<input type="checkbox" id="nm2" name="os[]" value="spinach">Spinach
				</label>
				<label>
					<input type="checkbox" id="nm3" name="os[]" value="asparagus">Asparagus
				</label>
				<label>
					<input type="checkbox" id="nm4" name="os[]" value="artichoke_hearts">Artichoke Hearts
				</label>
				<label>
					<input type="checkbox" id="nm5" name="os[]" value="cherry_peppers">Cherry Peppers
				</label>
				<label>
					<input type="checkbox" id="nm6" name="os[]" value="red_onion">Red Onion
				</label>
				<label>
					<input type="checkbox" id="nm7" name="os[]" value="black_olives">Black Olives
				</label>
				<label>
					<input type="checkbox" id="nm8" name="os[]" value="green_bell_peppers">Green Bell Peppers
				</label>
				<br>
				<label>
					<input type="checkbox" id="nm9" name="os[]" value="banana_peppers">Banana Peppers
				</label>
				<label>
					<input type="checkbox" id="nm10" name="os[]" value="pineapple">Pineapple
				</label>
				<label>
					<input type="checkbox" id="nm11" name="os[]" value="jalapenos">Jalapenos
				</label>
				<label>
					<input type="checkbox" id="nm12" name="os[]" value="tomatoes">Tomatoes
				</label>
				<label>
					<input type="checkbox" id="nm13" name="os[]" value="green_chile">Green Chile
				</label>
				<label>
					<input type="checkbox" id="nm14" name="os[]" value="cheddar">Cheddar
				</label>
				<label>
					<input type="checkbox" id="nm15" name="os[]" value="provolone">Provolone
				</label>
				<label>
					<input type="checkbox" id="nm16" name="os[]" value="feta">Feta
				</label>
				<label>
					<input type="checkbox" id="nm17" name="os[]" value="asiago">Asiago
				</label>
				<label>
					<input type="checkbox" id="nm18" name="os[]" value="hot_sauce">Hot Sauce
				</label>
			</p>
	<!--Personal Information-->
			<p>
		<h3><strong>Payment Method:</h3></strong>
				<label>
					<input type="radio" name="q5" id="cash" checked>Cash
				</label>
				<label>
					<input type="radio" name="q5" id="credit_debit_card">Credit/Debit Card
				</label>
			</p>
			<p>
				<button type="submit">Order Now!</button>
			</p>
		</form>
	</body>
</html>