<?php

/**
 * Block Name
 */

//Creamos un id unico para nuestro block
$block_id = 'services-block-' . $block['id'];
if (!empty($block['anchor'])) {
    $block_id = $block['anchor'];
}

//Creamos una clase para nuestro bloque y agregamos las clases añadidas en el editor
$block_class = 'servicesBlock';
if (!empty($block['className'])) {
    $block_class .= ' ' . $block['className'];
}

//Fields
$titleSection = get_field('title_services_block');
$description = get_field('description');
$services = get_field('services');

$pos = strpos('is-style-dark', $block['className'] ?? true);

if ($pos === false) {
    $bg = 'bg-grey-100';
    $tx = 'text-grey-700';
} else {
    $bg = 'bg-grey-700';
    $tx = 'text-white';
}

?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?> <?php echo $bg; ?>">
    <div class="container mx-auto py-15 lg:py-20">
        <div class="flex flex-wrap px-4">

            <div class="w-full">
                <?php
                if ($titleSection) { ?>
                    <h3 class="text-title3 lg:text-title2 lg:max-w-lg <?php echo $tx; ?>"><?php echo $titleSection; ?></h3>
                <?php
                }
                ?>
                <?php
                if ($description) { ?>
                    <p class='text-body <?php echo $tx; ?> lg:max-w-xl'>
                        <?php echo $description; ?>
                    </p>
                <?php
                }
                ?>
            </div>


            <?php if ($services) { ?>
                <div class="services__container grid grid-cols-1 gap-8 md:grid-cols-3 pt-0 lg:pt-12">
                    <?php
                    foreach ($services as $service) { ?>
                        <div class="item__service">
                            <h5 class="text-display1 text-primary">
                                <?php echo $service['number']; ?>
                            </h5>
                            <h4 class="text-title6 mb-9 mt-6 <?php echo $tx; ?>">
                                <?php echo $service['title_service']; ?>
                            </h4>
                            <p class='text-body <?php echo $tx; ?>'><?php echo $service['description_service']; ?></p>
                            <?php if ($service['link_service']) { ?>
                                <a class="text-primary text-button visited:text-primary font-bold" href="<?php echo $service['link_service']['url']; ?>">
                                    <?php echo $service['link_service']['title']; ?>
                                </a>
                            <?php
                            } ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php

            } ?>
        </div>
    </div>
</div>