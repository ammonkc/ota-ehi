<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaDescriptionType StructType
 * @subpackage Structs
 */
class MultimediaDescriptionType extends AbstractStructBase
{
    /**
     * The VideoItems
     * @var mixed
     */
    public $VideoItems;
    /**
     * The ImageItems
     * @var mixed
     */
    public $ImageItems;
    /**
     * The TextItems
     * @var mixed
     */
    public $TextItems;
    /**
     * The InfoCode
     * @var
     */
    public $InfoCode;
    /**
     * The AdditionalDetailCode
     * @var
     */
    public $AdditionalDetailCode;
    /**
     * The LastUpdated
     * @var string
     */
    public $LastUpdated;
    /**
     * The Version
     * @var string
     */
    public $Version;
    /**
     * Constructor method for MultimediaDescriptionType
     * @uses MultimediaDescriptionType::setVideoItems()
     * @uses MultimediaDescriptionType::setImageItems()
     * @uses MultimediaDescriptionType::setTextItems()
     * @uses MultimediaDescriptionType::setInfoCode()
     * @uses MultimediaDescriptionType::setAdditionalDetailCode()
     * @uses MultimediaDescriptionType::setLastUpdated()
     * @uses MultimediaDescriptionType::setVersion()
     * @param mixed $videoItems
     * @param mixed $imageItems
     * @param mixed $textItems
     * @param  $infoCode
     * @param  $additionalDetailCode
     * @param string $lastUpdated
     * @param string $version
     */
    public function __construct($videoItems = null, $imageItems = null, $textItems = null,  $infoCode = null,  $additionalDetailCode = null, $lastUpdated = null, $version = null)
    {
        $this
            ->setVideoItems($videoItems)
            ->setImageItems($imageItems)
            ->setTextItems($textItems)
            ->setInfoCode($infoCode)
            ->setAdditionalDetailCode($additionalDetailCode)
            ->setLastUpdated($lastUpdated)
            ->setVersion($version);
    }
    /**
     * Get VideoItems value
     * @return mixed|null
     */
    public function getVideoItems()
    {
        return $this->VideoItems;
    }
    /**
     * Set VideoItems value
     * @param mixed $videoItems
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionType
     */
    public function setVideoItems($videoItems = null)
    {
        $this->VideoItems = $videoItems;
        return $this;
    }
    /**
     * Get ImageItems value
     * @return mixed|null
     */
    public function getImageItems()
    {
        return $this->ImageItems;
    }
    /**
     * Set ImageItems value
     * @param mixed $imageItems
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionType
     */
    public function setImageItems($imageItems = null)
    {
        $this->ImageItems = $imageItems;
        return $this;
    }
    /**
     * Get TextItems value
     * @return mixed|null
     */
    public function getTextItems()
    {
        return $this->TextItems;
    }
    /**
     * Set TextItems value
     * @param mixed $textItems
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionType
     */
    public function setTextItems($textItems = null)
    {
        $this->TextItems = $textItems;
        return $this;
    }
    /**
     * Get InfoCode value
     * @return |null
     */
    public function getInfoCode()
    {
        return $this->InfoCode;
    }
    /**
     * Set InfoCode value
     * @param  $infoCode
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionType
     */
    public function setInfoCode( $infoCode = null)
    {
        $this->InfoCode = $infoCode;
        return $this;
    }
    /**
     * Get AdditionalDetailCode value
     * @return |null
     */
    public function getAdditionalDetailCode()
    {
        return $this->AdditionalDetailCode;
    }
    /**
     * Set AdditionalDetailCode value
     * @param  $additionalDetailCode
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionType
     */
    public function setAdditionalDetailCode( $additionalDetailCode = null)
    {
        $this->AdditionalDetailCode = $additionalDetailCode;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionType
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionType
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
