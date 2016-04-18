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

// Check if class with given femanager namespace is given
if (class_exists('In2\Femanager\Controller\EditController') == true) {
    $className = 'In2\Femanager\Controller\EditController';
} else{
    $className = 'In2code\Femanager\Controller\EditController';
}
/** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
$signalSlotDispatcher->connect(
    $className,
    'updateActionBeforePersist',
    'Pixelink\Feloginforceupdate\Domain\Service\UpdateDataStatus',
    'send',
    FALSE
);