<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyAgeBirthDateType StructType
 * @subpackage Structs
 */
class OntologyAgeBirthDateType extends AbstractStructBase
{
    /**
     * The PrivacyInd
     * @var bool
     */
    public $PrivacyInd;
    /**
     * The Age
     * @var int
     */
    public $Age;
    /**
     * The BirthDate
     * @var string
     */
    public $BirthDate;
    /**
     * The BirthYear
     * @var string
     */
    public $BirthYear;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for OntologyAgeBirthDateType
     * @uses OntologyAgeBirthDateType::setPrivacyInd()
     * @uses OntologyAgeBirthDateType::setAge()
     * @uses OntologyAgeBirthDateType::setBirthDate()
     * @uses OntologyAgeBirthDateType::setBirthYear()
     * @uses OntologyAgeBirthDateType::setOntologyRefID()
     * @param bool $privacyInd
     * @param int $age
     * @param string $birthDate
     * @param string $birthYear
     * @param string $ontologyRefID
     */
    public function __construct($privacyInd = null, $age = null, $birthDate = null, $birthYear = null, $ontologyRefID = null)
    {
        $this
            ->setPrivacyInd($privacyInd)
            ->setAge($age)
            ->setBirthDate($birthDate)
            ->setBirthYear($birthYear)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get PrivacyInd value
     * @return bool|null
     */
    public function getPrivacyInd()
    {
        return $this->PrivacyInd;
    }
    /**
     * Set PrivacyInd value
     * @param bool $privacyInd
     * @return \ammonkc\otaehi\StructType\OntologyAgeBirthDateType
     */
    public function setPrivacyInd($privacyInd = null)
    {
        $this->PrivacyInd = $privacyInd;
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
     * @return \ammonkc\otaehi\StructType\OntologyAgeBirthDateType
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
     * Get BirthDate value
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }
    /**
     * Set BirthDate value
     * @param string $birthDate
     * @return \ammonkc\otaehi\StructType\OntologyAgeBirthDateType
     */
    public function setBirthDate($birthDate = null)
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDate)), __LINE__);
        }
        $this->BirthDate = $birthDate;
        return $this;
    }
    /**
     * Get BirthYear value
     * @return string|null
     */
    public function getBirthYear()
    {
        return $this->BirthYear;
    }
    /**
     * Set BirthYear value
     * @param string $birthYear
     * @return \ammonkc\otaehi\StructType\OntologyAgeBirthDateType
     */
    public function setBirthYear($birthYear = null)
    {
        // validation for constraint: string
        if (!is_null($birthYear) && !is_string($birthYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthYear)), __LINE__);
        }
        $this->BirthYear = $birthYear;
        return $this;
    }
    /**
     * Get OntologyRefID value
     * @return string|null
     */
    public function getOntologyRefID()
    {
        return $this->OntologyRefID;
    }
    /**
     * Set OntologyRefID value
     * @param string $ontologyRefID
     * @return \ammonkc\otaehi\StructType\OntologyAgeBirthDateType
     */
    public function setOntologyRefID($ontologyRefID = null)
    {
        // validation for constraint: string
        if (!is_null($ontologyRefID) && !is_string($ontologyRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ontologyRefID)), __LINE__);
        }
        $this->OntologyRefID = $ontologyRefID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OntologyAgeBirthDateType
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
