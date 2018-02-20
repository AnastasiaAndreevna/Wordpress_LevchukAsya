<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.02.2018
 * Time: 18:16
 */

get_header(); ?>

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

<?php
get_sidebar();
get_footer();