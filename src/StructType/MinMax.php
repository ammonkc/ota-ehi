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
     * @var
     */
    public $MaxCharge;
    /**
     * The MinCharge
     * @var
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
     * @param  $maxCharge
     * @param  $minCharge
     * @param int $maxChargeDays
     */
    public function __construct( $maxCharge = null,  $minCharge = null, $maxChargeDays = null)
    {
        $this
            ->setMaxCharge($maxCharge)
            ->setMinCharge($minCharge)
            ->setMaxChargeDays($maxChargeDays);
    }
    /**
     * Get MaxCharge value
     * @return |null
     */
    public function getMaxCharge()
    {
        return $this->MaxCharge;
    }
    /**
     * Set MaxCharge value
     * @param  $maxCharge
     * @return \Ammonkc\Otaehi\StructType\MinMax
     */
    public function setMaxCharge( $maxCharge = null)
    {
        $this->MaxCharge = $maxCharge;
        return $this;
    }
    /**
     * Get MinCharge value
     * @return |null
     */
    public function getMinCharge()
    {
        return $this->MinCharge;
    }
    /**
     * Set MinCharge value
     * @param  $minCharge
     * @return \Ammonkc\Otaehi\StructType\MinMax
     */
    public function setMinCharge( $minCharge = null)
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
