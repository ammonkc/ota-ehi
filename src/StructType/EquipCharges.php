<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipCharges StructType
 * @subpackage Structs
 */
class EquipCharges extends AbstractStructBase
{
    /**
     * The EquipCharge
     * @var \Ammonkc\Otaehi\StructType\EquipCharge
     */
    public $EquipCharge;
    /**
     * Constructor method for EquipCharges
     * @uses EquipCharges::setEquipCharge()
     * @param \Ammonkc\Otaehi\StructType\EquipCharge $equipCharge
     */
    public function __construct(\Ammonkc\Otaehi\StructType\EquipCharge $equipCharge = null)
    {
        $this
            ->setEquipCharge($equipCharge);
    }
    /**
     * Get EquipCharge value
     * @return \Ammonkc\Otaehi\StructType\EquipCharge|null
     */
    public function getEquipCharge()
    {
        return $this->EquipCharge;
    }
    /**
     * Set EquipCharge value
     * @param \Ammonkc\Otaehi\StructType\EquipCharge $equipCharge
     * @return \Ammonkc\Otaehi\StructType\EquipCharges
     */
    public function setEquipCharge(\Ammonkc\Otaehi\StructType\EquipCharge $equipCharge = null)
    {
        $this->EquipCharge = $equipCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\EquipCharges
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
