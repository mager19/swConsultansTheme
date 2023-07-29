<?php

/**
 * Block Name
 */

//Creamos un id unico para nuestro block
$block_id = 'logos-' . $block['id'];
if (!empty($block['anchor'])) {
    $block_id = $block['anchor'];
}

//Creamos una clase para nuestro bloque y agregamos las clases añadidas en el editor
$block_class = 'logosBlock';
if (!empty($block['className'])) {
    $block_class .= ' ' . $block['className'];
}


//fields
$logos = get_field('logos_items');
?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?> bg-grey-100 ">
    <div class="container mx-auto py-24 lg:py-20">
        <div class="flex flex-wrap">
            <div class="logos-section px-4">
                <div class="content lg:w-9/12">
                    <?php if (get_field('subtitle_logos')) { ?>
                        <div class="sub-title">
                            <h4 class="text-primary text-body font-bold mb-0">
                                <?php echo get_field('subtitle_logos'); ?>
                            </h4>
                        </div>
                    <?php
                    } ?>

                    <div class="title">
                        <h3 class="md:text-title4 text-title5 text-grey-700 w-7/12 md:w-10/12 md:mt-2 mb-0">
                            <?php echo get_field('title_logos'); ?>

                        </h3>
                    </div>
                    <?php if (get_field('content_logos')) { ?>
                        <div class="paragraph">
                            <p class="text-body text-grey-700 mt-2 md:w-10/12 md:mt-1 mb-0">
                                <?php echo get_field('content_logos', false, false); ?>
                            </p>
                        </div>
                    <?php
                    } ?>

                </div>

                <?php if ($logos) { ?>
                    <div class="logo-list pt-10 md:w-11/12">
                        <ul class="grid grid-cols-2 gap-6 md:gap-8 md:grid-cols-3 m-0 lg:ml-4">
                            <?php foreach ($logos as $item) { ?>
                                <li class="list-none mb-0">
                                    <a class='[&_img]:object-contain' href="<?php echo $item['logo_link'] ?>">
                                        <?php
                                        swConsultans_get_Image($item['logo']);
                                        ?>
                                    </a>
                                </li>
                            <?php
                            } ?>

                        </ul>
                    </div>
                <?php
                } ?>


            </div>
        </div>
    </div>
</div>