<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinMax StructType
 * @subpackage Structs
 */
class MinMax extends AbstractStructBase
{
    /**
     * The MaxCharge
     * @var UNKNOWN
     */
    public $MaxCharge;
    /**
     * The MinCharge
     * @var UNKNOWN
     */
    public $MinCharge;
    /**
     * The MaxChargeDays
     * @var int
     */
    public $MaxChargeDays;
    /**
     * Constructor method for MinMax
     * @uses MinMax::setMaxCharge()
     * @uses MinMax::setMinCharge()
     * @uses MinMax::setMaxChargeDays()
     * @param UNKNOWN $maxCharge
     * @param UNKNOWN $minCharge
     * @param int $maxChargeDays
     */
    public function __construct(UNKNOWN $maxCharge = null, UNKNOWN $minCharge = null, $maxChargeDays = null)
    {
        $this
            ->setMaxCharge($maxCharge)
            ->setMinCharge($minCharge)
            ->setMaxChargeDays($maxChargeDays);
    }
    /**
     * Get MaxCharge value
     * @return UNKNOWN|null
     */
    public function getMaxCharge()
    {
        return $this->MaxCharge;
    }
    /**
     * Set MaxCharge value
     * @param UNKNOWN $maxCharge
     * @return \Ammonkc\Otaehi\StructType\MinMax
     */
    public function setMaxCharge(UNKNOWN $maxCharge = null)
    {
        $this->MaxCharge = $maxCharge;
        return $this;
    }
    /**
     * Get MinCharge value
     * @return UNKNOWN|null
     */
    public function getMinCharge()
    {
        return $this->MinCharge;
    }
    /**
     * Set MinCharge value
     * @param UNKNOWN $minCharge
     * @return \Ammonkc\Otaehi\StructType\MinMax
     */
    public function setMinCharge(UNKNOWN $minCharge = null)
    {
        $this->MinCharge = $minCharge;
        return $this;
    }
    /**
     * Get MaxChargeDays value
     * @return int|null
     */
    public function getMaxChargeDays()
    {
        return $this->MaxChargeDays;
    }
    /**
     * Set MaxChargeDays value
     * @param int $maxChargeDays
     * @return \Ammonkc\Otaehi\StructType\MinMax
     */
    public function setMaxChargeDays($maxChargeDays = null)
    {
        // validation for constraint: int
        if (!is_null($maxChargeDays) && !is_numeric($maxChargeDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxChargeDays)), __LINE__);
        }
        $this->MaxChargeDays = $maxChargeDays;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\MinMax
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
