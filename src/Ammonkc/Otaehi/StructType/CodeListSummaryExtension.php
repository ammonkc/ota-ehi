<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodeListSummaryExtension StructType
 * @subpackage Structs
 */
class CodeListSummaryExtension extends AbstractStructBase
{
    /**
     * The RemovalInd
     * @var bool
     */
    public $RemovalInd;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The DescriptionDetail
     * @var string
     */
    public $DescriptionDetail;
    /**
     * The SourceName
     * @var string
     */
    public $SourceName;
    /**
     * The SourceURL
     * @var string
     */
    public $SourceURL;
    /**
     * The ResourceID
     * @var string
     */
    public $ResourceID;
    /**
     * The ResourceName
     * @var string
     */
    public $ResourceName;
    /**
     * The ResourceURL
     * @var string
     */
    public $ResourceURL;
    /**
     * The UniqueID
     * @var string
     */
    public $UniqueID;
    /**
     * Constructor method for CodeListSummaryExtension
     * @uses CodeListSummaryExtension::setRemovalInd()
     * @uses CodeListSummaryExtension::setLanguage()
     * @uses CodeListSummaryExtension::setCode()
     * @uses CodeListSummaryExtension::setDescription()
     * @uses CodeListSummaryExtension::setDescriptionDetail()
     * @uses CodeListSummaryExtension::setSourceName()
     * @uses CodeListSummaryExtension::setSourceURL()
     * @uses CodeListSummaryExtension::setResourceID()
     * @uses CodeListSummaryExtension::setResourceName()
     * @uses CodeListSummaryExtension::setResourceURL()
     * @uses CodeListSummaryExtension::setUniqueID()
     * @param bool $removalInd
     * @param string $language
     * @param string $code
     * @param string $description
     * @param string $descriptionDetail
     * @param string $sourceName
     * @param string $sourceURL
     * @param string $resourceID
     * @param string $resourceName
     * @param string $resourceURL
     * @param string $uniqueID
     */
    public function __construct($removalInd = null, $language = null, $code = null, $description = null, $descriptionDetail = null, $sourceName = null, $sourceURL = null, $resourceID = null, $resourceName = null, $resourceURL = null, $uniqueID = null)
    {
        $this
            ->setRemovalInd($removalInd)
            ->setLanguage($language)
            ->setCode($code)
            ->setDescription($description)
            ->setDescriptionDetail($descriptionDetail)
            ->setSourceName($sourceName)
            ->setSourceURL($sourceURL)
            ->setResourceID($resourceID)
            ->setResourceName($resourceName)
            ->setResourceURL($resourceURL)
            ->setUniqueID($uniqueID);
    }
    /**
     * Get RemovalInd value
     * @return bool|null
     */
    public function getRemovalInd()
    {
        return $this->RemovalInd;
    }
    /**
     * Set RemovalInd value
     * @param bool $removalInd
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
     */
    public function setRemovalInd($removalInd = null)
    {
        $this->RemovalInd = $removalInd;
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
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
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
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DescriptionDetail value
     * @return string|null
     */
    public function getDescriptionDetail()
    {
        return $this->DescriptionDetail;
    }
    /**
     * Set DescriptionDetail value
     * @param string $descriptionDetail
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
     */
    public function setDescriptionDetail($descriptionDetail = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionDetail) && !is_string($descriptionDetail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptionDetail)), __LINE__);
        }
        $this->DescriptionDetail = $descriptionDetail;
        return $this;
    }
    /**
     * Get SourceName value
     * @return string|null
     */
    public function getSourceName()
    {
        return $this->SourceName;
    }
    /**
     * Set SourceName value
     * @param string $sourceName
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
     */
    public function setSourceName($sourceName = null)
    {
        // validation for constraint: string
        if (!is_null($sourceName) && !is_string($sourceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceName)), __LINE__);
        }
        $this->SourceName = $sourceName;
        return $this;
    }
    /**
     * Get SourceURL value
     * @return string|null
     */
    public function getSourceURL()
    {
        return $this->SourceURL;
    }
    /**
     * Set SourceURL value
     * @param string $sourceURL
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
     */
    public function setSourceURL($sourceURL = null)
    {
        // validation for constraint: string
        if (!is_null($sourceURL) && !is_string($sourceURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceURL)), __LINE__);
        }
        $this->SourceURL = $sourceURL;
        return $this;
    }
    /**
     * Get ResourceID value
     * @return string|null
     */
    public function getResourceID()
    {
        return $this->ResourceID;
    }
    /**
     * Set ResourceID value
     * @param string $resourceID
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
     */
    public function setResourceID($resourceID = null)
    {
        // validation for constraint: string
        if (!is_null($resourceID) && !is_string($resourceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resourceID)), __LINE__);
        }
        $this->ResourceID = $resourceID;
        return $this;
    }
    /**
     * Get ResourceName value
     * @return string|null
     */
    public function getResourceName()
    {
        return $this->ResourceName;
    }
    /**
     * Set ResourceName value
     * @param string $resourceName
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
     */
    public function setResourceName($resourceName = null)
    {
        // validation for constraint: string
        if (!is_null($resourceName) && !is_string($resourceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resourceName)), __LINE__);
        }
        $this->ResourceName = $resourceName;
        return $this;
    }
    /**
     * Get ResourceURL value
     * @return string|null
     */
    public function getResourceURL()
    {
        return $this->ResourceURL;
    }
    /**
     * Set ResourceURL value
     * @param string $resourceURL
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
     */
    public function setResourceURL($resourceURL = null)
    {
        // validation for constraint: string
        if (!is_null($resourceURL) && !is_string($resourceURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resourceURL)), __LINE__);
        }
        $this->ResourceURL = $resourceURL;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return string|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param string $uniqueID
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
     */
    public function setUniqueID($uniqueID = null)
    {
        // validation for constraint: string
        if (!is_null($uniqueID) && !is_string($uniqueID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uniqueID)), __LINE__);
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CodeListSummaryExtension
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
