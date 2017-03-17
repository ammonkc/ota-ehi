<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Communication StructType
 * @subpackage Structs
 */
class Communication extends AbstractStructBase
{
    /**
     * The DistribType
     * @var UNKNOWN
     */
    public $DistribType;
    /**
     * Constructor method for Communication
     * @uses Communication::setDistribType()
     * @param UNKNOWN $distribType
     */
    public function __construct(UNKNOWN $distribType = null)
    {
        $this
            ->setDistribType($distribType);
    }
    /**
     * Get DistribType value
     * @return UNKNOWN|null
     */
    public function getDistribType()
    {
        return $this->DistribType;
    }
    /**
     * Set DistribType value
     * @param UNKNOWN $distribType
     * @return \Ammonkc\Otaehi\StructType\Communication
     */
    public function setDistribType(UNKNOWN $distribType = null)
    {
        $this->DistribType = $distribType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Communication
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
