<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookloft</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $jsonData = file_get_contents("users.json");
    $users = json_decode($jsonData, true);

    $users[] = [
        "username" => $username,
        "email" => $email,
        "password" => $password,
        "books" => [
            "reading" => [],
            "completed" => [],
            "not_started" => []
        ]
    ];

    file_put_contents(
        "users.json",
        json_encode($users, JSON_PRETTY_PRINT)
    );

    header("Location: index.php");
    exit;
}
?>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card login-card">
        <div class="card-body p-5">
            <div class="text-center mb-2">
                <img src="b.jpg" class="logo">
            </div>

            <h4 class="text-center mb-2">CREATE NEW ACCOUNT</h4>

            <form method="POST">
                <div class="mb-1">
                    <label class="form-label">Username</label>

                    <input type="text" name="username" class="form-control custom-input" required>
                </div>

                <div class="mb-1">
                    <label class="form-label">Email</label>

                    <input type="email" name="email" class="form-control custom-input" required>
                </div>

                <div class="mb-1">
                    <label class="form-label">Password</label>

                    <input type="password" name="password" class="form-control custom-input" required>
                </div>
<br>
                <button type="submit" class="btn btn-primary w-100">Register</button>

                <div class="mt-2 text-center">
                    <p class="small">Already have an account?
                        <a href="index.php" class="register-link">Login here</a>
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