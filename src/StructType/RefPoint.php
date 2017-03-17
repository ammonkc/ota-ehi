<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefPoint StructType
 * @subpackage Structs
 */
class RefPoint extends AbstractStructBase
{
    /**
     * The StateProv
     * @var UNKNOWN
     */
    public $StateProv;
    /**
     * The CountryCode
     * @var UNKNOWN
     */
    public $CountryCode;
    /**
     * The RefPointType
     * @var UNKNOWN
     */
    public $RefPointType;
    /**
     * The Name
     * @var UNKNOWN
     */
    public $Name;
    /**
     * The CityName
     * @var UNKNOWN
     */
    public $CityName;
    /**
     * Constructor method for RefPoint
     * @uses RefPoint::setStateProv()
     * @uses RefPoint::setCountryCode()
     * @uses RefPoint::setRefPointType()
     * @uses RefPoint::setName()
     * @uses RefPoint::setCityName()
     * @param UNKNOWN $stateProv
     * @param UNKNOWN $countryCode
     * @param UNKNOWN $refPointType
     * @param UNKNOWN $name
     * @param UNKNOWN $cityName
     */
    public function __construct(UNKNOWN $stateProv = null, UNKNOWN $countryCode = null, UNKNOWN $refPointType = null, UNKNOWN $name = null, UNKNOWN $cityName = null)
    {
        $this
            ->setStateProv($stateProv)
            ->setCountryCode($countryCode)
            ->setRefPointType($refPointType)
            ->setName($name)
            ->setCityName($cityName);
    }
    /**
     * Get StateProv value
     * @return UNKNOWN|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param UNKNOWN $stateProv
     * @return \Ammonkc\Otaehi\StructType\RefPoint
     */
    public function setStateProv(UNKNOWN $stateProv = null)
    {
        $this->StateProv = $stateProv;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return UNKNOWN|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param UNKNOWN $countryCode
     * @return \Ammonkc\Otaehi\StructType\RefPoint
     */
    public function setCountryCode(UNKNOWN $countryCode = null)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get RefPointType value
     * @return UNKNOWN|null
     */
    public function getRefPointType()
    {
        return $this->RefPointType;
    }
    /**
     * Set RefPointType value
     * @param UNKNOWN $refPointType
     * @return \Ammonkc\Otaehi\StructType\RefPoint
     */
    public function setRefPointType(UNKNOWN $refPointType = null)
    {
        $this->RefPointType = $refPointType;
        return $this;
    }
    /**
     * Get Name value
     * @return UNKNOWN|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param UNKNOWN $name
     * @return \Ammonkc\Otaehi\StructType\RefPoint
     */
    public function setName(UNKNOWN $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get CityName value
     * @return UNKNOWN|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param UNKNOWN $cityName
     * @return \Ammonkc\Otaehi\StructType\RefPoint
     */
    public function setCityName(UNKNOWN $cityName = null)
    {
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RefPoint
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
