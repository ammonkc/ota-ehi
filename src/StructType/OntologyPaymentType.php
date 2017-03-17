<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyPaymentType StructType
 * @subpackage Structs
 */
class OntologyPaymentType extends AbstractStructBase
{
    /**
     * The TotalTripPrice
     * @var \ammonkc\otaehi\StructType\TotalTripPrice
     */
    public $TotalTripPrice;
    /**
     * The Rate
     * @var \ammonkc\otaehi\StructType\Rate
     */
    public $Rate;
    /**
     * The PaymentStatus
     * @var \ammonkc\otaehi\StructType\PaymentStatus
     */
    public $PaymentStatus;
    /**
     * The PaymentMethod
     * @var \ammonkc\otaehi\StructType\PaymentMethod
     */
    public $PaymentMethod;
    /**
     * The CardType
     * @var \ammonkc\otaehi\StructType\CardType
     */
    public $CardType;
    /**
     * The CardIssuer
     * @var \ammonkc\otaehi\StructType\CardIssuer
     */
    public $CardIssuer;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The RewardsInd
     * @var bool
     */
    public $RewardsInd;
    /**
     * Constructor method for OntologyPaymentType
     * @uses OntologyPaymentType::setTotalTripPrice()
     * @uses OntologyPaymentType::setRate()
     * @uses OntologyPaymentType::setPaymentStatus()
     * @uses OntologyPaymentType::setPaymentMethod()
     * @uses OntologyPaymentType::setCardType()
     * @uses OntologyPaymentType::setCardIssuer()
     * @uses OntologyPaymentType::setOntologyExtension()
     * @uses OntologyPaymentType::setRewardsInd()
     * @param \ammonkc\otaehi\StructType\TotalTripPrice $totalTripPrice
     * @param \ammonkc\otaehi\StructType\Rate $rate
     * @param \ammonkc\otaehi\StructType\PaymentStatus $paymentStatus
     * @param \ammonkc\otaehi\StructType\PaymentMethod $paymentMethod
     * @param \ammonkc\otaehi\StructType\CardType $cardType
     * @param \ammonkc\otaehi\StructType\CardIssuer $cardIssuer
     * @param mixed $ontologyExtension
     * @param bool $rewardsInd
     */
    public function __construct(\ammonkc\otaehi\StructType\TotalTripPrice $totalTripPrice = null, \ammonkc\otaehi\StructType\Rate $rate = null, \ammonkc\otaehi\StructType\PaymentStatus $paymentStatus = null, \ammonkc\otaehi\StructType\PaymentMethod $paymentMethod = null, \ammonkc\otaehi\StructType\CardType $cardType = null, \ammonkc\otaehi\StructType\CardIssuer $cardIssuer = null, $ontologyExtension = null, $rewardsInd = null)
    {
        $this
            ->setTotalTripPrice($totalTripPrice)
            ->setRate($rate)
            ->setPaymentStatus($paymentStatus)
            ->setPaymentMethod($paymentMethod)
            ->setCardType($cardType)
            ->setCardIssuer($cardIssuer)
            ->setOntologyExtension($ontologyExtension)
            ->setRewardsInd($rewardsInd);
    }
    /**
     * Get TotalTripPrice value
     * @return \ammonkc\otaehi\StructType\TotalTripPrice|null
     */
    public function getTotalTripPrice()
    {
        return $this->TotalTripPrice;
    }
    /**
     * Set TotalTripPrice value
     * @param \ammonkc\otaehi\StructType\TotalTripPrice $totalTripPrice
     * @return \ammonkc\otaehi\StructType\OntologyPaymentType
     */
    public function setTotalTripPrice(\ammonkc\otaehi\StructType\TotalTripPrice $totalTripPrice = null)
    {
        $this->TotalTripPrice = $totalTripPrice;
        return $this;
    }
    /**
     * Get Rate value
     * @return \ammonkc\otaehi\StructType\Rate|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param \ammonkc\otaehi\StructType\Rate $rate
     * @return \ammonkc\otaehi\StructType\OntologyPaymentType
     */
    public function setRate(\ammonkc\otaehi\StructType\Rate $rate = null)
    {
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Get PaymentStatus value
     * @return \ammonkc\otaehi\StructType\PaymentStatus|null
     */
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }
    /**
     * Set PaymentStatus value
     * @param \ammonkc\otaehi\StructType\PaymentStatus $paymentStatus
     * @return \ammonkc\otaehi\StructType\OntologyPaymentType
     */
    public function setPaymentStatus(\ammonkc\otaehi\StructType\PaymentStatus $paymentStatus = null)
    {
        $this->PaymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return \ammonkc\otaehi\StructType\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @param \ammonkc\otaehi\StructType\PaymentMethod $paymentMethod
     * @return \ammonkc\otaehi\StructType\OntologyPaymentType
     */
    public function setPaymentMethod(\ammonkc\otaehi\StructType\PaymentMethod $paymentMethod = null)
    {
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Get CardType value
     * @return \ammonkc\otaehi\StructType\CardType|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @param \ammonkc\otaehi\StructType\CardType $cardType
     * @return \ammonkc\otaehi\StructType\OntologyPaymentType
     */
    public function setCardType(\ammonkc\otaehi\StructType\CardType $cardType = null)
    {
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Get CardIssuer value
     * @return \ammonkc\otaehi\StructType\CardIssuer|null
     */
    public function getCardIssuer()
    {
        return $this->CardIssuer;
    }
    /**
     * Set CardIssuer value
     * @param \ammonkc\otaehi\StructType\CardIssuer $cardIssuer
     * @return \ammonkc\otaehi\StructType\OntologyPaymentType
     */
    public function setCardIssuer(\ammonkc\otaehi\StructType\CardIssuer $cardIssuer = null)
    {
        $this->CardIssuer = $cardIssuer;
        return $this;
    }
    /**
     * Get OntologyExtension value
     * @return mixed|null
     */
    public function getOntologyExtension()
    {
        return $this->OntologyExtension;
    }
    /**
     * Set OntologyExtension value
     * @param mixed $ontologyExtension
     * @return \ammonkc\otaehi\StructType\OntologyPaymentType
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get RewardsInd value
     * @return bool|null
     */
    public function getRewardsInd()
    {
        return $this->RewardsInd;
    }
    /**
     * Set RewardsInd value
     * @param bool $rewardsInd
     * @return \ammonkc\otaehi\StructType\OntologyPaymentType
     */
    public function setRewardsInd($rewardsInd = null)
    {
        $this->RewardsInd = $rewardsInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OntologyPaymentType
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
