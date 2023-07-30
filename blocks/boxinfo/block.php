<?php

/**
 * Block Name
 */

//Creamos un id unico para nuestro block
$block_id = 'boxinfo-' . $block['id'];
if (!empty($block['anchor'])) {
  $block_id = $block['anchor'];
}

//Creamos una clase para nuestro bloque y agregamos las clases añadidas en el editor
$block_class = 'boxinfo';
if (!empty($block['className'])) {
  $block_class .= ' ' . $block['className'];
}

$title = get_field('title_block');
$boxtitle = get_field('boxinfo_title');
$boxcontent = get_field('boxinfo_content');
$description = get_field('description', false, false);
$contact = get_field('form_shortcode');

?>
<div id="<?php echo $block_id ?>" class="<?php echo $block_class ?>">
  <div class="container mx-auto py-15 lg:py-20">
    <div class="flex flex-wrap items-center px-4">
      <div class="w-full lg:w-1/2 lg:pr-8">
        <div class="title">
          <?php if ($title) { ?>
            <h2 class='text-title3 text-grey-700'><?php echo $title; ?></h2>
          <?php
          } ?>

          <?php if ($description) { ?>
            <p class="text-body text-grey-700"><?php echo $description; ?></p>
          <?php
          } ?>
        </div>
        <div class="form">
          <?php echo $contact; ?>
        </div>
      </div>

      <div class="w-full lg:w-1/2">
        <div class="content bg-primary py-15 px-8">
          <div class="title">
            <h3 class="text-title4 text-white w-full md:w-11/12">
              <?php echo $boxtitle; ?>
            </h3>
          </div>
          <div class="paragraph w-11/12">
            <p class="text-bodyBold text-white mt-4 md:mt-3">
              <?php echo $boxcontent; ?>
            </p>
          </div>

          <div class="list mt-4">
            <ul class="m-0">
              <li class="list-none mb-0">
                <a href="#" class="text-white text-overline flex items-center gap-2 hover:opacity-80 visited:bg-white justify-start">
                  <figure class='m-0'>
                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14 0H2C1.175 0 0.5075 0.675 0.5075 1.5L0.5 10.5C0.5 11.325 1.175 12 2 12H14C14.825 12 15.5 11.325 15.5 10.5V1.5C15.5 0.675 14.825 0 14 0ZM14 3L8 6.75L2 3V1.5L8 5.25L14 1.5V3Z" fill="#fff" />
                    </svg>
                  </figure>
                  <?php echo get_field('email', 'option'); ?>
                </a>
              </li>
              <li class="mt-3 list-none mb-0">
                <a href="tel:<?php echo get_field('phone', 'option'); ?>" class="text-white text-overline flex items-center gap-2 hover:opacity-80 visited:bg-white justify-start">
                  <figure class='m-0'>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2.965 6.0925C4.045 8.215 5.785 9.9475 7.9075 11.035L9.5575 9.385C9.76 9.1825 10.06 9.115 10.3225 9.205C11.1625 9.4825 12.07 9.6325 13 9.6325C13.4125 9.6325 13.75 9.97 13.75 10.3825V13C13.75 13.4125 13.4125 13.75 13 13.75C5.9575 13.75 0.25 8.0425 0.25 1C0.25 0.5875 0.5875 0.25 1 0.25H3.625C4.0375 0.25 4.375 0.5875 4.375 1C4.375 1.9375 4.525 2.8375 4.8025 3.6775C4.885 3.94 4.825 4.2325 4.615 4.4425L2.965 6.0925Z" fill="#E4E7EC" />
                    </svg>
                  </figure>
                  <?php echo get_field('phone', 'option'); ?>
                </a>
              </li>

            </ul>
            <?php
            $rows = get_field('social_icons', 'option');
            if ($rows) { ?>
              <div class="social__icons w-4/12 md:w-1/2 flex items-center lg:ml-0 gap-2 mt-3">
                <?php
                foreach ($rows as $row) { ?>
                  <a href="<?php echo $row['social_profile']; ?>" target='_blank'>
                    <div class="icon-<?php echo $row['social_icon']['value']; ?>">
                    </div>
                  </a>
                <?php
                } ?>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>