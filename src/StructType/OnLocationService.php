<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnLocationService StructType
 * @subpackage Structs
 */
class OnLocationService extends AbstractStructBase
{
    /**
     * The OnLocServiceDesc
     * @var \ammonkc\otaehi\StructType\OnLocServiceDesc
     */
    public $OnLocServiceDesc;
    /**
     * The OperationSchedules
     * @var \ammonkc\otaehi\StructType\OperationSchedulesType
     */
    public $OperationSchedules;
    /**
     * The OnLocServiceCharges
     * @var \ammonkc\otaehi\StructType\OnLocServiceCharges
     */
    public $OnLocServiceCharges;
    /**
     * The Type
     * @var OnLocationServiceID_Type
     */
    public $Type;
    /**
     * Constructor method for OnLocationService
     * @uses OnLocationService::setOnLocServiceDesc()
     * @uses OnLocationService::setOperationSchedules()
     * @uses OnLocationService::setOnLocServiceCharges()
     * @uses OnLocationService::setType()
     * @param \ammonkc\otaehi\StructType\OnLocServiceDesc $onLocServiceDesc
     * @param \ammonkc\otaehi\StructType\OperationSchedulesType $operationSchedules
     * @param \ammonkc\otaehi\StructType\OnLocServiceCharges $onLocServiceCharges
     * @param OnLocationServiceID_Type $type
     */
    public function __construct(\ammonkc\otaehi\StructType\OnLocServiceDesc $onLocServiceDesc = null, \ammonkc\otaehi\StructType\OperationSchedulesType $operationSchedules = null, \ammonkc\otaehi\StructType\OnLocServiceCharges $onLocServiceCharges = null, OnLocationServiceID_Type $type = null)
    {
        $this
            ->setOnLocServiceDesc($onLocServiceDesc)
            ->setOperationSchedules($operationSchedules)
            ->setOnLocServiceCharges($onLocServiceCharges)
            ->setType($type);
    }
    /**
     * Get OnLocServiceDesc value
     * @return \ammonkc\otaehi\StructType\OnLocServiceDesc|null
     */
    public function getOnLocServiceDesc()
    {
        return $this->OnLocServiceDesc;
    }
    /**
     * Set OnLocServiceDesc value
     * @param \ammonkc\otaehi\StructType\OnLocServiceDesc $onLocServiceDesc
     * @return \ammonkc\otaehi\StructType\OnLocationService
     */
    public function setOnLocServiceDesc(\ammonkc\otaehi\StructType\OnLocServiceDesc $onLocServiceDesc = null)
    {
        $this->OnLocServiceDesc = $onLocServiceDesc;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return \ammonkc\otaehi\StructType\OperationSchedulesType|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param \ammonkc\otaehi\StructType\OperationSchedulesType $operationSchedules
     * @return \ammonkc\otaehi\StructType\OnLocationService
     */
    public function setOperationSchedules(\ammonkc\otaehi\StructType\OperationSchedulesType $operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get OnLocServiceCharges value
     * @return \ammonkc\otaehi\StructType\OnLocServiceCharges|null
     */
    public function getOnLocServiceCharges()
    {
        return $this->OnLocServiceCharges;
    }
    /**
     * Set OnLocServiceCharges value
     * @param \ammonkc\otaehi\StructType\OnLocServiceCharges $onLocServiceCharges
     * @return \ammonkc\otaehi\StructType\OnLocationService
     */
    public function setOnLocServiceCharges(\ammonkc\otaehi\StructType\OnLocServiceCharges $onLocServiceCharges = null)
    {
        $this->OnLocServiceCharges = $onLocServiceCharges;
        return $this;
    }
    /**
     * Get Type value
     * @return OnLocationServiceID_Type|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param OnLocationServiceID_Type $type
     * @return \ammonkc\otaehi\StructType\OnLocationService
     */
    public function setType(OnLocationServiceID_Type $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OnLocationService
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
