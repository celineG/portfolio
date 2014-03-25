<?php
/**
 * The template for displaying Author pages.
 *
 */
?>
<?php get_header(); ?>
<!-- blog title -->
<!-- <div class="homepage_nav_title section" id="contact">
    <div class="container_24">
        <div class="index_titles blog single"><?php /*if (function_exists('onepage_breadcrumbs'*/)) onepage_breadcrumbs(); ?></div>
    </div>
</div>
<div class="clear"></div> -->
<!-- blog title ends -->
<div class="blog_pages_wrapper default_bg">
    <div class="container_24">
        <div class="grid_24">
            <div class="grid_16 alpha">
                <!--page start-->
                <div class="post">  	
                    <?php if (have_posts()) : the_post(); ?>
                        <h1 class="page-title"><a href="#"><?php printf(AUTHOR_ARCHIVES, "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url(get_the_author_meta('ID')) . "' title='" . esc_attr(get_the_author()) . "' rel='me'>" . get_the_author() . "</a></span>"); ?></a></h1>

                        <?php
                        /* Queue the first post, that way we know who
                         * the author is when we try to get their name,
                         * URL, description, avatar, etc.
                         *
                         * We reset this later so we can run the loop
                         * properly with a call to rewind_posts().
                         */
                        if (have_posts())
                            the_post();
                        ?>
                        <?php
// If a user has filled out their description, show a bio on their entries.
                        if (get_the_author_meta('description')) :
                            ?>
                            <div id="entry-author-info">
                                <div id="author-avatar"> <?php echo get_avatar(get_the_author_meta('user_email'), apply_filters('onepage_author_bio_avatar_size', 60)); ?> </div>
                                <!-- #author-avatar -->
                                <div id="author-description">
                                    <h2><?php printf(ABOUT_AUTHOR, get_the_author()); ?></h2>
                                    <?php the_author_meta('description'); ?>
                                </div>
                                <!-- #author-description	-->
                            </div>
                            <!-- #entry-author-info -->
                        <?php endif; ?>
                        <?php
                        /* Since we called the_post() above, we need to
                         * rewind the loop back to the beginning that way
                         * we can run the loop properly, in full.
                         */
                        rewind_posts();
                        /* Run the loop for the author archive page to output the authors posts
                         * If you want to overload this in a child theme then include a file
                         * called loop-author.php and that will be used instead.
                         */
                        get_template_part('loop', 'author');
                        ?>
                        <div class="clear"></div>
                        <nav id="nav-single"> <span class="nav-previous">
                                <?php next_posts_link(OLDER_POST); ?>
                            </span> <span class="nav-next">
                                <?php previous_posts_link(NEWER_POST); ?>
                            </span> </nav>
                    <?php endif; ?>	
                </div>
                <!--End Page-->
            </div>
            <!--Sidebar-->
            <div class="grid_8 omega">
                <!--Start Sidebar-->
                <?php get_sidebar(); ?>
                <!--End Sidebar-->
            </div>
            <div class="clear"></div>

        </div>
    </div>
</div>

<div class="clear"></div>
<?php get_footer(); ?>