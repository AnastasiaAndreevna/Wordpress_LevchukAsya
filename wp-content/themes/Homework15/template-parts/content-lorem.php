<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Panakeia
 */

?>


<div class="container">
    <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3></a>
    <p><?php the_content(); ?></p>
</div>