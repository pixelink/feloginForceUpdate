<?php
/**
 * Created by PhpStorm.
 * User: briezler
 * Date: 07.04.16
 * Time: 15:31
 */

namespace Pixelink\Feloginforceupdate\Hooks;


class FirstLoginHook
{

    /**
     * FeUser Array
     *
     * @var array
     */
    protected $user = array();

    /**
     * TypoScript Settings Array
     *
     * @var array
     */
    protected $settings = array();

    /**
     * fetch typoscript settings
     * fetch user data from user which is logged in
     */
    function __construct() {
        $this->user = $GLOBALS['TSFE']->fe_user->user;
        $this->settings = $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_feloginforceupdate.']['settings.'];
    }


    /**
     * If the firstLogin Change force ist activated and lastlogin has not been updated
     * the redirect takes effect
     */
    public function firstLogin() {
        if ($this->settings['forceDataChange'] == 1 && $this->user['changed_data'] == 0 ) {
            \TYPO3\CMS\Core\Utility\HttpUtility::redirect($this->generateUri($this->settings['firstLoginPid'], 1));
        }
    }

    /**
     * Generate uri to Page
     *
     * @param int $pid Page ID
     * @param int $nc NoCache Parameter
     * @return string
     */
    protected function generateUri($pid = 0, $nc = 0) {
        /** @var \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $cObj */
        $cObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer');
        $uri = $cObj->typoLink_URL(array('parameter' => $pid, 'no_cache' => $nc));
        return $uri;
    }

}