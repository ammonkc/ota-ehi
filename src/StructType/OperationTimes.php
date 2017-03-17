<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationTimes StructType
 * @subpackage Structs
 */
class OperationTimes extends AbstractStructBase
{
    /**
     * The OperationTime
     * @var \ammonkc\otaehi\StructType\OperationTime
     */
    public $OperationTime;
    /**
     * Constructor method for OperationTimes
     * @uses OperationTimes::setOperationTime()
     * @param \ammonkc\otaehi\StructType\OperationTime $operationTime
     */
    public function __construct(\ammonkc\otaehi\StructType\OperationTime $operationTime = null)
    {
        $this
            ->setOperationTime($operationTime);
    }
    /**
     * Get OperationTime value
     * @return \ammonkc\otaehi\StructType\OperationTime|null
     */
    public function getOperationTime()
    {
        return $this->OperationTime;
    }
    /**
     * Set OperationTime value
     * @param \ammonkc\otaehi\StructType\OperationTime $operationTime
     * @return \ammonkc\otaehi\StructType\OperationTimes
     */
    public function setOperationTime(\ammonkc\otaehi\StructType\OperationTime $operationTime = null)
    {
        $this->OperationTime = $operationTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OperationTimes
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
