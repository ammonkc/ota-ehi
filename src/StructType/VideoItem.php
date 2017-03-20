<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoItem StructType
 * @subpackage Structs
 */
class VideoItem extends AbstractStructBase
{
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The Caption
     * @var
     */
    public $Caption;
    /**
     * The Version
     * @var string
     */
    public $Version;
    /**
     * Constructor method for VideoItem
     * @uses VideoItem::setLanguage()
     * @uses VideoItem::setCaption()
     * @uses VideoItem::setVersion()
     * @param string $language
     * @param  $caption
     * @param string $version
     */
    public function __construct($language = null,  $caption = null, $version = null)
    {
        $this
            ->setLanguage($language)
            ->setCaption($caption)
            ->setVersion($version);
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
     * @return \Ammonkc\Otaehi\StructType\VideoItem
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
     * Get Caption value
     * @return |null
     */
    public function getCaption()
    {
        return $this->Caption;
    }
    /**
     * Set Caption value
     * @param  $caption
     * @return \Ammonkc\Otaehi\StructType\VideoItem
     */
    public function setCaption( $caption = null)
    {
        $this->Caption = $caption;
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
     * @return \Ammonkc\Otaehi\StructType\VideoItem
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
     * @return \Ammonkc\Otaehi\StructType\VideoItem
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
