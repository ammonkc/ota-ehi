<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ammonkc\Otaehi\StructType\CitizenCountryName
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
     * @var
     */
    public $Relation;
    /**
     * The Gender
     * @var
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
     * @param \Ammonkc\Otaehi\StructType\CitizenCountryName $citizenCountryName
     * @param mixed $indCoverageReqs
     * @param mixed $tPA_Extensions
     * @param int $age
     * @param  $relation
     * @param  $gender
     */
    public function __construct($address = null, \Ammonkc\Otaehi\StructType\CitizenCountryName $citizenCountryName = null, $indCoverageReqs = null, $tPA_Extensions = null, $age = null,  $relation = null,  $gender = null)
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
     * @return \Ammonkc\Otaehi\StructType\SearchTravelerType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get CitizenCountryName value
     * @return \Ammonkc\Otaehi\StructType\CitizenCountryName|null
     */
    public function getCitizenCountryName()
    {
        return $this->CitizenCountryName;
    }
    /**
     * Set CitizenCountryName value
     * @param \Ammonkc\Otaehi\StructType\CitizenCountryName $citizenCountryName
     * @return \Ammonkc\Otaehi\StructType\SearchTravelerType
     */
    public function setCitizenCountryName(\Ammonkc\Otaehi\StructType\CitizenCountryName $citizenCountryName = null)
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
     * @return \Ammonkc\Otaehi\StructType\SearchTravelerType
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
     * @return \Ammonkc\Otaehi\StructType\SearchTravelerType
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
     * @return \Ammonkc\Otaehi\StructType\SearchTravelerType
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
     * @return |null
     */
    public function getRelation()
    {
        return $this->Relation;
    }
    /**
     * Set Relation value
     * @param  $relation
     * @return \Ammonkc\Otaehi\StructType\SearchTravelerType
     */
    public function setRelation( $relation = null)
    {
        $this->Relation = $relation;
        return $this;
    }
    /**
     * Get Gender value
     * @return |null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param  $gender
     * @return \Ammonkc\Otaehi\StructType\SearchTravelerType
     */
    public function setGender( $gender = null)
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
     * @return \Ammonkc\Otaehi\StructType\SearchTravelerType
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
