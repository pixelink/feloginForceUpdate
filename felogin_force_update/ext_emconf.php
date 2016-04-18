<?php
/**
 * Created by PhpStorm.
 * User: briezler
 * Date: 07.04.16
 * Time: 14:55
 */

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Force fe user data update',
    'description' => 'Force fe_users to edit their data on first login. After login they get redirected to a page where femanager Plug-In in edit settings is configured.',
    'category' => 'plugin',
    'author' => 'Benjamin Riezler',
    'author_email' => 'support@pixel-ink.de',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0 - 7.9.99',
            'femanager' => '',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
);
