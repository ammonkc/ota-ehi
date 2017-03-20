<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupReturnRule StructType
 * @subpackage Structs
 */
class PickupReturnRule extends AbstractStructBase
{
    /**
     * The DayOfWeek
     * @var
     */
    public $DayOfWeek;
    /**
     * The Time
     * @var
     */
    public $Time;
    /**
     * The RuleType
     * @var string
     */
    public $RuleType;
    /**
     * Constructor method for PickupReturnRule
     * @uses PickupReturnRule::setDayOfWeek()
     * @uses PickupReturnRule::setTime()
     * @uses PickupReturnRule::setRuleType()
     * @param  $dayOfWeek
     * @param  $time
     * @param string $ruleType
     */
    public function __construct( $dayOfWeek = null,  $time = null, $ruleType = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setTime($time)
            ->setRuleType($ruleType);
    }
    /**
     * Get DayOfWeek value
     * @return |null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @param  $dayOfWeek
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRule
     */
    public function setDayOfWeek( $dayOfWeek = null)
    {
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get Time value
     * @return |null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param  $time
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRule
     */
    public function setTime( $time = null)
    {
        $this->Time = $time;
        return $this;
    }
    /**
     * Get RuleType value
     * @return string|null
     */
    public function getRuleType()
    {
        return $this->RuleType;
    }
    /**
     * Set RuleType value
     * @param string $ruleType
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRule
     */
    public function setRuleType($ruleType = null)
    {
        // validation for constraint: string
        if (!is_null($ruleType) && !is_string($ruleType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruleType)), __LINE__);
        }
        $this->RuleType = $ruleType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PickupReturnRule
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
