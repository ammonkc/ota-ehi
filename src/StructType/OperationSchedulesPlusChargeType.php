<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationSchedulesPlusChargeType StructType
 * @subpackage Structs
 */
class OperationSchedulesPlusChargeType extends AbstractStructBase
{
    /**
     * The OperationSchedule
     * @var \ammonkc\otaehi\StructType\OperationSchedule
     */
    public $OperationSchedule;
    /**
     * Constructor method for OperationSchedulesPlusChargeType
     * @uses OperationSchedulesPlusChargeType::setOperationSchedule()
     * @param \ammonkc\otaehi\StructType\OperationSchedule $operationSchedule
     */
    public function __construct(\ammonkc\otaehi\StructType\OperationSchedule $operationSchedule = null)
    {
        $this
            ->setOperationSchedule($operationSchedule);
    }
    /**
     * Get OperationSchedule value
     * @return \ammonkc\otaehi\StructType\OperationSchedule|null
     */
    public function getOperationSchedule()
    {
        return $this->OperationSchedule;
    }
    /**
     * Set OperationSchedule value
     * @param \ammonkc\otaehi\StructType\OperationSchedule $operationSchedule
     * @return \ammonkc\otaehi\StructType\OperationSchedulesPlusChargeType
     */
    public function setOperationSchedule(\ammonkc\otaehi\StructType\OperationSchedule $operationSchedule = null)
    {
        $this->OperationSchedule = $operationSchedule;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OperationSchedulesPlusChargeType
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
