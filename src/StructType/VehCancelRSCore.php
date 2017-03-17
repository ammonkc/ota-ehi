<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehCancelRSCore StructType
 * @subpackage Structs
 */
class VehCancelRSCore extends AbstractStructBase
{
    /**
     * The CancelStatus
     * @var TransactionStatusType
     */
    public $CancelStatus;
    /**
     * Constructor method for VehCancelRSCore
     * @uses VehCancelRSCore::setCancelStatus()
     * @param TransactionStatusType $cancelStatus
     */
    public function __construct(TransactionStatusType $cancelStatus = null)
    {
        $this
            ->setCancelStatus($cancelStatus);
    }
    /**
     * Get CancelStatus value
     * @return TransactionStatusType|null
     */
    public function getCancelStatus()
    {
        return $this->CancelStatus;
    }
    /**
     * Set CancelStatus value
     * @param TransactionStatusType $cancelStatus
     * @return \Ammonkc\Otaehi\StructType\VehCancelRSCore
     */
    public function setCancelStatus(TransactionStatusType $cancelStatus = null)
    {
        $this->CancelStatus = $cancelStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehCancelRSCore
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
