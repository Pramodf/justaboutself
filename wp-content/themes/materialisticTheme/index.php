<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pramod lapi
 * Date: 7/25/15
 * Time: 5:16 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<?php get_header(); ?>
    <div class="row">
        <div class="col s12 m12"></div>
    </div>

    <div class="row">
    <div class="col s12 m9">
        <?php
        query_posts( 'posts_per_page=5' );
        if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="col s12 m12">
                    <div class="card blue-grey darken-1 card-panel hoverable">
                        <div class="card-content white-text">
                            <span class="card-title"><?php the_title(); ?></span>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                        <div class="card-action">
                            <a href="#">Posted on <?php the_time('F jS, Y') ?></a>
                            <a href="#">By <?=get_the_author();?></a>
                        </div>
                    </div>
                </div>
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
    <div class="col s12 m3">
           <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>