<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentType StructType
 * @subpackage Structs
 */
class DocumentType extends AbstractStructBase
{
    /**
     * The DocHolderName
     * @var mixed
     */
    public $DocHolderName;
    /**
     * The DocHolderFormattedName
     * @var mixed
     */
    public $DocHolderFormattedName;
    /**
     * The DocLimitations
     * @var mixed
     */
    public $DocLimitations;
    /**
     * The AdditionalPersonNames
     * @var \Ammonkc\Otaehi\StructType\AdditionalPersonNames
     */
    public $AdditionalPersonNames;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The DocIssueAuthority
     * @var UNKNOWN
     */
    public $DocIssueAuthority;
    /**
     * The DocIssueLocation
     * @var UNKNOWN
     */
    public $DocIssueLocation;
    /**
     * The DocID
     * @var UNKNOWN
     */
    public $DocID;
    /**
     * The DocType
     * @var UNKNOWN
     */
    public $DocType;
    /**
     * The DocIssueStateProv
     * @var UNKNOWN
     */
    public $DocIssueStateProv;
    /**
     * The DocIssueCountry
     * @var UNKNOWN
     */
    public $DocIssueCountry;
    /**
     * The BirthCountry
     * @var UNKNOWN
     */
    public $BirthCountry;
    /**
     * The BirthPlace
     * @var UNKNOWN
     */
    public $BirthPlace;
    /**
     * The DocHolderNationality
     * @var UNKNOWN
     */
    public $DocHolderNationality;
    /**
     * The ContactName
     * @var UNKNOWN
     */
    public $ContactName;
    /**
     * The HolderType
     * @var string
     */
    public $HolderType;
    /**
     * The Remark
     * @var UNKNOWN
     */
    public $Remark;
    /**
     * The PostalCode
     * @var UNKNOWN
     */
    public $PostalCode;
    /**
     * Constructor method for DocumentType
     * @uses DocumentType::setDocHolderName()
     * @uses DocumentType::setDocHolderFormattedName()
     * @uses DocumentType::setDocLimitations()
     * @uses DocumentType::setAdditionalPersonNames()
     * @uses DocumentType::setTPA_Extensions()
     * @uses DocumentType::setDocIssueAuthority()
     * @uses DocumentType::setDocIssueLocation()
     * @uses DocumentType::setDocID()
     * @uses DocumentType::setDocType()
     * @uses DocumentType::setDocIssueStateProv()
     * @uses DocumentType::setDocIssueCountry()
     * @uses DocumentType::setBirthCountry()
     * @uses DocumentType::setBirthPlace()
     * @uses DocumentType::setDocHolderNationality()
     * @uses DocumentType::setContactName()
     * @uses DocumentType::setHolderType()
     * @uses DocumentType::setRemark()
     * @uses DocumentType::setPostalCode()
     * @param mixed $docHolderName
     * @param mixed $docHolderFormattedName
     * @param mixed $docLimitations
     * @param \Ammonkc\Otaehi\StructType\AdditionalPersonNames $additionalPersonNames
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $docIssueAuthority
     * @param UNKNOWN $docIssueLocation
     * @param UNKNOWN $docID
     * @param UNKNOWN $docType
     * @param UNKNOWN $docIssueStateProv
     * @param UNKNOWN $docIssueCountry
     * @param UNKNOWN $birthCountry
     * @param UNKNOWN $birthPlace
     * @param UNKNOWN $docHolderNationality
     * @param UNKNOWN $contactName
     * @param string $holderType
     * @param UNKNOWN $remark
     * @param UNKNOWN $postalCode
     */
    public function __construct($docHolderName = null, $docHolderFormattedName = null, $docLimitations = null, \Ammonkc\Otaehi\StructType\AdditionalPersonNames $additionalPersonNames = null, $tPA_Extensions = null, UNKNOWN $docIssueAuthority = null, UNKNOWN $docIssueLocation = null, UNKNOWN $docID = null, UNKNOWN $docType = null, UNKNOWN $docIssueStateProv = null, UNKNOWN $docIssueCountry = null, UNKNOWN $birthCountry = null, UNKNOWN $birthPlace = null, UNKNOWN $docHolderNationality = null, UNKNOWN $contactName = null, $holderType = null, UNKNOWN $remark = null, UNKNOWN $postalCode = null)
    {
        $this
            ->setDocHolderName($docHolderName)
            ->setDocHolderFormattedName($docHolderFormattedName)
            ->setDocLimitations($docLimitations)
            ->setAdditionalPersonNames($additionalPersonNames)
            ->setTPA_Extensions($tPA_Extensions)
            ->setDocIssueAuthority($docIssueAuthority)
            ->setDocIssueLocation($docIssueLocation)
            ->setDocID($docID)
            ->setDocType($docType)
            ->setDocIssueStateProv($docIssueStateProv)
            ->setDocIssueCountry($docIssueCountry)
            ->setBirthCountry($birthCountry)
            ->setBirthPlace($birthPlace)
            ->setDocHolderNationality($docHolderNationality)
            ->setContactName($contactName)
            ->setHolderType($holderType)
            ->setRemark($remark)
            ->setPostalCode($postalCode);
    }
    /**
     * Get DocHolderName value
     * @return mixed|null
     */
    public function getDocHolderName()
    {
        return $this->DocHolderName;
    }
    /**
     * Set DocHolderName value
     * @param mixed $docHolderName
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocHolderName($docHolderName = null)
    {
        $this->DocHolderName = $docHolderName;
        return $this;
    }
    /**
     * Get DocHolderFormattedName value
     * @return mixed|null
     */
    public function getDocHolderFormattedName()
    {
        return $this->DocHolderFormattedName;
    }
    /**
     * Set DocHolderFormattedName value
     * @param mixed $docHolderFormattedName
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocHolderFormattedName($docHolderFormattedName = null)
    {
        $this->DocHolderFormattedName = $docHolderFormattedName;
        return $this;
    }
    /**
     * Get DocLimitations value
     * @return mixed|null
     */
    public function getDocLimitations()
    {
        return $this->DocLimitations;
    }
    /**
     * Set DocLimitations value
     * @param mixed $docLimitations
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocLimitations($docLimitations = null)
    {
        $this->DocLimitations = $docLimitations;
        return $this;
    }
    /**
     * Get AdditionalPersonNames value
     * @return \Ammonkc\Otaehi\StructType\AdditionalPersonNames|null
     */
    public function getAdditionalPersonNames()
    {
        return $this->AdditionalPersonNames;
    }
    /**
     * Set AdditionalPersonNames value
     * @param \Ammonkc\Otaehi\StructType\AdditionalPersonNames $additionalPersonNames
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setAdditionalPersonNames(\Ammonkc\Otaehi\StructType\AdditionalPersonNames $additionalPersonNames = null)
    {
        $this->AdditionalPersonNames = $additionalPersonNames;
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
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get DocIssueAuthority value
     * @return UNKNOWN|null
     */
    public function getDocIssueAuthority()
    {
        return $this->DocIssueAuthority;
    }
    /**
     * Set DocIssueAuthority value
     * @param UNKNOWN $docIssueAuthority
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocIssueAuthority(UNKNOWN $docIssueAuthority = null)
    {
        $this->DocIssueAuthority = $docIssueAuthority;
        return $this;
    }
    /**
     * Get DocIssueLocation value
     * @return UNKNOWN|null
     */
    public function getDocIssueLocation()
    {
        return $this->DocIssueLocation;
    }
    /**
     * Set DocIssueLocation value
     * @param UNKNOWN $docIssueLocation
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocIssueLocation(UNKNOWN $docIssueLocation = null)
    {
        $this->DocIssueLocation = $docIssueLocation;
        return $this;
    }
    /**
     * Get DocID value
     * @return UNKNOWN|null
     */
    public function getDocID()
    {
        return $this->DocID;
    }
    /**
     * Set DocID value
     * @param UNKNOWN $docID
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocID(UNKNOWN $docID = null)
    {
        $this->DocID = $docID;
        return $this;
    }
    /**
     * Get DocType value
     * @return UNKNOWN|null
     */
    public function getDocType()
    {
        return $this->DocType;
    }
    /**
     * Set DocType value
     * @param UNKNOWN $docType
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocType(UNKNOWN $docType = null)
    {
        $this->DocType = $docType;
        return $this;
    }
    /**
     * Get DocIssueStateProv value
     * @return UNKNOWN|null
     */
    public function getDocIssueStateProv()
    {
        return $this->DocIssueStateProv;
    }
    /**
     * Set DocIssueStateProv value
     * @param UNKNOWN $docIssueStateProv
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocIssueStateProv(UNKNOWN $docIssueStateProv = null)
    {
        $this->DocIssueStateProv = $docIssueStateProv;
        return $this;
    }
    /**
     * Get DocIssueCountry value
     * @return UNKNOWN|null
     */
    public function getDocIssueCountry()
    {
        return $this->DocIssueCountry;
    }
    /**
     * Set DocIssueCountry value
     * @param UNKNOWN $docIssueCountry
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocIssueCountry(UNKNOWN $docIssueCountry = null)
    {
        $this->DocIssueCountry = $docIssueCountry;
        return $this;
    }
    /**
     * Get BirthCountry value
     * @return UNKNOWN|null
     */
    public function getBirthCountry()
    {
        return $this->BirthCountry;
    }
    /**
     * Set BirthCountry value
     * @param UNKNOWN $birthCountry
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setBirthCountry(UNKNOWN $birthCountry = null)
    {
        $this->BirthCountry = $birthCountry;
        return $this;
    }
    /**
     * Get BirthPlace value
     * @return UNKNOWN|null
     */
    public function getBirthPlace()
    {
        return $this->BirthPlace;
    }
    /**
     * Set BirthPlace value
     * @param UNKNOWN $birthPlace
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setBirthPlace(UNKNOWN $birthPlace = null)
    {
        $this->BirthPlace = $birthPlace;
        return $this;
    }
    /**
     * Get DocHolderNationality value
     * @return UNKNOWN|null
     */
    public function getDocHolderNationality()
    {
        return $this->DocHolderNationality;
    }
    /**
     * Set DocHolderNationality value
     * @param UNKNOWN $docHolderNationality
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocHolderNationality(UNKNOWN $docHolderNationality = null)
    {
        $this->DocHolderNationality = $docHolderNationality;
        return $this;
    }
    /**
     * Get ContactName value
     * @return UNKNOWN|null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    /**
     * Set ContactName value
     * @param UNKNOWN $contactName
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setContactName(UNKNOWN $contactName = null)
    {
        $this->ContactName = $contactName;
        return $this;
    }
    /**
     * Get HolderType value
     * @return string|null
     */
    public function getHolderType()
    {
        return $this->HolderType;
    }
    /**
     * Set HolderType value
     * @param string $holderType
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setHolderType($holderType = null)
    {
        // validation for constraint: string
        if (!is_null($holderType) && !is_string($holderType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($holderType)), __LINE__);
        }
        $this->HolderType = $holderType;
        return $this;
    }
    /**
     * Get Remark value
     * @return UNKNOWN|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param UNKNOWN $remark
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setRemark(UNKNOWN $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return UNKNOWN|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param UNKNOWN $postalCode
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setPostalCode(UNKNOWN $postalCode = null)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\DocumentType
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
