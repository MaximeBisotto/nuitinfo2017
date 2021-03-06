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
		    				<h2 class="header">Données</h2>		    				
		    					<div id="form" class="row">
		    						<form action="données.php" method="post" class=" col s12 m2">
		    							<div class="input-field col s12">
								          <input id="dep" name="dep" type="number" class="validate">
								          <label for="dep">Département</label>
								        </div>
								        <button class="btn waves-effect waves-light col s12" type="submit" name="action">Chercher
									        <i class="material-icons right">send</i>
									  	</button>
		    						</form>
		    					</div>
		    					<!-- Boucle -->
                        <?php
                            if (isset($_POST['dep'])) {
                                    $bouchons = file_get_html("http://tipi.bison-fute.gouv.fr/publication/cnir/RecapBouchonsFranceEntiere.html");
                                    $trafic = file_get_html("http://tipi.bison-fute.gouv.fr/publication/cnir/RecapTraficFranceEntiere.html");
                                    $travaux = file_get_html("http://tipi.bison-fute.gouv.fr/publication/cnir/RecapChantiersEnCours.html");
                                $body = $bouchons->find('body')[0];
                                $departement = 0;
                                foreach ($body->children() as $element) {
                                    if (isset($element->class) && $element->class == 'rupture') {
                                        $departement = filter_var($element->first_child()->plaintext, FILTER_SANITIZE_NUMBER_INT);
                                    }
                                    if (isset($element->class) && $element->class == 'interligne') {
                                        if ($departement == $_POST['dep']) {
                                        echo '<div class=\"row\">
		    						<div class=\"card-panel teal\" style=\"color: white\">' . $element->plaintext .'</div>
		    					</div>' . PHP_EOL; }
                                    }
                                }
                                $body = $trafic->find('body')[0];
                                $departement = 0;
                                foreach ($body->children() as $element) {
                                    if (isset($element->class) && $element->class == 'rupture') {
                                        $departement = filter_var($element->first_child()->plaintext, FILTER_SANITIZE_NUMBER_INT);
                                    }
                                    if (isset($element->class) && $element->class == 'interligne') {
                                        if ($departement == $_POST['dep']) {
                                            echo '<div class=\"row\">
		    						<div class=\"card-panel teal\" style=\"color: white\">' . $element->plaintext .'</div>
		    					</div>' . PHP_EOL; }
                                    }
                                }
                                $body = $trafic->find('body')[0];
                                $departement = 0;
                                foreach ($body->children() as $element) {
                                    if (isset($element->class) && $element->class == 'rupture') {
                                        $departement = filter_var($element->first_child()->plaintext, FILTER_SANITIZE_NUMBER_INT);
                                    }
                                    if (isset($element->class) && $element->class == 'interligne') {
                                        if ($departement == $_POST['dep']) {
                                            echo '<div class=\"row\">
		    						<div class=\"card-panel teal\" style=\"color: white\">' . $element->plaintext .'</div>
		    					</div>' . PHP_EOL; }
                                    }
                                }
                            }
                        ?>


		    					<!-- Fin -->					          
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