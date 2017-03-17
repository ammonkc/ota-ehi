<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnLocationServices StructType
 * @subpackage Structs
 */
class OnLocationServices extends AbstractStructBase
{
    /**
     * The OnLocationService
     * @var \ammonkc\otaehi\StructType\OnLocationService
     */
    public $OnLocationService;
    /**
     * Constructor method for OnLocationServices
     * @uses OnLocationServices::setOnLocationService()
     * @param \ammonkc\otaehi\StructType\OnLocationService $onLocationService
     */
    public function __construct(\ammonkc\otaehi\StructType\OnLocationService $onLocationService = null)
    {
        $this
            ->setOnLocationService($onLocationService);
    }
    /**
     * Get OnLocationService value
     * @return \ammonkc\otaehi\StructType\OnLocationService|null
     */
    public function getOnLocationService()
    {
        return $this->OnLocationService;
    }
    /**
     * Set OnLocationService value
     * @param \ammonkc\otaehi\StructType\OnLocationService $onLocationService
     * @return \ammonkc\otaehi\StructType\OnLocationServices
     */
    public function setOnLocationService(\ammonkc\otaehi\StructType\OnLocationService $onLocationService = null)
    {
        $this->OnLocationService = $onLocationService;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OnLocationServices
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
