<?php

use Phan\Config;

return [
    'backward_compatibility_checks' => false,

    'minimum_severity' => 7,

    'directory_list' => [
        'vendor',
        'includes',
    ],

    'file_list' => [
        'test/phpstan-bootstrap.php',
        'tests/test-tools/class-mock-progress-bar.php',
        'tests/test-tools/utils.php',
        'woocommerce-custom-orders-table.php',
    ],

    'exclude_analysis_directory_list' => [
        'test',
        'vendor',
    ],
];
