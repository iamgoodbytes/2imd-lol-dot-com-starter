<?php 
  
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title></title>
  </head>
  <body>
    <nav>
      <ul>
        <li>
          <a href="index.php"><img src="lol.png" /></a>
        </li>
        <li>
          <a href="cart.php"><svg version="1.1" viewBox="0 0 24 24" aria-hidden="true" class="icon__cart" data-test="icon-basket" focusable="false"><path d="M23.9 6.5c0-.8-.7-1.5-1.5-1.5H5.8l-1-4H1c-.6 0-1 .4-1 1s.4 1 1 1h2.2L4 6.2l2.9 11.6c-.5.6-.9 1.4-.9 2.2 0 1.7 1.3 3 3 3s3-1.3 3-3c0-.4-.1-.7-.2-1h4.4c-.1.3-.2.6-.2 1 0 1.7 1.3 3 3 3s3-1.3 3-3c0-.9-.4-1.6-.9-2.2l2.7-11c0-.1.1-.2.1-.3zM10 20c0 .6-.4 1-1 1s-1-.4-1-1 .4-1 1-1 1 .4 1 1zm9 1c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm.2-4H8.8L6.3 7h15.4l-2.5 10z"></path></svg></a>
        </li>
      </ul>
    </nav>

    <section class="products">

        <div class="product">
            <form action="" method="post">
                <img src="https://picsum.photos/200/200?grayscale" alt="">
                <h3 class="product__title">Product 1</h3>
                <h4 class="product__price">21,<sup>59</sup></h4>
                <input type="hidden" value="1" name="productid">
                <input type="submit" value="Select" class="product__button">
            </form>
        </div>

        
      </section>
  </body>
</html>
