<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerRPHs StructType
 * @subpackage Structs
 */
class TravelerRPHs extends AbstractStructBase
{
    /**
     * The TravelerRPH
     * @var \ammonkc\otaehi\StructType\TravelerRPH
     */
    public $TravelerRPH;
    /**
     * Constructor method for TravelerRPHs
     * @uses TravelerRPHs::setTravelerRPH()
     * @param \ammonkc\otaehi\StructType\TravelerRPH $travelerRPH
     */
    public function __construct(\ammonkc\otaehi\StructType\TravelerRPH $travelerRPH = null)
    {
        $this
            ->setTravelerRPH($travelerRPH);
    }
    /**
     * Get TravelerRPH value
     * @return \ammonkc\otaehi\StructType\TravelerRPH|null
     */
    public function getTravelerRPH()
    {
        return $this->TravelerRPH;
    }
    /**
     * Set TravelerRPH value
     * @param \ammonkc\otaehi\StructType\TravelerRPH $travelerRPH
     * @return \ammonkc\otaehi\StructType\TravelerRPHs
     */
    public function setTravelerRPH(\ammonkc\otaehi\StructType\TravelerRPH $travelerRPH = null)
    {
        $this->TravelerRPH = $travelerRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\TravelerRPHs
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
