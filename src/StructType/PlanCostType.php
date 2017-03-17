<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlanCostType StructType
 * @subpackage Structs
 */
class PlanCostType extends AbstractStructBase
{
    /**
     * The BasePremium
     * @var \Ammonkc\Otaehi\StructType\BasePremium
     */
    public $BasePremium;
    /**
     * The Charges
     * @var \Ammonkc\Otaehi\StructType\Charges
     */
    public $Charges;
    /**
     * Constructor method for PlanCostType
     * @uses PlanCostType::setBasePremium()
     * @uses PlanCostType::setCharges()
     * @param \Ammonkc\Otaehi\StructType\BasePremium $basePremium
     * @param \Ammonkc\Otaehi\StructType\Charges $charges
     */
    public function __construct(\Ammonkc\Otaehi\StructType\BasePremium $basePremium = null, \Ammonkc\Otaehi\StructType\Charges $charges = null)
    {
        $this
            ->setBasePremium($basePremium)
            ->setCharges($charges);
    }
    /**
     * Get BasePremium value
     * @return \Ammonkc\Otaehi\StructType\BasePremium|null
     */
    public function getBasePremium()
    {
        return $this->BasePremium;
    }
    /**
     * Set BasePremium value
     * @param \Ammonkc\Otaehi\StructType\BasePremium $basePremium
     * @return \Ammonkc\Otaehi\StructType\PlanCostType
     */
    public function setBasePremium(\Ammonkc\Otaehi\StructType\BasePremium $basePremium = null)
    {
        $this->BasePremium = $basePremium;
        return $this;
    }
    /**
     * Get Charges value
     * @return \Ammonkc\Otaehi\StructType\Charges|null
     */
    public function getCharges()
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @param \Ammonkc\Otaehi\StructType\Charges $charges
     * @return \Ammonkc\Otaehi\StructType\PlanCostType
     */
    public function setCharges(\Ammonkc\Otaehi\StructType\Charges $charges = null)
    {
        $this->Charges = $charges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PlanCostType
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
