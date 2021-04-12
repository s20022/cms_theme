<?php get_header(); ?>

    <div class="siteinfo">
        <div class="container">
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <p><?php bloginfo( 'description' ); ?></p>
</div>
</div>
</header>

<div class="container">

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>


    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

</article>

<?php endwhile; endif; ?>

</div> <!-- container -->

<?php get_footer(); ?>