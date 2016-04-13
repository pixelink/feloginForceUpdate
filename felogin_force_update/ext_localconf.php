<?php
/**
 * Created by PhpStorm.
 * User: briezler
 * Date: 07.04.16
 * Time: 14:55
 */

if (!defined ('TYPO3_MODE'))
    die ('Access denied.');

// Hook FE Login
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['login_confirmed']['first_login'] = 'Pixelink\Feloginforceupdate\Hooks\FirstLoginHook->firstLogin';


// Hook FeManager after editing
/** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
$signalSlotDispatcher->connect(
    'In2code\Femanager\Controller\EditController',
    'updateActionBeforePersist',
    'Pixelink\Feloginforceupdate\Domain\Service\UpdateDataStatus',
    'send',
    FALSE
);