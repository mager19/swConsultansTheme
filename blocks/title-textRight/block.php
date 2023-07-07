<?php

/**
 * Block Name
 */

//Creamos un id unico para nuestro block
$block_id = 'title-textRight-' . $block['id'];
if (!empty($block['anchor'])) {
    $block_id = $block['anchor'];
}

//Creamos una clase para nuestro bloque y agregamos las clases añadidas en el editor
$block_class = 'titleTextRight';
if (!empty($block['className'])) {
    $block_class .= ' ' . $block['className'];
}


//fields
$title = get_field('titleblock');
$subtitle = get_field('subtitle_block');
$contentBlock = get_field('content_block');

?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?> bg-grey-100 py-15">
    <div class="container mx-auto">
        <div class="flex flex-wrap px-4 md:items-center">
            <div class="w-full md:w-1/2">
                <h3 class='text-title5 text-primary mb-6'>
                    <?php echo $title; ?>
                </h3>
                <h4 class="text-title5 md:text-title4 md:max-w-md text-grey-700 font-bold">
                    <?php echo $subtitle; ?>
                </h4>
            </div>
            <div class="w-full md:w-1/2 text-body text-grey-700 mt-3 md:mt-5">
                <div class="content md:max-w-md">
                    <?php echo $contentBlock; ?>
                </div>
            </div>
        </div>
    </div>
</div>