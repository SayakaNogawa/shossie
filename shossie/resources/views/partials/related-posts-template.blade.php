<?php if (!empty($related_posts)) { ?>
    <div class="futher-reading">
        <h3 class="widget-title"><?php _e('Related articles', 'wpcrumbs'); ?></h3>

        <ul class="related-posts-list">
            <?php
            foreach ($related_posts as $post) {
                setup_postdata($post);
            ?>
            <li class="related-post">
                <a class="related-title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php if (has_post_thumbnail()) { ?>
                    <div class="thumb">
                        <?php echo get_the_post_thumbnail(null, 'medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                    </div>
                    <?php } ?>
                    <p class="category"><?php get_the_category(); ?></h4>
                    <h4 class="related-post-title"><?php the_title(); ?></h4>
                </a>
            </li>
            <?php } ?>
        </ul>
        <div class="clearfix"></div>
    </div>
<?php
}