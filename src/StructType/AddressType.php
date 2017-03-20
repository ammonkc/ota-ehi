<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The StreetNmbr
     * @var \Ammonkc\Otaehi\StructType\StreetNmbr
     */
    public $StreetNmbr;
    /**
     * The BldgRoom
     * @var \Ammonkc\Otaehi\StructType\BldgRoom
     */
    public $BldgRoom;
    /**
     * The AddressLine
     * @var mixed
     */
    public $AddressLine;
    /**
     * The CityName
     * @var mixed
     */
    public $CityName;
    /**
     * The PostalCode
     * @var mixed
     */
    public $PostalCode;
    /**
     * The County
     * @var mixed
     */
    public $County;
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
     * The Type
     * @var
     */
    public $Type;
    /**
     * The Remark
     * @var
     */
    public $Remark;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The ValidInd
     * @var bool
     */
    public $ValidInd;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setStreetNmbr()
     * @uses AddressType::setBldgRoom()
     * @uses AddressType::setAddressLine()
     * @uses AddressType::setCityName()
     * @uses AddressType::setPostalCode()
     * @uses AddressType::setCounty()
     * @uses AddressType::setStateProv()
     * @uses AddressType::setCountryName()
     * @uses AddressType::setType()
     * @uses AddressType::setRemark()
     * @uses AddressType::setLanguage()
     * @uses AddressType::setValidInd()
     * @param \Ammonkc\Otaehi\StructType\StreetNmbr $streetNmbr
     * @param \Ammonkc\Otaehi\StructType\BldgRoom $bldgRoom
     * @param mixed $addressLine
     * @param mixed $cityName
     * @param mixed $postalCode
     * @param mixed $county
     * @param mixed $stateProv
     * @param mixed $countryName
     * @param  $type
     * @param  $remark
     * @param string $language
     * @param bool $validInd
     */
    public function __construct(\Ammonkc\Otaehi\StructType\StreetNmbr $streetNmbr = null, \Ammonkc\Otaehi\StructType\BldgRoom $bldgRoom = null, $addressLine = null, $cityName = null, $postalCode = null, $county = null, $stateProv = null, $countryName = null,  $type = null,  $remark = null, $language = null, $validInd = null)
    {
        $this
            ->setStreetNmbr($streetNmbr)
            ->setBldgRoom($bldgRoom)
            ->setAddressLine($addressLine)
            ->setCityName($cityName)
            ->setPostalCode($postalCode)
            ->setCounty($county)
            ->setStateProv($stateProv)
            ->setCountryName($countryName)
            ->setType($type)
            ->setRemark($remark)
            ->setLanguage($language)
            ->setValidInd($validInd);
    }
    /**
     * Get StreetNmbr value
     * @return \Ammonkc\Otaehi\StructType\StreetNmbr|null
     */
    public function getStreetNmbr()
    {
        return $this->StreetNmbr;
    }
    /**
     * Set StreetNmbr value
     * @param \Ammonkc\Otaehi\StructType\StreetNmbr $streetNmbr
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setStreetNmbr(\Ammonkc\Otaehi\StructType\StreetNmbr $streetNmbr = null)
    {
        $this->StreetNmbr = $streetNmbr;
        return $this;
    }
    /**
     * Get BldgRoom value
     * @return \Ammonkc\Otaehi\StructType\BldgRoom|null
     */
    public function getBldgRoom()
    {
        return $this->BldgRoom;
    }
    /**
     * Set BldgRoom value
     * @param \Ammonkc\Otaehi\StructType\BldgRoom $bldgRoom
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setBldgRoom(\Ammonkc\Otaehi\StructType\BldgRoom $bldgRoom = null)
    {
        $this->BldgRoom = $bldgRoom;
        return $this;
    }
    /**
     * Get AddressLine value
     * @return mixed|null
     */
    public function getAddressLine()
    {
        return $this->AddressLine;
    }
    /**
     * Set AddressLine value
     * @param mixed $addressLine
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setAddressLine($addressLine = null)
    {
        $this->AddressLine = $addressLine;
        return $this;
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
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setCityName($cityName = null)
    {
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return mixed|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param mixed $postalCode
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setPostalCode($postalCode = null)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get County value
     * @return mixed|null
     */
    public function getCounty()
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param mixed $county
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setCounty($county = null)
    {
        $this->County = $county;
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
     * @return \Ammonkc\Otaehi\StructType\AddressType
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
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setCountryName($countryName = null)
    {
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get Type value
     * @return |null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param  $type
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setType( $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Remark value
     * @return |null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param  $remark
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setRemark( $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Get ValidInd value
     * @return bool|null
     */
    public function getValidInd()
    {
        return $this->ValidInd;
    }
    /**
     * Set ValidInd value
     * @param bool $validInd
     * @return \Ammonkc\Otaehi\StructType\AddressType
     */
    public function setValidInd($validInd = null)
    {
        $this->ValidInd = $validInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\AddressType
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
