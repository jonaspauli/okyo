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
<?php
$cocktail = get_field('cocktail');
if( $cocktail ): ?>
<section class="flex flex-row justify-center">
    <div class="flex flex-col cocktail">
        <div class="flip-card w-128 h-128">
        <div class="flip-card-inner ">
            <div class="flip-card-front">
            <img src="<?php echo esc_url( $cocktail['image']['url'] ); ?>" alt="<?php echo esc_url( $cocktail['image']['alt'] ); ?>">
            </div>
            <div class="flip-card-back bg-okyo-tinted justify-center items-center flex text-left p-12">
            <p> <?php echo $cocktail['beschreibung']; ?></p>
            </div>
        </div>
        </div> 
        <div class="ml-12 mt-6">
            <p><?php echo $cocktail['name']; ?></p>
        </div>
    </div>

<?php endif; ?>

<?php
$wein = get_field('wein');
if( $wein ): ?>
    <div class="flex flex-col wein">
        <div class="flip-card w-128 h-128">
        <div class="flip-card-inner">
            <div class="flip-card-front">
            <img src="<?php echo esc_url( $wein['image']['url'] ); ?>" alt="<?php echo esc_url( $wein['image']['alt'] ); ?>">
            </div>
            <div class="flip-card-back bg-okyo-tinted justify-center items-center flex text-left p-12">
            <p> <?php echo $wein['beschreibung']; ?></p>
            </div>
        </div>
        </div> 
        <div class="ml-12 mt-6">
            <p><?php echo $wein['name']; ?></p>
        </div>
    </div>
</section>
<?php endif; ?>