<?php	session_start(); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
      <meta charset="utf-8">
      <link rel="icon" type="image/png" href="images/favicon.png" />
      <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
      <title>4L s'en va - 4L Trophy</title>
      <meta name="keywords" content="4L, trophy, clemence, loic, desert, humanite,4l s'en va,s'en,va,mans" />
      <meta name="description" content="Les site de l'association, pour le 4L Trophy." />
      <meta name="viewport" content="width=device-width">
      
      <!-- Google Web Font Embed -->
      <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,300,700' rel='stylesheet' type='text/css'>
      
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/perso.css">
      <link rel="stylesheet" href="css/responsive.css">
      
      <!-- strip gallery -->
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script type="text/javascript" src="strip-1.2.4/js/strip.pkgd.min.js"></script>
      <link rel="stylesheet" type="text/css" href="strip-1.2.4/css/strip.css"/>
    </head>
<body>
  <?php include('cpt.php');
	include('captcha.php'); ?>
        <div id="main-wrapper">
          <!--[if lt IE 7]>
              <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
              <![endif]-->
	  
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 affix text-center" style="z-index: 1;">
            <h1 class="site-title">
              <b>4L s'en va !</b><br/>
	      <h2> <footer style="color:white;">« Pour désirer laisser des traces dans le monde, il faut en être solidaire.»<br/> <p style="margin-left:50%;font-size:70%;"> - Simone de Beauvoir</p></footer>
	      </h2>
              <img src="images/btn-menu.png" alt="main menu" id="m-btn" class="pull-right visible-xs visible-sm" >
            </h1>
	    <ul id="responsive" style="display:none" class="hidden-lg hidden-md"></ul><!-- /.responsive -->
          </div>
	  
          <div class="menu visible-md visible-lg">
            <ul id="menu-list">
              <li class="active home-menu"><a href="#home">Accueil</a></li>
              <li class="about-menu"><a href="#about">Qui sommes nous ?</a></li>
              <li class="services-menu"><a href="#services">Nos partenaires</a></li>
              <li class="testimonial-menu"><a href="#testimonial">Notre 4L</a></li>
              <li class="contact-menu"><a href="#contact">Contact</a></li>
	      <center>
		
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		  <input type="hidden" name="cmd" value="_s-xclick">
		  <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
							       ">
		  <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
		  <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
		</form>
	      </center>
	    </ul>
          </div><!-- /.menu -->
	  
	  
          <div class="image-section">
            <div class="image-container">
              <img src="images/image1.jpg" id="home-img" class="main-img inactive" alt="Accueil">
              <img src="images/image2.jpg" id="about-img" class="inactive" alt="L'association">
              <img src="images/image3.jpg" id="services-img"  class="inactive" alt="Nos partenaires">
              <img src="images/image4.jpg" id="testimonial-img" class="inactive" alt="Notre 4L">
              <img src="images/image5.jpg" id="contact-img" class="inactive" alt="Contact">
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-6 col-md-offset-6 content-wrapper">
              <div class="content">
                
                <section id="home-text" class="active content-section">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1>4L s'en va ...</h1>
		    
		    <p>... loin, très loin ! Pour un périple de plus de 6000 kms à travers la France, l'Espagne et le Maroc, pour venir en aide aux plus démunis.</p>
		    <p> Pour que cela puisse se faire, nous avons besoin de votre soutien !!! Aidez-nous grâce à vos dons financiers ou materiels, chaque participation a son importance.<br/>
		      <b>Téléchargez notre <a href="dossier_sponso_4l.pdf">dossier</a> et rejoignez nos partenaires !</b></p>
		    <HR width=75% noshade size=8> 
		    <h3>Mais le 4L Trophy, c'est quoi ?</h3>
		    <img src="images/4l_logo.png" width="15%" style="float:left;margin-right:2%;"/>
		    <p>Le 4L Trophy est un <b>raid automobile humanitaire</b> destiné aux étudiants. Chaque année, plus de 1 200 équipages se lancent sur un parcours de plus de <b>6 000 km</b> traversant la <b>France</b>, l’<b>Espagne</b> et le <b>Maroc</b> pour <b>apporter</b> des fournitures scolaires et sportives à destination des <b>enfants du Sud Marocain en difficulté</b>.</p>
		    
		    
		  </div>
                </section><!-- /.home-text -->    
		
                <section id="about-text" class="inactive">
                  <h2 class="text-center">Qui sommes nous ?</h2>
                  <div class="col-sm-6 col-md-6">
                    <p><b>"4L s'en va"</b> a été créée le 1er mai 2014 pour réaliser cette action d'aide au développement. Cette association à but non lucratif nous permet donc de collecter des fonds afin de venir en aide aux populations marocaines dans le besoin.</p>
		    <h2><u>L'équipage</u></h2>
		    <div id="equipage">
		      <div class="clemence"><h2><a>Clémence DELILLE</a></h2><h3>Co-Pilote</h3>
			<img src="images/c.jpg" width="43.5%"/>
			<ul>
			  <li>20 ans</li>
			  <li><b>É</b>cole <b>S</b>upérieure des <b>A</b>rts <b>D</b>écoratifs de Strasbourg</li> 
			  <li><b>Point fort</b> : Pragmatisme <a>(“Ça va pas passer Loïc”)</a></li>
			  <!-- Bonne conscience de la 4L <a>(“Ça va pas passer Loïc ...”)</a> -->
			  <li><b>Point faible</b> : Sens de l'orientation légendaire</li>
			  <!-- comme le GPS mais avec un leger décallage -->
			</ul>
		      </div>
		      <div class="loic"><h2><a>Loïc ENTRESSANGLE</a></h2><h3>Pilote</h3>
			<img src="images/l.jpg" width="45%"/>
			<ul>
			  <li>22 ans</li>
			  <li>Étudiant en informatique à Nantes</li>
			  <li><b>Point fort</b> : Pilote de 207 dans les Alpes mancelles <a>("mais si ça passe")</a></li>
			  <li><b>Point faible</b> : Hâtif<!--Convaincu que les routes changent la nuit, on s’y retrouve pas !--></li>
			</ul>
		      </div>
		    </div>
		  </div>
                  
                </section><!-- /.about-text --> 
		
                <section id="services-text" class="inactive">
                  <h2 class="text-center">Nos partenaires</h2>
                  <div class="col-sm-12 col-md-12">
                    <p>Voici nos partenaires, ces derniers auront donc un encart publicitaire sur la 4L en fonction de leurs besoins. </p>
		    <p>Si vous aussi vous désirez en faire partie, téléchargez notre dossier <a href="dossier_sponso_4l.pdf"><b>ici</b></a>.</p>
		    <table width="100%">
		      <tr><td><h3> <a href="http://www.magasins-u.com/">Super U</a></h3><a href="http://www.magasins-u.com/"><img src="images/partenaires/p5.jpg"></a></td>
		      </tr>
		      <tr><td><h3> <a href="http://www.cognix-systems.com/">Cognix-Systems</a></h3>
			  <a href="http://www.cognix-systems.com/"><img src="images/partenaires/p3.jpg"></a></td><td> <h3> <a href="http://www.e-leclerc.com/">Leclerc</a></h3>
			  <a href="http://www.e-leclerc.com/"><img src="images/partenaires/p4.jpg"/></a></td></tr>
		      <tr><td></td><td></td></tr>
		      
		    </table>
		  </div>
                  <div class="col-sm-4 col-md-4">
                    <p></p>
                  </div>
                  <div class="col-sm-4 col-md-4">
                    <h3></h3>
                    <p></p>
                  </div>
                </section><!-- /.services-text --> 
		<section id="testimonial-text" class="inactive">
                  <div class="col-sm-12 col-md-12">
                    <h2>Notre 4L</h2>
		    <p>Nous avons acheté notre 4L il y a plusieurs semaines, dans un état... critique. En effet, un des avantages de cette petite voiture est de pouvoir entièrement se monter, et se démonter. Lors de l'achat, elle se trouvait donc sans portières avant, le capot démonté, et dans un curieux assemblage de plusieurs 4L.</p>
		    <p>Cependant, le moteur ronronnait déjà, le châssis était complètement sain, et nous avons senti qu'elle avait l'âme d'une vraie gagnante !!
		      Ainsi, avec les précieux conseils du papa de Clémence (grand amateur de cette voiture), nous avons réparé et repeint notre 4L. Elle est en ce moment en train de passer le contrôle technique !
		      D'ici quelques jours, nous allons installer les équipements nécessaires au rally. En effet, puisque la course aura lieu sur tous les types de terrain, nous avons besoin d'installer des plaques de protection sous le moteur et sous le réservoir ainsi que des anneaux de remorquage à l'avant et à l'arrière du véhicule.</p>
		    <p>
		      Nous sommes déjà extrêmement attachés à cette voiture et attendons avec impatience de pouvoir rouler avec !!</p>
		    
                    <p>Il va en falloir des kilomètres pour mettre en échec cette traction avant de <b>603cm3</b>! La puissance dévellopée par ses <b>23 chevaux</b> viendra à bout de n'importe 
		      quel terrain. Cette <b>berline</b> d'a peine <b>600kg</b> compte bien accomplir sa mission <b>humanitaire</b> !</p>
		    <center>	
		      <a href="images/4l/1.jpg" class="strip"><img src="images/4l/1.jpg" alt="1" width="15%" style="margin:1em;"/></a>
		      <a href="images/4l/2.jpg" class="strip"><img src="images/4l/2.jpg" alt="2" width="20%" style="margin:1em;"/></a>	
		      <a href="images/4l/3.jpg" class="strip"><img src="images/4l/3.jpg" alt="3" width="20%" style="margin:1em;"/></a>
		      <br/>
		      <a href="images/4l/4.jpg" class="strip"><img src="images/4l/4.jpg" alt="4" width="15%" style="margin:1em;"/></a>
		      <a href="images/4l/5.jpg" class="strip"><img src="images/4l/5.jpg" alt="5" width="15%" style="margin:1em;"/></a>
		      <a href="images/4l/6.jpg" class="strip"><img src="images/4l/6.jpg" alt="6" width="20%" style="margin:1em;"/></a>
		      <a href="images/4l/7.jpg" class="strip"><img src="images/4l/7.jpg" alt="7" width="15%" style="margin:1em;"/></a>
		    </center>
		    <HR width=75% noshade size=8> 
		    <h3>Le budget nécéssaire</h3>
		    <OL class="budget_list">
		      <LI><a>Frais d’inscription : 3075€</a></LI>
		      <OL>
			<LI>Inscriptions des pilotes, co-pilotes et véhicules</LI>
			<LI>Traversées en bateau du Détroit de Gibraltar aller-retour</LI>
			<LI>Hébergements (bivouac/hôtels) en demi-pension au Maroc</LI>
			<LI>Assistance technique et médicale</LI>
			<LI>Organisation et encadrement</LI>
			<LI>Communication et médiatisation du raid</LI>
			<LI>Compensation CO2 du raid</LI>
		      </OL>
		      <li><a>Réparation et préparation du véhicule pour le raid :  2000€</a></li>
		      <OL>
			<li>Pièces mécaniques</li>
			<li>Carrosseries/Décorations</li>
			<li>Contrôles techniques</li>
		      </OL>
		      <li><a>Équipements et outillage	300€</a></li>
		      <OL>
			<li>Fusées de détresse, extincteurs, sangles, boîte à outils …</li>
		      </OL>
		      <li><a>Essence, péages et assurances : 900€</a></li>
		      <li><a>Actions solidaires : 500€</a></li>
		      <OL>
			<li>Fournitures scolaires</li>
			<li>Matériels sportifs</li>
			<li>Apport de denrées non périssables, en partenariat avec la Croix Rouge</li>
		      </OL>

		      <li><a>Communication : 600€</a></li>
		      <ol>
			<li>tirages des encarts, contrepartie des donateurs</li>
		      </ol>

		      <li><a>Matériel de vie et nourriture : 100€</a></li>
		      <li><a>Divers et imprévus : 225€</a></li>

		    </OL>
		    <font color="blue" style="font-size:2em;font-weight:bold;margin-left:10%;"><a><u>Total : 7700€</u></a></font>
		  </div>
                </section><!-- /.testimonial-text --> 

                <section id="contact-text" class="inactive">
                  <div class="col-sm-12 col-md-12">
                    <div class="row">
                      <div class="col-sm-12 col-md-12"><h2>Contact</h2></div>
                      <div class="clearfix"></div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <div id="map-canva"></div>
                        <!-- <div id="map-canva"></div> -->
                        <!--     </div> -->
			<p>Chez Clémence Delille<br/>21 rue des chanoines - 72000 Le Mans, France</p>

                        <div class="col-sm-6 col-md-6">
                          <form action="trait_form.php" method="post"> 

                            <div class="form-group">
                              <!--<label for="contact_name">Name:</label>-->
                              <input type="text" name="nom" id="contact_name" class="form-control" placeholder="Nom" />
			    </div>
                            <div class="form-group">
                              <!--<label for="contact_email">Email:</label>-->
                              <input type="text" name="email" id="contact_email" class="form-control" placeholder="Email" />
                            </div>
                            <div class="form-group">
                              <!--<label for="contact_message">Message:</label>-->
                              <textarea name="message" id="contact_message" class="form-control" rows="9" placeholder="Message"></textarea>
                            </div>
 			    <label for="captcha">Recopiez le mot : "<?php echo captcha(); ?>"</label>
			    <input type="text" name="captcha" id="captcha" /><br />
                            <button type="submit" name="envoi" class="btn btn-primary">Envoyer</button>
                          </form>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                </section><!-- /.contact-text --> 
                </div><!-- /.content -->  
              </div><!-- /.content-wrapper --> 
            </div><!-- /.row --> 
            <div id="partenaire"><a href="http://www.cognix-systems.com/"><img src="images/partenaires/p3.jpg"/></a>   <a href="http://www.e-leclerc.com/"><img src="images/partenaires/p4.jpg"/></a>     <a href="http://www.magasins-u.com/"><img src="images/partenaires/p5.jpg"/>  </a></div>

            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
                <p class="footer-text">v2.3.2<!-- <marquee scrollamount="5"  DIRECTION="up"> --><!-- </marquee> --></p>
              </div><!-- /.footer --> 
            </div>

	  </div><!-- /#main-wrapper -->
          
          <div id="preloader">
            <div id="status">&nbsp;</div>
          </div><!-- /#preloader -->
          
          <script src="js/jquery.min.js"></script>
          <script src="js/jquery.backstretch.min.js"></script>
          <script src="js/script.js"></script>
</body>
</html>
