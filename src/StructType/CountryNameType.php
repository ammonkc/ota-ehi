<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryNameType StructType
 * @subpackage Structs
 */
class CountryNameType extends AbstractStructBase
{
    /**
     * The Code
     * @var
     */
    public $Code;
    /**
     * Constructor method for CountryNameType
     * @uses CountryNameType::setCode()
     * @param  $code
     */
    public function __construct( $code = null)
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return |null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param  $code
     * @return \Ammonkc\Otaehi\StructType\CountryNameType
     */
    public function setCode( $code = null)
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
     * @return \Ammonkc\Otaehi\StructType\CountryNameType
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
