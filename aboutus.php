<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
     <!-- Google Font API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


  <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
 <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="dashboard.php">
      Book Loft
    </a> 
    
    </div> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center gap-3">
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            See More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="aboutus.php">About Us</a></li>
            <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
          </ul>
</li>
      </ul>
<br>
      <!-- Toggle Dark Mode Button -->
       <div class="d-flex">
        <button class="dark-mode-toggle" id="darkModeToggle" title="Dark Mode Toggle">
            <i class="bi bi-moon-stars-fill" id="darkModeIcon"></i>
        </button>
       </div>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <div class="p-5 text-white rounded-4 shadow" style="background: linear-gradient(135deg, #b17da7, #7d5275);">
        <div class="row align-items-center">
            <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
                <div>
                    <img src="b.jpg" class="logo">
                </div>

                <h1 class="display-5 fw-bold m-0">Book Loft</h1>
                <p class="text-light opacity-75 mt-2 mb-0" style="font-size: 14px; letter-spacing: 0.5px;">Your Smart Library Management Companion</p>
            </div>
            
            <div class="col-md-8 border-start-md" style="font-size: 15px; line-height: 1.7; text-align: justify; opacity: 0.95;">
                <p class="m-0">Welcome to Book Loft, a modern and efficient Library Management System designed to streamline library operations and elevate the reading experience. Whether you are an administrator managing a vast collection of resources or a passionate reader looking for your next favorite book, Book Loft bridges the gap between knowledge and accessibility.</p>
                <p class="m-0 mt-3">Our system is engineered to handle everyday library tasks with precision—from tracking book inventories and managing member profiles to automating the borrowing and return processes. By replacing traditional paperwork with a seamless digital framework, Book Loft minimizes human error, saves time, and ensures that data is always organized and securely stored.</p>
            </div>
        </div>
    </div>
</div>
<style>

.welcome-box {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer; 
}

.welcome-box:hover {
    transform: translateY(-5px); 
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2) !important; 
}

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Dark Mode Toggle JS -->
     <script>
        //reference element
        const darkModeToggle = document.getElementById('darkModeToggle');
        const darkModeIcon = document.getElementById('darkModeIcon');
        const htmlElement = document.documentElement;

        //check current theme
        const currentTheme = localStorage.getItem('theme') || 'light';
        htmlElement.setAttribute('data-bs-theme', currentTheme);
        updateIcon(currentTheme);

        //toggle
        darkModeToggle.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';

            htmlElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateIcon(newTheme);
        });

        //change icon
        function updateIcon(theme) {
            if (theme === 'dark'){
                darkModeIcon.className = 'bi bi-sun-fill';
            } else {
                darkModeIcon.className = 'bi bi-moon-stars-fill';
            }
        }

     </script>
  </body>
</html>