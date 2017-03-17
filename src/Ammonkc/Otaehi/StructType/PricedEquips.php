<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedEquips StructType
 * @subpackage Structs
 */
class PricedEquips extends AbstractStructBase
{
    /**
     * The PricedEquip
     * @var mixed
     */
    public $PricedEquip;
    /**
     * Constructor method for PricedEquips
     * @uses PricedEquips::setPricedEquip()
     * @param mixed $pricedEquip
     */
    public function __construct($pricedEquip = null)
    {
        $this
            ->setPricedEquip($pricedEquip);
    }
    /**
     * Get PricedEquip value
     * @return mixed|null
     */
    public function getPricedEquip()
    {
        return $this->PricedEquip;
    }
    /**
     * Set PricedEquip value
     * @param mixed $pricedEquip
     * @return \Ammonkc\Otaehi\StructType\PricedEquips
     */
    public function setPricedEquip($pricedEquip = null)
    {
        $this->PricedEquip = $pricedEquip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PricedEquips
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
