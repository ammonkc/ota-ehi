<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CuisineCode StructType
 * @subpackage Structs
 */
class CuisineCode extends AbstractStructBase
{
    /**
     * The Code
     * @var UNKNOWN
     */
    public $Code;
    /**
     * The IsMain
     * @var bool
     */
    public $IsMain;
    /**
     * The ExistsCode
     * @var UNKNOWN
     */
    public $ExistsCode;
    /**
     * Constructor method for CuisineCode
     * @uses CuisineCode::setCode()
     * @uses CuisineCode::setIsMain()
     * @uses CuisineCode::setExistsCode()
     * @param UNKNOWN $code
     * @param bool $isMain
     * @param UNKNOWN $existsCode
     */
    public function __construct(UNKNOWN $code = null, $isMain = null, UNKNOWN $existsCode = null)
    {
        $this
            ->setCode($code)
            ->setIsMain($isMain)
            ->setExistsCode($existsCode);
    }
    /**
     * Get Code value
     * @return UNKNOWN|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param UNKNOWN $code
     * @return \ammonkc\otaehi\StructType\CuisineCode
     */
    public function setCode(UNKNOWN $code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get IsMain value
     * @return bool|null
     */
    public function getIsMain()
    {
        return $this->IsMain;
    }
    /**
     * Set IsMain value
     * @param bool $isMain
     * @return \ammonkc\otaehi\StructType\CuisineCode
     */
    public function setIsMain($isMain = null)
    {
        $this->IsMain = $isMain;
        return $this;
    }
    /**
     * Get ExistsCode value
     * @return UNKNOWN|null
     */
    public function getExistsCode()
    {
        return $this->ExistsCode;
    }
    /**
     * Set ExistsCode value
     * @param UNKNOWN $existsCode
     * @return \ammonkc\otaehi\StructType\CuisineCode
     */
    public function setExistsCode(UNKNOWN $existsCode = null)
    {
        $this->ExistsCode = $existsCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\CuisineCode
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
