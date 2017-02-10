<? php
    var_dump($_GET);
    var_dump($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Build Pizza</title>
        <link rel="stylesheet" href="/css/pizza_order_form.css">
    </head>
    <body>
    <!--Build Pizza-->
            <section>
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
            </section>
            <section>
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
            </section>
            <section>
                <h4>Cheese-</h4>
            <!--SROLL BOX-->
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
            </section>
            <section>
                <h4>Toppings-</h4>
                <h5>Meat:</h5>
                <label>
                 <div class="container">
                    <input type="checkbox" id="os1" name="os[]" value="pepperoni" checked>Pepperoni
                </label>
                <label>
                    <input type="checkbox" id="os2" name="os[]" value="sausage">Sausage
                </label>
                <label>
                    <input type="checkbox" id="os3" name="os[]" value="salami">Salami
                </label>
                <label>
                    <input type="checkbox" id="os4" name="os[]" value="meatballs">Meatballs
                </label>
                <label>
                    <input type="checkbox" id="os5" name="os[]" value="ham">Ham
                </label>
                <label>
                    <input type="checkbox" id="os6" name="os[]" value="bacon">Bacon
                </label>
                <label>
                    <input type="checkbox" id="os7" name="os[]" value="chicken">Chicken
                </label>
                    <br>
                <label>
                    <input type="checkbox" id="os8" name="os[]" value="beef">Beef
                </label>
                <label>
                    <input type="checkbox" id="os9" name="os[]" value="pork">Pork
                </label>
                <label>
                    <input type="checkbox" id="os10" name="os[]" value="anchovies">Anchovies
                </label>
                <label>
                    <input type="checkbox" id="os11" name="os[]" value="steak">Steak
                </label>
                
                <h5>Non Meat:</h5>
                <label>
                    <input type="checkbox" id="os1" name="os[]" value="mushroom">Mushroom
                </label>
                <label>
                    <input type="checkbox" id="os2" name="os[]" value="spinach">Spinach
                </label>
                <label>
                    <input type="checkbox" id="os3" name="os[]" value="asparagus">Asparagus
                </label>
                <label>
                    <input type="checkbox" id="os4" name="os[]" value="artichoke_hearts">Artichoke Hearts
                </label>
                <label>
                    <input type="checkbox" id="os5" name="os[]" value="cherry_peppers">Cherry Peppers
                </label>
                <label>
                    <input type="checkbox" id="os6" name="os[]" value="red_onion">Red Onion
                </label>
                    <br>
                <label>
                    <input type="checkbox" id="os8" name="os[]" value="black_olives">Black Olives
                </label>
                <label>
                    <input type="checkbox" id="os9" name="os[]" value="green_bell_peppers">Green Bell Peppers
                </label>
                <label>
                    <input type="checkbox" id="os10" name="os[]" value="banana_peppers">Banana Peppers
                </label>
                <label>
                    <input type="checkbox" id="os11" name="os[]" value="pineapple">Pineapple
                </label>
                <label>
                    <input type="checkbox" id="os10" name="os[]" value="jalapenos">Jalapenos
                </label>
                    <br>
                <label>
                    <input type="checkbox" id="os11" name="os[]" value="tomatoes">Tomatoes
                </label>
                <label>
                    <input type="checkbox" id="os10" name="os[]" value="green_chile">Green Chile
                </label>
                <label>
                    <input type="checkbox" id="os11" name="os[]" value="cheddar">Cheddar
                </label>
                <label>
                    <input type="checkbox" id="os10" name="os[]" value="provolone">Provolone
                </label>
                <label>
                    <input type="checkbox" id="os11" name="os[]" value="feta">Feta
                </label>
                <label>
                    <input type="checkbox" id="os10" name="os[]" value="asiago">Asiago
                </label>
                <label>
                    <input type="checkbox" id="os11" name="os[]" value="hot_sauce">Hot Sauce
                </label>
                </div>
            </section>
          <!--button link to build your pizza-->
            <section>
                <form method="get" action="/payment_method.php">
                <button type="submit">Continue To Pay!</button>
        </form>
            </section>
           
        </article>
        </form>
    </body>
</html>