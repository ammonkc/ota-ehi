<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedCoverages StructType
 * @subpackage Structs
 */
class PricedCoverages extends AbstractStructBase
{
    /**
     * The PricedCoverage
     * @var mixed
     */
    public $PricedCoverage;
    /**
     * Constructor method for PricedCoverages
     * @uses PricedCoverages::setPricedCoverage()
     * @param mixed $pricedCoverage
     */
    public function __construct($pricedCoverage = null)
    {
        $this
            ->setPricedCoverage($pricedCoverage);
    }
    /**
     * Get PricedCoverage value
     * @return mixed|null
     */
    public function getPricedCoverage()
    {
        return $this->PricedCoverage;
    }
    /**
     * Set PricedCoverage value
     * @param mixed $pricedCoverage
     * @return \Ammonkc\Otaehi\StructType\PricedCoverages
     */
    public function setPricedCoverage($pricedCoverage = null)
    {
        $this->PricedCoverage = $pricedCoverage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PricedCoverages
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
