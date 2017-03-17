<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehModifyRSCore StructType
 * @subpackage Structs
 */
class VehModifyRSCore extends AbstractStructBase
{
    /**
     * The ModifyStatus
     * @var string
     */
    public $ModifyStatus;
    /**
     * Constructor method for VehModifyRSCore
     * @uses VehModifyRSCore::setModifyStatus()
     * @param string $modifyStatus
     */
    public function __construct($modifyStatus = null)
    {
        $this
            ->setModifyStatus($modifyStatus);
    }
    /**
     * Get ModifyStatus value
     * @return string|null
     */
    public function getModifyStatus()
    {
        return $this->ModifyStatus;
    }
    /**
     * Set ModifyStatus value
     * @param string $modifyStatus
     * @return \Ammonkc\Otaehi\StructType\VehModifyRSCore
     */
    public function setModifyStatus($modifyStatus = null)
    {
        // validation for constraint: string
        if (!is_null($modifyStatus) && !is_string($modifyStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modifyStatus)), __LINE__);
        }
        $this->ModifyStatus = $modifyStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehModifyRSCore
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
