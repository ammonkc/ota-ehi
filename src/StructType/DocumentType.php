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
     * @var
     */
    public $DocIssueAuthority;
    /**
     * The DocIssueLocation
     * @var
     */
    public $DocIssueLocation;
    /**
     * The DocID
     * @var
     */
    public $DocID;
    /**
     * The DocType
     * @var
     */
    public $DocType;
    /**
     * The DocIssueStateProv
     * @var
     */
    public $DocIssueStateProv;
    /**
     * The DocIssueCountry
     * @var
     */
    public $DocIssueCountry;
    /**
     * The BirthCountry
     * @var
     */
    public $BirthCountry;
    /**
     * The BirthPlace
     * @var
     */
    public $BirthPlace;
    /**
     * The DocHolderNationality
     * @var
     */
    public $DocHolderNationality;
    /**
     * The ContactName
     * @var
     */
    public $ContactName;
    /**
     * The HolderType
     * @var string
     */
    public $HolderType;
    /**
     * The Remark
     * @var
     */
    public $Remark;
    /**
     * The PostalCode
     * @var
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
     * @param  $docIssueAuthority
     * @param  $docIssueLocation
     * @param  $docID
     * @param  $docType
     * @param  $docIssueStateProv
     * @param  $docIssueCountry
     * @param  $birthCountry
     * @param  $birthPlace
     * @param  $docHolderNationality
     * @param  $contactName
     * @param string $holderType
     * @param  $remark
     * @param  $postalCode
     */
    public function __construct($docHolderName = null, $docHolderFormattedName = null, $docLimitations = null, \Ammonkc\Otaehi\StructType\AdditionalPersonNames $additionalPersonNames = null, $tPA_Extensions = null,  $docIssueAuthority = null,  $docIssueLocation = null,  $docID = null,  $docType = null,  $docIssueStateProv = null,  $docIssueCountry = null,  $birthCountry = null,  $birthPlace = null,  $docHolderNationality = null,  $contactName = null, $holderType = null,  $remark = null,  $postalCode = null)
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
     * @return |null
     */
    public function getDocIssueAuthority()
    {
        return $this->DocIssueAuthority;
    }
    /**
     * Set DocIssueAuthority value
     * @param  $docIssueAuthority
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocIssueAuthority( $docIssueAuthority = null)
    {
        $this->DocIssueAuthority = $docIssueAuthority;
        return $this;
    }
    /**
     * Get DocIssueLocation value
     * @return |null
     */
    public function getDocIssueLocation()
    {
        return $this->DocIssueLocation;
    }
    /**
     * Set DocIssueLocation value
     * @param  $docIssueLocation
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocIssueLocation( $docIssueLocation = null)
    {
        $this->DocIssueLocation = $docIssueLocation;
        return $this;
    }
    /**
     * Get DocID value
     * @return |null
     */
    public function getDocID()
    {
        return $this->DocID;
    }
    /**
     * Set DocID value
     * @param  $docID
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocID( $docID = null)
    {
        $this->DocID = $docID;
        return $this;
    }
    /**
     * Get DocType value
     * @return |null
     */
    public function getDocType()
    {
        return $this->DocType;
    }
    /**
     * Set DocType value
     * @param  $docType
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocType( $docType = null)
    {
        $this->DocType = $docType;
        return $this;
    }
    /**
     * Get DocIssueStateProv value
     * @return |null
     */
    public function getDocIssueStateProv()
    {
        return $this->DocIssueStateProv;
    }
    /**
     * Set DocIssueStateProv value
     * @param  $docIssueStateProv
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocIssueStateProv( $docIssueStateProv = null)
    {
        $this->DocIssueStateProv = $docIssueStateProv;
        return $this;
    }
    /**
     * Get DocIssueCountry value
     * @return |null
     */
    public function getDocIssueCountry()
    {
        return $this->DocIssueCountry;
    }
    /**
     * Set DocIssueCountry value
     * @param  $docIssueCountry
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocIssueCountry( $docIssueCountry = null)
    {
        $this->DocIssueCountry = $docIssueCountry;
        return $this;
    }
    /**
     * Get BirthCountry value
     * @return |null
     */
    public function getBirthCountry()
    {
        return $this->BirthCountry;
    }
    /**
     * Set BirthCountry value
     * @param  $birthCountry
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setBirthCountry( $birthCountry = null)
    {
        $this->BirthCountry = $birthCountry;
        return $this;
    }
    /**
     * Get BirthPlace value
     * @return |null
     */
    public function getBirthPlace()
    {
        return $this->BirthPlace;
    }
    /**
     * Set BirthPlace value
     * @param  $birthPlace
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setBirthPlace( $birthPlace = null)
    {
        $this->BirthPlace = $birthPlace;
        return $this;
    }
    /**
     * Get DocHolderNationality value
     * @return |null
     */
    public function getDocHolderNationality()
    {
        return $this->DocHolderNationality;
    }
    /**
     * Set DocHolderNationality value
     * @param  $docHolderNationality
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setDocHolderNationality( $docHolderNationality = null)
    {
        $this->DocHolderNationality = $docHolderNationality;
        return $this;
    }
    /**
     * Get ContactName value
     * @return |null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    /**
     * Set ContactName value
     * @param  $contactName
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setContactName( $contactName = null)
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
     * @return |null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param  $remark
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setRemark( $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return |null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param  $postalCode
     * @return \Ammonkc\Otaehi\StructType\DocumentType
     */
    public function setPostalCode( $postalCode = null)
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
