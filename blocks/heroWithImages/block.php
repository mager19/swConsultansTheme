<?php

/**
 * Block Name
 */

//Creamos un id unico para nuestro block
$block_id = 'heroWithImages-' . $block['id'];
if (!empty($block['anchor'])) {
  $block_id = $block['anchor'];
}

//Creamos una clase para nuestro bloque y agregamos las clases añadidas en el editor
$block_class = 'heroWithImages';
if (!empty($block['className'])) {
  $block_class .= ' ' . $block['className'];
}

//fields
$title = get_field('title');
$description = get_field('description', false, false);
$button = get_field('button');
$images = get_field('images');

?>

<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?>">
  <div class="container mx-auto py-12 lg:py-20">
    <div class="flex flex-wrap px-4">
      <div class="content-information md:flex md:items-center">
        <div class="hero__single__content">
          <div class="w-full flex flex-wrap items-center lg:justify-between">
            <div class="title lg:w-7/12">
              <h3 class="text-title4 lg:text-title2 text-grey-700">
                <?php echo $title; ?>
              </h3>
              <p class="description text-body text-grey-700 mb-0">
                <?php echo $description; ?>
              </p>
            </div>
            <div class="cta lg:w-5/12 lg:flex lg:justify-end mt-6 lg:mt-0">
              <a href="<?php echo $button['url']; ?>" class="btn btn--primary">
                <?php echo $button['title']; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php if ($images) { ?>
        <div class="hero__single__images flex flex-col lg:flex-row w-full gap-4 lg:gap-8 mt-7 lg:mt-12">
          <?php
          $flag = 1;
          foreach ($images as $image) {
          ?>
            <?php if ($flag == 1) { ?>
              <div class="hero__images__big w-full h-40 lg:w-8/12 lg:h-128">
                <figure class="h-full w-full m-0 [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
                  <?php swConsultans_get_Image($image['image']); ?>
                </figure>
              </div>
              <div class="hero__images__small flex items-center lg:flex-col gap-x-4 lg:gap-y-8 lg:w-4/12">
              <?php
            } else { ?>
                <div class="left w-full [&_img]:w-full [&_img]:object-cover [&_img]:h-36 [&_img]:lg:h-60">
                  <?php swConsultans_get_Image($image['image']); ?>
                </div>
              <?php
            } ?>
            <?php
            $flag++;
          }
            ?>
              </div>
        </div>
    </div>
  <?php
      } ?>
  </div>