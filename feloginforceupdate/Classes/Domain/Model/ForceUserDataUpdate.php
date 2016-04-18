<?php
/**
 * Created by PhpStorm.
 * User: briezler
 * Date: 13.04.16
 * Time: 22:41
 */

namespace Pixelink\Feloginforceupdate\Domain\Model;


class ForceUserDataUpdate extends \In2code\Femanager\Domain\Model\User
{

    /**
     * changedData
     *
     * @var string
     */
    protected $changedData;



    /**
     * Returns the changedData
     *
     * @return string $changedData
     */
    public function getChangedData() {
        return $this->changedData;
    }

    /**
     * Sets the changedData
     *
     * @param string $changedData
     * @return void
     */
    public function setChangedData($changedData) {
        $this->changedData = $changedData;
    }

}
