<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTravelerType StructType
 * @subpackage Structs
 */
class SearchTravelerType extends AbstractStructBase
{
    /**
     * The Address
     * @var mixed
     */
    public $Address;
    /**
     * The CitizenCountryName
     * @var \ammonkc\otaehi\StructType\CitizenCountryName
     */
    public $CitizenCountryName;
    /**
     * The IndCoverageReqs
     * @var mixed
     */
    public $IndCoverageReqs;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Age
     * @var int
     */
    public $Age;
    /**
     * The Relation
     * @var UNKNOWN
     */
    public $Relation;
    /**
     * The Gender
     * @var UNKNOWN
     */
    public $Gender;
    /**
     * Constructor method for SearchTravelerType
     * @uses SearchTravelerType::setAddress()
     * @uses SearchTravelerType::setCitizenCountryName()
     * @uses SearchTravelerType::setIndCoverageReqs()
     * @uses SearchTravelerType::setTPA_Extensions()
     * @uses SearchTravelerType::setAge()
     * @uses SearchTravelerType::setRelation()
     * @uses SearchTravelerType::setGender()
     * @param mixed $address
     * @param \ammonkc\otaehi\StructType\CitizenCountryName $citizenCountryName
     * @param mixed $indCoverageReqs
     * @param mixed $tPA_Extensions
     * @param int $age
     * @param UNKNOWN $relation
     * @param UNKNOWN $gender
     */
    public function __construct($address = null, \ammonkc\otaehi\StructType\CitizenCountryName $citizenCountryName = null, $indCoverageReqs = null, $tPA_Extensions = null, $age = null, UNKNOWN $relation = null, UNKNOWN $gender = null)
    {
        $this
            ->setAddress($address)
            ->setCitizenCountryName($citizenCountryName)
            ->setIndCoverageReqs($indCoverageReqs)
            ->setTPA_Extensions($tPA_Extensions)
            ->setAge($age)
            ->setRelation($relation)
            ->setGender($gender);
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
     * @return \ammonkc\otaehi\StructType\SearchTravelerType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get CitizenCountryName value
     * @return \ammonkc\otaehi\StructType\CitizenCountryName|null
     */
    public function getCitizenCountryName()
    {
        return $this->CitizenCountryName;
    }
    /**
     * Set CitizenCountryName value
     * @param \ammonkc\otaehi\StructType\CitizenCountryName $citizenCountryName
     * @return \ammonkc\otaehi\StructType\SearchTravelerType
     */
    public function setCitizenCountryName(\ammonkc\otaehi\StructType\CitizenCountryName $citizenCountryName = null)
    {
        $this->CitizenCountryName = $citizenCountryName;
        return $this;
    }
    /**
     * Get IndCoverageReqs value
     * @return mixed|null
     */
    public function getIndCoverageReqs()
    {
        return $this->IndCoverageReqs;
    }
    /**
     * Set IndCoverageReqs value
     * @param mixed $indCoverageReqs
     * @return \ammonkc\otaehi\StructType\SearchTravelerType
     */
    public function setIndCoverageReqs($indCoverageReqs = null)
    {
        $this->IndCoverageReqs = $indCoverageReqs;
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
     * @return \ammonkc\otaehi\StructType\SearchTravelerType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \ammonkc\otaehi\StructType\SearchTravelerType
     */
    public function setAge($age = null)
    {
        // validation for constraint: int
        if (!is_null($age) && !is_numeric($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
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
     * @return \ammonkc\otaehi\StructType\SearchTravelerType
     */
    public function setRelation(UNKNOWN $relation = null)
    {
        $this->Relation = $relation;
        return $this;
    }
    /**
     * Get Gender value
     * @return UNKNOWN|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param UNKNOWN $gender
     * @return \ammonkc\otaehi\StructType\SearchTravelerType
     */
    public function setGender(UNKNOWN $gender = null)
    {
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\SearchTravelerType
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
