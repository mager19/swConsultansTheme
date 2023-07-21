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
$services = get_field('services');


?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?> bg-grey-100">
    <div class="container mx-auto py-15 lg:py-20">
        <div class="flex flex-wrap px-4">
            <?php if ($titleSection) { ?>
                <div class="w-full">
                    <h3 class="text-title3 lg:text-title2 lg:max-w-lg"><?php echo $titleSection; ?></h3>
                </div>
            <?php
            } ?>

            <?php if ($services) { ?>
                <div class="services__container grid grid-cols-1 gap-8 md:grid-cols-3 pt-0 lg:pt-12">
                    <?php
                    foreach ($services as $service) { ?>
                        <div class="item__service">
                            <h5 class="text-display1 text-primary">
                                <?php echo $service['number']; ?>
                            </h5>
                            <h4 class="text-title6 mb-9 mt-6">
                                <?php echo $service['title_service']; ?>
                            </h4>
                            <p class='text-body text-grey-700'><?php echo $service['description_service']; ?></p>

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