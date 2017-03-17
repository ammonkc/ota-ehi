<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleEquipmentPricedType StructType
 * @subpackage Structs
 */
class VehicleEquipmentPricedType extends AbstractStructBase
{
    /**
     * The Equipment
     * @var mixed
     */
    public $Equipment;
    /**
     * The Charge
     * @var mixed
     */
    public $Charge;
    /**
     * The Required
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for VehicleEquipmentPricedType
     * @uses VehicleEquipmentPricedType::setEquipment()
     * @uses VehicleEquipmentPricedType::setCharge()
     * @uses VehicleEquipmentPricedType::setRequired()
     * @param mixed $equipment
     * @param mixed $charge
     * @param bool $required
     */
    public function __construct($equipment = null, $charge = null, $required = null)
    {
        $this
            ->setEquipment($equipment)
            ->setCharge($charge)
            ->setRequired($required);
    }
    /**
     * Get Equipment value
     * @return mixed|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param mixed $equipment
     * @return \ammonkc\otaehi\StructType\VehicleEquipmentPricedType
     */
    public function setEquipment($equipment = null)
    {
        $this->Equipment = $equipment;
        return $this;
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \ammonkc\otaehi\StructType\VehicleEquipmentPricedType
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Get Required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \ammonkc\otaehi\StructType\VehicleEquipmentPricedType
     */
    public function setRequired($required = null)
    {
        $this->Required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleEquipmentPricedType
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
