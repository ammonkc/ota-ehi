<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Keyword StructType
 * @subpackage Structs
 */
class Keyword extends AbstractStructBase
{
    /**
     * The Code
     * @var AlphaNumericStringLength1to8
     */
    public $Code;
    /**
     * Constructor method for Keyword
     * @uses Keyword::setCode()
     * @param AlphaNumericStringLength1to8 $code
     */
    public function __construct(AlphaNumericStringLength1to8 $code = null)
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return AlphaNumericStringLength1to8|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param AlphaNumericStringLength1to8 $code
     * @return \ammonkc\otaehi\StructType\Keyword
     */
    public function setCode(AlphaNumericStringLength1to8 $code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Keyword
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
