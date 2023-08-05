<?php

/**
 * Button Custom
 */

//Creamos un id unico para nuestro block
$block_id = 'buttonCustom-' . $block['id'];
if (!empty($block['anchor'])) {
    $block_id = $block['anchor'];
}

//Creamos una clase para nuestro bloque y agregamos las clases añadidas en el editor
$block_class = 'buttonCustom';
if (!empty($block['className'])) {
    $block_class .= ' ' . $block['className'];
}

// Block text alignment
if (!empty($block['align'])) {
    $alignment = 'text-' . $block['align'];
} else {
    $alignment = '';
}

$link = get_field('button');

?>
<div class="test <?php echo $alignment; ?>">
    <a id="<?php echo $block_id ?>" href="<?php echo $link['url']; ?>" class="<?php echo $block_class ?> inline-flex btn btn--primary">
        <?php echo $link['title']; ?>
    </a>
</div>