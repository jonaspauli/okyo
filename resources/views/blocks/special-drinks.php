<?php
/**
 * OKYO Special Drinks Template.
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

<?php if( have_rows('cocktail') ): ?>
<section class="grid container overflow-visible grid-cols-1 sm:grid-cols-2 justify-center">

<?php while( have_rows('cocktail') ): the_row(); 
        $image = get_sub_field('image');
        ?>
        <div class="flex justify-center items-center mb-10">
            <div class="flex flex-col">
                <div class="flip-card w-80 h-80 sm:w-128 sm:h-128">
                    <div class="flip-card-inner ">
                        <div class="flip-card-front">
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                        <div class="flip-card-back bg-okyo-tinted justify-center text-center leading-loose items-center flex p-12">
                        <?php echo the_sub_field('beschreibung'); ?>
                        </div>
                    </div>
                </div> 
                <div class="pl-12 pt-6">
                    <p><?php echo the_sub_field('name'); ?></p>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
</section>
<?php endif; ?>