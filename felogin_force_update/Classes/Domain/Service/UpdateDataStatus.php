<?php
/**
 * Created by PhpStorm.
 * User: briezler
 * Date: 13.04.16
 * Time: 22:06
 */

namespace Pixelink\Feloginforceupdate\Domain\Service;


class UpdateDataStatus
{
    /**
     * Update changed_data Status if user changed his userdata on first login
     *
     * @param \In2code\Femanager\Domain\Model\User $user
     * @param \In2code\Femanager\Controller\EditController $pObj
     * @return void
     */


    public function send($user, $pObj) {


        $updateUser = $user->getUid();
        $fieldValues = array('changed_data' => 1);

        $GLOBALS['TYPO3_DB']->exec_UPDATEquery(
            'fe_users',
            'uid = ' . $updateUser,
            $fieldValues
        );


    }

}