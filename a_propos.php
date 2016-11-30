<?php
	include('include/init.php');
	include('include/functions.php');	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>A propos</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/style.css"/>
	</head>

	<body>
		<?php
			include("include/aProposHeader.php");
			include("include/menu.php");
		?>

		<div class="container">
			<div class="about-container">
				<h1>Le concept</h1>

				<p class="about-content">
					Un site sur le voyage ? Encore un ? <br/>
					Oui ! Mais cette fois un site différent !<br/>
					Oh oui, tous les sites sont différents... Mais le nôtre l’est plus !<br/>

					<br/>
					Avez-vous déjà secrètement rêvé, sans oser réellement y penser, de voyager dans l’inconnu ? De découvrir des nouveaux espaces, inexplorés ? Des lieux où se mélangent la nature et les constructions humaines ? Ou simplement la nature. Sans trace humaine ! Pour une fois, être seul… Se mesurer à l’existence, une réflexion sur l’Homme et la nature, sur nous-même et pourquoi pas, sur la société elle-même et son superflu. <br/>

					<br/>
					Oui ? C’est bien pourquoi vous êtes sur cette page ! Nous aussi !<br/>
					Vous pourrez donc explorer différentes catégories de lieux et de possibles voyages et fonction du type de voyage qui vous attire le plus :<br/> 
						<span class="indented-line">- le passé et son lien avec le présent</span><br/>
						<span class="indented-line">- la nature et son lien avec le temps</span><br/>
						<span class="indented-line">- la nature et elle-même, seule et unique</span><br/>
					Ces catégories sont poreuses et nous vous incitons et fortement à explorer chacune d’elles !<br/>


				</p>

				<h1>Qui sommes-nous ?</h1>
				<h2>Vanessa Bar</h2>

					<p class="about-content">
						<img class="profil-img" src="img/image.JPG" alt="Vanessa Bar">

						Vanessa au bout du monde. De l’Asie à la Turquie pour elle il n’y a qu’un pas. Partant à la découverte des cultures et du patrimoine, temples et coutumes qu’elle photographie avec délicatesse. Elle emporte avec elle et fait voyager les souvenirs laissés par les rencontres, qui font de fait le tour du monde avec elle.<br/>

						<br/>
						Et ses compétences ?<br/>
						   	<span class="indented-line">Une virée informatique, qui structure les pensées</span><br/>
						    <span class="indented-line">Un soupçon d’harmonie, qui enjolive le quotidien</span><br/>
						    <span class="indented-line">Et une pincée de bonne humeur, qui couronne le tout</span><br/>

						<br/>
						<span class="hashtag">#rencontres</span> 
						<span class="hashtag">#souvenirs</span>
						<span class="hashtag">#photos</span>
					</p>

				<h2>Julie Puech</h2>

					<p class="about-content">
						Julie, l’avez vous vu ? On cherche activement un sac à dos sur pattes ! À peine revenue de randonnée, ce sac est déjà reparti, difficile à suivre ! Vous pouvez lui parler d’exploration, de lieux déserts et isolés, de bâtiments et de villes vides... Mais surtout ne vous avisez pas de lui parler des relations humaines qu’elle a tissé au cours de ses voyages !! <br/>

						<br/>
						Et ses compétences ?<br/>
							<span class="indented-line">Un passage par la prépa, qui forge le caractère</span><br/>
							<span class="indented-line">Un zeste de créativité, qui s’entretient en dessinant</span><br/>
							<span class="indented-line">Et un brin de géométrie, qui couronne le tout</span><br/>

						<br/>
						<span class="hashtag">#sacàdos</span> 
						<span class="hashtag">#jeparsàlaventure</span>  
						<span class="hashtag">#toutseul</span>
					</p>

				<h2>Elise Ritoux</h2>

					<p class="about-content">
						Elise. Toujours en sac à dos, parfois à l'hôtel, d’autres fois à l’auberge de jeunesse, souvent chez l’habitant, et le reste du temps sous sa tente. À la découverte des cultures et des trésors de la nature, Elise part tantôt dans la nature, tantôt dans les villes.<br/>

						<br/>
						Et ses compétences ?<br/>
						    <span class="indented-line">Une balade audiovisuelle, qui préserve les rêves</span><br/>
						    <span class="indented-line">Une sensation colorée, qui pimente les moeurs</span><br/>
						    <span class="indented-line">Et une pointe d'insouciance, qui couronne le tout</span><br/>

						<br/>
						<span class="hashtag">#rencontres</span> 
						<span class="hashtag">#sacàdos</span> 
						<span class="hashtag">#toutseul</span> 

					</p>

			</div>

			


			
		</div>

		<?php
			include("include/aProposFooter.php");
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
		<script>
		/* Bouton Menu sur mobile */
		$( ".mobile-nav" ).click(function() {
			$(".hidden").toggle(); 
		});
		</script>
	</body>

</html>