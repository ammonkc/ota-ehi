<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationDetailsType StructType
 * @subpackage Structs
 */
class VehicleLocationDetailsType extends AbstractStructBase
{
    /**
     * The Address
     * @var mixed
     */
    public $Address;
    /**
     * The Telephone
     * @var \Ammonkc\Otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The AdditionalInfo
     * @var mixed
     */
    public $AdditionalInfo;
    /**
     * The AtAirport
     * @var bool
     */
    public $AtAirport;
    /**
     * The Code
     * @var UNKNOWN
     */
    public $Code;
    /**
     * The Name
     * @var UNKNOWN
     */
    public $Name;
    /**
     * The CodeContext
     * @var UNKNOWN
     */
    public $CodeContext;
    /**
     * The ExtendedLocationCode
     * @var UNKNOWN
     */
    public $ExtendedLocationCode;
    /**
     * The AssocAirportLocList
     * @var UNKNOWN
     */
    public $AssocAirportLocList;
    /**
     * Constructor method for VehicleLocationDetailsType
     * @uses VehicleLocationDetailsType::setAddress()
     * @uses VehicleLocationDetailsType::setTelephone()
     * @uses VehicleLocationDetailsType::setAdditionalInfo()
     * @uses VehicleLocationDetailsType::setAtAirport()
     * @uses VehicleLocationDetailsType::setCode()
     * @uses VehicleLocationDetailsType::setName()
     * @uses VehicleLocationDetailsType::setCodeContext()
     * @uses VehicleLocationDetailsType::setExtendedLocationCode()
     * @uses VehicleLocationDetailsType::setAssocAirportLocList()
     * @param mixed $address
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @param mixed $additionalInfo
     * @param bool $atAirport
     * @param UNKNOWN $code
     * @param UNKNOWN $name
     * @param UNKNOWN $codeContext
     * @param UNKNOWN $extendedLocationCode
     * @param UNKNOWN $assocAirportLocList
     */
    public function __construct($address = null, \Ammonkc\Otaehi\StructType\Telephone $telephone = null, $additionalInfo = null, $atAirport = null, UNKNOWN $code = null, UNKNOWN $name = null, UNKNOWN $codeContext = null, UNKNOWN $extendedLocationCode = null, UNKNOWN $assocAirportLocList = null)
    {
        $this
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setAdditionalInfo($additionalInfo)
            ->setAtAirport($atAirport)
            ->setCode($code)
            ->setName($name)
            ->setCodeContext($codeContext)
            ->setExtendedLocationCode($extendedLocationCode)
            ->setAssocAirportLocList($assocAirportLocList);
    }
    /**
     * Get Address value
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param mixed $address
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Ammonkc\Otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public function setTelephone(\Ammonkc\Otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return mixed|null
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param mixed $additionalInfo
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public function setAdditionalInfo($additionalInfo = null)
    {
        $this->AdditionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * Get AtAirport value
     * @return bool|null
     */
    public function getAtAirport()
    {
        return $this->AtAirport;
    }
    /**
     * Set AtAirport value
     * @param bool $atAirport
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public function setAtAirport($atAirport = null)
    {
        $this->AtAirport = $atAirport;
        return $this;
    }
    /**
     * Get Code value
     * @return UNKNOWN|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param UNKNOWN $code
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public function setCode(UNKNOWN $code = null)
    {
        $this->Code = $code;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public function setName(UNKNOWN $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get CodeContext value
     * @return UNKNOWN|null
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }
    /**
     * Set CodeContext value
     * @param UNKNOWN $codeContext
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public function setCodeContext(UNKNOWN $codeContext = null)
    {
        $this->CodeContext = $codeContext;
        return $this;
    }
    /**
     * Get ExtendedLocationCode value
     * @return UNKNOWN|null
     */
    public function getExtendedLocationCode()
    {
        return $this->ExtendedLocationCode;
    }
    /**
     * Set ExtendedLocationCode value
     * @param UNKNOWN $extendedLocationCode
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public function setExtendedLocationCode(UNKNOWN $extendedLocationCode = null)
    {
        $this->ExtendedLocationCode = $extendedLocationCode;
        return $this;
    }
    /**
     * Get AssocAirportLocList value
     * @return UNKNOWN|null
     */
    public function getAssocAirportLocList()
    {
        return $this->AssocAirportLocList;
    }
    /**
     * Set AssocAirportLocList value
     * @param UNKNOWN $assocAirportLocList
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public function setAssocAirportLocList(UNKNOWN $assocAirportLocList = null)
    {
        $this->AssocAirportLocList = $assocAirportLocList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
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
