<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnLocationService StructType
 * @subpackage Structs
 */
class OnLocationService extends AbstractStructBase
{
    /**
     * The OnLocServiceDesc
     * @var \Ammonkc\Otaehi\StructType\OnLocServiceDesc
     */
    public $OnLocServiceDesc;
    /**
     * The OperationSchedules
     * @var \Ammonkc\Otaehi\StructType\OperationSchedulesType
     */
    public $OperationSchedules;
    /**
     * The OnLocServiceCharges
     * @var \Ammonkc\Otaehi\StructType\OnLocServiceCharges
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
     * @param \Ammonkc\Otaehi\StructType\OnLocServiceDesc $onLocServiceDesc
     * @param \Ammonkc\Otaehi\StructType\OperationSchedulesType $operationSchedules
     * @param \Ammonkc\Otaehi\StructType\OnLocServiceCharges $onLocServiceCharges
     * @param OnLocationServiceID_Type $type
     */
    public function __construct(\Ammonkc\Otaehi\StructType\OnLocServiceDesc $onLocServiceDesc = null, \Ammonkc\Otaehi\StructType\OperationSchedulesType $operationSchedules = null, \Ammonkc\Otaehi\StructType\OnLocServiceCharges $onLocServiceCharges = null, OnLocationServiceID_Type $type = null)
    {
        $this
            ->setOnLocServiceDesc($onLocServiceDesc)
            ->setOperationSchedules($operationSchedules)
            ->setOnLocServiceCharges($onLocServiceCharges)
            ->setType($type);
    }
    /**
     * Get OnLocServiceDesc value
     * @return \Ammonkc\Otaehi\StructType\OnLocServiceDesc|null
     */
    public function getOnLocServiceDesc()
    {
        return $this->OnLocServiceDesc;
    }
    /**
     * Set OnLocServiceDesc value
     * @param \Ammonkc\Otaehi\StructType\OnLocServiceDesc $onLocServiceDesc
     * @return \Ammonkc\Otaehi\StructType\OnLocationService
     */
    public function setOnLocServiceDesc(\Ammonkc\Otaehi\StructType\OnLocServiceDesc $onLocServiceDesc = null)
    {
        $this->OnLocServiceDesc = $onLocServiceDesc;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return \Ammonkc\Otaehi\StructType\OperationSchedulesType|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param \Ammonkc\Otaehi\StructType\OperationSchedulesType $operationSchedules
     * @return \Ammonkc\Otaehi\StructType\OnLocationService
     */
    public function setOperationSchedules(\Ammonkc\Otaehi\StructType\OperationSchedulesType $operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get OnLocServiceCharges value
     * @return \Ammonkc\Otaehi\StructType\OnLocServiceCharges|null
     */
    public function getOnLocServiceCharges()
    {
        return $this->OnLocServiceCharges;
    }
    /**
     * Set OnLocServiceCharges value
     * @param \Ammonkc\Otaehi\StructType\OnLocServiceCharges $onLocServiceCharges
     * @return \Ammonkc\Otaehi\StructType\OnLocationService
     */
    public function setOnLocServiceCharges(\Ammonkc\Otaehi\StructType\OnLocServiceCharges $onLocServiceCharges = null)
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
     * @return \Ammonkc\Otaehi\StructType\OnLocationService
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
     * @return \Ammonkc\Otaehi\StructType\OnLocationService
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
