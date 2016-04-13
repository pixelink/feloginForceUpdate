<?php


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Pixelink.' . $_EXTKEY,
    'logindatachange',
    'ChangeUserData'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(

    $_EXTKEY,
    'Configuration/TypoScript',
    'Force Change of userdata at first login'
);
