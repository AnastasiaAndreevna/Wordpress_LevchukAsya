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
    <div class="ournews" style=" float: left; width: 33%; text-align: center;">
        <img <?php the_post_thumbnail(); ?>
        <h2 style="text-align: center; font-weight: bold; font-size: 25px;"><?php the_title(); ?></h2>
        <a href="<?php the_permalink(); ?>"
        <p class="paragraphs" style="color: black; text-align: center"><?php the_content(); ?></p>
        </a>
    </div>
</div>
