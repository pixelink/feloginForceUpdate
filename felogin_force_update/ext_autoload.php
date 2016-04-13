<?php
/**
 * Created by PhpStorm.
 * User: briezler
 * Date: 07.04.16
 * Time: 15:24
 */

$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('feloginforceupdate');

return [
    'Pixelink\Feloginforceupdate\Hooks\FirstLoginHook' => $extensionPath . 'Classes/Hooks/FirstLoginHook.php',
];
