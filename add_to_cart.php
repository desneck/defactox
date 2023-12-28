<?php
session_start();
include 'connect.php'; // Make sure this path is correct

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Check if the cart is already created
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add product to cart
    if (!isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] = 1; // Start with a quantity of 1
    } else {
        $_SESSION['cart'][$productId]++; // Increment the quantity
    }

    header("Location: tum_urunler.php"); // Redirect back to products page
    exit();
}
?>
