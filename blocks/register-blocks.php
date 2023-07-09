<?php
$blocks = glob(__DIR__ . '/*/block.json');

foreach ($blocks as $block) {
    register_block_type($block);
}
