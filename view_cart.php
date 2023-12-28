<?php
session_start();
include 'connect.php';

echo "<h3>Shopping Cart</h3>";
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $productId => $quantity) {
        // Fetch product details from database
        $stmt = mysqli_prepare($con, "SELECT * FROM defacto WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $productId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $product = mysqli_fetch_assoc($result);

        echo "<p>" . $product['model'] . " - Quantity: " . $quantity . "</p>";
        mysqli_stmt_close($stmt);
    }
} else {
    echo "<p>Your cart is empty.</p>";
}
mysqli_close($con);
?>
