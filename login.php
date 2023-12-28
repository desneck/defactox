<?php 
$errMsg = "";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "yazilim12345"){
        session_start();
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit();
    }else{
        $errMsg = "Kullanıcı adı veya şifre hatalı.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeFacto Üye Girişi</title>
    <!-- Bootstrap 5 CSS for responsiveness and styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font for Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: #f7f7f7;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 320px;
        }
        .login-title {
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #333;
        }
        .loginBtn, .signBtn {
            width: 100%;
            padding: 0.75rem 0;
            border: none;
            border-radius: 5px;
            font-weight: 700;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .loginBtn {
            background-color: #5cb85c;
            color: white;
        }
        .loginBtn:hover {
            background-color: #4cae4c;
        }
        .signBtn {
            background-color: #0275d8;
            color: white;
        }
        .signBtn:hover {
            background-color: #025aa5;
        }
        .forgot {
            display: block;
            text-align: center;
            margin-top: 0.5rem;
            color: #0275d8;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .errmsg {
            color: red;
            text-align: center;
            margin-bottom: 1rem;
        }
        .defacto-logo {
            font-size: 1.5rem;
            text-align: center;
            color: #0056b3;
            margin-bottom: 2rem;
        }
        .input-group {
            margin-bottom: 1.25rem;
        }
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
        }
        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
    </style>
</head>
<body>
    <?php
        include 'navbar.php';
    ?>

<div class="login-container">
    <div class="defacto-logo">DeFacto</div>
    <?php if(isset($errMsg) && $errMsg): ?>
        <div class="errmsg"><?php echo $errMsg; ?></div>

    <?php endif; ?>
    <form class="form" action="login.php" method="POST">
        <h2 class="login-title">Üye Girişi</h2>
        <div class="input-group">
            <label for="username" class="form-label">E-Posta *</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Kullanıcı Adı">
        </div>
        <div class="input-group">
            <label for="password" class="form-label">Şifre *</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Şifre">
        </div>
        <button class="loginBtn" type="submit" name="login">Giriş Yap</button>
        <a href="#" class="forgot">Şifremi Unuttum</a>
        <button class="signBtn">Hemen Üye Ol</button>
    </form>
</div>

</body>
</html>
