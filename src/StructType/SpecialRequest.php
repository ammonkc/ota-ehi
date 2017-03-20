<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialRequest StructType
 * @subpackage Structs
 */
class SpecialRequest extends AbstractStructBase
{
    /**
     * The RequestCode
     * @var
     */
    public $RequestCode;
    /**
     * The CodeContext
     * @var
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
     * @param  $requestCode
     * @param  $codeContext
     * @param int $numberOfUnits
     */
    public function __construct( $requestCode = null,  $codeContext = null, $numberOfUnits = null)
    {
        $this
            ->setRequestCode($requestCode)
            ->setCodeContext($codeContext)
            ->setNumberOfUnits($numberOfUnits);
    }
    /**
     * Get RequestCode value
     * @return |null
     */
    public function getRequestCode()
    {
        return $this->RequestCode;
    }
    /**
     * Set RequestCode value
     * @param  $requestCode
     * @return \Ammonkc\Otaehi\StructType\SpecialRequest
     */
    public function setRequestCode( $requestCode = null)
    {
        $this->RequestCode = $requestCode;
        return $this;
    }
    /**
     * Get CodeContext value
     * @return |null
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }
    /**
     * Set CodeContext value
     * @param  $codeContext
     * @return \Ammonkc\Otaehi\StructType\SpecialRequest
     */
    public function setCodeContext( $codeContext = null)
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
     * @return \Ammonkc\Otaehi\StructType\SpecialRequest
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
     * @return \Ammonkc\Otaehi\StructType\SpecialRequest
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
