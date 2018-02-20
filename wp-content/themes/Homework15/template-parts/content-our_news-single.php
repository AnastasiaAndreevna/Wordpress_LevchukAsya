<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.02.2018
 * Time: 2:04
 */
?>

<div class="container">
    <div style="text-align: center; margin-top: 30px">
        <img <?php the_post_thumbnail(); ?>
        <h2 style="text-align: center; font-weight: bold; font-size: 25px;"><?php the_title(); ?></h2>
        <a href="<?php the_permalink(); ?>"
        <p class="paragraphs" style="color: black; text-align: center"><?php the_content(); ?></p>
        </a>
    </div>
</div>
