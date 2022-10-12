<?php
/**
 * OKYO Textband Template.
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
$class_name = 'textband';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>

<section> 
        <div class="sticky-container">
            <main class="flex overflow-x-hidden hide-scroll-bar sticky top-40">
            <?php 
            $link = get_field('link');
            if( $link ): ?>
                <a href="<?php echo esc_url( $link ); ?>"><p class="text-9xl"><span><?php the_field('text'); ?></span><span><?php the_field('text'); ?></span></p></a>
            <?php endif; ?>
            </main>
    </div>
    </section>
