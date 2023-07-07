<?php

/**
 * Block Name
 */

//Creamos un id unico para nuestro block
$block_id = 'intro-page-' . $block['id'];
if (!empty($block['anchor'])) {
    $block_id = $block['anchor'];
}

//Creamos una clase para nuestro bloque y agregamos las clases añadidas en el editor
$block_class = 'introPage';
if (!empty($block['className'])) {
    $block_class .= ' ' . $block['className'];
}


//fields
$title = get_field('intro_page_title', false, false);
$contentBlock = get_field('intro_page_content');
$image = get_field('intro_page_image');

?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?> ">
    <div class="container mx-auto py-15">
        <div class="flex flex-wrap px-4 md:items-center">
            <?php if ($image) { ?>
                <div class="w-full md:w-1/2 md:order-2">
                    <figure class="m-0 w-full md:[&_img]:h-[564px]">
                        <?php
                        swConsultans_get_Image($image);
                        ?>
                    </figure>
                </div>
            <?php
            } ?>

            <div class="w-full md:w-1/2 md:order-1">
                <?php if ($title) { ?>
                    <h3 class="text-title5 md:text-title4 [&_strong]:text-primary py-8 mb-0 text-grey-700 lg:max-w-md">
                        <?php echo $title; ?>
                    </h3>
                <?php
                }  ?>
                <?php if ($contentBlock) { ?>
                    <div class="text-body last:[&_p]:mb-0  [&_p]:text-grey-700 lg:max-w-md">
                        <?php echo $contentBlock; ?>
                    </div>
                <?php
                }  ?>
            </div>
        </div>
    </div>
</div>