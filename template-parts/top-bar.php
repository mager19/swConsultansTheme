<div class="topbar bg-secondary">
    <div class="container mx-auto">
        <div class="flex flex-wrap px-4">
            <div class="email w-8/12 md:w-1/2">
                <a href="mailto: <?php echo get_field('email', 'option'); ?>" class="text-white flex items-center gap-2 text-overline hover:text-white hover:opacity-80 visited:text-white">
                    <figure>
                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 0H2C1.175 0 0.5075 0.675 0.5075 1.5L0.5 10.5C0.5 11.325 1.175 12 2 12H14C14.825 12 15.5 11.325 15.5 10.5V1.5C15.5 0.675 14.825 0 14 0ZM14 3L8 6.75L2 3V1.5L8 5.25L14 1.5V3Z" fill="white" />
                        </svg>
                    </figure>
                    <?php echo get_field('email', 'option'); ?>
                </a>
            </div>

            <?php
            $rows = get_field('social_icons', 'option');
            if ($rows) { ?>
                <div class="social__icons w-4/12 md:w-1/2 flex items-center justify-end gap-2">
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