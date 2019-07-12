<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shopping Cart</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style media="screen">
.product-card:hover {
  box-shadow: 5px 5px 10px 1px #cccccc;
}

.product-image {
  width: fit-content;
  height: 360px;
}

</style>
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
            <li class="nav-item active">
              <a class="nav-link" href="<?= $baseurl ?>/product">Products <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="my-3">
    <header>
      <h1 class="text-center">Products</h1>
    </header>
    <div class="container my-4">
      <div class="row">
        <?php foreach ($items as $item) { ?>
        <div class="col-md-4">
          <div class="product-card card border-0">
            <img
              src="<?= $item['image'] ?>"
              class="card-img-top img-fluid mx-auto p-3 product-image" alt="<?= $item['image'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $item['name'] ?></h5>
              <h5 class="card-subtitle text-muted">Price: ₹<?= $item['price'] ?></h5>
              <p class="card-text text-justify"><?= $item['description'] ?></p>
              <a href="<?= $baseurl ?>/product/cart/<?= $item['id'] ?>" class="btn btn-primary text-uppercase">Add To Cart</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </main>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
    integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
    crossorigin="anonymous"></script>
</body>

</html>
