<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationGeneralType StructType
 * @subpackage Structs
 */
class LocationGeneralType extends AbstractStructBase
{
    /**
     * The CityName
     * @var mixed
     */
    public $CityName;
    /**
     * The StateProv
     * @var mixed
     */
    public $StateProv;
    /**
     * The CountryName
     * @var mixed
     */
    public $CountryName;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for LocationGeneralType
     * @uses LocationGeneralType::setCityName()
     * @uses LocationGeneralType::setStateProv()
     * @uses LocationGeneralType::setCountryName()
     * @uses LocationGeneralType::setTPA_Extensions()
     * @param mixed $cityName
     * @param mixed $stateProv
     * @param mixed $countryName
     * @param mixed $tPA_Extensions
     */
    public function __construct($cityName = null, $stateProv = null, $countryName = null, $tPA_Extensions = null)
    {
        $this
            ->setCityName($cityName)
            ->setStateProv($stateProv)
            ->setCountryName($countryName)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get CityName value
     * @return mixed|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param mixed $cityName
     * @return \Ammonkc\Otaehi\StructType\LocationGeneralType
     */
    public function setCityName($cityName = null)
    {
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get StateProv value
     * @return mixed|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param mixed $stateProv
     * @return \Ammonkc\Otaehi\StructType\LocationGeneralType
     */
    public function setStateProv($stateProv = null)
    {
        $this->StateProv = $stateProv;
        return $this;
    }
    /**
     * Get CountryName value
     * @return mixed|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param mixed $countryName
     * @return \Ammonkc\Otaehi\StructType\LocationGeneralType
     */
    public function setCountryName($countryName = null)
    {
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Ammonkc\Otaehi\StructType\LocationGeneralType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\LocationGeneralType
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
