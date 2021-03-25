<?php get_header(); ?>
<div class="container">
    <h1 class="blog-title text-primary text-center py-5">Minimalistic Theme</h1>
    <section class="featured-posts-section row">
        <?php
        //Custom Query
        $args = array(
            'post_type' => 'post',
            'post_status' => 'published',
            'posts_per_page' => '4',
            'order' => 'ASC',
            'orderby' =>'date',
            'category_name' => 'featured'
        );

        $query = new WP_query($args);

        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post(); ?>

    <div class="featured-post col-12 col-sm-6 col-lg-3 mb-4 justify-content-between">
    <div class="featured-wrapper">
      <div class="featured-post-image"><?php echo get_the_post_thumbnail($query->ID, 'featured-image'); ?></div>
      <div class="featured-post-overlay"></div>
      <div class="featured-content fadeIn">
          <h2 class="feature-post-title"><?php the_title(); ?></h2>
          <p class="feature-post-text"><?php the_excerpt(); ?></p>
      </div>
    </div>
  </div>



        
            <?php } //END WHILE
            } //END IF STATEMENT 
            ?>

    </section>

</div>

<?php get_footer(); ?>

