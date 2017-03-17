<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnLocationServices StructType
 * @subpackage Structs
 */
class OnLocationServices extends AbstractStructBase
{
    /**
     * The OnLocationService
     * @var \Ammonkc\Otaehi\StructType\OnLocationService
     */
    public $OnLocationService;
    /**
     * Constructor method for OnLocationServices
     * @uses OnLocationServices::setOnLocationService()
     * @param \Ammonkc\Otaehi\StructType\OnLocationService $onLocationService
     */
    public function __construct(\Ammonkc\Otaehi\StructType\OnLocationService $onLocationService = null)
    {
        $this
            ->setOnLocationService($onLocationService);
    }
    /**
     * Get OnLocationService value
     * @return \Ammonkc\Otaehi\StructType\OnLocationService|null
     */
    public function getOnLocationService()
    {
        return $this->OnLocationService;
    }
    /**
     * Set OnLocationService value
     * @param \Ammonkc\Otaehi\StructType\OnLocationService $onLocationService
     * @return \Ammonkc\Otaehi\StructType\OnLocationServices
     */
    public function setOnLocationService(\Ammonkc\Otaehi\StructType\OnLocationService $onLocationService = null)
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
     * @return \Ammonkc\Otaehi\StructType\OnLocationServices
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
