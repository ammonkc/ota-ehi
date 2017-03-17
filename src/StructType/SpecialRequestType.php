<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialRequestType StructType
 * @subpackage Structs
 */
class SpecialRequestType extends AbstractStructBase
{
    /**
     * The SpecialRequest
     * @var \ammonkc\otaehi\StructType\SpecialRequest
     */
    public $SpecialRequest;
    /**
     * Constructor method for SpecialRequestType
     * @uses SpecialRequestType::setSpecialRequest()
     * @param \ammonkc\otaehi\StructType\SpecialRequest $specialRequest
     */
    public function __construct(\ammonkc\otaehi\StructType\SpecialRequest $specialRequest = null)
    {
        $this
            ->setSpecialRequest($specialRequest);
    }
    /**
     * Get SpecialRequest value
     * @return \ammonkc\otaehi\StructType\SpecialRequest|null
     */
    public function getSpecialRequest()
    {
        return $this->SpecialRequest;
    }
    /**
     * Set SpecialRequest value
     * @param \ammonkc\otaehi\StructType\SpecialRequest $specialRequest
     * @return \ammonkc\otaehi\StructType\SpecialRequestType
     */
    public function setSpecialRequest(\ammonkc\otaehi\StructType\SpecialRequest $specialRequest = null)
    {
        $this->SpecialRequest = $specialRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\SpecialRequestType
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
