<?php
/**
 * $EM_CONF
 *
 * @category Extension
 * @package  AutoloaderHooks
 * @author   Tim Lochmüller
 */

/** @var $_EXTKEY string */
$EM_CONF[$_EXTKEY] = [
    'title'       => 'Autoloader (Hooks - You see a additional message in the recordList view in the footer)',
    'description' => '',
    'constraints' => [
        'depends' => [
            'autoloader' => '1.10.0-9.9.9',
        ],
    ],
];