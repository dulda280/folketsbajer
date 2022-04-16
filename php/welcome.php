<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Folkets Bajer: Profil</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/toppen_style.css">
    <style>
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2D348A">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: white" href="#">Folkets Bajer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" style="color: white" href="../html/index.html">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="../html/toppen.html">Toppen</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Øl Kategorier
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="../html/kategori_a.html">Bedste Pilsner</a></li>
                        <li><a class="dropdown-item" href="#">Bedste Festivalsbajer</a></li>
                        <li><a class="dropdown-item" href="#">Bedste xyz</a></li>
                        <li><a class="dropdown-item" href="#">Bedste xyz</a></li>
                        <li><a class="dropdown-item" href="#">Bedste xyz</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="../html/om_os.html">Om Os</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: white" href="#">Profile: Name of Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>
