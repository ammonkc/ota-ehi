<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelatedTravelerType StructType
 * @subpackage Structs
 */
class RelatedTravelerType extends AbstractStructBase
{
    /**
     * The UniqueID
     * @var mixed
     */
    public $UniqueID;
    /**
     * The PersonName
     * @var mixed
     */
    public $PersonName;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Relation
     * @var UNKNOWN
     */
    public $Relation;
    /**
     * Constructor method for RelatedTravelerType
     * @uses RelatedTravelerType::setUniqueID()
     * @uses RelatedTravelerType::setPersonName()
     * @uses RelatedTravelerType::setTPA_Extensions()
     * @uses RelatedTravelerType::setRelation()
     * @param mixed $uniqueID
     * @param mixed $personName
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $relation
     */
    public function __construct($uniqueID = null, $personName = null, $tPA_Extensions = null, UNKNOWN $relation = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setPersonName($personName)
            ->setTPA_Extensions($tPA_Extensions)
            ->setRelation($relation);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \ammonkc\otaehi\StructType\RelatedTravelerType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \ammonkc\otaehi\StructType\RelatedTravelerType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
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
     * @return \ammonkc\otaehi\StructType\RelatedTravelerType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Relation value
     * @return UNKNOWN|null
     */
    public function getRelation()
    {
        return $this->Relation;
    }
    /**
     * Set Relation value
     * @param UNKNOWN $relation
     * @return \ammonkc\otaehi\StructType\RelatedTravelerType
     */
    public function setRelation(UNKNOWN $relation = null)
    {
        $this->Relation = $relation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\RelatedTravelerType
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
