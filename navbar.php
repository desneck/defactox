<?php
session_start();
include 'connect.php'; // Make sure this path is correct
?>

<!-- Navigation here -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">DeFacto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <li> 
                    <a href="view_cart.php" class="btn btn-outline-dark">
                        Sepetim
                        (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>) urun
                    </a>
            </ul>
        </div>
    </div>
</nav>