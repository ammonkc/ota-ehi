<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialEquipPrefs StructType
 * @subpackage Structs
 */
class SpecialEquipPrefs extends AbstractStructBase
{
    /**
     * The SpecialEquipPref
     * @var \Ammonkc\Otaehi\StructType\SpecialEquipPref
     */
    public $SpecialEquipPref;
    /**
     * The Charge
     * @var mixed
     */
    public $Charge;
    /**
     * Constructor method for SpecialEquipPrefs
     * @uses SpecialEquipPrefs::setSpecialEquipPref()
     * @uses SpecialEquipPrefs::setCharge()
     * @param \Ammonkc\Otaehi\StructType\SpecialEquipPref $specialEquipPref
     * @param mixed $charge
     */
    public function __construct(\Ammonkc\Otaehi\StructType\SpecialEquipPref $specialEquipPref = null, $charge = null)
    {
        $this
            ->setSpecialEquipPref($specialEquipPref)
            ->setCharge($charge);
    }
    /**
     * Get SpecialEquipPref value
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPref|null
     */
    public function getSpecialEquipPref()
    {
        return $this->SpecialEquipPref;
    }
    /**
     * Set SpecialEquipPref value
     * @param \Ammonkc\Otaehi\StructType\SpecialEquipPref $specialEquipPref
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPrefs
     */
    public function setSpecialEquipPref(\Ammonkc\Otaehi\StructType\SpecialEquipPref $specialEquipPref = null)
    {
        $this->SpecialEquipPref = $specialEquipPref;
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
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPrefs
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPrefs
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
