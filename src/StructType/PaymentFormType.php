<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentFormType StructType
 * @subpackage Structs
 */
class PaymentFormType extends AbstractStructBase
{
    /**
     * The PaymentCard
     * @var mixed
     */
    public $PaymentCard;
    /**
     * The BankAcct
     * @var mixed
     */
    public $BankAcct;
    /**
     * The DirectBill
     * @var mixed
     */
    public $DirectBill;
    /**
     * The Voucher
     * @var \Ammonkc\Otaehi\StructType\Voucher
     */
    public $Voucher;
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
     * The Ticket
     * @var \Ammonkc\Otaehi\StructType\Ticket
     */
    public $Ticket;
    /**
     * The Cash
     * @var \Ammonkc\Otaehi\StructType\Cash
     */
    public $Cash;
    /**
     * The CostCenterID
     * @var UNKNOWN
     */
    public $CostCenterID;
    /**
     * The RPH
     * @var UNKNOWN
     */
    public $RPH;
    /**
     * The PaymentTransactionTypeCode
     * @var string
     */
    public $PaymentTransactionTypeCode;
    /**
     * The GuaranteeIndicator
     * @var bool
     */
    public $GuaranteeIndicator;
    /**
     * The GuaranteeTypeCode
     * @var UNKNOWN
     */
    public $GuaranteeTypeCode;
    /**
     * The GuaranteeID
     * @var UNKNOWN
     */
    public $GuaranteeID;
    /**
     * The Remark
     * @var UNKNOWN
     */
    public $Remark;
    /**
     * Constructor method for PaymentFormType
     * @uses PaymentFormType::setPaymentCard()
     * @uses PaymentFormType::setBankAcct()
     * @uses PaymentFormType::setDirectBill()
     * @uses PaymentFormType::setVoucher()
     * @uses PaymentFormType::setLoyaltyRedemption()
     * @uses PaymentFormType::setMiscChargeOrder()
     * @uses PaymentFormType::setTicket()
     * @uses PaymentFormType::setCash()
     * @uses PaymentFormType::setCostCenterID()
     * @uses PaymentFormType::setRPH()
     * @uses PaymentFormType::setPaymentTransactionTypeCode()
     * @uses PaymentFormType::setGuaranteeIndicator()
     * @uses PaymentFormType::setGuaranteeTypeCode()
     * @uses PaymentFormType::setGuaranteeID()
     * @uses PaymentFormType::setRemark()
     * @param mixed $paymentCard
     * @param mixed $bankAcct
     * @param mixed $directBill
     * @param \Ammonkc\Otaehi\StructType\Voucher $voucher
     * @param \Ammonkc\Otaehi\StructType\LoyaltyRedemption $loyaltyRedemption
     * @param \Ammonkc\Otaehi\StructType\MiscChargeOrder $miscChargeOrder
     * @param \Ammonkc\Otaehi\StructType\Ticket $ticket
     * @param \Ammonkc\Otaehi\StructType\Cash $cash
     * @param UNKNOWN $costCenterID
     * @param UNKNOWN $rPH
     * @param string $paymentTransactionTypeCode
     * @param bool $guaranteeIndicator
     * @param UNKNOWN $guaranteeTypeCode
     * @param UNKNOWN $guaranteeID
     * @param UNKNOWN $remark
     */
    public function __construct($paymentCard = null, $bankAcct = null, $directBill = null, \Ammonkc\Otaehi\StructType\Voucher $voucher = null, \Ammonkc\Otaehi\StructType\LoyaltyRedemption $loyaltyRedemption = null, \Ammonkc\Otaehi\StructType\MiscChargeOrder $miscChargeOrder = null, \Ammonkc\Otaehi\StructType\Ticket $ticket = null, \Ammonkc\Otaehi\StructType\Cash $cash = null, UNKNOWN $costCenterID = null, UNKNOWN $rPH = null, $paymentTransactionTypeCode = null, $guaranteeIndicator = null, UNKNOWN $guaranteeTypeCode = null, UNKNOWN $guaranteeID = null, UNKNOWN $remark = null)
    {
        $this
            ->setPaymentCard($paymentCard)
            ->setBankAcct($bankAcct)
            ->setDirectBill($directBill)
            ->setVoucher($voucher)
            ->setLoyaltyRedemption($loyaltyRedemption)
            ->setMiscChargeOrder($miscChargeOrder)
            ->setTicket($ticket)
            ->setCash($cash)
            ->setCostCenterID($costCenterID)
            ->setRPH($rPH)
            ->setPaymentTransactionTypeCode($paymentTransactionTypeCode)
            ->setGuaranteeIndicator($guaranteeIndicator)
            ->setGuaranteeTypeCode($guaranteeTypeCode)
            ->setGuaranteeID($guaranteeID)
            ->setRemark($remark);
    }
    /**
     * Get PaymentCard value
     * @return mixed|null
     */
    public function getPaymentCard()
    {
        return $this->PaymentCard;
    }
    /**
     * Set PaymentCard value
     * @param mixed $paymentCard
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setPaymentCard($paymentCard = null)
    {
        $this->PaymentCard = $paymentCard;
        return $this;
    }
    /**
     * Get BankAcct value
     * @return mixed|null
     */
    public function getBankAcct()
    {
        return $this->BankAcct;
    }
    /**
     * Set BankAcct value
     * @param mixed $bankAcct
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setBankAcct($bankAcct = null)
    {
        $this->BankAcct = $bankAcct;
        return $this;
    }
    /**
     * Get DirectBill value
     * @return mixed|null
     */
    public function getDirectBill()
    {
        return $this->DirectBill;
    }
    /**
     * Set DirectBill value
     * @param mixed $directBill
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setDirectBill($directBill = null)
    {
        $this->DirectBill = $directBill;
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
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setVoucher(\Ammonkc\Otaehi\StructType\Voucher $voucher = null)
    {
        $this->Voucher = $voucher;
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
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
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
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setMiscChargeOrder(\Ammonkc\Otaehi\StructType\MiscChargeOrder $miscChargeOrder = null)
    {
        $this->MiscChargeOrder = $miscChargeOrder;
        return $this;
    }
    /**
     * Get Ticket value
     * @return \Ammonkc\Otaehi\StructType\Ticket|null
     */
    public function getTicket()
    {
        return $this->Ticket;
    }
    /**
     * Set Ticket value
     * @param \Ammonkc\Otaehi\StructType\Ticket $ticket
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setTicket(\Ammonkc\Otaehi\StructType\Ticket $ticket = null)
    {
        $this->Ticket = $ticket;
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
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setCash(\Ammonkc\Otaehi\StructType\Cash $cash = null)
    {
        $this->Cash = $cash;
        return $this;
    }
    /**
     * Get CostCenterID value
     * @return UNKNOWN|null
     */
    public function getCostCenterID()
    {
        return $this->CostCenterID;
    }
    /**
     * Set CostCenterID value
     * @param UNKNOWN $costCenterID
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setCostCenterID(UNKNOWN $costCenterID = null)
    {
        $this->CostCenterID = $costCenterID;
        return $this;
    }
    /**
     * Get RPH value
     * @return UNKNOWN|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param UNKNOWN $rPH
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setRPH(UNKNOWN $rPH = null)
    {
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get PaymentTransactionTypeCode value
     * @return string|null
     */
    public function getPaymentTransactionTypeCode()
    {
        return $this->PaymentTransactionTypeCode;
    }
    /**
     * Set PaymentTransactionTypeCode value
     * @param string $paymentTransactionTypeCode
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setPaymentTransactionTypeCode($paymentTransactionTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($paymentTransactionTypeCode) && !is_string($paymentTransactionTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentTransactionTypeCode)), __LINE__);
        }
        $this->PaymentTransactionTypeCode = $paymentTransactionTypeCode;
        return $this;
    }
    /**
     * Get GuaranteeIndicator value
     * @return bool|null
     */
    public function getGuaranteeIndicator()
    {
        return $this->GuaranteeIndicator;
    }
    /**
     * Set GuaranteeIndicator value
     * @param bool $guaranteeIndicator
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setGuaranteeIndicator($guaranteeIndicator = null)
    {
        $this->GuaranteeIndicator = $guaranteeIndicator;
        return $this;
    }
    /**
     * Get GuaranteeTypeCode value
     * @return UNKNOWN|null
     */
    public function getGuaranteeTypeCode()
    {
        return $this->GuaranteeTypeCode;
    }
    /**
     * Set GuaranteeTypeCode value
     * @param UNKNOWN $guaranteeTypeCode
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setGuaranteeTypeCode(UNKNOWN $guaranteeTypeCode = null)
    {
        $this->GuaranteeTypeCode = $guaranteeTypeCode;
        return $this;
    }
    /**
     * Get GuaranteeID value
     * @return UNKNOWN|null
     */
    public function getGuaranteeID()
    {
        return $this->GuaranteeID;
    }
    /**
     * Set GuaranteeID value
     * @param UNKNOWN $guaranteeID
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setGuaranteeID(UNKNOWN $guaranteeID = null)
    {
        $this->GuaranteeID = $guaranteeID;
        return $this;
    }
    /**
     * Get Remark value
     * @return UNKNOWN|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param UNKNOWN $remark
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
     */
    public function setRemark(UNKNOWN $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PaymentFormType
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
