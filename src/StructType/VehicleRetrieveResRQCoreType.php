<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRetrieveResRQCoreType StructType
 * @subpackage Structs
 */
class VehicleRetrieveResRQCoreType extends AbstractStructBase
{
    /**
     * The UniqueID
     * @var \ammonkc\otaehi\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The PersonName
     * @var \ammonkc\otaehi\StructType\PersonNameType
     */
    public $PersonName;
    /**
     * The CustLoyalty
     * @var \ammonkc\otaehi\StructType\CustLoyalty
     */
    public $CustLoyalty;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleRetrieveResRQCoreType
     * @uses VehicleRetrieveResRQCoreType::setUniqueID()
     * @uses VehicleRetrieveResRQCoreType::setPersonName()
     * @uses VehicleRetrieveResRQCoreType::setCustLoyalty()
     * @uses VehicleRetrieveResRQCoreType::setTPA_Extensions()
     * @param \ammonkc\otaehi\StructType\UniqueID_Type $uniqueID
     * @param \ammonkc\otaehi\StructType\PersonNameType $personName
     * @param \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty
     * @param mixed $tPA_Extensions
     */
    public function __construct(\ammonkc\otaehi\StructType\UniqueID_Type $uniqueID = null, \ammonkc\otaehi\StructType\PersonNameType $personName = null, \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty = null, $tPA_Extensions = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setPersonName($personName)
            ->setCustLoyalty($custLoyalty)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get UniqueID value
     * @return \ammonkc\otaehi\StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \ammonkc\otaehi\StructType\UniqueID_Type $uniqueID
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQCoreType
     */
    public function setUniqueID(\ammonkc\otaehi\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get PersonName value
     * @return \ammonkc\otaehi\StructType\PersonNameType|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \ammonkc\otaehi\StructType\PersonNameType $personName
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQCoreType
     */
    public function setPersonName(\ammonkc\otaehi\StructType\PersonNameType $personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \ammonkc\otaehi\StructType\CustLoyalty|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQCoreType
     */
    public function setCustLoyalty(\ammonkc\otaehi\StructType\CustLoyalty $custLoyalty = null)
    {
        $this->CustLoyalty = $custLoyalty;
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
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQCoreType
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
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQCoreType
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
