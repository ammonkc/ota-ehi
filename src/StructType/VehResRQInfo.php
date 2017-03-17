<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehResRQInfo StructType
 * @subpackage Structs
 */
class VehResRQInfo extends AbstractStructBase
{
    /**
     * The ResStatus
     * @var TransactionActionType
     */
    public $ResStatus;
    /**
     * Constructor method for VehResRQInfo
     * @uses VehResRQInfo::setResStatus()
     * @param TransactionActionType $resStatus
     */
    public function __construct(TransactionActionType $resStatus = null)
    {
        $this
            ->setResStatus($resStatus);
    }
    /**
     * Get ResStatus value
     * @return TransactionActionType|null
     */
    public function getResStatus()
    {
        return $this->ResStatus;
    }
    /**
     * Set ResStatus value
     * @param TransactionActionType $resStatus
     * @return \Ammonkc\Otaehi\StructType\VehResRQInfo
     */
    public function setResStatus(TransactionActionType $resStatus = null)
    {
        $this->ResStatus = $resStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehResRQInfo
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
