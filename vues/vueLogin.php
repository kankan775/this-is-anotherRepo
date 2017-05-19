<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ShareMyBeer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<!-- MEU NAV BAR -->
<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a href="login.html" class="nav-item">
                <img src="images/Beer-icon.png" alt="logo">
            </a>
        </div>
        <span class="nav-toggle">
	      <span></span>
	      <span></span>
	      <span></span>
	    </span>
        <div class="nav-right nav-menu">
            <a class="nav-item is-tab is-hidden-mobile is-active">Login</a>
            <a href="register.html" class="nav-item is-tab is-hidden-mobile">Register</a>
        </div>
    </div>
</nav>
<!-- SECTION / ARTICLE -->
<section class="hero is-fullheight is-dark is-bold">

    <div class="hero-body">
        <div class="container">
            <form action="../modeles/modeleUser.php" class="columns is-vcentered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title">
                        Login
                    </h1>
                    <div class="box">
                        <label class="label">Email ou Pseudo</label>
                        <p class="control">
                            <input class="input" type="text" placeholder="bgdelastreet@caramail.org">
                        </p>
                        <label class="label">Password</label>
                        <p class="control">
                            <input class="input" type="password" placeholder="●●●●●●●">
                        </p>
                        <hr>
                        <p class="control">
                            <button class="button is-success">Login</button>
                            <button class="button is-default">Cancel</button>
                        </p>
                    </div>
                    <p class="has-text-centered">
                        <a href="register.html">S'inscrire</a>
                        |
                        <a href="#">Mot de passe oublié ?</a>

                    </p>
                </div>
            </form>
        </div>
    </div>

</section>


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