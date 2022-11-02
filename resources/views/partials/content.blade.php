<article class="col-lg-4 mb-4 all-posts">
            <div class="image mb-3">
              <?php
              if( class_exists('Dynamic_Featured_Image') ) {
   global $dynamic_featured_image;

   $featured_images = $dynamic_featured_image->get_featured_images( );
   //print_r($featured_images);

   //You can now loop through the image to display them as required
   foreach($featured_images as $featured_image) {
       echo "<img src='".$featured_image['full']."'>";
   }

}
            ?>
            </div>
            <div class="category my-1">
                <?php
                    $postcategories = get_the_category();
                    if ($postcategories) {
                        foreach($postcategories as $category) {
                        $category_link = get_category_link($category->term_id);
                        echo '<a href="' . $category_link . '">' . $category->name . '</a>&nbsp;&nbsp; ';
                        }
                    }
                ?>
            </div>
            <div class="date my-1">
                <?php echo get_the_date(); ?>
                </div>
            <div class="tags my-2">
                <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach($posttags as $tag) {
                        $tag_link = get_tag_link($tag->term_id);
                        echo '<a class="btn btn-small rounded-pill btn-primary mb-1" href="' . $tag_link . '">' . $tag->name . ' </a>&nbsp;&nbsp; ';
                        }
                    }
                ?>
            </div>
            <div class="title my-3 pr-3">
                <h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            </div>
        </article>
