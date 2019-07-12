<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shopping Cart</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">MyShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{baseurl}}/product">Products</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="my-3">
    <header>
      <h1 class="text-center">Cart</h1>
    </header>
    <div class="container my-4">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-1">
              <img
                src="https://rukminim1.flixcart.com/image/416/416/jnj7iq80/mobile/u/b/g/apple-iphone-xr-mryj2hn-a-original-imafa6zkm7qhv2zd.jpeg?q=70"
                class="card-img-top img-fluid mx-auto" alt="Apple iPhone XR (Black, 128GB)">
            </div>
            <div class="col-md-11">
              <div class="card border-0">
                <h5 class="card-title">{{item.name}}</h5>
                <h6 class="card-subtitle text-muted" id="item-price" data-price="{{item.price}}">Price: ₹{{item.price}}</h6>
                <p>Quantity: 1</p>
              </div>
            </div>
            <div>
              <h5>Available Coupons</h5>
              {% for coupon in coupons %}
              <label>
                <input type="radio" class="coupon-code" name="coupon" value="{{coupon['amount']}}"> {{coupon['name']}}
              </label>
              <br>
              {% endfor%}
              <button class="btn btn-warning btn-sm text-uppercase" id="remove-coupon-button">Remove</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h3>Price Details</h3>
          <h5>Price (1 Item): ₹{{item.price}}</h5>
          <h5>Discount: ₹<span id="cart-discount">0</span></h5>
          <h5 id="delivery-fee" data-delivery="100">Delivery: ₹100</h5>
          <hr>
          <h5>Total Payble: ₹<span id="total-price"></span></h5>
          <form class="" action="{{baseurl}}/product/order" method="post">
            <input type="hidden" name="total" value="">
            <input type="hidden" name="name" value="{{item.name}}">
           <input type="submit" name="" value="Place Order" class="btn btn-primary text-uppercase">
          </form>
          <!-- <a href="{{baseurl}}/product/order" class="btn btn-primary text-uppercase">Place Order</a> -->
        </div>
      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const itemPriceEl = document.getElementById('item-price');
      const deliveryEl = document.getElementById('delivery-fee');
      const discountEl = document.getElementById('cart-discount');
      const totalPriceEl = document.getElementById('total-price');
      const totalPriceFormEl = document.querySelector('input[name=total]');

      const itemPrice = +itemPriceEl.dataset.price;
      const deliveryFee = +deliveryEl.dataset.delivery;

      let discount = 0;
      discountEl.innerText = discount;

      let totalPrice = itemPrice + deliveryFee;
      totalPriceEl.innerText = totalPrice;
      totalPriceFormEl.value = totalPrice;

      const couponCodeRadios = document.querySelectorAll(
        'input[type=radio][name=coupon]'
      );
      couponCodeRadios.forEach(radio => {
        radio.addEventListener('click', event => {
          discount = +event.target.value;
          totalPrice = itemPrice + deliveryFee - discount;

          discountEl.innerText = discount;
          totalPriceEl.innerText = totalPrice;
          totalPriceFormEl.value = totalPrice;
        });
      });

      const removeCouponBtn = document.getElementById('remove-coupon-button');
      removeCouponBtn.addEventListener('click', event => {
        couponCodeRadios.forEach(radio => (radio.checked = false));
        discount = 0;
        totalPrice = itemPrice + deliveryFee;

        discountEl.innerText = discount;
        totalPriceEl.innerText = totalPrice;
        totalPriceFormEl.value = totalPrice;
      });
    });
  </script>
</body>

</html>
