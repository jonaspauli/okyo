<?php
/**
 * OKYO Overlapping Gallery Template.
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
$class_name = 'gallery-overlap';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

?>

<section class="container <?php echo $class_name ?>">
  <?php if( have_rows('gallery') ):
      $row = get_field('gallery');
      $i = 1;
    ?>
    <div class="flex flex-row flex-wrap mb-[15rem]">
        <?php while( have_rows('gallery') ): the_row();?>
        <?php
            if ($i % 2 != 0) {
            echo "<div class=\"w-1/2 mr-[-2rem] mb-[-10rem]\">";
            } else {
            echo "<div class=\"w-1/2 mt-[15rem] ml-[-2rem] mb-[-10rem]\">";
            }
        ?>
            <div class="z-<?php echo $i ?>0 my-lg-4 mb-4 mb-lg-0 relative projekte-fade gallery-rellax">
            <?php 
                    $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>">
                            <div class="darken">
                            <img src="<?php the_sub_field('image') ?>">
                            </div>
                            <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-2xl"><?php the_sub_field('text'); ?></p>
                        </a>
                    <?php endif; ?>
                    <?php 
                    $link = get_sub_field('link');
                    if( !$link ): ?>
                            <div class="darken">
                            <img src="<?php the_sub_field('image') ?>">
                            </div>
                            <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-2xl"><?php the_sub_field('text'); ?></p>
                    <?php endif; ?>
            

            </div>
        </div>
            <?php $i++; ?>
        <?php  endwhile;?>
    </div>

  <?php endif; ?>
</section>