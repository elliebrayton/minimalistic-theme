
<?php get_header() ?>
<div class="container">
    <h1 class="page-title text-primary text-left py-6">
    <?php 
        if(is_category()){
            single_cat_title();
        }elseif(is_tag()){
            single_tag_title();
        }elseif(is_day()){
            echo "Daily Archives: " . get_the_date();
        }elseif(is_month()){
            echo "Monthly Archives: " . get_the_date('F Y');
        }elseif(is_year()){
            echo "Year Archives: " . get_the_date('Y');
        }else{
            echo "Archives";
        }
    ?>
    </h1>
    <section class="row">
        <!--START MAIN -->
        <main class="col-lg-9">
            <section class="archive-container">

            <?php if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                    <div class="individual-post-wrapper row mb-4">
                            <div class="individual-post-image col-md-4">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    </div>
                        <div class="individual-post-content col-md-8">
                            <h2 class="individual-post-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="individual-post"><?php echo excerpt(30)?>
                                <span class="read-more"><a href="<?php the_permalink(); ?>">Go To Post →</a></span></p>
                    </div>
                    </div>
                <?php
                } //ENDS WHILE
                minimalistic_pagination();
            }//ENDS IF STATEMENT

            ?>
            </section>

        </main>
        <!--END MAIN-->
        <!--START ASIDE -->
        <aside class="col-lg-3">
            <div class="card">
                <h3 class="card-header text-black rounded-0 archive-header">Archive</h3>
                <div class="card-body">
                    <ul class="list-group list-group-flush pl-3 pt-2">
                        <?php wp_get_archives(array(
                            'type' => 'monthly',
                            'before' => '<li class="list-group-item archive-link">',
                            'after' => '</li>',
                        )
                        ); ?>
                    </ul>
                </div>
            </div>
            <div class="card">
                <h3 class="card-header text-black rounded-0 archive-header">Categories</h3>
                <div class="card-body">
                    <ul class="list-group list-group-flush pl-3 pt-2">
                        <?php 
                            $categories = get_categories();
                            foreach ($categories as $cat) {
                                $category_link = get_category_link($cat->cat_ID);
                                echo '<li class="list-group-item archive-link"><a href="'.esc_url( $category_link ).'" title="'.esc_attr($cat->name).'">'.$cat->name.'</a></li>';
                                }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="card">
                <h3 class="card-header text-black rounded-0 archive-header">Tags</h3>
                <div class="card-body">
                    <ul class="list-group list-group-flush pl-3 pt-2">
                        <?php 
                            $tags = get_tags();
                            foreach($tags as $tag){
                                echo '<li class="list-group-item archive-link"><a href="'. get_tag_link($tag->term_id) . '">'. $tag->name.'</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
            </aside>
        <!-- END ASIDE -->
    </section>
</div>

<?php get_footer()?>