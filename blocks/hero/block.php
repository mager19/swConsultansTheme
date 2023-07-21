<?php

/**
 * Block Name
 */

//Creamos un id unico para nuestro block
$block_id = 'hero-' . $block['id'];
if (!empty($block['anchor'])) {
    $block_id = $block['anchor'];
}

//Creamos una clase para nuestro bloque y agregamos las clases añadidas en el editor
$block_class = 'heroBlock';
if (!empty($block['className'])) {
    $block_class .= ' ' . $block['className'];
}

//fields
$logos = get_field('logos_items');
$title = get_field('title');
$subtitle = get_field('subtitle');
$image = get_field('background_image');
?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?>">

    <?php
    $pos = strpos('is-style-small', $block['className'] ?? true);

    if ($pos === false) { ?>
        <div class="md:w-full h-[424px] lg:h-[650px] bg-no-repeat bg-cover" style="background-image: url('<?php echo $image; ?>');">
            <div class="container mx-auto h-full">
                <?php if ($title) { ?>
                    <div class="flex justify-center items-center lg:items-end h-full px-4 lg:pb-14 lg:justify-start">
                        <div class="content text-center lg:text-left">
                            <h1 class="text-title3 lg:text-title1 text-white mb-0">
                                <?php echo $title; ?>
                            </h1>
                            <?php if ($subtitle) { ?>
                                <span class='text-button text-white'><?php echo $subtitle; ?></span>
                            <?php
                            } ?>
                        </div>
                    </div>
                <?php
                } ?>

            </div>
        </div>
    <?php
    } else { ?>
        <div class="md:w-full h-[350px] md:h-[351px] bg-no-repeat bg-cover" style="background-image: url('<?php echo $image; ?>');">
            <div class="container mx-auto h-full">
                <div class="flex flex-wrap justify-center md:justify-start h-full items-center">
                    <div class="content-page flex items-center bg-primary md:w-5/12 h-5/6 md:h-full w-10/12 px-4">
                        <h3 class="text-title3 text-white text-center md:text-left py-15 md:py-0 md:w-96 mb-0">
                            <?php the_title(); ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }; ?>

</div>