<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var
     */
    public $SubTitle;
    /**
     * The SubCode
     * @var
     */
    public $SubCode;
    /**
     * The SubSectionNumber
     * @var
     */
    public $SubSectionNumber;
    /**
     * Constructor method for FormattedTextSubSectionType
     * @uses FormattedTextSubSectionType::setParagraph()
     * @uses FormattedTextSubSectionType::setSubTitle()
     * @uses FormattedTextSubSectionType::setSubCode()
     * @uses FormattedTextSubSectionType::setSubSectionNumber()
     * @param mixed $paragraph
     * @param  $subTitle
     * @param  $subCode
     * @param  $subSectionNumber
     */
    public function __construct($paragraph = null,  $subTitle = null,  $subCode = null,  $subSectionNumber = null)
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
     * @return \Ammonkc\Otaehi\StructType\FormattedTextSubSectionType
     */
    public function setParagraph($paragraph = null)
    {
        $this->Paragraph = $paragraph;
        return $this;
    }
    /**
     * Get SubTitle value
     * @return |null
     */
    public function getSubTitle()
    {
        return $this->SubTitle;
    }
    /**
     * Set SubTitle value
     * @param  $subTitle
     * @return \Ammonkc\Otaehi\StructType\FormattedTextSubSectionType
     */
    public function setSubTitle( $subTitle = null)
    {
        $this->SubTitle = $subTitle;
        return $this;
    }
    /**
     * Get SubCode value
     * @return |null
     */
    public function getSubCode()
    {
        return $this->SubCode;
    }
    /**
     * Set SubCode value
     * @param  $subCode
     * @return \Ammonkc\Otaehi\StructType\FormattedTextSubSectionType
     */
    public function setSubCode( $subCode = null)
    {
        $this->SubCode = $subCode;
        return $this;
    }
    /**
     * Get SubSectionNumber value
     * @return |null
     */
    public function getSubSectionNumber()
    {
        return $this->SubSectionNumber;
    }
    /**
     * Set SubSectionNumber value
     * @param  $subSectionNumber
     * @return \Ammonkc\Otaehi\StructType\FormattedTextSubSectionType
     */
    public function setSubSectionNumber( $subSectionNumber = null)
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
     * @return \Ammonkc\Otaehi\StructType\FormattedTextSubSectionType
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
