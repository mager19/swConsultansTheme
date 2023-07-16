<?php

/**
 * Block Name
 */

//Creamos un id unico para nuestro block
$block_id = 'gridServices-' . $block['id'];
if (!empty($block['anchor'])) {
    $block_id = $block['anchor'];
}

//Creamos una clase para nuestro bloque y agregamos las clases añadidas en el editor
$block_class = 'gridServices';
if (!empty($block['className'])) {
    $block_class .= ' ' . $block['className'];
}

//fields
$title = get_field('title');
$description = get_field('description', false, false);
$image = get_field('background_image');
$services = get_field('select_services');
?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?>">
    <div class="container mx-auto py-15">
        <div class="flex flex-wrap px-4 md:justify-center">
            <div class="services-content">
                <div class="information-page md:text-center">
                    <div class="title">
                        <h3 class="text-title6 text-grey-700 mb-0">
                            <?php echo $title; ?>
                        </h3>
                    </div>
                    <div class="paragraph mt-6 md:mt-2">
                        <p class="text-title5 md:text-title4 text-grey-700 w-full md:mx-auto md:w-7/12 font-poppins">
                            <?php echo $description; ?>
                        </p>
                    </div>
                </div>

                <?php
                if ($services) { ?>
                    <div class="gridServices__item grid grid-cols-1 md:grid-cols-3 gap-8 mt-6 md:mt-16">
                        <?php
                        foreach ($services as $service) { ?>
                            <div class="item">
                                <?php
                                $image = get_the_post_thumbnail_url($service->ID);
                                if ($image) { ?>
                                    <img class='border-b-2 border-primary w-full lg:w-72 h-96 object-cover' src="<?php echo $image; ?>" alt="<?php echo $service->post_title; ?>">
                                <?php
                                }
                                ?>
                                <a href='<?php echo get_permalink($service->ID); ?>' class="inline-flex font-poppins text-title6 text-grey-700 mt-3 md:mt-4 lg:max-w-[250px] visited:text-grey-700 hover:opacity-80 cursor-pointer">
                                    <?php echo $service->post_title; ?>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                }
                ?>

                <!--
                    <div class="image">
                        <img class="md:h-[330px] md:w-72" src="/img/img1.png" alt="image">
                        <p class="text-title6 text-grey-700 mt-3 md:mt-4">
                            Quantity Surveying
                        </p>
                    </div> -->


            </div>
        </div>
    </div>
</div>