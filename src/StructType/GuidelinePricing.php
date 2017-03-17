<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuidelinePricing StructType
 * @subpackage Structs
 */
class GuidelinePricing extends AbstractStructBase
{
    /**
     * The MaximumPrice
     * @var mixed
     */
    public $MaximumPrice;
    /**
     * The Method
     * @var mixed
     */
    public $Method;
    /**
     * Constructor method for GuidelinePricing
     * @uses GuidelinePricing::setMaximumPrice()
     * @uses GuidelinePricing::setMethod()
     * @param mixed $maximumPrice
     * @param mixed $method
     */
    public function __construct($maximumPrice = null, $method = null)
    {
        $this
            ->setMaximumPrice($maximumPrice)
            ->setMethod($method);
    }
    /**
     * Get MaximumPrice value
     * @return mixed|null
     */
    public function getMaximumPrice()
    {
        return $this->MaximumPrice;
    }
    /**
     * Set MaximumPrice value
     * @param mixed $maximumPrice
     * @return \ammonkc\otaehi\StructType\GuidelinePricing
     */
    public function setMaximumPrice($maximumPrice = null)
    {
        $this->MaximumPrice = $maximumPrice;
        return $this;
    }
    /**
     * Get Method value
     * @return mixed|null
     */
    public function getMethod()
    {
        return $this->Method;
    }
    /**
     * Set Method value
     * @param mixed $method
     * @return \ammonkc\otaehi\StructType\GuidelinePricing
     */
    public function setMethod($method = null)
    {
        $this->Method = $method;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\GuidelinePricing
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
