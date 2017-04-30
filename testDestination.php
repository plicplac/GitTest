<!doctype html>


<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-FR" lang="fr-FR">
	<head>
	<meta charset="utf-8">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Pojet TechnoWEB</title>
	<meta name=author content=hb>
	<meta name=description content="JDC Compagnie vous livre des tee-shirt et autres textiles toute l'année sur Paris et dans toutes les grandes villes de France. ">
	<!--
	<meta name=viewport content="width=device-width, initial-scale=1.0, user-scalable=0">
	
	<meta property=og:description content=" Tel: 06.61.45.45.10"/>
	-->
	<meta property=og:url content="http://www.juniordataconsulting.com"/>
	
	
											
									<!-- ***** inclusion de la feuilles CSS ***** --> 
									
											<link href="css/style.min.css" type="text/css" rel=stylesheet>											
											
									<!-- ***** inclusion CSS ***** -->

											

</head>

<body id=container>
	<noscript>
		<!-- ajout d'un plugin google ??  --> 
	<iframe src="//www.googletagmanager.com/ns.html?id=GTM-KLJ3FH" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	
	
	

<div id=wrapper><nav class="navbar navbar-inverse navbar-fixed-top" role=navigation>
	<div class=container>
		<div class=navbar-header>
			
			
				
				<a class=navbar-brand href="http://www.juniordataconsulting.com/">
					<img style="max-width:200px; margin-top: -13px; margin-left: 10px;" src="JDCLogo.png" title="chicken night livraison de sandwich de nuit" alt="chicken night livraison de sandwich de nuit" height="2" width="2"/></a>
					</div><div class="collapse navbar-collapse" id=navbar-collapse-1>
						
						<ul class="nav navbar-right">
							<li class=slfb>
							</li>
								</ul>
								</div></div>
								</nav>
								
								<div id=menu>
					
					
					<!-- page --> 
					
					
					
					<h2>Page de Renvoie PHP</h2>
				<div class=container><br/>
				<div class=row id=sandwich>
					<div class="col-sm-4 col-md-4 test-right">
						<div class="menu-images img-responsive">
					
							<!-- balise image + ajout attribut id=var >>> "clef" unique pour récup l'image 
									+
								appel de l'id quand tu cliques sur button 
								
								
								>>>faire en PH coté serveur 
							-->
							
							<!-- 
								exemple : 
								
								page.php?=méthode GET [cf cours passage par URL]	
								
									id=c'est une variable  (toto tata titi...) 
									? = envoie de var d'une page à une autre
							 -->
								
								<!-- 
									 récupération de l'info (image) $_GET[nomVar]
									 affichage de l'image : 
										src="img/ECHO $_GET[nomVar]"
								 --> 
	
	
								<img src="img/<?php echo $_GET['id'];  ?>.jpg" />
	
					

						</div>
						
						
								
							<!-- 
									changer le STYLE pour "couper la page en deux" 
										à droite : image + description + prix 
										à gauche : formulaire php (séléction taille couleur ... )
							-->
														
							<div class=menu-titles>
								<h3 >Classic</h3>
							</div><div class=menu-items  >Les tee-shirts JDC de coton très haut de gamme, mélange de coton et de cachemire, coupes créateurs (mais pas forcément les plus flatteuses, ça dépendra vraiment des goûts et de votre morphologie).
							<div class="menu-titles-prix">5 €</div>
							</div>
					</div>
							
			
			
			
			
			<!-- *** FOOTER *** --> 
			
																																													
			<center>
		&copy; 2017
	<br/> 
	<a style="color: black" href="http://www.juniordataconsulting.com">Groupe JDC</a><br />
	<br /></b>
	</center>																																																									<b>
	</p></div></div>
	<br/>
	
	
	</footer>
	</div>
	
	</body>
	
	</html>
