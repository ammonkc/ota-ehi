<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRetrieveResRQCoreType StructType
 * @subpackage Structs
 */
class VehicleRetrieveResRQCoreType extends AbstractStructBase
{
    /**
     * The UniqueID
     * @var \Ammonkc\Otaehi\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The PersonName
     * @var \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public $PersonName;
    /**
     * The CustLoyalty
     * @var \Ammonkc\Otaehi\StructType\CustLoyalty
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
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID
     * @param \Ammonkc\Otaehi\StructType\PersonNameType $personName
     * @param \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID = null, \Ammonkc\Otaehi\StructType\PersonNameType $personName = null, \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty = null, $tPA_Extensions = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setPersonName($personName)
            ->setCustLoyalty($custLoyalty)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get UniqueID value
     * @return \Ammonkc\Otaehi\StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQCoreType
     */
    public function setUniqueID(\Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get PersonName value
     * @return \Ammonkc\Otaehi\StructType\PersonNameType|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \Ammonkc\Otaehi\StructType\PersonNameType $personName
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQCoreType
     */
    public function setPersonName(\Ammonkc\Otaehi\StructType\PersonNameType $personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQCoreType
     */
    public function setCustLoyalty(\Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQCoreType
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
