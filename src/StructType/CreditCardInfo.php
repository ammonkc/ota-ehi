<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardInfo StructType
 * @subpackage Structs
 */
class CreditCardInfo extends AbstractStructBase
{
    /**
     * The Currency
     * @var
     */
    public $Currency;
    /**
     * The DonationAmount
     * @var
     */
    public $DonationAmount;
    /**
     * Constructor method for CreditCardInfo
     * @uses CreditCardInfo::setCurrency()
     * @uses CreditCardInfo::setDonationAmount()
     * @param  $currency
     * @param  $donationAmount
     */
    public function __construct( $currency = null,  $donationAmount = null)
    {
        $this
            ->setCurrency($currency)
            ->setDonationAmount($donationAmount);
    }
    /**
     * Get Currency value
     * @return |null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param  $currency
     * @return \Ammonkc\Otaehi\StructType\CreditCardInfo
     */
    public function setCurrency( $currency = null)
    {
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get DonationAmount value
     * @return |null
     */
    public function getDonationAmount()
    {
        return $this->DonationAmount;
    }
    /**
     * Set DonationAmount value
     * @param  $donationAmount
     * @return \Ammonkc\Otaehi\StructType\CreditCardInfo
     */
    public function setDonationAmount( $donationAmount = null)
    {
        $this->DonationAmount = $donationAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CreditCardInfo
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
