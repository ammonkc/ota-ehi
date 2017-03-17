<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocationServices StructType
 * @subpackage Structs
 */
class OffLocationServices extends AbstractStructBase
{
    /**
     * The OffLocationService
     * @var \ammonkc\otaehi\StructType\OffLocationService
     */
    public $OffLocationService;
    /**
     * Constructor method for OffLocationServices
     * @uses OffLocationServices::setOffLocationService()
     * @param \ammonkc\otaehi\StructType\OffLocationService $offLocationService
     */
    public function __construct(\ammonkc\otaehi\StructType\OffLocationService $offLocationService = null)
    {
        $this
            ->setOffLocationService($offLocationService);
    }
    /**
     * Get OffLocationService value
     * @return \ammonkc\otaehi\StructType\OffLocationService|null
     */
    public function getOffLocationService()
    {
        return $this->OffLocationService;
    }
    /**
     * Set OffLocationService value
     * @param \ammonkc\otaehi\StructType\OffLocationService $offLocationService
     * @return \ammonkc\otaehi\StructType\OffLocationServices
     */
    public function setOffLocationService(\ammonkc\otaehi\StructType\OffLocationService $offLocationService = null)
    {
        $this->OffLocationService = $offLocationService;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OffLocationServices
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
