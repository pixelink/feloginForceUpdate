<?php
/**
 * Created by PhpStorm.
 * User: briezler
 * Date: 07.04.16
 * Time: 14:55
 */

$EM_CONF[$_EXTKEY] = array(
    'title' => 'FeLogin Force userdata change',
    'description' => 'Force fe_users to edit their data on first login. After login they get redirected to a page where femanager Plug-In in edit settings is configured.',
    'category' => 'plugin',
    'author' => 'Benjamin Riezler',
    'author_email' => 'support@pixel-ink.de',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.5 - 7.9.99',
            'femanager' => '',
            'felogin' => ''
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
);
