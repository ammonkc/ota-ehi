<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormattedTextType StructType
 * @subpackage Structs
 */
class FormattedTextType extends AbstractStructBase
{
    /**
     * The SubSection
     * @var mixed
     */
    public $SubSection;
    /**
     * The Title
     * @var UNKNOWN
     */
    public $Title;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * Constructor method for FormattedTextType
     * @uses FormattedTextType::setSubSection()
     * @uses FormattedTextType::setTitle()
     * @uses FormattedTextType::setLanguage()
     * @param mixed $subSection
     * @param UNKNOWN $title
     * @param string $language
     */
    public function __construct($subSection = null, UNKNOWN $title = null, $language = null)
    {
        $this
            ->setSubSection($subSection)
            ->setTitle($title)
            ->setLanguage($language);
    }
    /**
     * Get SubSection value
     * @return mixed|null
     */
    public function getSubSection()
    {
        return $this->SubSection;
    }
    /**
     * Set SubSection value
     * @param mixed $subSection
     * @return \Ammonkc\Otaehi\StructType\FormattedTextType
     */
    public function setSubSection($subSection = null)
    {
        $this->SubSection = $subSection;
        return $this;
    }
    /**
     * Get Title value
     * @return UNKNOWN|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param UNKNOWN $title
     * @return \Ammonkc\Otaehi\StructType\FormattedTextType
     */
    public function setTitle(UNKNOWN $title = null)
    {
        $this->Title = $title;
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
     * @return \Ammonkc\Otaehi\StructType\FormattedTextType
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
     * @return \Ammonkc\Otaehi\StructType\FormattedTextType
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
