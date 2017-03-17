<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Frequency StructType
 * @subpackage Structs
 */
class Frequency extends AbstractStructBase
{
    /**
     * The ExemptQty
     * @var int
     */
    public $ExemptQty;
    /**
     * The MaximumQty
     * @var int
     */
    public $MaximumQty;
    /**
     * Constructor method for Frequency
     * @uses Frequency::setExemptQty()
     * @uses Frequency::setMaximumQty()
     * @param int $exemptQty
     * @param int $maximumQty
     */
    public function __construct($exemptQty = null, $maximumQty = null)
    {
        $this
            ->setExemptQty($exemptQty)
            ->setMaximumQty($maximumQty);
    }
    /**
     * Get ExemptQty value
     * @return int|null
     */
    public function getExemptQty()
    {
        return $this->ExemptQty;
    }
    /**
     * Set ExemptQty value
     * @param int $exemptQty
     * @return \Ammonkc\Otaehi\StructType\Frequency
     */
    public function setExemptQty($exemptQty = null)
    {
        // validation for constraint: int
        if (!is_null($exemptQty) && !is_numeric($exemptQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($exemptQty)), __LINE__);
        }
        $this->ExemptQty = $exemptQty;
        return $this;
    }
    /**
     * Get MaximumQty value
     * @return int|null
     */
    public function getMaximumQty()
    {
        return $this->MaximumQty;
    }
    /**
     * Set MaximumQty value
     * @param int $maximumQty
     * @return \Ammonkc\Otaehi\StructType\Frequency
     */
    public function setMaximumQty($maximumQty = null)
    {
        // validation for constraint: int
        if (!is_null($maximumQty) && !is_numeric($maximumQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumQty)), __LINE__);
        }
        $this->MaximumQty = $maximumQty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Frequency
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
