<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationSchedulesType StructType
 * @subpackage Structs
 */
class OperationSchedulesType extends AbstractStructBase
{
    /**
     * The OperationSchedule
     * @var mixed
     */
    public $OperationSchedule;
    /**
     * Constructor method for OperationSchedulesType
     * @uses OperationSchedulesType::setOperationSchedule()
     * @param mixed $operationSchedule
     */
    public function __construct($operationSchedule = null)
    {
        $this
            ->setOperationSchedule($operationSchedule);
    }
    /**
     * Get OperationSchedule value
     * @return mixed|null
     */
    public function getOperationSchedule()
    {
        return $this->OperationSchedule;
    }
    /**
     * Set OperationSchedule value
     * @param mixed $operationSchedule
     * @return \Ammonkc\Otaehi\StructType\OperationSchedulesType
     */
    public function setOperationSchedule($operationSchedule = null)
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
     * @return \Ammonkc\Otaehi\StructType\OperationSchedulesType
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
