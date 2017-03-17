<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlanCostType StructType
 * @subpackage Structs
 */
class PlanCostType extends AbstractStructBase
{
    /**
     * The BasePremium
     * @var \ammonkc\otaehi\StructType\BasePremium
     */
    public $BasePremium;
    /**
     * The Charges
     * @var \ammonkc\otaehi\StructType\Charges
     */
    public $Charges;
    /**
     * Constructor method for PlanCostType
     * @uses PlanCostType::setBasePremium()
     * @uses PlanCostType::setCharges()
     * @param \ammonkc\otaehi\StructType\BasePremium $basePremium
     * @param \ammonkc\otaehi\StructType\Charges $charges
     */
    public function __construct(\ammonkc\otaehi\StructType\BasePremium $basePremium = null, \ammonkc\otaehi\StructType\Charges $charges = null)
    {
        $this
            ->setBasePremium($basePremium)
            ->setCharges($charges);
    }
    /**
     * Get BasePremium value
     * @return \ammonkc\otaehi\StructType\BasePremium|null
     */
    public function getBasePremium()
    {
        return $this->BasePremium;
    }
    /**
     * Set BasePremium value
     * @param \ammonkc\otaehi\StructType\BasePremium $basePremium
     * @return \ammonkc\otaehi\StructType\PlanCostType
     */
    public function setBasePremium(\ammonkc\otaehi\StructType\BasePremium $basePremium = null)
    {
        $this->BasePremium = $basePremium;
        return $this;
    }
    /**
     * Get Charges value
     * @return \ammonkc\otaehi\StructType\Charges|null
     */
    public function getCharges()
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @param \ammonkc\otaehi\StructType\Charges $charges
     * @return \ammonkc\otaehi\StructType\PlanCostType
     */
    public function setCharges(\ammonkc\otaehi\StructType\Charges $charges = null)
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
     * @return \ammonkc\otaehi\StructType\PlanCostType
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
