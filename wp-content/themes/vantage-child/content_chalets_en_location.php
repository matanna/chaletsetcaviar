<?php
/*Permet l'affichage du groupe de champs coté client*/

//Vérifie l'activation du groupe de champs dans la page et renvoi les valeurs des champs
	if(!function_exists('get_field'))return;
?>

	<div id="container_single_chalet">
		
		<div id="container_single_chalet_details">
			<div id="container_single_details">
				<h2 id="titre_publication"><?php the_field('nom'); ?></h2>
				<p><?php the_field('description'); ?></p>
					
				<ul>
					<li>Surface: <?php the_field('surface'); ?> m2</li>
					<li>Nombre de pièces : <?php the_field('nombre_de_pieces'); ?></li>
					<li>Nombre de chambres : <?php the_field('nombre_de_chambres'); ?></li>
					<li>Nombre de salles de bain : <?php the_field('nombre_de_sdb'); ?></li>
				</ul>
			</div>
			<div id="affichage_prix">
				<?php the_field('prix'); ?> € <span id="semaine">/ Semaine</span>	
			</div>
			<div class="lien_contact_retour">
				<div class="lien_contact"><a href="http://chaletsetcaviar.mathieu-b.com/contact">Réservez</a></div>
				<div class="lien_retour"><a href="http://chaletsetcaviar.mathieu-b.com/category/a_louer">Retour</a></div>
			</div>
		</div>
		
		<!--affiche les photos-->
		
		<div id="container_single_chalet_photo">
			<div id="container_single_photo">
				
				<div class="post_image">
					<?php $field=get_field('photo'); ?> <!--recupere la valeur du champs dans une variable-->
					<?php if(!empty($field)): ?> <!--vérifie si le champs est vide et n'affiche rien si c'est le cas-->
					<a href="<?php the_field('photo'); ?>"><img src="<?php the_field('photo'); ?>" alt="photo1" /></a>
					<?php endif; ?>
				</div>
				
				<div class="post_image">
					<?php $field=get_field('photo2'); ?>
					<?php if(!empty($field)): ?>
						<a href="<?php the_field('photo2'); ?>"><img src="<?php the_field('photo2'); ?>" alt="photo2" /></a>
					<?php endif; ?>
				</div>
				
				<div class="post_image">
					<?php $field=get_field('photo3'); ?>
					<?php if(!empty($field)): ?>
						<a href="<?php the_field('photo3'); ?>"><img src="<?php the_field('photo3'); ?>" alt="photo3" /></a>
					<?php endif; ?>
				</div>
				
				<div class="post_image">
					<?php $field=get_field('photo4'); ?>
					<?php if(!empty($field)): ?>
						<a href="<?php the_field('photo4'); ?>"><img src="<?php the_field('photo4'); ?>" alt="photo4" /></a>
					<?php endif; ?>	
				</div>
				
				<div class="post_image">
					<?php $field=get_field('photo5'); ?>
					<?php if(!empty($field)): ?>
						<a href="<?php the_field('photo5'); ?>"><img src="<?php the_field('photo5'); ?>" alt="photo5" /></a>
					<?php endif; ?>	
				</div>	
			</div>
		</div>
		
	</div>