<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyNameType StructType
 * @subpackage Structs
 */
class OntologyNameType extends AbstractStructBase
{
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The PrivacyInd
     * @var bool
     */
    public $PrivacyInd;
    /**
     * The GivenName
     * @var string
     */
    public $GivenName;
    /**
     * The Surname
     * @var string
     */
    public $Surname;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for OntologyNameType
     * @uses OntologyNameType::setOntologyExtension()
     * @uses OntologyNameType::setPrivacyInd()
     * @uses OntologyNameType::setGivenName()
     * @uses OntologyNameType::setSurname()
     * @uses OntologyNameType::setOntologyRefID()
     * @param mixed $ontologyExtension
     * @param bool $privacyInd
     * @param string $givenName
     * @param string $surname
     * @param string $ontologyRefID
     */
    public function __construct($ontologyExtension = null, $privacyInd = null, $givenName = null, $surname = null, $ontologyRefID = null)
    {
        $this
            ->setOntologyExtension($ontologyExtension)
            ->setPrivacyInd($privacyInd)
            ->setGivenName($givenName)
            ->setSurname($surname)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get OntologyExtension value
     * @return mixed|null
     */
    public function getOntologyExtension()
    {
        return $this->OntologyExtension;
    }
    /**
     * Set OntologyExtension value
     * @param mixed $ontologyExtension
     * @return \Ammonkc\Otaehi\StructType\OntologyNameType
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
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
     * @return \Ammonkc\Otaehi\StructType\OntologyNameType
     */
    public function setPrivacyInd($privacyInd = null)
    {
        $this->PrivacyInd = $privacyInd;
        return $this;
    }
    /**
     * Get GivenName value
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }
    /**
     * Set GivenName value
     * @param string $givenName
     * @return \Ammonkc\Otaehi\StructType\OntologyNameType
     */
    public function setGivenName($givenName = null)
    {
        // validation for constraint: string
        if (!is_null($givenName) && !is_string($givenName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($givenName)), __LINE__);
        }
        $this->GivenName = $givenName;
        return $this;
    }
    /**
     * Get Surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->Surname;
    }
    /**
     * Set Surname value
     * @param string $surname
     * @return \Ammonkc\Otaehi\StructType\OntologyNameType
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surname)), __LINE__);
        }
        $this->Surname = $surname;
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
     * @return \Ammonkc\Otaehi\StructType\OntologyNameType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyNameType
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
