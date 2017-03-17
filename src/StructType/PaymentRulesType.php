<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentRulesType StructType
 * @subpackage Structs
 */
class PaymentRulesType extends AbstractStructBase
{
    /**
     * The PaymentRule
     * @var mixed
     */
    public $PaymentRule;
    /**
     * Constructor method for PaymentRulesType
     * @uses PaymentRulesType::setPaymentRule()
     * @param mixed $paymentRule
     */
    public function __construct($paymentRule = null)
    {
        $this
            ->setPaymentRule($paymentRule);
    }
    /**
     * Get PaymentRule value
     * @return mixed|null
     */
    public function getPaymentRule()
    {
        return $this->PaymentRule;
    }
    /**
     * Set PaymentRule value
     * @param mixed $paymentRule
     * @return \ammonkc\otaehi\StructType\PaymentRulesType
     */
    public function setPaymentRule($paymentRule = null)
    {
        $this->PaymentRule = $paymentRule;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\PaymentRulesType
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
