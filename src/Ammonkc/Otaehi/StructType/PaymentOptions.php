<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentOptions StructType
 * @subpackage Structs
 */
class PaymentOptions extends AbstractStructBase
{
    /**
     * The CreditCard
     * @var \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public $CreditCard;
    /**
     * The DebitCard
     * @var \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public $DebitCard;
    /**
     * The Cash
     * @var \Ammonkc\Otaehi\StructType\Cash
     */
    public $Cash;
    /**
     * The Voucher
     * @var \Ammonkc\Otaehi\StructType\Voucher
     */
    public $Voucher;
    /**
     * The BankAcct
     * @var \Ammonkc\Otaehi\StructType\BankAcct
     */
    public $BankAcct;
    /**
     * The DirectBill
     * @var \Ammonkc\Otaehi\StructType\DirectBill
     */
    public $DirectBill;
    /**
     * The LoyaltyRedemption
     * @var \Ammonkc\Otaehi\StructType\LoyaltyRedemption
     */
    public $LoyaltyRedemption;
    /**
     * The MiscChargeOrder
     * @var \Ammonkc\Otaehi\StructType\MiscChargeOrder
     */
    public $MiscChargeOrder;
    /**
     * The Deposit
     * @var \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public $Deposit;
    /**
     * The Guarantee
     * @var \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public $Guarantee;
    /**
     * The PrePayment
     * @var \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public $PrePayment;
    /**
     * The PaymentOptionsInfo
     * @var \Ammonkc\Otaehi\StructType\FormattedTextType
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
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $creditCard
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $debitCard
     * @param \Ammonkc\Otaehi\StructType\Cash $cash
     * @param \Ammonkc\Otaehi\StructType\Voucher $voucher
     * @param \Ammonkc\Otaehi\StructType\BankAcct $bankAcct
     * @param \Ammonkc\Otaehi\StructType\DirectBill $directBill
     * @param \Ammonkc\Otaehi\StructType\LoyaltyRedemption $loyaltyRedemption
     * @param \Ammonkc\Otaehi\StructType\MiscChargeOrder $miscChargeOrder
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $deposit
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $guarantee
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $prePayment
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $paymentOptionsInfo
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $creditCard = null, \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $debitCard = null, \Ammonkc\Otaehi\StructType\Cash $cash = null, \Ammonkc\Otaehi\StructType\Voucher $voucher = null, \Ammonkc\Otaehi\StructType\BankAcct $bankAcct = null, \Ammonkc\Otaehi\StructType\DirectBill $directBill = null, \Ammonkc\Otaehi\StructType\LoyaltyRedemption $loyaltyRedemption = null, \Ammonkc\Otaehi\StructType\MiscChargeOrder $miscChargeOrder = null, \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $deposit = null, \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $guarantee = null, \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $prePayment = null, \Ammonkc\Otaehi\StructType\FormattedTextType $paymentOptionsInfo = null)
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
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType|null
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $creditCard
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setCreditCard(\Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $creditCard = null)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    /**
     * Get DebitCard value
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType|null
     */
    public function getDebitCard()
    {
        return $this->DebitCard;
    }
    /**
     * Set DebitCard value
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $debitCard
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setDebitCard(\Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $debitCard = null)
    {
        $this->DebitCard = $debitCard;
        return $this;
    }
    /**
     * Get Cash value
     * @return \Ammonkc\Otaehi\StructType\Cash|null
     */
    public function getCash()
    {
        return $this->Cash;
    }
    /**
     * Set Cash value
     * @param \Ammonkc\Otaehi\StructType\Cash $cash
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setCash(\Ammonkc\Otaehi\StructType\Cash $cash = null)
    {
        $this->Cash = $cash;
        return $this;
    }
    /**
     * Get Voucher value
     * @return \Ammonkc\Otaehi\StructType\Voucher|null
     */
    public function getVoucher()
    {
        return $this->Voucher;
    }
    /**
     * Set Voucher value
     * @param \Ammonkc\Otaehi\StructType\Voucher $voucher
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setVoucher(\Ammonkc\Otaehi\StructType\Voucher $voucher = null)
    {
        $this->Voucher = $voucher;
        return $this;
    }
    /**
     * Get BankAcct value
     * @return \Ammonkc\Otaehi\StructType\BankAcct|null
     */
    public function getBankAcct()
    {
        return $this->BankAcct;
    }
    /**
     * Set BankAcct value
     * @param \Ammonkc\Otaehi\StructType\BankAcct $bankAcct
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setBankAcct(\Ammonkc\Otaehi\StructType\BankAcct $bankAcct = null)
    {
        $this->BankAcct = $bankAcct;
        return $this;
    }
    /**
     * Get DirectBill value
     * @return \Ammonkc\Otaehi\StructType\DirectBill|null
     */
    public function getDirectBill()
    {
        return $this->DirectBill;
    }
    /**
     * Set DirectBill value
     * @param \Ammonkc\Otaehi\StructType\DirectBill $directBill
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setDirectBill(\Ammonkc\Otaehi\StructType\DirectBill $directBill = null)
    {
        $this->DirectBill = $directBill;
        return $this;
    }
    /**
     * Get LoyaltyRedemption value
     * @return \Ammonkc\Otaehi\StructType\LoyaltyRedemption|null
     */
    public function getLoyaltyRedemption()
    {
        return $this->LoyaltyRedemption;
    }
    /**
     * Set LoyaltyRedemption value
     * @param \Ammonkc\Otaehi\StructType\LoyaltyRedemption $loyaltyRedemption
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setLoyaltyRedemption(\Ammonkc\Otaehi\StructType\LoyaltyRedemption $loyaltyRedemption = null)
    {
        $this->LoyaltyRedemption = $loyaltyRedemption;
        return $this;
    }
    /**
     * Get MiscChargeOrder value
     * @return \Ammonkc\Otaehi\StructType\MiscChargeOrder|null
     */
    public function getMiscChargeOrder()
    {
        return $this->MiscChargeOrder;
    }
    /**
     * Set MiscChargeOrder value
     * @param \Ammonkc\Otaehi\StructType\MiscChargeOrder $miscChargeOrder
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setMiscChargeOrder(\Ammonkc\Otaehi\StructType\MiscChargeOrder $miscChargeOrder = null)
    {
        $this->MiscChargeOrder = $miscChargeOrder;
        return $this;
    }
    /**
     * Get Deposit value
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType|null
     */
    public function getDeposit()
    {
        return $this->Deposit;
    }
    /**
     * Set Deposit value
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $deposit
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setDeposit(\Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $deposit = null)
    {
        $this->Deposit = $deposit;
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $guarantee
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setGuarantee(\Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $guarantee = null)
    {
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Get PrePayment value
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType|null
     */
    public function getPrePayment()
    {
        return $this->PrePayment;
    }
    /**
     * Set PrePayment value
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $prePayment
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setPrePayment(\Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType $prePayment = null)
    {
        $this->PrePayment = $prePayment;
        return $this;
    }
    /**
     * Get PaymentOptionsInfo value
     * @return \Ammonkc\Otaehi\StructType\FormattedTextType|null
     */
    public function getPaymentOptionsInfo()
    {
        return $this->PaymentOptionsInfo;
    }
    /**
     * Set PaymentOptionsInfo value
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $paymentOptionsInfo
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public function setPaymentOptionsInfo(\Ammonkc\Otaehi\StructType\FormattedTextType $paymentOptionsInfo = null)
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
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions
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
