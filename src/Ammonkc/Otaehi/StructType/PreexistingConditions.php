<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreexistingConditions StructType
 * @subpackage Structs
 */
class PreexistingConditions extends AbstractStructBase
{
    /**
     * The PreexistingCondition
     * @var \Ammonkc\Otaehi\StructType\PreexistingCondition
     */
    public $PreexistingCondition;
    /**
     * Constructor method for PreexistingConditions
     * @uses PreexistingConditions::setPreexistingCondition()
     * @param \Ammonkc\Otaehi\StructType\PreexistingCondition $preexistingCondition
     */
    public function __construct(\Ammonkc\Otaehi\StructType\PreexistingCondition $preexistingCondition = null)
    {
        $this
            ->setPreexistingCondition($preexistingCondition);
    }
    /**
     * Get PreexistingCondition value
     * @return \Ammonkc\Otaehi\StructType\PreexistingCondition|null
     */
    public function getPreexistingCondition()
    {
        return $this->PreexistingCondition;
    }
    /**
     * Set PreexistingCondition value
     * @param \Ammonkc\Otaehi\StructType\PreexistingCondition $preexistingCondition
     * @return \Ammonkc\Otaehi\StructType\PreexistingConditions
     */
    public function setPreexistingCondition(\Ammonkc\Otaehi\StructType\PreexistingCondition $preexistingCondition = null)
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
     * @return \Ammonkc\Otaehi\StructType\PreexistingConditions
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
