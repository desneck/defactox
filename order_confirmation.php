<?php
session_start();

// Include the database connection file
include 'connect.php'; // Ensure this path is correct

// Check if the product ID is set in the URL and is numeric
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productId = $_GET['id'];

    // Prepare a statement to prevent SQL injection
    $stmt = mysqli_prepare($con, "DELETE FROM defacto WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $productId);
    mysqli_stmt_execute($stmt);
    $affected_rows = mysqli_stmt_affected_rows($stmt);
    mysqli_stmt_close($stmt);

    if ($affected_rows > 0) {
        $message = "Ürün başarıyla silindi.";
    } else {
        $message = "Silinecek ürün bulunamadı veya zaten silinmiş!";
    }
} else {
    $message = "Geçersiz ürün ID'si!";
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipariş Onayı</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 2rem;
            background: #f7f7f7;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        .alert {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
<?php 
session_start();
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
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // Display Logout link if logged in
            echo '<li class="nav-item"><a class="nav-link" href="logout.php">Çıkış</a></li>';
        } else {
            // Display Login and Register links if not logged in
            echo '<li class="nav-item"><a class="nav-link" href="login.php">Giris Yap</a></li>';
            echo '<li class="nav-item"><a class="nav-link" href="register.php">Kayit Ol</a></li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <h1>Sipariş Onayı</h1>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
        <a href="index.php" class="btn btn-primary">Ana Sayfa'ya Dön</a>
    </div>
</body>
</html>
