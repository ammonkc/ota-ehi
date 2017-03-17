<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoDescriptionType StructType
 * @subpackage Structs
 */
class VideoDescriptionType extends AbstractStructBase
{
    /**
     * The VideoFormat
     * @var \Ammonkc\Otaehi\StructType\VideoFormat
     */
    public $VideoFormat;
    /**
     * The Description
     * @var \Ammonkc\Otaehi\StructType\Description
     */
    public $Description;
    /**
     * The Category
     * @var UNKNOWN
     */
    public $Category;
    /**
     * Constructor method for VideoDescriptionType
     * @uses VideoDescriptionType::setVideoFormat()
     * @uses VideoDescriptionType::setDescription()
     * @uses VideoDescriptionType::setCategory()
     * @param \Ammonkc\Otaehi\StructType\VideoFormat $videoFormat
     * @param \Ammonkc\Otaehi\StructType\Description $description
     * @param UNKNOWN $category
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VideoFormat $videoFormat = null, \Ammonkc\Otaehi\StructType\Description $description = null, UNKNOWN $category = null)
    {
        $this
            ->setVideoFormat($videoFormat)
            ->setDescription($description)
            ->setCategory($category);
    }
    /**
     * Get VideoFormat value
     * @return \Ammonkc\Otaehi\StructType\VideoFormat|null
     */
    public function getVideoFormat()
    {
        return $this->VideoFormat;
    }
    /**
     * Set VideoFormat value
     * @param \Ammonkc\Otaehi\StructType\VideoFormat $videoFormat
     * @return \Ammonkc\Otaehi\StructType\VideoDescriptionType
     */
    public function setVideoFormat(\Ammonkc\Otaehi\StructType\VideoFormat $videoFormat = null)
    {
        $this->VideoFormat = $videoFormat;
        return $this;
    }
    /**
     * Get Description value
     * @return \Ammonkc\Otaehi\StructType\Description|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \Ammonkc\Otaehi\StructType\Description $description
     * @return \Ammonkc\Otaehi\StructType\VideoDescriptionType
     */
    public function setDescription(\Ammonkc\Otaehi\StructType\Description $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Category value
     * @return UNKNOWN|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param UNKNOWN $category
     * @return \Ammonkc\Otaehi\StructType\VideoDescriptionType
     */
    public function setCategory(UNKNOWN $category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VideoDescriptionType
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
