<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressInfoType StructType
 * @subpackage Structs
 */
class AddressInfoType extends AbstractStructBase
{
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The UseType
     * @var UNKNOWN
     */
    public $UseType;
    /**
     * The RPH
     * @var UNKNOWN
     */
    public $RPH;
    /**
     * Constructor method for AddressInfoType
     * @uses AddressInfoType::setTPA_Extensions()
     * @uses AddressInfoType::setUseType()
     * @uses AddressInfoType::setRPH()
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $useType
     * @param UNKNOWN $rPH
     */
    public function __construct($tPA_Extensions = null, UNKNOWN $useType = null, UNKNOWN $rPH = null)
    {
        $this
            ->setTPA_Extensions($tPA_Extensions)
            ->setUseType($useType)
            ->setRPH($rPH);
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
     * @return \ammonkc\otaehi\StructType\AddressInfoType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get UseType value
     * @return UNKNOWN|null
     */
    public function getUseType()
    {
        return $this->UseType;
    }
    /**
     * Set UseType value
     * @param UNKNOWN $useType
     * @return \ammonkc\otaehi\StructType\AddressInfoType
     */
    public function setUseType(UNKNOWN $useType = null)
    {
        $this->UseType = $useType;
        return $this;
    }
    /**
     * Get RPH value
     * @return UNKNOWN|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param UNKNOWN $rPH
     * @return \ammonkc\otaehi\StructType\AddressInfoType
     */
    public function setRPH(UNKNOWN $rPH = null)
    {
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\AddressInfoType
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
