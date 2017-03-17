<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageDescriptionType StructType
 * @subpackage Structs
 */
class ImageDescriptionType extends AbstractStructBase
{
    /**
     * The ImageFormat
     * @var \ammonkc\otaehi\StructType\ImageFormat
     */
    public $ImageFormat;
    /**
     * The Description
     * @var \ammonkc\otaehi\StructType\Description
     */
    public $Description;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Category
     * @var UNKNOWN
     */
    public $Category;
    /**
     * Constructor method for ImageDescriptionType
     * @uses ImageDescriptionType::setImageFormat()
     * @uses ImageDescriptionType::setDescription()
     * @uses ImageDescriptionType::setTPA_Extensions()
     * @uses ImageDescriptionType::setCategory()
     * @param \ammonkc\otaehi\StructType\ImageFormat $imageFormat
     * @param \ammonkc\otaehi\StructType\Description $description
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $category
     */
    public function __construct(\ammonkc\otaehi\StructType\ImageFormat $imageFormat = null, \ammonkc\otaehi\StructType\Description $description = null, $tPA_Extensions = null, UNKNOWN $category = null)
    {
        $this
            ->setImageFormat($imageFormat)
            ->setDescription($description)
            ->setTPA_Extensions($tPA_Extensions)
            ->setCategory($category);
    }
    /**
     * Get ImageFormat value
     * @return \ammonkc\otaehi\StructType\ImageFormat|null
     */
    public function getImageFormat()
    {
        return $this->ImageFormat;
    }
    /**
     * Set ImageFormat value
     * @param \ammonkc\otaehi\StructType\ImageFormat $imageFormat
     * @return \ammonkc\otaehi\StructType\ImageDescriptionType
     */
    public function setImageFormat(\ammonkc\otaehi\StructType\ImageFormat $imageFormat = null)
    {
        $this->ImageFormat = $imageFormat;
        return $this;
    }
    /**
     * Get Description value
     * @return \ammonkc\otaehi\StructType\Description|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \ammonkc\otaehi\StructType\Description $description
     * @return \ammonkc\otaehi\StructType\ImageDescriptionType
     */
    public function setDescription(\ammonkc\otaehi\StructType\Description $description = null)
    {
        $this->Description = $description;
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
     * @return \ammonkc\otaehi\StructType\ImageDescriptionType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
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
     * @return \ammonkc\otaehi\StructType\ImageDescriptionType
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
     * @return \ammonkc\otaehi\StructType\ImageDescriptionType
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
