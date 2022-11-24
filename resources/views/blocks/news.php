<?php
/**
 * OKYO News Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'hero-bg-image';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>

<section class="pb-32 <?php echo $class_name ?>">
    <div class="sticky-container">
      <main class="flex overflow-x-hidden hide-scroll-bar sticky top-10">
            <?php
        // Define our WP Query Parameters
        $the_query = new WP_Query( array(
            'posts_per_page'   => 6,
        ) );
        ?>
        <?php
        // Start our WP Query
        while ($the_query -> have_posts()) : $the_query -> the_post();
        // Display the Post Title with Hyperlink
        ?>
        <article class="inline-block px-3">
            <div class="w-128">
            <div>
                <?php the_post_thumbnail('full', ['class' => 'object-cover h-60vh w-128']); ?>
            </div>
            <div class="my-8 flex flex-col">
                <?php echo get_the_date(); ?>
                <a class="text-xl font-semibold" href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </div>
            <div>
                <div class="line-clamp-4 text-sm leading-relaxed w-2/3"><?php the_excerpt(); ?></div>
            </div>
            </div>
        </article>
      <?php
      // Repeat the process and reset once it hits the limit
      endwhile;
      wp_reset_postdata();
      ?>
        </main>
    </div>
    <!--div class="row">
        <div class="col text-center">
            <a href="<?php echo home_url() ?>/overview" class="btn btn-outline-light rounded-pill">Alle Beiträge</a>
        </div>
    </div -->
</section>
