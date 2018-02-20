<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.02.2018
 * Time: 18:09
 */
get_header(); ?>

    <section class="ournews_background" style="background-color: #edeff1;">
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
                <ul>
                    <li class="fixed"><a href="<?php echo get_theme_mod('buttons1_link') ?>"
                                         class="read-link"><?php echo get_theme_mod('buttons1_text') ?></a></li>
                    <li><a href="<?php echo get_theme_mod('buttons1_link') ?>"
                           class="read-link"><?php echo get_theme_mod('buttons1_text') ?></a></li>
                    <li><a href="<?php echo get_theme_mod('buttons1_link') ?>"
                           class="read-link"><?php echo get_theme_mod('buttons1_text') ?></a></li>
                </ul>
            </article>
        </div>
    </section>
<?php
get_sidebar();
get_footer();