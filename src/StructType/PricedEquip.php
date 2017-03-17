<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedEquip StructType
 * @subpackage Structs
 */
class PricedEquip extends AbstractStructBase
{
    /**
     * The Equipment
     * @var \Ammonkc\Otaehi\StructType\Equipment
     */
    public $Equipment;
    /**
     * The Charge
     * @var mixed
     */
    public $Charge;
    /**
     * Constructor method for PricedEquip
     * @uses PricedEquip::setEquipment()
     * @uses PricedEquip::setCharge()
     * @param \Ammonkc\Otaehi\StructType\Equipment $equipment
     * @param mixed $charge
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Equipment $equipment = null, $charge = null)
    {
        $this
            ->setEquipment($equipment)
            ->setCharge($charge);
    }
    /**
     * Get Equipment value
     * @return \Ammonkc\Otaehi\StructType\Equipment|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param \Ammonkc\Otaehi\StructType\Equipment $equipment
     * @return \Ammonkc\Otaehi\StructType\PricedEquip
     */
    public function setEquipment(\Ammonkc\Otaehi\StructType\Equipment $equipment = null)
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
     * @return \Ammonkc\Otaehi\StructType\PricedEquip
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
     * @return \Ammonkc\Otaehi\StructType\PricedEquip
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
