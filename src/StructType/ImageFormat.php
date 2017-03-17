<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageFormat StructType
 * @subpackage Structs
 */
class ImageFormat extends AbstractStructBase
{
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The Format
     * @var UNKNOWN
     */
    public $Format;
    /**
     * The FileName
     * @var UNKNOWN
     */
    public $FileName;
    /**
     * The FileSize
     * @var int
     */
    public $FileSize;
    /**
     * The DimensionCategory
     * @var UNKNOWN
     */
    public $DimensionCategory;
    /**
     * The IsOriginalIndicator
     * @var bool
     */
    public $IsOriginalIndicator;
    /**
     * The AuthorContact
     * @var string
     */
    public $AuthorContact;
    /**
     * The Sort
     * @var int
     */
    public $Sort;
    /**
     * The Resolution
     * @var int
     */
    public $Resolution;
    /**
     * The ColorSpace
     * @var UNKNOWN
     */
    public $ColorSpace;
    /**
     * The Latitude
     * @var UNKNOWN
     */
    public $Latitude;
    /**
     * The Longitude
     * @var UNKNOWN
     */
    public $Longitude;
    /**
     * The OriginalFileName
     * @var UNKNOWN
     */
    public $OriginalFileName;
    /**
     * Constructor method for ImageFormat
     * @uses ImageFormat::setLanguage()
     * @uses ImageFormat::setFormat()
     * @uses ImageFormat::setFileName()
     * @uses ImageFormat::setFileSize()
     * @uses ImageFormat::setDimensionCategory()
     * @uses ImageFormat::setIsOriginalIndicator()
     * @uses ImageFormat::setAuthorContact()
     * @uses ImageFormat::setSort()
     * @uses ImageFormat::setResolution()
     * @uses ImageFormat::setColorSpace()
     * @uses ImageFormat::setLatitude()
     * @uses ImageFormat::setLongitude()
     * @uses ImageFormat::setOriginalFileName()
     * @param string $language
     * @param UNKNOWN $format
     * @param UNKNOWN $fileName
     * @param int $fileSize
     * @param UNKNOWN $dimensionCategory
     * @param bool $isOriginalIndicator
     * @param string $authorContact
     * @param int $sort
     * @param int $resolution
     * @param UNKNOWN $colorSpace
     * @param UNKNOWN $latitude
     * @param UNKNOWN $longitude
     * @param UNKNOWN $originalFileName
     */
    public function __construct($language = null, UNKNOWN $format = null, UNKNOWN $fileName = null, $fileSize = null, UNKNOWN $dimensionCategory = null, $isOriginalIndicator = null, $authorContact = null, $sort = null, $resolution = null, UNKNOWN $colorSpace = null, UNKNOWN $latitude = null, UNKNOWN $longitude = null, UNKNOWN $originalFileName = null)
    {
        $this
            ->setLanguage($language)
            ->setFormat($format)
            ->setFileName($fileName)
            ->setFileSize($fileSize)
            ->setDimensionCategory($dimensionCategory)
            ->setIsOriginalIndicator($isOriginalIndicator)
            ->setAuthorContact($authorContact)
            ->setSort($sort)
            ->setResolution($resolution)
            ->setColorSpace($colorSpace)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setOriginalFileName($originalFileName);
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
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
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
     * Get Format value
     * @return UNKNOWN|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param UNKNOWN $format
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setFormat(UNKNOWN $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get FileName value
     * @return UNKNOWN|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param UNKNOWN $fileName
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setFileName(UNKNOWN $fileName = null)
    {
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get FileSize value
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }
    /**
     * Set FileSize value
     * @param int $fileSize
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setFileSize($fileSize = null)
    {
        // validation for constraint: int
        if (!is_null($fileSize) && !is_numeric($fileSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fileSize)), __LINE__);
        }
        $this->FileSize = $fileSize;
        return $this;
    }
    /**
     * Get DimensionCategory value
     * @return UNKNOWN|null
     */
    public function getDimensionCategory()
    {
        return $this->DimensionCategory;
    }
    /**
     * Set DimensionCategory value
     * @param UNKNOWN $dimensionCategory
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setDimensionCategory(UNKNOWN $dimensionCategory = null)
    {
        $this->DimensionCategory = $dimensionCategory;
        return $this;
    }
    /**
     * Get IsOriginalIndicator value
     * @return bool|null
     */
    public function getIsOriginalIndicator()
    {
        return $this->IsOriginalIndicator;
    }
    /**
     * Set IsOriginalIndicator value
     * @param bool $isOriginalIndicator
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setIsOriginalIndicator($isOriginalIndicator = null)
    {
        $this->IsOriginalIndicator = $isOriginalIndicator;
        return $this;
    }
    /**
     * Get AuthorContact value
     * @return string|null
     */
    public function getAuthorContact()
    {
        return $this->AuthorContact;
    }
    /**
     * Set AuthorContact value
     * @param string $authorContact
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setAuthorContact($authorContact = null)
    {
        // validation for constraint: string
        if (!is_null($authorContact) && !is_string($authorContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorContact)), __LINE__);
        }
        $this->AuthorContact = $authorContact;
        return $this;
    }
    /**
     * Get Sort value
     * @return int|null
     */
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @param int $sort
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setSort($sort = null)
    {
        // validation for constraint: int
        if (!is_null($sort) && !is_numeric($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sort)), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Get Resolution value
     * @return int|null
     */
    public function getResolution()
    {
        return $this->Resolution;
    }
    /**
     * Set Resolution value
     * @param int $resolution
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setResolution($resolution = null)
    {
        // validation for constraint: int
        if (!is_null($resolution) && !is_numeric($resolution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($resolution)), __LINE__);
        }
        $this->Resolution = $resolution;
        return $this;
    }
    /**
     * Get ColorSpace value
     * @return UNKNOWN|null
     */
    public function getColorSpace()
    {
        return $this->ColorSpace;
    }
    /**
     * Set ColorSpace value
     * @param UNKNOWN $colorSpace
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setColorSpace(UNKNOWN $colorSpace = null)
    {
        $this->ColorSpace = $colorSpace;
        return $this;
    }
    /**
     * Get Latitude value
     * @return UNKNOWN|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param UNKNOWN $latitude
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setLatitude(UNKNOWN $latitude = null)
    {
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Get Longitude value
     * @return UNKNOWN|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param UNKNOWN $longitude
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setLongitude(UNKNOWN $longitude = null)
    {
        $this->Longitude = $longitude;
        return $this;
    }
    /**
     * Get OriginalFileName value
     * @return UNKNOWN|null
     */
    public function getOriginalFileName()
    {
        return $this->OriginalFileName;
    }
    /**
     * Set OriginalFileName value
     * @param UNKNOWN $originalFileName
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
     */
    public function setOriginalFileName(UNKNOWN $originalFileName = null)
    {
        $this->OriginalFileName = $originalFileName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ImageFormat
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
