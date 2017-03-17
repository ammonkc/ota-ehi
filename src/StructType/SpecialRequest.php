<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialRequest StructType
 * @subpackage Structs
 */
class SpecialRequest extends AbstractStructBase
{
    /**
     * The RequestCode
     * @var UNKNOWN
     */
    public $RequestCode;
    /**
     * The CodeContext
     * @var UNKNOWN
     */
    public $CodeContext;
    /**
     * The NumberOfUnits
     * @var int
     */
    public $NumberOfUnits;
    /**
     * Constructor method for SpecialRequest
     * @uses SpecialRequest::setRequestCode()
     * @uses SpecialRequest::setCodeContext()
     * @uses SpecialRequest::setNumberOfUnits()
     * @param UNKNOWN $requestCode
     * @param UNKNOWN $codeContext
     * @param int $numberOfUnits
     */
    public function __construct(UNKNOWN $requestCode = null, UNKNOWN $codeContext = null, $numberOfUnits = null)
    {
        $this
            ->setRequestCode($requestCode)
            ->setCodeContext($codeContext)
            ->setNumberOfUnits($numberOfUnits);
    }
    /**
     * Get RequestCode value
     * @return UNKNOWN|null
     */
    public function getRequestCode()
    {
        return $this->RequestCode;
    }
    /**
     * Set RequestCode value
     * @param UNKNOWN $requestCode
     * @return \ammonkc\otaehi\StructType\SpecialRequest
     */
    public function setRequestCode(UNKNOWN $requestCode = null)
    {
        $this->RequestCode = $requestCode;
        return $this;
    }
    /**
     * Get CodeContext value
     * @return UNKNOWN|null
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }
    /**
     * Set CodeContext value
     * @param UNKNOWN $codeContext
     * @return \ammonkc\otaehi\StructType\SpecialRequest
     */
    public function setCodeContext(UNKNOWN $codeContext = null)
    {
        $this->CodeContext = $codeContext;
        return $this;
    }
    /**
     * Get NumberOfUnits value
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \ammonkc\otaehi\StructType\SpecialRequest
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnits) && !is_numeric($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\SpecialRequest
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
