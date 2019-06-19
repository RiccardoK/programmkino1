<?php get_header();?>

<main class="site-main">

    <article class="site-content">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php get_template_part('template_parts/content', 'filme');?>
           <?php comments_template();?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>


        <nav class="pagination">
        <?php previous_post_link();?>
        <?php next_post_link();?>
        </nav>


    </article>

    <?php get_sidebar();?>
</main>

<?php get_footer();?>
