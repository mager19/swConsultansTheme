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
?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?>">
    <div class="container mx-auto">
        <?php
        $pos = strpos('is-style-small', $block['className']);

        if ($pos === false) { ?>
            <div class="test bg-red-200">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quo magnam recusandae laboriosam praesentium voluptas, mollitia consequuntur ex minima dolorum, quos labore saepe delectus ipsam sunt reprehenderit vero quas consectetur.
            </div>
        <?php
        } else { ?>
            <div class="test bg-green-200">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quo magnam recusandae laboriosam praesentium voluptas, mollitia consequuntur ex minima dolorum, quos labore saepe delectus ipsam sunt reprehenderit vero quas consectetur.
            </div>
        <?php
        }; ?>

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nulla harum doloribus! Odit animi, sequi aut iusto eveniet et suscipit soluta quaerat obcaecati eos, iure dicta quod nulla. Eos, nihil.
    </div>
</div>