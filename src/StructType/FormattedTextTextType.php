<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormattedTextTextType StructType
 * @subpackage Structs
 */
class FormattedTextTextType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Formatted
     * @var bool
     */
    public $Formatted;
    /**
     * The TextFormat
     * @var string
     */
    public $TextFormat;
    /**
     * Constructor method for FormattedTextTextType
     * @uses FormattedTextTextType::set_()
     * @uses FormattedTextTextType::setFormatted()
     * @uses FormattedTextTextType::setTextFormat()
     * @param string $_
     * @param bool $formatted
     * @param string $textFormat
     */
    public function __construct($_ = null, $formatted = null, $textFormat = null)
    {
        $this
            ->set_($_)
            ->setFormatted($formatted)
            ->setTextFormat($textFormat);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ammonkc\Otaehi\StructType\FormattedTextTextType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Formatted value
     * @return bool|null
     */
    public function getFormatted()
    {
        return $this->Formatted;
    }
    /**
     * Set Formatted value
     * @param bool $formatted
     * @return \Ammonkc\Otaehi\StructType\FormattedTextTextType
     */
    public function setFormatted($formatted = null)
    {
        $this->Formatted = $formatted;
        return $this;
    }
    /**
     * Get TextFormat value
     * @return string|null
     */
    public function getTextFormat()
    {
        return $this->TextFormat;
    }
    /**
     * Set TextFormat value
     * @param string $textFormat
     * @return \Ammonkc\Otaehi\StructType\FormattedTextTextType
     */
    public function setTextFormat($textFormat = null)
    {
        // validation for constraint: string
        if (!is_null($textFormat) && !is_string($textFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($textFormat)), __LINE__);
        }
        $this->TextFormat = $textFormat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\FormattedTextTextType
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
