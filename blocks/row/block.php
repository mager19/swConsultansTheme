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

?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?>">
    <div class="container mx-auto">
        <div class="flex flex-wrap px-4">
            <InnerBlocks />
        </div>
    </div>
</div>