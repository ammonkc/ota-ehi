<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipmentType StructType
 * @subpackage Structs
 */
class EquipmentType extends AbstractStructBase
{
    /**
     * The AirEquipType
     * @var UNKNOWN
     */
    public $AirEquipType;
    /**
     * The ChangeofGauge
     * @var bool
     */
    public $ChangeofGauge;
    /**
     * The AircraftTailNumber
     * @var string
     */
    public $AircraftTailNumber;
    /**
     * Constructor method for EquipmentType
     * @uses EquipmentType::setAirEquipType()
     * @uses EquipmentType::setChangeofGauge()
     * @uses EquipmentType::setAircraftTailNumber()
     * @param UNKNOWN $airEquipType
     * @param bool $changeofGauge
     * @param string $aircraftTailNumber
     */
    public function __construct(UNKNOWN $airEquipType = null, $changeofGauge = null, $aircraftTailNumber = null)
    {
        $this
            ->setAirEquipType($airEquipType)
            ->setChangeofGauge($changeofGauge)
            ->setAircraftTailNumber($aircraftTailNumber);
    }
    /**
     * Get AirEquipType value
     * @return UNKNOWN|null
     */
    public function getAirEquipType()
    {
        return $this->AirEquipType;
    }
    /**
     * Set AirEquipType value
     * @param UNKNOWN $airEquipType
     * @return \Ammonkc\Otaehi\StructType\EquipmentType
     */
    public function setAirEquipType(UNKNOWN $airEquipType = null)
    {
        $this->AirEquipType = $airEquipType;
        return $this;
    }
    /**
     * Get ChangeofGauge value
     * @return bool|null
     */
    public function getChangeofGauge()
    {
        return $this->ChangeofGauge;
    }
    /**
     * Set ChangeofGauge value
     * @param bool $changeofGauge
     * @return \Ammonkc\Otaehi\StructType\EquipmentType
     */
    public function setChangeofGauge($changeofGauge = null)
    {
        $this->ChangeofGauge = $changeofGauge;
        return $this;
    }
    /**
     * Get AircraftTailNumber value
     * @return string|null
     */
    public function getAircraftTailNumber()
    {
        return $this->AircraftTailNumber;
    }
    /**
     * Set AircraftTailNumber value
     * @param string $aircraftTailNumber
     * @return \Ammonkc\Otaehi\StructType\EquipmentType
     */
    public function setAircraftTailNumber($aircraftTailNumber = null)
    {
        // validation for constraint: string
        if (!is_null($aircraftTailNumber) && !is_string($aircraftTailNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aircraftTailNumber)), __LINE__);
        }
        $this->AircraftTailNumber = $aircraftTailNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\EquipmentType
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
