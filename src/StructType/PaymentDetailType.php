<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDetailType StructType
 * @subpackage Structs
 */
class PaymentDetailType extends AbstractStructBase
{
    /**
     * The PaymentAmount
     * @var \Ammonkc\Otaehi\StructType\PaymentAmount
     */
    public $PaymentAmount;
    /**
     * The Commission
     * @var mixed
     */
    public $Commission;
    /**
     * The PaymentType
     * @var
     */
    public $PaymentType;
    /**
     * The SplitPaymentInd
     * @var bool
     */
    public $SplitPaymentInd;
    /**
     * The AuthorizedDays
     * @var
     */
    public $AuthorizedDays;
    /**
     * The PrimaryPaymentInd
     * @var bool
     */
    public $PrimaryPaymentInd;
    /**
     * Constructor method for PaymentDetailType
     * @uses PaymentDetailType::setPaymentAmount()
     * @uses PaymentDetailType::setCommission()
     * @uses PaymentDetailType::setPaymentType()
     * @uses PaymentDetailType::setSplitPaymentInd()
     * @uses PaymentDetailType::setAuthorizedDays()
     * @uses PaymentDetailType::setPrimaryPaymentInd()
     * @param \Ammonkc\Otaehi\StructType\PaymentAmount $paymentAmount
     * @param mixed $commission
     * @param  $paymentType
     * @param bool $splitPaymentInd
     * @param  $authorizedDays
     * @param bool $primaryPaymentInd
     */
    public function __construct(\Ammonkc\Otaehi\StructType\PaymentAmount $paymentAmount = null, $commission = null,  $paymentType = null, $splitPaymentInd = null,  $authorizedDays = null, $primaryPaymentInd = null)
    {
        $this
            ->setPaymentAmount($paymentAmount)
            ->setCommission($commission)
            ->setPaymentType($paymentType)
            ->setSplitPaymentInd($splitPaymentInd)
            ->setAuthorizedDays($authorizedDays)
            ->setPrimaryPaymentInd($primaryPaymentInd);
    }
    /**
     * Get PaymentAmount value
     * @return \Ammonkc\Otaehi\StructType\PaymentAmount|null
     */
    public function getPaymentAmount()
    {
        return $this->PaymentAmount;
    }
    /**
     * Set PaymentAmount value
     * @param \Ammonkc\Otaehi\StructType\PaymentAmount $paymentAmount
     * @return \Ammonkc\Otaehi\StructType\PaymentDetailType
     */
    public function setPaymentAmount(\Ammonkc\Otaehi\StructType\PaymentAmount $paymentAmount = null)
    {
        $this->PaymentAmount = $paymentAmount;
        return $this;
    }
    /**
     * Get Commission value
     * @return mixed|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param mixed $commission
     * @return \Ammonkc\Otaehi\StructType\PaymentDetailType
     */
    public function setCommission($commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return |null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @param  $paymentType
     * @return \Ammonkc\Otaehi\StructType\PaymentDetailType
     */
    public function setPaymentType( $paymentType = null)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get SplitPaymentInd value
     * @return bool|null
     */
    public function getSplitPaymentInd()
    {
        return $this->SplitPaymentInd;
    }
    /**
     * Set SplitPaymentInd value
     * @param bool $splitPaymentInd
     * @return \Ammonkc\Otaehi\StructType\PaymentDetailType
     */
    public function setSplitPaymentInd($splitPaymentInd = null)
    {
        $this->SplitPaymentInd = $splitPaymentInd;
        return $this;
    }
    /**
     * Get AuthorizedDays value
     * @return |null
     */
    public function getAuthorizedDays()
    {
        return $this->AuthorizedDays;
    }
    /**
     * Set AuthorizedDays value
     * @param  $authorizedDays
     * @return \Ammonkc\Otaehi\StructType\PaymentDetailType
     */
    public function setAuthorizedDays( $authorizedDays = null)
    {
        $this->AuthorizedDays = $authorizedDays;
        return $this;
    }
    /**
     * Get PrimaryPaymentInd value
     * @return bool|null
     */
    public function getPrimaryPaymentInd()
    {
        return $this->PrimaryPaymentInd;
    }
    /**
     * Set PrimaryPaymentInd value
     * @param bool $primaryPaymentInd
     * @return \Ammonkc\Otaehi\StructType\PaymentDetailType
     */
    public function setPrimaryPaymentInd($primaryPaymentInd = null)
    {
        $this->PrimaryPaymentInd = $primaryPaymentInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PaymentDetailType
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
