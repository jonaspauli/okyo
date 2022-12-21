<?php
/**
 * OKYO Fam Block Template.
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
$class_name = 'okyo-fam';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>

<?php

// Check rows existexists.
if( have_rows('fam') ): ?>
    <section> 
        <div class="sticky-container">
            <main class="flex overflow-x-scroll hide-scroll-bar sticky top-28">
    <?php while( have_rows('fam') ) : the_row();
            $image = get_sub_field('bild')
                ?>
                <div class="inline-block px-3">
                    <div class="w-75vh">
                    <?php if( !empty( $image ) ): ?>
                        <img class="object-cover h-80vh w-75vh" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                        <div class="pt-4">
                            <p><?php the_sub_field('name'); ?></p>
                            <p><?php the_sub_field('position'); ?></p>
                        </div>
                    </div>
                </div>
        <?php endwhile; ?>
    </main>
    </div>
    </section>

<?php else :  ?>
<?php endif; ?>