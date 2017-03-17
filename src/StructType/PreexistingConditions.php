<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreexistingConditions StructType
 * @subpackage Structs
 */
class PreexistingConditions extends AbstractStructBase
{
    /**
     * The PreexistingCondition
     * @var \ammonkc\otaehi\StructType\PreexistingCondition
     */
    public $PreexistingCondition;
    /**
     * Constructor method for PreexistingConditions
     * @uses PreexistingConditions::setPreexistingCondition()
     * @param \ammonkc\otaehi\StructType\PreexistingCondition $preexistingCondition
     */
    public function __construct(\ammonkc\otaehi\StructType\PreexistingCondition $preexistingCondition = null)
    {
        $this
            ->setPreexistingCondition($preexistingCondition);
    }
    /**
     * Get PreexistingCondition value
     * @return \ammonkc\otaehi\StructType\PreexistingCondition|null
     */
    public function getPreexistingCondition()
    {
        return $this->PreexistingCondition;
    }
    /**
     * Set PreexistingCondition value
     * @param \ammonkc\otaehi\StructType\PreexistingCondition $preexistingCondition
     * @return \ammonkc\otaehi\StructType\PreexistingConditions
     */
    public function setPreexistingCondition(\ammonkc\otaehi\StructType\PreexistingCondition $preexistingCondition = null)
    {
        $this->PreexistingCondition = $preexistingCondition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\PreexistingConditions
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
