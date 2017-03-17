<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentOptions StructType
 * @subpackage Structs
 */
class PaymentOptions extends AbstractStructBase
{
    /**
     * The CreditCard
     * @var \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public $CreditCard;
    /**
     * The DebitCard
     * @var \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public $DebitCard;
    /**
     * The Cash
     * @var \ammonkc\otaehi\StructType\Cash
     */
    public $Cash;
    /**
     * The Voucher
     * @var \ammonkc\otaehi\StructType\Voucher
     */
    public $Voucher;
    /**
     * The BankAcct
     * @var \ammonkc\otaehi\StructType\BankAcct
     */
    public $BankAcct;
    /**
     * The DirectBill
     * @var \ammonkc\otaehi\StructType\DirectBill
     */
    public $DirectBill;
    /**
     * The LoyaltyRedemption
     * @var \ammonkc\otaehi\StructType\LoyaltyRedemption
     */
    public $LoyaltyRedemption;
    /**
     * The MiscChargeOrder
     * @var \ammonkc\otaehi\StructType\MiscChargeOrder
     */
    public $MiscChargeOrder;
    /**
     * The Deposit
     * @var \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public $Deposit;
    /**
     * The Guarantee
     * @var \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public $Guarantee;
    /**
     * The PrePayment
     * @var \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public $PrePayment;
    /**
     * The PaymentOptionsInfo
     * @var \ammonkc\otaehi\StructType\FormattedTextType
     */
    public $PaymentOptionsInfo;
    /**
     * Constructor method for PaymentOptions
     * @uses PaymentOptions::setCreditCard()
     * @uses PaymentOptions::setDebitCard()
     * @uses PaymentOptions::setCash()
     * @uses PaymentOptions::setVoucher()
     * @uses PaymentOptions::setBankAcct()
     * @uses PaymentOptions::setDirectBill()
     * @uses PaymentOptions::setLoyaltyRedemption()
     * @uses PaymentOptions::setMiscChargeOrder()
     * @uses PaymentOptions::setDeposit()
     * @uses PaymentOptions::setGuarantee()
     * @uses PaymentOptions::setPrePayment()
     * @uses PaymentOptions::setPaymentOptionsInfo()
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $creditCard
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $debitCard
     * @param \ammonkc\otaehi\StructType\Cash $cash
     * @param \ammonkc\otaehi\StructType\Voucher $voucher
     * @param \ammonkc\otaehi\StructType\BankAcct $bankAcct
     * @param \ammonkc\otaehi\StructType\DirectBill $directBill
     * @param \ammonkc\otaehi\StructType\LoyaltyRedemption $loyaltyRedemption
     * @param \ammonkc\otaehi\StructType\MiscChargeOrder $miscChargeOrder
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $deposit
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $guarantee
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $prePayment
     * @param \ammonkc\otaehi\StructType\FormattedTextType $paymentOptionsInfo
     */
    public function __construct(\ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $creditCard = null, \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $debitCard = null, \ammonkc\otaehi\StructType\Cash $cash = null, \ammonkc\otaehi\StructType\Voucher $voucher = null, \ammonkc\otaehi\StructType\BankAcct $bankAcct = null, \ammonkc\otaehi\StructType\DirectBill $directBill = null, \ammonkc\otaehi\StructType\LoyaltyRedemption $loyaltyRedemption = null, \ammonkc\otaehi\StructType\MiscChargeOrder $miscChargeOrder = null, \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $deposit = null, \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $guarantee = null, \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $prePayment = null, \ammonkc\otaehi\StructType\FormattedTextType $paymentOptionsInfo = null)
    {
        $this
            ->setCreditCard($creditCard)
            ->setDebitCard($debitCard)
            ->setCash($cash)
            ->setVoucher($voucher)
            ->setBankAcct($bankAcct)
            ->setDirectBill($directBill)
            ->setLoyaltyRedemption($loyaltyRedemption)
            ->setMiscChargeOrder($miscChargeOrder)
            ->setDeposit($deposit)
            ->setGuarantee($guarantee)
            ->setPrePayment($prePayment)
            ->setPaymentOptionsInfo($paymentOptionsInfo);
    }
    /**
     * Get CreditCard value
     * @return \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType|null
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $creditCard
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setCreditCard(\ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $creditCard = null)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    /**
     * Get DebitCard value
     * @return \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType|null
     */
    public function getDebitCard()
    {
        return $this->DebitCard;
    }
    /**
     * Set DebitCard value
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $debitCard
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setDebitCard(\ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $debitCard = null)
    {
        $this->DebitCard = $debitCard;
        return $this;
    }
    /**
     * Get Cash value
     * @return \ammonkc\otaehi\StructType\Cash|null
     */
    public function getCash()
    {
        return $this->Cash;
    }
    /**
     * Set Cash value
     * @param \ammonkc\otaehi\StructType\Cash $cash
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setCash(\ammonkc\otaehi\StructType\Cash $cash = null)
    {
        $this->Cash = $cash;
        return $this;
    }
    /**
     * Get Voucher value
     * @return \ammonkc\otaehi\StructType\Voucher|null
     */
    public function getVoucher()
    {
        return $this->Voucher;
    }
    /**
     * Set Voucher value
     * @param \ammonkc\otaehi\StructType\Voucher $voucher
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setVoucher(\ammonkc\otaehi\StructType\Voucher $voucher = null)
    {
        $this->Voucher = $voucher;
        return $this;
    }
    /**
     * Get BankAcct value
     * @return \ammonkc\otaehi\StructType\BankAcct|null
     */
    public function getBankAcct()
    {
        return $this->BankAcct;
    }
    /**
     * Set BankAcct value
     * @param \ammonkc\otaehi\StructType\BankAcct $bankAcct
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setBankAcct(\ammonkc\otaehi\StructType\BankAcct $bankAcct = null)
    {
        $this->BankAcct = $bankAcct;
        return $this;
    }
    /**
     * Get DirectBill value
     * @return \ammonkc\otaehi\StructType\DirectBill|null
     */
    public function getDirectBill()
    {
        return $this->DirectBill;
    }
    /**
     * Set DirectBill value
     * @param \ammonkc\otaehi\StructType\DirectBill $directBill
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setDirectBill(\ammonkc\otaehi\StructType\DirectBill $directBill = null)
    {
        $this->DirectBill = $directBill;
        return $this;
    }
    /**
     * Get LoyaltyRedemption value
     * @return \ammonkc\otaehi\StructType\LoyaltyRedemption|null
     */
    public function getLoyaltyRedemption()
    {
        return $this->LoyaltyRedemption;
    }
    /**
     * Set LoyaltyRedemption value
     * @param \ammonkc\otaehi\StructType\LoyaltyRedemption $loyaltyRedemption
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setLoyaltyRedemption(\ammonkc\otaehi\StructType\LoyaltyRedemption $loyaltyRedemption = null)
    {
        $this->LoyaltyRedemption = $loyaltyRedemption;
        return $this;
    }
    /**
     * Get MiscChargeOrder value
     * @return \ammonkc\otaehi\StructType\MiscChargeOrder|null
     */
    public function getMiscChargeOrder()
    {
        return $this->MiscChargeOrder;
    }
    /**
     * Set MiscChargeOrder value
     * @param \ammonkc\otaehi\StructType\MiscChargeOrder $miscChargeOrder
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setMiscChargeOrder(\ammonkc\otaehi\StructType\MiscChargeOrder $miscChargeOrder = null)
    {
        $this->MiscChargeOrder = $miscChargeOrder;
        return $this;
    }
    /**
     * Get Deposit value
     * @return \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType|null
     */
    public function getDeposit()
    {
        return $this->Deposit;
    }
    /**
     * Set Deposit value
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $deposit
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setDeposit(\ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $deposit = null)
    {
        $this->Deposit = $deposit;
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $guarantee
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setGuarantee(\ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $guarantee = null)
    {
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Get PrePayment value
     * @return \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType|null
     */
    public function getPrePayment()
    {
        return $this->PrePayment;
    }
    /**
     * Set PrePayment value
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $prePayment
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setPrePayment(\ammonkc\otaehi\StructType\AcceptablePaymentCardsInfoType $prePayment = null)
    {
        $this->PrePayment = $prePayment;
        return $this;
    }
    /**
     * Get PaymentOptionsInfo value
     * @return \ammonkc\otaehi\StructType\FormattedTextType|null
     */
    public function getPaymentOptionsInfo()
    {
        return $this->PaymentOptionsInfo;
    }
    /**
     * Set PaymentOptionsInfo value
     * @param \ammonkc\otaehi\StructType\FormattedTextType $paymentOptionsInfo
     * @return \ammonkc\otaehi\StructType\PaymentOptions
     */
    public function setPaymentOptionsInfo(\ammonkc\otaehi\StructType\FormattedTextType $paymentOptionsInfo = null)
    {
        $this->PaymentOptionsInfo = $paymentOptionsInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\PaymentOptions
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
