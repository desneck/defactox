<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page Replica with Carousel</title>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  .carousel-item {
    height: 80vh;
    background-size: cover;
    background-position: center center;
  }

  .navbar {
    background: #fff;
  }

  /* Custom styles */
  .carousel {
    margin-bottom: 30px; /* Distance between carousel and products */
  }

  .product-card {
    margin-bottom: 15px; /* Distance between products */
  }
  
  .product-container {
    padding-top: 20px; /* Additional top space for products */
  }
  
</style>
</head>
<body>
    
<?php 

include 'navbar.php'; // Make sure this path is correct
?>




<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('images/hero.webp');">
      <!-- Optional content here -->
    </div>
    <div class="carousel-item" style="background-image: url('images/hero2.webp');">
      <!-- Optional content here -->
    </div>
    <div class="carousel-item" style="background-image: url('images/hero3.webp');">
      <!-- Optional content here -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div>
  <a href="tum_urunler.php">Tumu</a>
</div>
<div class="container product-container">
  <div class="row">
    <?php
    $result = mysqli_query($con, "SELECT * FROM defacto");
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='col-md-4'>";
            echo "<div class='card product-card'>";
            echo "<img src='" . $row["resim_urls"] . "' class='card-img-top' alt='" . $row["model"] . "'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row["model"] . "</h5>";
            echo "<p class='card-text'>" . $row["beden"] . " - " . $row["renk"] . "</p>";
            echo "<p class='card-text'>Price: " . $row["fiyat"] . "</p>";
            echo "<p class='card-text'>Rating: " . $row["yildiz"] . "</p>";
            echo "<a href='detay.php?id=" . $row["id"] . "' class='btn btn-primary'>Detay</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($con);
    ?>
  </div>
</div>


<!-- Bootstrap 5 JS bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
