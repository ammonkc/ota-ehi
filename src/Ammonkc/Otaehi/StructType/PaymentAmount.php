<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentAmount StructType
 * @subpackage Structs
 */
class PaymentAmount extends AbstractStructBase
{
    /**
     * The ApprovalCode
     * @var UNKNOWN
     */
    public $ApprovalCode;
    /**
     * The RefundCalcMethod
     * @var string
     */
    public $RefundCalcMethod;
    /**
     * Constructor method for PaymentAmount
     * @uses PaymentAmount::setApprovalCode()
     * @uses PaymentAmount::setRefundCalcMethod()
     * @param UNKNOWN $approvalCode
     * @param string $refundCalcMethod
     */
    public function __construct(UNKNOWN $approvalCode = null, $refundCalcMethod = null)
    {
        $this
            ->setApprovalCode($approvalCode)
            ->setRefundCalcMethod($refundCalcMethod);
    }
    /**
     * Get ApprovalCode value
     * @return UNKNOWN|null
     */
    public function getApprovalCode()
    {
        return $this->ApprovalCode;
    }
    /**
     * Set ApprovalCode value
     * @param UNKNOWN $approvalCode
     * @return \Ammonkc\Otaehi\StructType\PaymentAmount
     */
    public function setApprovalCode(UNKNOWN $approvalCode = null)
    {
        $this->ApprovalCode = $approvalCode;
        return $this;
    }
    /**
     * Get RefundCalcMethod value
     * @return string|null
     */
    public function getRefundCalcMethod()
    {
        return $this->RefundCalcMethod;
    }
    /**
     * Set RefundCalcMethod value
     * @param string $refundCalcMethod
     * @return \Ammonkc\Otaehi\StructType\PaymentAmount
     */
    public function setRefundCalcMethod($refundCalcMethod = null)
    {
        // validation for constraint: string
        if (!is_null($refundCalcMethod) && !is_string($refundCalcMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundCalcMethod)), __LINE__);
        }
        $this->RefundCalcMethod = $refundCalcMethod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PaymentAmount
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
