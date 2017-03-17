<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CuisineCodes StructType
 * @subpackage Structs
 */
class CuisineCodes extends AbstractStructBase
{
    /**
     * The CuisineCode
     * @var \Ammonkc\Otaehi\StructType\CuisineCode
     */
    public $CuisineCode;
    /**
     * Constructor method for CuisineCodes
     * @uses CuisineCodes::setCuisineCode()
     * @param \Ammonkc\Otaehi\StructType\CuisineCode $cuisineCode
     */
    public function __construct(\Ammonkc\Otaehi\StructType\CuisineCode $cuisineCode = null)
    {
        $this
            ->setCuisineCode($cuisineCode);
    }
    /**
     * Get CuisineCode value
     * @return \Ammonkc\Otaehi\StructType\CuisineCode|null
     */
    public function getCuisineCode()
    {
        return $this->CuisineCode;
    }
    /**
     * Set CuisineCode value
     * @param \Ammonkc\Otaehi\StructType\CuisineCode $cuisineCode
     * @return \Ammonkc\Otaehi\StructType\CuisineCodes
     */
    public function setCuisineCode(\Ammonkc\Otaehi\StructType\CuisineCode $cuisineCode = null)
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
     * @return \Ammonkc\Otaehi\StructType\CuisineCodes
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
