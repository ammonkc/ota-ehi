<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CuisineCodes StructType
 * @subpackage Structs
 */
class CuisineCodes extends AbstractStructBase
{
    /**
     * The CuisineCode
     * @var \ammonkc\otaehi\StructType\CuisineCode
     */
    public $CuisineCode;
    /**
     * Constructor method for CuisineCodes
     * @uses CuisineCodes::setCuisineCode()
     * @param \ammonkc\otaehi\StructType\CuisineCode $cuisineCode
     */
    public function __construct(\ammonkc\otaehi\StructType\CuisineCode $cuisineCode = null)
    {
        $this
            ->setCuisineCode($cuisineCode);
    }
    /**
     * Get CuisineCode value
     * @return \ammonkc\otaehi\StructType\CuisineCode|null
     */
    public function getCuisineCode()
    {
        return $this->CuisineCode;
    }
    /**
     * Set CuisineCode value
     * @param \ammonkc\otaehi\StructType\CuisineCode $cuisineCode
     * @return \ammonkc\otaehi\StructType\CuisineCodes
     */
    public function setCuisineCode(\ammonkc\otaehi\StructType\CuisineCode $cuisineCode = null)
    {
        $this->CuisineCode = $cuisineCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\CuisineCodes
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
