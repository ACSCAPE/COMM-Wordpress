<?php get_header(); ?>

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div id="main-header">
      <div id="title_page">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      </div>
      <img id="img-header" style="background-image: url('<?php header_image() ?>');">
    </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
