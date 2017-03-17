<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationServicesOfferedType StructType
 * @subpackage Structs
 */
class VehicleLocationServicesOfferedType extends AbstractStructBase
{
    /**
     * The OnLocationServices
     * @var \ammonkc\otaehi\StructType\OnLocationServices
     */
    public $OnLocationServices;
    /**
     * The OffLocationServices
     * @var \ammonkc\otaehi\StructType\OffLocationServices
     */
    public $OffLocationServices;
    /**
     * The SpecialEquipments
     * @var \ammonkc\otaehi\StructType\SpecialEquipments
     */
    public $SpecialEquipments;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleLocationServicesOfferedType
     * @uses VehicleLocationServicesOfferedType::setOnLocationServices()
     * @uses VehicleLocationServicesOfferedType::setOffLocationServices()
     * @uses VehicleLocationServicesOfferedType::setSpecialEquipments()
     * @uses VehicleLocationServicesOfferedType::setTPA_Extensions()
     * @param \ammonkc\otaehi\StructType\OnLocationServices $onLocationServices
     * @param \ammonkc\otaehi\StructType\OffLocationServices $offLocationServices
     * @param \ammonkc\otaehi\StructType\SpecialEquipments $specialEquipments
     * @param mixed $tPA_Extensions
     */
    public function __construct(\ammonkc\otaehi\StructType\OnLocationServices $onLocationServices = null, \ammonkc\otaehi\StructType\OffLocationServices $offLocationServices = null, \ammonkc\otaehi\StructType\SpecialEquipments $specialEquipments = null, $tPA_Extensions = null)
    {
        $this
            ->setOnLocationServices($onLocationServices)
            ->setOffLocationServices($offLocationServices)
            ->setSpecialEquipments($specialEquipments)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get OnLocationServices value
     * @return \ammonkc\otaehi\StructType\OnLocationServices|null
     */
    public function getOnLocationServices()
    {
        return $this->OnLocationServices;
    }
    /**
     * Set OnLocationServices value
     * @param \ammonkc\otaehi\StructType\OnLocationServices $onLocationServices
     * @return \ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType
     */
    public function setOnLocationServices(\ammonkc\otaehi\StructType\OnLocationServices $onLocationServices = null)
    {
        $this->OnLocationServices = $onLocationServices;
        return $this;
    }
    /**
     * Get OffLocationServices value
     * @return \ammonkc\otaehi\StructType\OffLocationServices|null
     */
    public function getOffLocationServices()
    {
        return $this->OffLocationServices;
    }
    /**
     * Set OffLocationServices value
     * @param \ammonkc\otaehi\StructType\OffLocationServices $offLocationServices
     * @return \ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType
     */
    public function setOffLocationServices(\ammonkc\otaehi\StructType\OffLocationServices $offLocationServices = null)
    {
        $this->OffLocationServices = $offLocationServices;
        return $this;
    }
    /**
     * Get SpecialEquipments value
     * @return \ammonkc\otaehi\StructType\SpecialEquipments|null
     */
    public function getSpecialEquipments()
    {
        return $this->SpecialEquipments;
    }
    /**
     * Set SpecialEquipments value
     * @param \ammonkc\otaehi\StructType\SpecialEquipments $specialEquipments
     * @return \ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType
     */
    public function setSpecialEquipments(\ammonkc\otaehi\StructType\SpecialEquipments $specialEquipments = null)
    {
        $this->SpecialEquipments = $specialEquipments;
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
     * @return \ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType
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
     * @return \ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType
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
