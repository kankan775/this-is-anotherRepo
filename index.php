<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ShareMyBeer</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
<!-- MEU NAV BAR -->
<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a href="home.html" class="nav-item">
                <img src="images/Beer-icon.png" alt="logo">
            </a>
            <a class="nav-item is-tab is-hidden-mobile is-active">Fil d'actualité</a>
            <a href="action?=catalogue" class="nav-item is-tab is-hidden-mobile">Catalogue</a>
            <a href="action?=amis" class="nav-item is-tab is-hidden-mobile">Amis</a>
            <a href="action?=about" class="nav-item is-tab is-hidden-mobile">About</a>
        </div>
        <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
        <div class="nav-right nav-menu">
            <a class="nav-item is-tab is-hidden-tablet is-active">Fil d'actualité</a>
            <a href="catalogue.html" class="nav-item is-tab is-hidden-tablet">Catalogue</a>
            <a href="amis.html" class="nav-item is-tab is-hidden-tablet">Amis</a>
            <a href="about.html" class="nav-item is-tab is-hidden-tablet">About</a>
            <a class="nav-item is-tab">
                <figure class="image is-16x16" style="margin-right: 8px;">
                    <img src="images/login.png">
                </figure>
                Profile
            </a>
            <a class="nav-item is-tab">Log out</a>
        </div>
    </div>
</nav>

<?php
if(isset($_GET['action'])) {
    $action = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['action']);
    $action = htmlspecialchars($action);
    $action = ucfirst($action);
    echo $action;
    include "vues/vue" . $action . ".php";
} else {
    include "vues/vueAccueil.php";
}
?>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>ShareMyBeer.com</strong> est un réseau social développé par NOUS.
                <strong>Enjoy !</strong>
            </p>
        </div>
    </div>
</footer>
</body>
</html>

