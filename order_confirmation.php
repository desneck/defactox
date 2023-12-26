<?php
session_start();

// Include the database connection file
include 'connect.php'; // Ensure this path is correct

// Check if the product ID is set in the session
if(isset($_SESSION['product_id']) && is_numeric($_SESSION['product_id'])) {
    $productId = $_SESSION['product_id'];

    // Prepare a statement to prevent SQL injection
    $stmt = mysqli_prepare($con, "DELETE FROM defacto WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $productId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Clear the product ID from the session
    unset($_SESSION['product_id']);

    $message = "Ürün başarıyla silindi.";
} else {
    $message = "Silinecek ürün bulunamadı!";
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
    <div class="container">
        <h1>Sipariş Onayı</h1>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
        <a href="index.php" class="btn btn-primary">Ana Sayfa'ya Dön</a>
    </div>
</body>
</html>
