<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormattedTextSubSectionType StructType
 * @subpackage Structs
 */
class FormattedTextSubSectionType extends AbstractStructBase
{
    /**
     * The Paragraph
     * @var mixed
     */
    public $Paragraph;
    /**
     * The SubTitle
     * @var UNKNOWN
     */
    public $SubTitle;
    /**
     * The SubCode
     * @var UNKNOWN
     */
    public $SubCode;
    /**
     * The SubSectionNumber
     * @var UNKNOWN
     */
    public $SubSectionNumber;
    /**
     * Constructor method for FormattedTextSubSectionType
     * @uses FormattedTextSubSectionType::setParagraph()
     * @uses FormattedTextSubSectionType::setSubTitle()
     * @uses FormattedTextSubSectionType::setSubCode()
     * @uses FormattedTextSubSectionType::setSubSectionNumber()
     * @param mixed $paragraph
     * @param UNKNOWN $subTitle
     * @param UNKNOWN $subCode
     * @param UNKNOWN $subSectionNumber
     */
    public function __construct($paragraph = null, UNKNOWN $subTitle = null, UNKNOWN $subCode = null, UNKNOWN $subSectionNumber = null)
    {
        $this
            ->setParagraph($paragraph)
            ->setSubTitle($subTitle)
            ->setSubCode($subCode)
            ->setSubSectionNumber($subSectionNumber);
    }
    /**
     * Get Paragraph value
     * @return mixed|null
     */
    public function getParagraph()
    {
        return $this->Paragraph;
    }
    /**
     * Set Paragraph value
     * @param mixed $paragraph
     * @return \ammonkc\otaehi\StructType\FormattedTextSubSectionType
     */
    public function setParagraph($paragraph = null)
    {
        $this->Paragraph = $paragraph;
        return $this;
    }
    /**
     * Get SubTitle value
     * @return UNKNOWN|null
     */
    public function getSubTitle()
    {
        return $this->SubTitle;
    }
    /**
     * Set SubTitle value
     * @param UNKNOWN $subTitle
     * @return \ammonkc\otaehi\StructType\FormattedTextSubSectionType
     */
    public function setSubTitle(UNKNOWN $subTitle = null)
    {
        $this->SubTitle = $subTitle;
        return $this;
    }
    /**
     * Get SubCode value
     * @return UNKNOWN|null
     */
    public function getSubCode()
    {
        return $this->SubCode;
    }
    /**
     * Set SubCode value
     * @param UNKNOWN $subCode
     * @return \ammonkc\otaehi\StructType\FormattedTextSubSectionType
     */
    public function setSubCode(UNKNOWN $subCode = null)
    {
        $this->SubCode = $subCode;
        return $this;
    }
    /**
     * Get SubSectionNumber value
     * @return UNKNOWN|null
     */
    public function getSubSectionNumber()
    {
        return $this->SubSectionNumber;
    }
    /**
     * Set SubSectionNumber value
     * @param UNKNOWN $subSectionNumber
     * @return \ammonkc\otaehi\StructType\FormattedTextSubSectionType
     */
    public function setSubSectionNumber(UNKNOWN $subSectionNumber = null)
    {
        $this->SubSectionNumber = $subSectionNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\FormattedTextSubSectionType
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
