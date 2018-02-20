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
    <div style="float: left; width: 50%; margin-top: 5rem; margin-bottom: 5rem">
        <a href="<?php the_permalink(); ?>"
        <h2 style="font-weight: bold; font-size: 25px; color: black"><?php the_title(); ?></h2></a>
        <p class="paragraphs""><?php the_content(); ?></p>
        <a style="color: white" href="<?php echo get_theme_mod('buttons2_link') ?>"
           class="link-sign1"><?php echo get_theme_mod('buttons2_text') ?></a>
    </div>
</div>