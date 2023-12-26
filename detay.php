<?php
// Include the database connection file
include 'connect.php'; // Ensure this path is correct

// Check if the 'id' GET parameter is set
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productId = $_GET['id'];

    // Prepare a statement to prevent SQL injection
    $stmt = mysqli_prepare($con, "SELECT * FROM defacto WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $productId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Fetch the product from the database
    $product = mysqli_fetch_assoc($result);

    // Check if the product exists
    if(!$product) {
        echo "Ürün bulunamadı!";
        exit;
    }
} else {
    echo "Geçersiz ürün ID!";
    exit;
}

// Handle the "Buy Now" submission
if(isset($_POST['buy'])) {
    // Here you would normally handle payment processing using a payment gateway API
    
    // If "payment" was "successful"
    $deleteStmt = mysqli_prepare($con, "DELETE FROM defacto WHERE id = ?");
    mysqli_stmt_bind_param($deleteStmt, "i", $productId);
    mysqli_stmt_execute($deleteStmt);
    mysqli_stmt_close($deleteStmt);

    // Redirect to a "success" page (this could be an order confirmation page)
    header("Location: order_confirmation.php");
    exit;
}

// Close the statement
mysqli_stmt_close($stmt);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Satın Alma</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            padding-top: 2rem;
        }
        .product-image {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ürün Detayları</h1>
        <div class="card">
            <img src="<?php echo htmlspecialchars($product['resim_urls']); ?>" alt="<?php echo htmlspecialchars($product['model']); ?>" class="product-image card-img-top">
            <div class="card-body">
                <h2 class="card-title"><?php echo htmlspecialchars($product['model']); ?></h2>
                <p class="card-text">Beden: <?php echo htmlspecialchars($product['beden']); ?></p>
                <p class="card-text">Renk: <?php echo htmlspecialchars($product['renk']); ?></p>
                <p class="card-text">Cinsiyet: <?php echo htmlspecialchars($product['cinsiyet']); ?></p>
                <p class="card-text">Fiyat: <?php echo htmlspecialchars($product['fiyat']); ?> TL</p>
                <p class="card-text">Yıldız: <?php echo htmlspecialchars($product['yildiz']); ?>/5</p>
                
                <!-- Buy Now Form (Mockup) -->
                <form method="POST" action="order_confirmation.php?id=<?php echo $productId; ?>">
                    <!-- In a real-world scenario, this form would contain payment fields and be secure -->
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label">Kart Numarası</label>
                        <input type="text" id="cardNumber" name="cardNumber" class="form-control" placeholder="1111-2222-3333-4444" required>
                    </div>
                    <div class="mb-3">
                        <label for="cardName" class="form-label">Kart Üzerindeki İsim</label>
                        <input type="text" id="cardName" name="cardName" class="form-control" required>
                    </div>
                    <button type="submit" name="buy" class="btn btn-success">Şimdi Satın Al</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
