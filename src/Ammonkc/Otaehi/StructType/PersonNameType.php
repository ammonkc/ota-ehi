<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonNameType StructType
 * @subpackage Structs
 */
class PersonNameType extends AbstractStructBase
{
    /**
     * The NamePrefix
     * @var mixed
     */
    public $NamePrefix;
    /**
     * The GivenName
     * @var mixed
     */
    public $GivenName;
    /**
     * The MiddleName
     * @var mixed
     */
    public $MiddleName;
    /**
     * The SurnamePrefix
     * @var mixed
     */
    public $SurnamePrefix;
    /**
     * The Surname
     * @var mixed
     */
    public $Surname;
    /**
     * The NameSuffix
     * @var mixed
     */
    public $NameSuffix;
    /**
     * The NameTitle
     * @var mixed
     */
    public $NameTitle;
    /**
     * The Document
     * @var \Ammonkc\Otaehi\StructType\Document
     */
    public $Document;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The NameType
     * @var UNKNOWN
     */
    public $NameType;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The DefaultInd
     * @var bool
     */
    public $DefaultInd;
    /**
     * Constructor method for PersonNameType
     * @uses PersonNameType::setNamePrefix()
     * @uses PersonNameType::setGivenName()
     * @uses PersonNameType::setMiddleName()
     * @uses PersonNameType::setSurnamePrefix()
     * @uses PersonNameType::setSurname()
     * @uses PersonNameType::setNameSuffix()
     * @uses PersonNameType::setNameTitle()
     * @uses PersonNameType::setDocument()
     * @uses PersonNameType::setTPA_Extensions()
     * @uses PersonNameType::setNameType()
     * @uses PersonNameType::setLanguage()
     * @uses PersonNameType::setDefaultInd()
     * @param mixed $namePrefix
     * @param mixed $givenName
     * @param mixed $middleName
     * @param mixed $surnamePrefix
     * @param mixed $surname
     * @param mixed $nameSuffix
     * @param mixed $nameTitle
     * @param \Ammonkc\Otaehi\StructType\Document $document
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $nameType
     * @param string $language
     * @param bool $defaultInd
     */
    public function __construct($namePrefix = null, $givenName = null, $middleName = null, $surnamePrefix = null, $surname = null, $nameSuffix = null, $nameTitle = null, \Ammonkc\Otaehi\StructType\Document $document = null, $tPA_Extensions = null, UNKNOWN $nameType = null, $language = null, $defaultInd = null)
    {
        $this
            ->setNamePrefix($namePrefix)
            ->setGivenName($givenName)
            ->setMiddleName($middleName)
            ->setSurnamePrefix($surnamePrefix)
            ->setSurname($surname)
            ->setNameSuffix($nameSuffix)
            ->setNameTitle($nameTitle)
            ->setDocument($document)
            ->setTPA_Extensions($tPA_Extensions)
            ->setNameType($nameType)
            ->setLanguage($language)
            ->setDefaultInd($defaultInd);
    }
    /**
     * Get NamePrefix value
     * @return mixed|null
     */
    public function getNamePrefix()
    {
        return $this->NamePrefix;
    }
    /**
     * Set NamePrefix value
     * @param mixed $namePrefix
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setNamePrefix($namePrefix = null)
    {
        $this->NamePrefix = $namePrefix;
        return $this;
    }
    /**
     * Get GivenName value
     * @return mixed|null
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }
    /**
     * Set GivenName value
     * @param mixed $givenName
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setGivenName($givenName = null)
    {
        $this->GivenName = $givenName;
        return $this;
    }
    /**
     * Get MiddleName value
     * @return mixed|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param mixed $middleName
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setMiddleName($middleName = null)
    {
        $this->MiddleName = $middleName;
        return $this;
    }
    /**
     * Get SurnamePrefix value
     * @return mixed|null
     */
    public function getSurnamePrefix()
    {
        return $this->SurnamePrefix;
    }
    /**
     * Set SurnamePrefix value
     * @param mixed $surnamePrefix
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setSurnamePrefix($surnamePrefix = null)
    {
        $this->SurnamePrefix = $surnamePrefix;
        return $this;
    }
    /**
     * Get Surname value
     * @return mixed|null
     */
    public function getSurname()
    {
        return $this->Surname;
    }
    /**
     * Set Surname value
     * @param mixed $surname
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setSurname($surname = null)
    {
        $this->Surname = $surname;
        return $this;
    }
    /**
     * Get NameSuffix value
     * @return mixed|null
     */
    public function getNameSuffix()
    {
        return $this->NameSuffix;
    }
    /**
     * Set NameSuffix value
     * @param mixed $nameSuffix
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setNameSuffix($nameSuffix = null)
    {
        $this->NameSuffix = $nameSuffix;
        return $this;
    }
    /**
     * Get NameTitle value
     * @return mixed|null
     */
    public function getNameTitle()
    {
        return $this->NameTitle;
    }
    /**
     * Set NameTitle value
     * @param mixed $nameTitle
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setNameTitle($nameTitle = null)
    {
        $this->NameTitle = $nameTitle;
        return $this;
    }
    /**
     * Get Document value
     * @return \Ammonkc\Otaehi\StructType\Document|null
     */
    public function getDocument()
    {
        return $this->Document;
    }
    /**
     * Set Document value
     * @param \Ammonkc\Otaehi\StructType\Document $document
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setDocument(\Ammonkc\Otaehi\StructType\Document $document = null)
    {
        $this->Document = $document;
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
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get NameType value
     * @return UNKNOWN|null
     */
    public function getNameType()
    {
        return $this->NameType;
    }
    /**
     * Set NameType value
     * @param UNKNOWN $nameType
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setNameType(UNKNOWN $nameType = null)
    {
        $this->NameType = $nameType;
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
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
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
     * Get DefaultInd value
     * @return bool|null
     */
    public function getDefaultInd()
    {
        return $this->DefaultInd;
    }
    /**
     * Set DefaultInd value
     * @param bool $defaultInd
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
     */
    public function setDefaultInd($defaultInd = null)
    {
        $this->DefaultInd = $defaultInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PersonNameType
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
