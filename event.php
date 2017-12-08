<?php
session_start();
if (!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
    header("Location: /login.html",TRUE,303);
}
?>
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
		      	<li><a href="données.html">Perturbations</a></li>
		      	<li><a href="inscription.html">Inscription</a></li>
		        <li><a class="dropdown-button" href="#!" data-activates="accident_drop_down_top">Accident<i class="material-icons right">arrow_drop_down</i></a></li>
		        <li><a class="dropdown-button" href="#!" data-activates="compte_drop_down_top">Compte<i class="material-icons right">arrow_drop_down</i></a></li>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		      	<li><a href="données.html">Perturbations</a></li>
		      	<li><a href="inscription.html">Inscription</a></li>
		        <li><a class="dropdown-button" href="#!" data-activates="accident_drop_down_side">Accident<i class="material-icons right">arrow_drop_down</i></a></li>
		        <li><a class="dropdown-button" href="#!" data-activates="compte_drop_down_side">Compte<i class="material-icons right">arrow_drop_down</i></a></li>
		      </ul>
		    </div>
  		</nav>
    </header>
<body>
<div class="container">
    	<h1 class="header">Création d'évènement</h1>
	    <div class="row">

	    <form class="col s12" method="post" action="inscription.php">
	    <div class="row">

	      	<div class="input-field col s12 m6">
	          <input id="nomEvent" type="text" name="nomEvent" class="validate">
	          <label for="nomEvent">Nom d'évènement</label>
	        </div>
	    </div>

	    <div class="row">
	        <div class="input-field col s12 m6">
	          <input id="dateEvent" name="dateEvent" type="date" class="datepicker">
	          <label for="dateEvent">Date début</label>
	        </div>
	        <div class="input-field col s12 m6">
	          <input id="hourEvent" name="hourEvent" type="text" class="timepicker">
	          <label for="hourEvent">Heure</label>
	        </div>
	    </div>

	    <div class="row">
	        <div class="input-field col s12 m6">
	          <input id="dateEvent" name="dateEvent" type="date" class="datepicker">
	          <label for="dateEvent">Date fin</label>
	        </div>
	        <div class="input-field col s12 m6">
	          <input id="hourEvent" name="hourEvent" type="text" class="timepicker">
	          <label for="hourEvent">Heure</label>
	        </div>
	    </div>

	    </div>
	    <button class="btn waves-effect waves-light" type="submit" name="action">Créer
		<i class="material-icons right">send</i>
		</button>
	    </form>
	  </div>
  </div>
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
	$(".button-collapse").sideNav();
	$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  	});
	$('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  	});
</script>
</body>
</html>