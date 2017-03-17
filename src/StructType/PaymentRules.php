<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentRules StructType
 * @subpackage Structs
 */
class PaymentRules extends AbstractStructBase
{
    /**
     * The AcceptablePayments
     * @var \ammonkc\otaehi\StructType\AcceptablePayments
     */
    public $AcceptablePayments;
    /**
     * The PaymentRule
     * @var mixed
     */
    public $PaymentRule;
    /**
     * Constructor method for PaymentRules
     * @uses PaymentRules::setAcceptablePayments()
     * @uses PaymentRules::setPaymentRule()
     * @param \ammonkc\otaehi\StructType\AcceptablePayments $acceptablePayments
     * @param mixed $paymentRule
     */
    public function __construct(\ammonkc\otaehi\StructType\AcceptablePayments $acceptablePayments = null, $paymentRule = null)
    {
        $this
            ->setAcceptablePayments($acceptablePayments)
            ->setPaymentRule($paymentRule);
    }
    /**
     * Get AcceptablePayments value
     * @return \ammonkc\otaehi\StructType\AcceptablePayments|null
     */
    public function getAcceptablePayments()
    {
        return $this->AcceptablePayments;
    }
    /**
     * Set AcceptablePayments value
     * @param \ammonkc\otaehi\StructType\AcceptablePayments $acceptablePayments
     * @return \ammonkc\otaehi\StructType\PaymentRules
     */
    public function setAcceptablePayments(\ammonkc\otaehi\StructType\AcceptablePayments $acceptablePayments = null)
    {
        $this->AcceptablePayments = $acceptablePayments;
        return $this;
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
     * @return \ammonkc\otaehi\StructType\PaymentRules
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
     * @return \ammonkc\otaehi\StructType\PaymentRules
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
