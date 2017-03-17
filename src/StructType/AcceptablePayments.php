<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePayments StructType
 * @subpackage Structs
 */
class AcceptablePayments extends AbstractStructBase
{
    /**
     * The AcceptablePayment
     * @var \Ammonkc\Otaehi\StructType\AcceptablePayment
     */
    public $AcceptablePayment;
    /**
     * The PaymentTypeCode
     * @var UNKNOWN
     */
    public $PaymentTypeCode;
    /**
     * Constructor method for AcceptablePayments
     * @uses AcceptablePayments::setAcceptablePayment()
     * @uses AcceptablePayments::setPaymentTypeCode()
     * @param \Ammonkc\Otaehi\StructType\AcceptablePayment $acceptablePayment
     * @param UNKNOWN $paymentTypeCode
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AcceptablePayment $acceptablePayment = null, UNKNOWN $paymentTypeCode = null)
    {
        $this
            ->setAcceptablePayment($acceptablePayment)
            ->setPaymentTypeCode($paymentTypeCode);
    }
    /**
     * Get AcceptablePayment value
     * @return \Ammonkc\Otaehi\StructType\AcceptablePayment|null
     */
    public function getAcceptablePayment()
    {
        return $this->AcceptablePayment;
    }
    /**
     * Set AcceptablePayment value
     * @param \Ammonkc\Otaehi\StructType\AcceptablePayment $acceptablePayment
     * @return \Ammonkc\Otaehi\StructType\AcceptablePayments
     */
    public function setAcceptablePayment(\Ammonkc\Otaehi\StructType\AcceptablePayment $acceptablePayment = null)
    {
        $this->AcceptablePayment = $acceptablePayment;
        return $this;
    }
    /**
     * Get PaymentTypeCode value
     * @return UNKNOWN|null
     */
    public function getPaymentTypeCode()
    {
        return $this->PaymentTypeCode;
    }
    /**
     * Set PaymentTypeCode value
     * @param UNKNOWN $paymentTypeCode
     * @return \Ammonkc\Otaehi\StructType\AcceptablePayments
     */
    public function setPaymentTypeCode(UNKNOWN $paymentTypeCode = null)
    {
        $this->PaymentTypeCode = $paymentTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\AcceptablePayments
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
