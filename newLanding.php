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
  
  /* Add your custom styles here */
</style>
</head>
<body>
    
<?php 
include 'connect.php'; // Make sure this path is correct
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DeFacto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">KADIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ERKEK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ÇOCUK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">BEBEK</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
