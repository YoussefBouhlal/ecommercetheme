<?php
/**
 * The template part for displaying posts
 * 
 * @package Ucef
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p>Published by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?><br />
            Categories: <span><?php the_category( ' ' ); ?></span><br />
            <?php if( has_tag() ): ?>
                Tags: <span><?php the_tags( '', ', ' ); ?></span>
            <?php endif; ?>
            </p>
        </div>
        <div class="post-thumbnail">
            <?php
                if( has_post_thumbnail() ):
                    the_post_thumbnail( 'ucef-lab-blog', array( 'class' => 'img-fluid') );
                endif;
            ?>
        </div>
    </header>
    <div class="content">
        <?php
            wp_link_pages( array(
                'befor'     => '<p class="inner-pagination">' . 'Pages',
                'after'     => '</p>',
            ));
        ?>
        <?php the_content(); ?>
    </div>
</article>