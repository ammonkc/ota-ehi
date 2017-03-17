<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialEquipments StructType
 * @subpackage Structs
 */
class SpecialEquipments extends AbstractStructBase
{
    /**
     * The SpecialEquipment
     * @var \ammonkc\otaehi\StructType\SpecialEquipment
     */
    public $SpecialEquipment;
    /**
     * Constructor method for SpecialEquipments
     * @uses SpecialEquipments::setSpecialEquipment()
     * @param \ammonkc\otaehi\StructType\SpecialEquipment $specialEquipment
     */
    public function __construct(\ammonkc\otaehi\StructType\SpecialEquipment $specialEquipment = null)
    {
        $this
            ->setSpecialEquipment($specialEquipment);
    }
    /**
     * Get SpecialEquipment value
     * @return \ammonkc\otaehi\StructType\SpecialEquipment|null
     */
    public function getSpecialEquipment()
    {
        return $this->SpecialEquipment;
    }
    /**
     * Set SpecialEquipment value
     * @param \ammonkc\otaehi\StructType\SpecialEquipment $specialEquipment
     * @return \ammonkc\otaehi\StructType\SpecialEquipments
     */
    public function setSpecialEquipment(\ammonkc\otaehi\StructType\SpecialEquipment $specialEquipment = null)
    {
        $this->SpecialEquipment = $specialEquipment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\SpecialEquipments
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
