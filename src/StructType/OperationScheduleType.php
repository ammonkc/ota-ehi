<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationScheduleType StructType
 * @subpackage Structs
 */
class OperationScheduleType extends AbstractStructBase
{
    /**
     * The OperationTimes
     * @var \ammonkc\otaehi\StructType\OperationTimes
     */
    public $OperationTimes;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for OperationScheduleType
     * @uses OperationScheduleType::setOperationTimes()
     * @uses OperationScheduleType::setTPA_Extensions()
     * @param \ammonkc\otaehi\StructType\OperationTimes $operationTimes
     * @param mixed $tPA_Extensions
     */
    public function __construct(\ammonkc\otaehi\StructType\OperationTimes $operationTimes = null, $tPA_Extensions = null)
    {
        $this
            ->setOperationTimes($operationTimes)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get OperationTimes value
     * @return \ammonkc\otaehi\StructType\OperationTimes|null
     */
    public function getOperationTimes()
    {
        return $this->OperationTimes;
    }
    /**
     * Set OperationTimes value
     * @param \ammonkc\otaehi\StructType\OperationTimes $operationTimes
     * @return \ammonkc\otaehi\StructType\OperationScheduleType
     */
    public function setOperationTimes(\ammonkc\otaehi\StructType\OperationTimes $operationTimes = null)
    {
        $this->OperationTimes = $operationTimes;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \ammonkc\otaehi\StructType\OperationScheduleType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OperationScheduleType
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
