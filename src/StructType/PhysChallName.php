<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhysChallName StructType
 * @subpackage Structs
 */
class PhysChallName extends AbstractStructBase
{
    /**
     * The PhysChallInd
     * @var bool
     */
    public $PhysChallInd;
    /**
     * Constructor method for PhysChallName
     * @uses PhysChallName::setPhysChallInd()
     * @param bool $physChallInd
     */
    public function __construct($physChallInd = null)
    {
        $this
            ->setPhysChallInd($physChallInd);
    }
    /**
     * Get PhysChallInd value
     * @return bool|null
     */
    public function getPhysChallInd()
    {
        return $this->PhysChallInd;
    }
    /**
     * Set PhysChallInd value
     * @param bool $physChallInd
     * @return \ammonkc\otaehi\StructType\PhysChallName
     */
    public function setPhysChallInd($physChallInd = null)
    {
        $this->PhysChallInd = $physChallInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\PhysChallName
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
