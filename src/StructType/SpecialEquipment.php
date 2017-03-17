<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialEquipment StructType
 * @subpackage Structs
 */
class SpecialEquipment extends AbstractStructBase
{
    /**
     * The EquipDesc
     * @var \Ammonkc\Otaehi\StructType\FormattedTextType
     */
    public $EquipDesc;
    /**
     * The EquipCharges
     * @var \Ammonkc\Otaehi\StructType\EquipCharges
     */
    public $EquipCharges;
    /**
     * The Type
     * @var OTA_CodeType
     */
    public $Type;
    /**
     * Constructor method for SpecialEquipment
     * @uses SpecialEquipment::setEquipDesc()
     * @uses SpecialEquipment::setEquipCharges()
     * @uses SpecialEquipment::setType()
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $equipDesc
     * @param \Ammonkc\Otaehi\StructType\EquipCharges $equipCharges
     * @param OTA_CodeType $type
     */
    public function __construct(\Ammonkc\Otaehi\StructType\FormattedTextType $equipDesc = null, \Ammonkc\Otaehi\StructType\EquipCharges $equipCharges = null, OTA_CodeType $type = null)
    {
        $this
            ->setEquipDesc($equipDesc)
            ->setEquipCharges($equipCharges)
            ->setType($type);
    }
    /**
     * Get EquipDesc value
     * @return \Ammonkc\Otaehi\StructType\FormattedTextType|null
     */
    public function getEquipDesc()
    {
        return $this->EquipDesc;
    }
    /**
     * Set EquipDesc value
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $equipDesc
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipment
     */
    public function setEquipDesc(\Ammonkc\Otaehi\StructType\FormattedTextType $equipDesc = null)
    {
        $this->EquipDesc = $equipDesc;
        return $this;
    }
    /**
     * Get EquipCharges value
     * @return \Ammonkc\Otaehi\StructType\EquipCharges|null
     */
    public function getEquipCharges()
    {
        return $this->EquipCharges;
    }
    /**
     * Set EquipCharges value
     * @param \Ammonkc\Otaehi\StructType\EquipCharges $equipCharges
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipment
     */
    public function setEquipCharges(\Ammonkc\Otaehi\StructType\EquipCharges $equipCharges = null)
    {
        $this->EquipCharges = $equipCharges;
        return $this;
    }
    /**
     * Get Type value
     * @return OTA_CodeType|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param OTA_CodeType $type
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipment
     */
    public function setType(OTA_CodeType $type = null)
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
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipment
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
