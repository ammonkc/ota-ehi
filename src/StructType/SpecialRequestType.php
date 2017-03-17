<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialRequestType StructType
 * @subpackage Structs
 */
class SpecialRequestType extends AbstractStructBase
{
    /**
     * The SpecialRequest
     * @var \Ammonkc\Otaehi\StructType\SpecialRequest
     */
    public $SpecialRequest;
    /**
     * Constructor method for SpecialRequestType
     * @uses SpecialRequestType::setSpecialRequest()
     * @param \Ammonkc\Otaehi\StructType\SpecialRequest $specialRequest
     */
    public function __construct(\Ammonkc\Otaehi\StructType\SpecialRequest $specialRequest = null)
    {
        $this
            ->setSpecialRequest($specialRequest);
    }
    /**
     * Get SpecialRequest value
     * @return \Ammonkc\Otaehi\StructType\SpecialRequest|null
     */
    public function getSpecialRequest()
    {
        return $this->SpecialRequest;
    }
    /**
     * Set SpecialRequest value
     * @param \Ammonkc\Otaehi\StructType\SpecialRequest $specialRequest
     * @return \Ammonkc\Otaehi\StructType\SpecialRequestType
     */
    public function setSpecialRequest(\Ammonkc\Otaehi\StructType\SpecialRequest $specialRequest = null)
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
     * @return \Ammonkc\Otaehi\StructType\SpecialRequestType
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
