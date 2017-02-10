<? php
    var_dump($_GET);
    var_dump($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pizza Order Form</title>
        <link rel="stylesheet" href="/css/pizza_order_form.css">
    </head>
    <body>
    <!--Personal Information-->
        <h2>Pizza Order Form</h2>
        <h3><strong>Personal Information:</h3></strong>
        <form action="pizza_order.php" method="POST">
        <article>
                <h4>Name- </h4>
            <section>
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" placeholder="Enter First Name Here" required>
            </section>
            <section>
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name Here" required>
            </section>
            <section>
                <label for="email_address">Email Address</label>
                <input type="text" name="email_address" id="email_address" placeholder="Enter Email Address Here" required>
            </section>
            <section>
                <label for="password">Password</label>
                <input type="text" name="password" id="password" placeholder="Create A Password" required>
            </section>
            <section>
                <label for="confirm_password">Confirm Password</label>
                <input type="text" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
            </section>
                <h4>Address- </h4>
            <section>
                <label for="line_1">Address Line 1</label>
                <input type="text" address="line_1" id="line_1" placeholder="Enter Address Line 1 Here" required>
            </section>
            <section>
                <label for="line_2">Address Line 2</label>
                <input type="text" address="line_2" id="line_2" placeholder="Enter Address Line 2 Here" required>
            </section>
            <section>
                <label for="CSZ">City/State/Zip</label>
                <input type="text" address="CSZ" id="CSZ" placeholder="Enter City/State/Zip Here" required>
            </section>
            <section>
                <h4>Delivery or Carryout?</h4>
            <label>
                <input type="radio" name="q1" value="delivery">Delivery
            </label>
            <label>
                <input type="radio" name="q1" value="carryout" checked>Carryout
            </label>
            </section>
          </form>
          <!--button link to build your pizza-->
            <section>
                <form method="get" action="/build_pizza.php">
                <button type="submit">Build Your Pizza!</button>
        </form>
            </section>
        </article>
      
    </body>
</html>