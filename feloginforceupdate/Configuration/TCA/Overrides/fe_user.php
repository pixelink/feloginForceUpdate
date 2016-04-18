<?php



$tmp_feuserextend_columns = [

    'changed_data' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:feloginforceupdate/Resources/Private/Language/locallang_db.xlf:datachangedStatus',
        'config' => [
            'type' => 'input',
            'size' => 1,
            'eval' => 'int'
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tmp_feuserextend_columns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', ',--div--;LLL:EXT:feloginforceupdate/Resources/Private/Language/locallang_db.xlf:feUsersTab,changed_data');