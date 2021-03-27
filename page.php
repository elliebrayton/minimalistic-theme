<?php 
    /* Template Name: Page */
    get_header() 
?>
<div class="container">
    <h1 class="page-title text-primary text-left py-6"><?php echo the_title();?></h1>
    <section class="row">
        <!--START MAIN -->
        <main class="col-lg-9">
            <article class="page-content">
            <?php the_content(); ?>
            </article>
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