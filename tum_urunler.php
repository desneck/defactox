<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <!-- Bootstrap 5 CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            margin-bottom: 20px;
        }

        .product-container {
            padding: 20px;
        }
    </style>
</head>

<body>

    <?php
    include "navbar.php";
    ?>
    <div class="container product-container">
        <h2>All Products</h2>

        <!-- Search and Classification Form -->
        <form method="GET" action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search products" name="search">
                <select class="form-select" name="cinsiyet">
                    <option value="">All</option>
                    <option value="Erkek">Erkek</option>
                    <option value="Kadın">Kadın</option>
                </select>
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
        <div class="row">
            <?php
            include 'connect.php';

            $search = isset($_GET['search']) ? $_GET['search'] : '';
            $cinsiyet = isset($_GET['cinsiyet']) ? $_GET['cinsiyet'] : '';

            if (!empty($search) || !empty($cinsiyet)) {
                // Apply filters only if search or classification is provided
                $query = "SELECT * FROM defacto WHERE model LIKE ? AND (cinsiyet LIKE ? OR cinsiyet = '')";
                $stmt = mysqli_prepare($con, $query);
                $searchTerm = '%' . $search . '%';
                $cinsiyetTerm = '%' . $cinsiyet . '%';
                mysqli_stmt_bind_param($stmt, "ss", $searchTerm, $cinsiyetTerm);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
            } else {
                // Show all products by default
                $query = "SELECT * FROM defacto";
                $result = mysqli_query($con, $query);
            }

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='col-md-4'>";
                    echo "<div class='card product-card'>";
                    echo "<img src='" . $row["resim_urls"] . "' class='card-img-top' alt='" . $row["model"] . "'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . $row["model"] . "</h5>";
                    echo "<p class='card-text'>" . $row["beden"] . " - " . $row["renk"] . "</p>";
                    echo "<p class='card-text'>Price: " . $row["fiyat"] . "</p>";
                    echo "<p class='card-text'>Rating: " . $row["yildiz"] . "</p>";
                    echo "<a href='detay.php?id=" . $row["id"] . "' class='btn btn-primary'>Detay</a>";
                    echo "<a href='add_to_cart.php?id=" . $row["id"] . "' class='btn btn-secondary'>Add to Cart</a>";

                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No products found.";
            }

            if (isset($stmt)) {
                mysqli_stmt_close($stmt);
            }
            mysqli_close($con);
            ?>
        </div>
    </div>

    <!-- Bootstrap 5 JS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>