<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookloft</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil:wght@100..900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="bg-vanta">
<?php

session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $jsonData = file_get_contents("users.json");
    $users = json_decode($jsonData, true);

    foreach ($users as $user) {

        if (
            $user["email"] == $email &&
            password_verify($password, $user["password"])
        ) {

            $_SESSION["user"] = $email;

            header("Location: dashboard.php");
            exit;
        }
    }

    $error = "Email atau password salah!";
}
?>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card login-card">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <img src="b.jpg" class="logo">
            </div>

            <h3 class="text-center mb-4">LOGIN</h3>

            <form method="POST">

                <label>Email</label>
                <input type="email" name="email" class="form-control custom-input mb-2" required>

                <label>Password</label>
                <input type="password" name="password" class="form-control custom-input mb-3" required>

                <button type="submit" class="btn btn-primary w-100">Login</button>

                <p class="text-danger text-center mt-3"><?php echo $error; ?></p>

                <div class="mt-3 text-center">
                    <p class="small">Don't have an account?
                        <a href="register.php" class="register-link">Register here</a>
                    </p>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<!-- Three.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>

<!-- Vanta -->
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

<script>
VANTA.NET({
  el: "#bg-vanta",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00
})
</script>

</body>
</html>
