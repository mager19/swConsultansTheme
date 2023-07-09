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
$block_class = 'cta';
if (!empty($block['className'])) {
    $block_class .= ' ' . $block['className'];
}


//fields
$content = get_field('contentcta');
$image = get_field('backgroundcta');
$link = get_field('link');

if ($image) {
    $background = 'background-image: url(' .  $image . ')';
} else {
    $background = 'background_color:#670067';
}

?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?> bg-secondary">
    <div class="w-full md:w-screen">
        <div class="flex flex-wrap lg:h-[140px]">
            <div class="w-full md:w-8/12 flex justify-center items-center bg-center bg-cover py-8 lg:py-0" style='<?php echo $background; ?>'>
                <h4 class="max-w-xs md:max-w-md lg:max-w-2xl text-center text-title5 text-white mb-0">
                    <?php echo $content; ?>
                </h4>
            </div>

            <div class="w-full md:w-4/12 flex items-center justify-center py-5 lg:py-0">
                <a href="<?php echo $link['url']; ?>" class="btn btn--outline">
                    <?php echo $link['title']; ?>
                </a>
            </div>
        </div>
    </div>
</div>