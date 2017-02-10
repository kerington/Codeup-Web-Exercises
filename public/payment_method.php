 <? php
    var_dump($_GET);
    var_dump($_POST);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Payment Method
        </title>
        <link rel="stylesheet" href="/css/pizza_order_form.css">
    </head>
    <body>
    <section>
        <h3><strong>Payment Method:</h3></strong>
                <label>
                    <input type="radio" name="q5" id="cash" checked>Cash
                </label>
                <label>
                    <input type="radio" name="q5" id="credit_debit_card">Credit/Debit Card
                </label>
            </section>
            <section>
                <button type="submit">Order Now!</button>
            </section>
    </body>
</html>





