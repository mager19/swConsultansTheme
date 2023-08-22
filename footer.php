<?php

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package swConsultans
 */
?>

</div>
<!--/ Content Page -->

<?php
if (!is_404()) {
    if (!is_home()) {
        get_template_part('template-parts/cta', 'footer');
    }
}
?>

<!-- Footer -->

<footer class="bg-secondary">
    <div class="w-full lg:w-10/12 mx-auto">
        <div class="flex flex-wrap px-4 justify-center">
            <div class="footer-content md:flex md:justify-between md:w-full">
                <div class="logo-text w-full lg:w-6/12">
                    <div class="logo flex justify-center mt-9 md:justify-start">
                        <figure class='m-0 h-40 w-40 lg:h-52 lg:w-52'>
                            <?php
                            $logoFooter = get_field('logo_footer', 'option');
                            swConsultans_get_Image($logoFooter);
                            ?>
                        </figure>
                    </div>

                </div>
                <div class="services-contact lg:flex lg:w-6/12 md:gap-16 justify-between">
                    <div class="services text-center mt-10 md:text-left md:mt-9">
                        <h3 class="text-white text-title6">
                            Our Services
                        </h3>
                        <div class="list mt-4">
                            <?php echo get_field('our_services_footer', 'option'); ?>
                        </div>
                    </div>
                    <div class="contact mt-10 md:mt-9">
                        <h3 class="text-white text-title6 text-center  md:text-left ">
                            Get In Touch
                        </h3>
                        <div class="list mt-4">
                            <ul class="m-0">
                                <li class="list-none mb-0">
                                    <a href="#" class="text-grey-200 text-overline flex items-center gap-2 hover:text-white visited:bg-grey-200 justify-center">
                                        <figure class='m-0'>
                                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0H2C1.175 0 0.5075 0.675 0.5075 1.5L0.5 10.5C0.5 11.325 1.175 12 2 12H14C14.825 12 15.5 11.325 15.5 10.5V1.5C15.5 0.675 14.825 0 14 0ZM14 3L8 6.75L2 3V1.5L8 5.25L14 1.5V3Z" fill="#E4E7EC" />
                                            </svg>
                                        </figure>
                                        <?php echo get_field('email', 'option'); ?>
                                    </a>





                                </li>
                                <li class="mt-3 list-none mb-0">
                                    <a href="tel:<?php echo get_field('phone', 'option'); ?>" class="text-grey-200 text-overline flex items-center gap-2 hover:text-white visited:bg-grey-200 justify-center md:justify-start">
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
                                <div class="social__icons w-4/12 md:w-1/2 flex items-center mx-auto lg:ml-0 gap-2 mt-3">
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
            <div class="line border-t w-full mt-9 flex flex-wrap justify-between [&_p]:mb-1">
                <div class="left w-full lg:w-1/3 [&_p]:text-center lg:[&_p]:text-left">
                    <?php echo get_field('copyright', 'option'); ?>
                </div>
                <div class="right w-full lg:w-2/3 md:px-4 lg:px-0 lg:mb-2">
                    <p class="text-body text-white text-center lg:text-right">
                        <?php echo get_field('bottom_bar', 'option'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="modal-custom-1b" class="modalMenu menuModal">
    <div class="modal__header">
        <button data-iziModal-close class="icon-close">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L15 15M1 15L15 1" stroke="#fff" stroke-width="2" />
            </svg>
        </button>
    </div>

    <div class="modal__content relative">
        <?php
        $GETlogo = get_field('logo_footer', 'option'); ?>
        <a href="<?php echo esc_url(get_bloginfo('url')); ?>">
            <figure class="w-32 h-32">
                <?php if ($GETlogo) {
                    swConsultans_get_Image($GETlogo);
                }
                ?>
            </figure>
        </a>
        <div class="menuMobileModal flex">
            <!--Menu-->
            <?php
            if (has_nav_menu('menu-1')) { ?>

                <?php
                wp_nav_menu(array('theme_location' => 'menu-1'));
                ?>

            <?php
            }
            ?>
            <!--/Menu-->
        </div>
    </div>

</div>

<!--/ Footer -->
</div>
<?php wp_footer(); ?>
</body>

</html>