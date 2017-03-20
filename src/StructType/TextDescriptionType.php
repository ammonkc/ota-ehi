<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextDescriptionType StructType
 * @subpackage Structs
 */
class TextDescriptionType extends AbstractStructBase
{
    /**
     * The URL
     * @var string
     */
    public $URL;
    /**
     * The Description
     * @var \Ammonkc\Otaehi\StructType\Description
     */
    public $Description;
    /**
     * The Category
     * @var
     */
    public $Category;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * Constructor method for TextDescriptionType
     * @uses TextDescriptionType::setURL()
     * @uses TextDescriptionType::setDescription()
     * @uses TextDescriptionType::setCategory()
     * @uses TextDescriptionType::setLanguage()
     * @param string $uRL
     * @param \Ammonkc\Otaehi\StructType\Description $description
     * @param  $category
     * @param string $language
     */
    public function __construct($uRL = null, \Ammonkc\Otaehi\StructType\Description $description = null,  $category = null, $language = null)
    {
        $this
            ->setURL($uRL)
            ->setDescription($description)
            ->setCategory($category)
            ->setLanguage($language);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Ammonkc\Otaehi\StructType\TextDescriptionType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
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
     * @return \Ammonkc\Otaehi\StructType\TextDescriptionType
     */
    public function setDescription(\Ammonkc\Otaehi\StructType\Description $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Category value
     * @return |null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param  $category
     * @return \Ammonkc\Otaehi\StructType\TextDescriptionType
     */
    public function setCategory( $category = null)
    {
        $this->Category = $category;
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
     * @return \Ammonkc\Otaehi\StructType\TextDescriptionType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\TextDescriptionType
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
