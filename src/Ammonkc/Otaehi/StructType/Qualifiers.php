<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Qualifiers StructType
 * @subpackage Structs
 */
class Qualifiers extends AbstractStructBase
{
    /**
     * The ChargeUnit
     * @var \Ammonkc\Otaehi\StructType\ChargeUnit
     */
    public $ChargeUnit;
    /**
     * The EffectiveDateTime
     * @var string
     */
    public $EffectiveDateTime;
    /**
     * The ExpireDateTime
     * @var string
     */
    public $ExpireDateTime;
    /**
     * The MaxAge
     * @var int
     */
    public $MaxAge;
    /**
     * The MinAge
     * @var int
     */
    public $MinAge;
    /**
     * Constructor method for Qualifiers
     * @uses Qualifiers::setChargeUnit()
     * @uses Qualifiers::setEffectiveDateTime()
     * @uses Qualifiers::setExpireDateTime()
     * @uses Qualifiers::setMaxAge()
     * @uses Qualifiers::setMinAge()
     * @param \Ammonkc\Otaehi\StructType\ChargeUnit $chargeUnit
     * @param string $effectiveDateTime
     * @param string $expireDateTime
     * @param int $maxAge
     * @param int $minAge
     */
    public function __construct(\Ammonkc\Otaehi\StructType\ChargeUnit $chargeUnit = null, $effectiveDateTime = null, $expireDateTime = null, $maxAge = null, $minAge = null)
    {
        $this
            ->setChargeUnit($chargeUnit)
            ->setEffectiveDateTime($effectiveDateTime)
            ->setExpireDateTime($expireDateTime)
            ->setMaxAge($maxAge)
            ->setMinAge($minAge);
    }
    /**
     * Get ChargeUnit value
     * @return \Ammonkc\Otaehi\StructType\ChargeUnit|null
     */
    public function getChargeUnit()
    {
        return $this->ChargeUnit;
    }
    /**
     * Set ChargeUnit value
     * @param \Ammonkc\Otaehi\StructType\ChargeUnit $chargeUnit
     * @return \Ammonkc\Otaehi\StructType\Qualifiers
     */
    public function setChargeUnit(\Ammonkc\Otaehi\StructType\ChargeUnit $chargeUnit = null)
    {
        $this->ChargeUnit = $chargeUnit;
        return $this;
    }
    /**
     * Get EffectiveDateTime value
     * @return string|null
     */
    public function getEffectiveDateTime()
    {
        return $this->EffectiveDateTime;
    }
    /**
     * Set EffectiveDateTime value
     * @param string $effectiveDateTime
     * @return \Ammonkc\Otaehi\StructType\Qualifiers
     */
    public function setEffectiveDateTime($effectiveDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDateTime) && !is_string($effectiveDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDateTime)), __LINE__);
        }
        $this->EffectiveDateTime = $effectiveDateTime;
        return $this;
    }
    /**
     * Get ExpireDateTime value
     * @return string|null
     */
    public function getExpireDateTime()
    {
        return $this->ExpireDateTime;
    }
    /**
     * Set ExpireDateTime value
     * @param string $expireDateTime
     * @return \Ammonkc\Otaehi\StructType\Qualifiers
     */
    public function setExpireDateTime($expireDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($expireDateTime) && !is_string($expireDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDateTime)), __LINE__);
        }
        $this->ExpireDateTime = $expireDateTime;
        return $this;
    }
    /**
     * Get MaxAge value
     * @return int|null
     */
    public function getMaxAge()
    {
        return $this->MaxAge;
    }
    /**
     * Set MaxAge value
     * @param int $maxAge
     * @return \Ammonkc\Otaehi\StructType\Qualifiers
     */
    public function setMaxAge($maxAge = null)
    {
        // validation for constraint: int
        if (!is_null($maxAge) && !is_numeric($maxAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxAge)), __LINE__);
        }
        $this->MaxAge = $maxAge;
        return $this;
    }
    /**
     * Get MinAge value
     * @return int|null
     */
    public function getMinAge()
    {
        return $this->MinAge;
    }
    /**
     * Set MinAge value
     * @param int $minAge
     * @return \Ammonkc\Otaehi\StructType\Qualifiers
     */
    public function setMinAge($minAge = null)
    {
        // validation for constraint: int
        if (!is_null($minAge) && !is_numeric($minAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minAge)), __LINE__);
        }
        $this->MinAge = $minAge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Qualifiers
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
