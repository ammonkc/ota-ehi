<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationServicesOfferedType StructType
 * @subpackage Structs
 */
class VehicleLocationServicesOfferedType extends AbstractStructBase
{
    /**
     * The OnLocationServices
     * @var \Ammonkc\Otaehi\StructType\OnLocationServices
     */
    public $OnLocationServices;
    /**
     * The OffLocationServices
     * @var \Ammonkc\Otaehi\StructType\OffLocationServices
     */
    public $OffLocationServices;
    /**
     * The SpecialEquipments
     * @var \Ammonkc\Otaehi\StructType\SpecialEquipments
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
     * @param \Ammonkc\Otaehi\StructType\OnLocationServices $onLocationServices
     * @param \Ammonkc\Otaehi\StructType\OffLocationServices $offLocationServices
     * @param \Ammonkc\Otaehi\StructType\SpecialEquipments $specialEquipments
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\OnLocationServices $onLocationServices = null, \Ammonkc\Otaehi\StructType\OffLocationServices $offLocationServices = null, \Ammonkc\Otaehi\StructType\SpecialEquipments $specialEquipments = null, $tPA_Extensions = null)
    {
        $this
            ->setOnLocationServices($onLocationServices)
            ->setOffLocationServices($offLocationServices)
            ->setSpecialEquipments($specialEquipments)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get OnLocationServices value
     * @return \Ammonkc\Otaehi\StructType\OnLocationServices|null
     */
    public function getOnLocationServices()
    {
        return $this->OnLocationServices;
    }
    /**
     * Set OnLocationServices value
     * @param \Ammonkc\Otaehi\StructType\OnLocationServices $onLocationServices
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType
     */
    public function setOnLocationServices(\Ammonkc\Otaehi\StructType\OnLocationServices $onLocationServices = null)
    {
        $this->OnLocationServices = $onLocationServices;
        return $this;
    }
    /**
     * Get OffLocationServices value
     * @return \Ammonkc\Otaehi\StructType\OffLocationServices|null
     */
    public function getOffLocationServices()
    {
        return $this->OffLocationServices;
    }
    /**
     * Set OffLocationServices value
     * @param \Ammonkc\Otaehi\StructType\OffLocationServices $offLocationServices
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType
     */
    public function setOffLocationServices(\Ammonkc\Otaehi\StructType\OffLocationServices $offLocationServices = null)
    {
        $this->OffLocationServices = $offLocationServices;
        return $this;
    }
    /**
     * Get SpecialEquipments value
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipments|null
     */
    public function getSpecialEquipments()
    {
        return $this->SpecialEquipments;
    }
    /**
     * Set SpecialEquipments value
     * @param \Ammonkc\Otaehi\StructType\SpecialEquipments $specialEquipments
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType
     */
    public function setSpecialEquipments(\Ammonkc\Otaehi\StructType\SpecialEquipments $specialEquipments = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType
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
