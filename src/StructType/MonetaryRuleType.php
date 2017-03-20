<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MonetaryRuleType StructType
 * @subpackage Structs
 */
class MonetaryRuleType extends AbstractStructBase
{
    /**
     * The RuleType
     * @var
     */
    public $RuleType;
    /**
     * The Percent
     * @var
     */
    public $Percent;
    /**
     * The DateTime
     * @var string
     */
    public $DateTime;
    /**
     * The PaymentType
     * @var
     */
    public $PaymentType;
    /**
     * The RateConvertedInd
     * @var bool
     */
    public $RateConvertedInd;
    /**
     * Constructor method for MonetaryRuleType
     * @uses MonetaryRuleType::setRuleType()
     * @uses MonetaryRuleType::setPercent()
     * @uses MonetaryRuleType::setDateTime()
     * @uses MonetaryRuleType::setPaymentType()
     * @uses MonetaryRuleType::setRateConvertedInd()
     * @param  $ruleType
     * @param  $percent
     * @param string $dateTime
     * @param  $paymentType
     * @param bool $rateConvertedInd
     */
    public function __construct( $ruleType = null,  $percent = null, $dateTime = null,  $paymentType = null, $rateConvertedInd = null)
    {
        $this
            ->setRuleType($ruleType)
            ->setPercent($percent)
            ->setDateTime($dateTime)
            ->setPaymentType($paymentType)
            ->setRateConvertedInd($rateConvertedInd);
    }
    /**
     * Get RuleType value
     * @return |null
     */
    public function getRuleType()
    {
        return $this->RuleType;
    }
    /**
     * Set RuleType value
     * @param  $ruleType
     * @return \Ammonkc\Otaehi\StructType\MonetaryRuleType
     */
    public function setRuleType( $ruleType = null)
    {
        $this->RuleType = $ruleType;
        return $this;
    }
    /**
     * Get Percent value
     * @return |null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param  $percent
     * @return \Ammonkc\Otaehi\StructType\MonetaryRuleType
     */
    public function setPercent( $percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \Ammonkc\Otaehi\StructType\MonetaryRuleType
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
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
     * @return \Ammonkc\Otaehi\StructType\MonetaryRuleType
     */
    public function setPaymentType( $paymentType = null)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get RateConvertedInd value
     * @return bool|null
     */
    public function getRateConvertedInd()
    {
        return $this->RateConvertedInd;
    }
    /**
     * Set RateConvertedInd value
     * @param bool $rateConvertedInd
     * @return \Ammonkc\Otaehi\StructType\MonetaryRuleType
     */
    public function setRateConvertedInd($rateConvertedInd = null)
    {
        $this->RateConvertedInd = $rateConvertedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\MonetaryRuleType
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
