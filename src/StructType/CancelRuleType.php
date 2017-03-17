<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRuleType StructType
 * @subpackage Structs
 */
class CancelRuleType extends AbstractStructBase
{
    /**
     * The PaymentCard
     * @var mixed
     */
    public $PaymentCard;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The CancelByDate
     * @var UNKNOWN
     */
    public $CancelByDate;
    /**
     * The Percent
     * @var UNKNOWN
     */
    public $Percent;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for CancelRuleType
     * @uses CancelRuleType::setPaymentCard()
     * @uses CancelRuleType::setTPA_Extensions()
     * @uses CancelRuleType::setCancelByDate()
     * @uses CancelRuleType::setPercent()
     * @uses CancelRuleType::setType()
     * @param mixed $paymentCard
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $cancelByDate
     * @param UNKNOWN $percent
     * @param string $type
     */
    public function __construct($paymentCard = null, $tPA_Extensions = null, UNKNOWN $cancelByDate = null, UNKNOWN $percent = null, $type = null)
    {
        $this
            ->setPaymentCard($paymentCard)
            ->setTPA_Extensions($tPA_Extensions)
            ->setCancelByDate($cancelByDate)
            ->setPercent($percent)
            ->setType($type);
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
     * @return \ammonkc\otaehi\StructType\CancelRuleType
     */
    public function setPaymentCard($paymentCard = null)
    {
        $this->PaymentCard = $paymentCard;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \ammonkc\otaehi\StructType\CancelRuleType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get CancelByDate value
     * @return UNKNOWN|null
     */
    public function getCancelByDate()
    {
        return $this->CancelByDate;
    }
    /**
     * Set CancelByDate value
     * @param UNKNOWN $cancelByDate
     * @return \ammonkc\otaehi\StructType\CancelRuleType
     */
    public function setCancelByDate(UNKNOWN $cancelByDate = null)
    {
        $this->CancelByDate = $cancelByDate;
        return $this;
    }
    /**
     * Get Percent value
     * @return UNKNOWN|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param UNKNOWN $percent
     * @return \ammonkc\otaehi\StructType\CancelRuleType
     */
    public function setPercent(UNKNOWN $percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \ammonkc\otaehi\StructType\CancelRuleType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\CancelRuleType
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
