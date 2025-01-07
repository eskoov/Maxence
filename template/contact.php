<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
Contact html 
<aside>
<br>
<br>
<h2><?php the_field("email"); ?></h2>

<hr>

<h2>coordonnees</h2>
<?php
$coordinates = get_field("coordinates");?>
<p>Lattitude : <?php echo($coordinates["lattitude"])?></p>
<p>Longitude: <?php echo($coordinates["longitude"]) ?></p>

<hr>

<h2>Bulle de dessin</h2>
<?php $image = get_field("image"); ?>
    <img src="<?php echo ($image["sizes"]["custom_size"]); ?>" height="<?php echo ($image["sizes"]["custom_size-height"]);?>" width="<?php echo ($image["sizes"]["custom_size-width"]); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>

</aside>
<?php get_footer(); ?>