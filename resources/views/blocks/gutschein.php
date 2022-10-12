<?php
/**
 * Gutschein Template.
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
$class_name = 'gutschein';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>
<?php 
    $link = get_field('button');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">

    <div class="container grid place-items-center">
        <div class="w-full">
            <div class="apple-tv-card-container" style="width:100%;">
                <div class="apple-tv-card">
                    <div class="content" style="background-image:url(<?php the_field('gutschein'); ?>); padding-bottom: 45.251%; background-size:contain;">
                        <!-- Any non-parallax content -->
                    </div>
                    <div class="parallax-content">
                    
                            <a class="bg-okyo-orange text-okyo-black w-72 py-3 self-end mb-16 text-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" style="font-size: 1rem"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>
<?php endif; ?>
