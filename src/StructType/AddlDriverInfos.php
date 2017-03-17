<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddlDriverInfos StructType
 * @subpackage Structs
 */
class AddlDriverInfos extends AbstractStructBase
{
    /**
     * The AddlDriverInfo
     * @var \ammonkc\otaehi\StructType\AddlDriverInfo
     */
    public $AddlDriverInfo;
    /**
     * The Vehicles
     * @var \ammonkc\otaehi\StructType\Vehicles
     */
    public $Vehicles;
    /**
     * The ChargeType
     * @var UNKNOWN
     */
    public $ChargeType;
    /**
     * Constructor method for AddlDriverInfos
     * @uses AddlDriverInfos::setAddlDriverInfo()
     * @uses AddlDriverInfos::setVehicles()
     * @uses AddlDriverInfos::setChargeType()
     * @param \ammonkc\otaehi\StructType\AddlDriverInfo $addlDriverInfo
     * @param \ammonkc\otaehi\StructType\Vehicles $vehicles
     * @param UNKNOWN $chargeType
     */
    public function __construct(\ammonkc\otaehi\StructType\AddlDriverInfo $addlDriverInfo = null, \ammonkc\otaehi\StructType\Vehicles $vehicles = null, UNKNOWN $chargeType = null)
    {
        $this
            ->setAddlDriverInfo($addlDriverInfo)
            ->setVehicles($vehicles)
            ->setChargeType($chargeType);
    }
    /**
     * Get AddlDriverInfo value
     * @return \ammonkc\otaehi\StructType\AddlDriverInfo|null
     */
    public function getAddlDriverInfo()
    {
        return $this->AddlDriverInfo;
    }
    /**
     * Set AddlDriverInfo value
     * @param \ammonkc\otaehi\StructType\AddlDriverInfo $addlDriverInfo
     * @return \ammonkc\otaehi\StructType\AddlDriverInfos
     */
    public function setAddlDriverInfo(\ammonkc\otaehi\StructType\AddlDriverInfo $addlDriverInfo = null)
    {
        $this->AddlDriverInfo = $addlDriverInfo;
        return $this;
    }
    /**
     * Get Vehicles value
     * @return \ammonkc\otaehi\StructType\Vehicles|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \ammonkc\otaehi\StructType\Vehicles $vehicles
     * @return \ammonkc\otaehi\StructType\AddlDriverInfos
     */
    public function setVehicles(\ammonkc\otaehi\StructType\Vehicles $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Get ChargeType value
     * @return UNKNOWN|null
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @param UNKNOWN $chargeType
     * @return \ammonkc\otaehi\StructType\AddlDriverInfos
     */
    public function setChargeType(UNKNOWN $chargeType = null)
    {
        $this->ChargeType = $chargeType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\AddlDriverInfos
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
