<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.02.2018
 * Time: 18:16
 */
get_header(); ?>

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

<?php
get_sidebar();
get_footer();