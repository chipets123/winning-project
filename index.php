<?php include 'layouts/header.html'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speedy Bites</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!--slider code-->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/premium-photo/burgers-cutboard-fries_23-2148273014.jpg?uid=R186610582&ga=GA1.1.112714775.1738649949&semt=ais_authors_boost" class="d-block w-100" alt="Savoury Burgers">
    </div>
    <div class="carousel-item">
      <img src="https://image.shutterstock.com/image-photo/slice-hot-pizza-large-cheese-260nw-643604302.jpg" class="d-block w-100" alt="Delicious Pizza">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-photo/view-graphic-3d-fast-food_23-2150849141.jpg?uid=R186610582&ga=GA1.1.112714775.1738649949&semt=ais_authors_boost" class="d-block w-100" alt="Tasty Fries">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Bootstrap JS Bundle (optional for carousel functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


<?php include 'layouts/footer.html'; ?>