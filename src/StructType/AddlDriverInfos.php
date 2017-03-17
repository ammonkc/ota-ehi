<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddlDriverInfos StructType
 * @subpackage Structs
 */
class AddlDriverInfos extends AbstractStructBase
{
    /**
     * The AddlDriverInfo
     * @var \Ammonkc\Otaehi\StructType\AddlDriverInfo
     */
    public $AddlDriverInfo;
    /**
     * The Vehicles
     * @var \Ammonkc\Otaehi\StructType\Vehicles
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
     * @param \Ammonkc\Otaehi\StructType\AddlDriverInfo $addlDriverInfo
     * @param \Ammonkc\Otaehi\StructType\Vehicles $vehicles
     * @param UNKNOWN $chargeType
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AddlDriverInfo $addlDriverInfo = null, \Ammonkc\Otaehi\StructType\Vehicles $vehicles = null, UNKNOWN $chargeType = null)
    {
        $this
            ->setAddlDriverInfo($addlDriverInfo)
            ->setVehicles($vehicles)
            ->setChargeType($chargeType);
    }
    /**
     * Get AddlDriverInfo value
     * @return \Ammonkc\Otaehi\StructType\AddlDriverInfo|null
     */
    public function getAddlDriverInfo()
    {
        return $this->AddlDriverInfo;
    }
    /**
     * Set AddlDriverInfo value
     * @param \Ammonkc\Otaehi\StructType\AddlDriverInfo $addlDriverInfo
     * @return \Ammonkc\Otaehi\StructType\AddlDriverInfos
     */
    public function setAddlDriverInfo(\Ammonkc\Otaehi\StructType\AddlDriverInfo $addlDriverInfo = null)
    {
        $this->AddlDriverInfo = $addlDriverInfo;
        return $this;
    }
    /**
     * Get Vehicles value
     * @return \Ammonkc\Otaehi\StructType\Vehicles|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \Ammonkc\Otaehi\StructType\Vehicles $vehicles
     * @return \Ammonkc\Otaehi\StructType\AddlDriverInfos
     */
    public function setVehicles(\Ammonkc\Otaehi\StructType\Vehicles $vehicles = null)
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
     * @return \Ammonkc\Otaehi\StructType\AddlDriverInfos
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
     * @return \Ammonkc\Otaehi\StructType\AddlDriverInfos
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
