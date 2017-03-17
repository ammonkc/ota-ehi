<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionReport StructType
 * @subpackage Structs
 */
class ConditionReport extends AbstractStructBase
{
    /**
     * The Condition
     * @var string
     */
    public $Condition;
    /**
     * Constructor method for ConditionReport
     * @uses ConditionReport::setCondition()
     * @param string $condition
     */
    public function __construct($condition = null)
    {
        $this
            ->setCondition($condition);
    }
    /**
     * Get Condition value
     * @return string|null
     */
    public function getCondition()
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @param string $condition
     * @return \Ammonkc\Otaehi\StructType\ConditionReport
     */
    public function setCondition($condition = null)
    {
        // validation for constraint: string
        if (!is_null($condition) && !is_string($condition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($condition)), __LINE__);
        }
        $this->Condition = $condition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ConditionReport
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
