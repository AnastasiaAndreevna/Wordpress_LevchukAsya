<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Panakeia
 */

?>


<div style="float: left; width: 33%; text-align: center">
    <img style="margin-top: 90px" <?php the_post_thumbnail(); ?>
    <h2 class="titles" style="text-align: center; color: black"><?php the_title(); ?></h2>
    <a href="<?php the_permalink(); ?>"
    <p class="paragraphs" style="color: black; text-align: center"><?php the_content(); ?></p></a>
</div>