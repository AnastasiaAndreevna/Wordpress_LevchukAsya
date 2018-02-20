<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Panakeia
 */

get_header(); ?>
    <main xmlns="http://www.w3.org/1999/html">
        <section style="background: url(<?php echo get_theme_mod('main_bg'); ?>;) no-repeat top center / cover;">
            <div class="container">
                <div class="title">
                    <h1><?php echo get_theme_mod('main_heading') ?></h1>

                    <?php
                    $args = [
                        'post_type' => 'list_of_dishes',

                    ];
                    query_posts($args);

                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', 'list_of_dishes');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.

                    ?>

                </div>
                <a href="<?php echo get_theme_mod('buttons1_link') ?>"
                   class="button-read"><?php echo get_theme_mod('buttons1_text') ?></a>
            </div>
        </section>
        <section class="ournews">
            <div class="container">
                <article>
                    <h2 class="title-ournews"><?php echo get_theme_mod('title_section1') ?></h2>
                    <?php
                    $args = [
                        'post_type' => 'our_news',

                    ];
                    query_posts($args);

                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', 'our_news');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.

                    ?>
                    <ul class="buttons-container">
                        <li><a href="<?php echo get_theme_mod('buttons1_link') ?>"
                               class="read-link"><?php echo get_theme_mod('buttons1_text') ?></a></li>
                        <li><a href="<?php echo get_theme_mod('buttons1_link') ?>"
                               class="read-link"><?php echo get_theme_mod('buttons1_text') ?></a></li>
                        <li><a href="<?php echo get_theme_mod('buttons1_link') ?>"
                               class="read-link"><?php echo get_theme_mod('buttons1_text') ?></a></li>
                    </ul>
                </article>
            </div>
        </section>
        <section class="newsletter-background"
                 style="background: url(<?php echo get_theme_mod('section_backgrounds'); ?>;) no-repeat bottom center/cover; margin-top: -3rem">
            <div class="container">
                <h3><?php echo get_theme_mod('title_section2') ?></h3>
                <p class="paragraphs"><?php echo get_theme_mod('section_content') ?></p>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="<?php echo get_theme_mod('input_1') ?>">
                    <input type="submit" name="submit" value="<?php echo get_theme_mod('input_2') ?>">
                </form>
            </div>
        </section>
        <section class="list-ipsum clearfix">
            <div class="container">
                <?php
                $args = [
                    'post_type' => 'ipsum',

                ];
                query_posts($args);

                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'ipsum');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.

                ?>
            </div>
        </section>
    </main>
<?php
get_sidebar();
get_footer();
