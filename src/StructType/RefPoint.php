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
     * @var
     */
    public $StateProv;
    /**
     * The CountryCode
     * @var
     */
    public $CountryCode;
    /**
     * The RefPointType
     * @var
     */
    public $RefPointType;
    /**
     * The Name
     * @var
     */
    public $Name;
    /**
     * The CityName
     * @var
     */
    public $CityName;
    /**
     * Constructor method for RefPoint
     * @uses RefPoint::setStateProv()
     * @uses RefPoint::setCountryCode()
     * @uses RefPoint::setRefPointType()
     * @uses RefPoint::setName()
     * @uses RefPoint::setCityName()
     * @param  $stateProv
     * @param  $countryCode
     * @param  $refPointType
     * @param  $name
     * @param  $cityName
     */
    public function __construct( $stateProv = null,  $countryCode = null,  $refPointType = null,  $name = null,  $cityName = null)
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
     * @return |null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param  $stateProv
     * @return \Ammonkc\Otaehi\StructType\RefPoint
     */
    public function setStateProv( $stateProv = null)
    {
        $this->StateProv = $stateProv;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return |null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param  $countryCode
     * @return \Ammonkc\Otaehi\StructType\RefPoint
     */
    public function setCountryCode( $countryCode = null)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get RefPointType value
     * @return |null
     */
    public function getRefPointType()
    {
        return $this->RefPointType;
    }
    /**
     * Set RefPointType value
     * @param  $refPointType
     * @return \Ammonkc\Otaehi\StructType\RefPoint
     */
    public function setRefPointType( $refPointType = null)
    {
        $this->RefPointType = $refPointType;
        return $this;
    }
    /**
     * Get Name value
     * @return |null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param  $name
     * @return \Ammonkc\Otaehi\StructType\RefPoint
     */
    public function setName( $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get CityName value
     * @return |null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param  $cityName
     * @return \Ammonkc\Otaehi\StructType\RefPoint
     */
    public function setCityName( $cityName = null)
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
