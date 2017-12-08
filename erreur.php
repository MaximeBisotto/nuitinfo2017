<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
 <header>
        <ul id="accident_drop_down_side" class="dropdown-content">
          <li class="divider"></li>
          <li><a href="prevenir.html" class="center">Prévenir</a></li>
          <li class="divider"></li>
          <li><a href="signaler.html" class="center">Signaler</a></li>
          <li class="divider"></li>
          <li><a href="asister.html" class="center">Assiter</a></li>
        </ul>
        <ul id="accident_drop_down_top" class="dropdown-content center">
          <li class="divider"></li>
          <li><a href="prevenir.html" class="center">Prévenir</a></li>
          <li class="divider"></li>
          <li><a href="signaler.html" class="center">Signaler</a></li>
          <li class="divider"></li>
          <li><a href="asister.html" class="center">Assiter</a></li>
        </ul>
        <ul id="compte_drop_down_top" class="dropdown-content">
            <li class="divider"></li>
          <li><a href="login.html" class="center">Login</a></li>
          <li class="divider"></li>
          <li><a href="event.php" class="center">Évènements</a></li>
          <li class="divider"></li>
          <li><a href="index.php" class="material-icons large center">power_settings_new</a></li>
        </ul>
        <ul id="compte_drop_down_side" class="dropdown-content">
          <li class="divider"></li>
          <li><a href="event.php" class="center">Évènements</a></li>
          <li class="divider"></li>
          <li><a href="index.php" class="material-icons large center">power_settings_new</a></li>
        </ul>

        <nav>
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo">Logo</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="données.php">Perturbations</a></li>
                <li><a href="inscription.html">Inscription</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="accident_drop_down_top">Accident<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="compte_drop_down_top">Compte<i class="material-icons right">arrow_drop_down</i></a></li>
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="données.php">Perturbations</a></li>
                <li><a href="inscription.html">Inscription</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="accident_drop_down_side">Accident<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="compte_drop_down_side">Compte<i class="material-icons right">arrow_drop_down</i></a></li>
              </ul>
            </div>
        </nav>
    </header>

<body>

<div class="container">
    <div class="row">
        <br/><br/><br/><br/>
        <h1 style="text-align: center" class="header">
            Erreur :(
        </h1>
        <h2><?php  if (isset($_GET['erreur'])) { echo "Code : " . $_GET['erreur']; } ?><br/></h2>
        <p>Si vous pensez que cette erreur est anormale, vous pouvez nous envoyer un mail à <a href="mailto:contact@jeanyves.pro">contact@jeanyves.pro</a>.</p>
    </div>

</div>
<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    $(".button-collapse").sideNav();
</script>

</body>
</html>