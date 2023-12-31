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

$size = get_field('size');

if ($size == 'mid') {
    $sizeClass = 'w-full lg:w-8/12';
} else {
    $sizeClass = 'w-full';
}

?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?> py-8 lg:py-14">
    <div class="container mx-auto">
        <div class="flex flex-wrap px-4 [&_ul]:ml-5">
            <div class="<?php echo $sizeClass; ?> mx-auto">
                <InnerBlocks />
            </div>
        </div>
    </div>
</div>