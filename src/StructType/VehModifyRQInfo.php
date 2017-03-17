<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehModifyRQInfo StructType
 * @subpackage Structs
 */
class VehModifyRQInfo extends AbstractStructBase
{
    /**
     * The Action
     * @var ActionType
     */
    public $Action;
    /**
     * Constructor method for VehModifyRQInfo
     * @uses VehModifyRQInfo::setAction()
     * @param ActionType $action
     */
    public function __construct(ActionType $action = null)
    {
        $this
            ->setAction($action);
    }
    /**
     * Get Action value
     * @return ActionType|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param ActionType $action
     * @return \Ammonkc\Otaehi\StructType\VehModifyRQInfo
     */
    public function setAction(ActionType $action = null)
    {
        $this->Action = $action;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehModifyRQInfo
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
