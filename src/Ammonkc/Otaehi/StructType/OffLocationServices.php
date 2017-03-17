<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocationServices StructType
 * @subpackage Structs
 */
class OffLocationServices extends AbstractStructBase
{
    /**
     * The OffLocationService
     * @var \Ammonkc\Otaehi\StructType\OffLocationService
     */
    public $OffLocationService;
    /**
     * Constructor method for OffLocationServices
     * @uses OffLocationServices::setOffLocationService()
     * @param \Ammonkc\Otaehi\StructType\OffLocationService $offLocationService
     */
    public function __construct(\Ammonkc\Otaehi\StructType\OffLocationService $offLocationService = null)
    {
        $this
            ->setOffLocationService($offLocationService);
    }
    /**
     * Get OffLocationService value
     * @return \Ammonkc\Otaehi\StructType\OffLocationService|null
     */
    public function getOffLocationService()
    {
        return $this->OffLocationService;
    }
    /**
     * Set OffLocationService value
     * @param \Ammonkc\Otaehi\StructType\OffLocationService $offLocationService
     * @return \Ammonkc\Otaehi\StructType\OffLocationServices
     */
    public function setOffLocationService(\Ammonkc\Otaehi\StructType\OffLocationService $offLocationService = null)
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
     * @return \Ammonkc\Otaehi\StructType\OffLocationServices
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
