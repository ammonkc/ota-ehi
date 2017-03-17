<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for List_GolferType StructType
 * @subpackage Structs
 */
class List_GolferType extends AbstractStructBase
{
    /**
     * Constructor method for List_GolferType
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\List_GolferType
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
