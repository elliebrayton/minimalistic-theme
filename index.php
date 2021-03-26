
<?php get_header(); ?>
<div class="container">
    <h1 class="blog-title text-primary text-center py-6">Minimalistic Theme</h1>
    <section class="featured-posts-section row">
        <?php
        //CUSTOM QUERY
        $args = array(
            'post_type'         => 'post',
            'post_status'       => 'published',
            'posts_per_page'    => '4',
            'order'             => 'DESC',
            'orderby'           =>' date',
            'category_name'     => 'featured'
        );

        $query = new WP_query($args);

        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post(); ?>

        <div class="featured-post col-12 col-sm-6 col-lg-3 mb-4 justify-content-between">
            <a href="<?php the_permalink(); ?>" target="_blank" class="link-info">
                <div class="featured-wrapper">
                    <?php 
                    $featured_day = get_the_time('d');
                    ?>
                    <div class="featured-date m-0 p-0">
                        <p><?php echo get_the_date($featured_day) ?><span class="featured-month  m-0 p-0"><?php echo get_the_date('M'); ?></span></p>
                    </div>

                    <div class="featured-post-image"><?php echo get_the_post_thumbnail($query->ID, 'featured-image'); ?></div>
                    <div class="featured-post-overlay"></div>
                    <div class="featured-content fadeIn">
                        <h2 class="featured-post-title"><?php the_title(); ?></h2>
                        <p class="featured-post-text"><?php echo excerpt(15); ?></p>
                    </div>
                </div>
            </a>
        </div>
            <?php } //END WHILE
        } //END IF STATEMENT 
        ?>
        <button class="primary-button my-5">blog posts →</button>
    </section>
    <section class="about-section row mt-4 mb-6">
        <div class="about-image-wrapper col-12 col-lg-4 pb-4 pb-lg-0 align-self-center">
            <?php dynamic_sidebar('about-image'); ?>
        </div>
        <div class="about-text-wrapper col-12 col-lg-8 align-self-center">
            <?php dynamic_sidebar('about-text'); ?>
        </div>
    </section>
    <section class="more-content row mb-6">
        <form class="col-md-7 bg-light p-5">
            <h2 class="form-heading pb-3">Become a Subscriber</h2>
            <div class="form-row pb-3">
                <div class="col-sm-6">            
                    <label for="text">first name</label>
                    <input type="text" name="" id="" class="form-control form-control-sm border-none">
                </div>
                <div class="col-sm-6">
                    <label for="text">last name</label>
                    <input type="text" name="" id="" class="form-control form-control-sm">
                </div>
            </div>
            <div class="form-row">
                <div class="col-12">
                    <label for="email">e-mail</label>
                    <input type="email" class="form-control form-control-sm">
                </div>
            </div>
            <input type="button" value="submit" class="form-button">
        </form>
        <div class="card col-md-4 offset-md-1 my-5 my-md-0">
            <h2 class="card-header text-black rounded-0">Categories</h2>
            <div class="card-body">
                <ul class="list-group list-group-flush pl-3 pt-2">
                    <?php 
                        $tags = get_tags();
                        foreach($tags as $tag){
                            echo '<li class="list-group-item"><a href="'. get_tag_link($tag->term_id) . '">'. $tag->name.'</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>

    </section>
</div>

<?php get_footer(); ?>

