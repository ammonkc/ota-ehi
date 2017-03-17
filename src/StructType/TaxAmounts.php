<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxAmounts StructType
 * @subpackage Structs
 */
class TaxAmounts extends AbstractStructBase
{
    /**
     * The TaxAmount
     * @var \Ammonkc\Otaehi\StructType\TaxAmount
     */
    public $TaxAmount;
    /**
     * Constructor method for TaxAmounts
     * @uses TaxAmounts::setTaxAmount()
     * @param \Ammonkc\Otaehi\StructType\TaxAmount $taxAmount
     */
    public function __construct(\Ammonkc\Otaehi\StructType\TaxAmount $taxAmount = null)
    {
        $this
            ->setTaxAmount($taxAmount);
    }
    /**
     * Get TaxAmount value
     * @return \Ammonkc\Otaehi\StructType\TaxAmount|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param \Ammonkc\Otaehi\StructType\TaxAmount $taxAmount
     * @return \Ammonkc\Otaehi\StructType\TaxAmounts
     */
    public function setTaxAmount(\Ammonkc\Otaehi\StructType\TaxAmount $taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\TaxAmounts
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
