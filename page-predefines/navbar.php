<?php

function PageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();

?>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2D348A">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: white" href="../php/index.php">Folkets Bajer</a>
        <button class="navbar-toggler white-color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="<?php echo $current_page == 'index.php' ? 'nav-link active': 'nav-link' ?>" style="color: white" href="../php/index.php">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="<?php echo $current_page == 'toppen.php' ? 'nav-link active': 'nav-link' ?>" style="color: white" href="../php/toppen.php">Toppen</a>
                </li>
                <li class="nav-item">
                    <a class="<?php echo $current_page == 'kategori_a.php' ? 'nav-link active': 'nav-link' ?>" style="color: white" href="../php/kategori_a.php">Øl kategorier</a>
                </li>
                <li class="nav-item">
                    <a class="<?php echo $current_page == 'om_os.php' ? 'nav-link active': 'nav-link' ?>" style="color: white" href="../php/om_os.php">Om Os</a>
                </li>
            </ul>

            <form class="d-flex">
                <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo '<div class="login-title-container"><span class="login-title">Logged in as:</span></div>';
                    echo '<a class="nav-link white-color btn btn-outline-primary active" href="../php/welcome.php">' . $_SESSION['username'] . '</a>';
                } else {
                    echo '<a class="nav-link white-color btn btn-outline-primary" href="../php/register.php">Sign Up</a>';
                    echo '<a class="nav-link white-color btn btn-outline-primary" href="../php/login.php">Login</a>';
                }
                ?>
            </form>
        </div>
    </div>
</nav>