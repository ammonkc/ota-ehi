<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionableAmount StructType
 * @subpackage Structs
 */
class CommissionableAmount extends AbstractStructBase
{
    /**
     * The TaxInclusiveIndicator
     * @var bool
     */
    public $TaxInclusiveIndicator;
    /**
     * Constructor method for CommissionableAmount
     * @uses CommissionableAmount::setTaxInclusiveIndicator()
     * @param bool $taxInclusiveIndicator
     */
    public function __construct($taxInclusiveIndicator = null)
    {
        $this
            ->setTaxInclusiveIndicator($taxInclusiveIndicator);
    }
    /**
     * Get TaxInclusiveIndicator value
     * @return bool|null
     */
    public function getTaxInclusiveIndicator()
    {
        return $this->TaxInclusiveIndicator;
    }
    /**
     * Set TaxInclusiveIndicator value
     * @param bool $taxInclusiveIndicator
     * @return \Ammonkc\Otaehi\StructType\CommissionableAmount
     */
    public function setTaxInclusiveIndicator($taxInclusiveIndicator = null)
    {
        $this->TaxInclusiveIndicator = $taxInclusiveIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CommissionableAmount
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
