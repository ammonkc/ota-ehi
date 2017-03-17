<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyPaymentType StructType
 * @subpackage Structs
 */
class OntologyPaymentType extends AbstractStructBase
{
    /**
     * The TotalTripPrice
     * @var \Ammonkc\Otaehi\StructType\TotalTripPrice
     */
    public $TotalTripPrice;
    /**
     * The Rate
     * @var \Ammonkc\Otaehi\StructType\Rate
     */
    public $Rate;
    /**
     * The PaymentStatus
     * @var \Ammonkc\Otaehi\StructType\PaymentStatus
     */
    public $PaymentStatus;
    /**
     * The PaymentMethod
     * @var \Ammonkc\Otaehi\StructType\PaymentMethod
     */
    public $PaymentMethod;
    /**
     * The CardType
     * @var \Ammonkc\Otaehi\StructType\CardType
     */
    public $CardType;
    /**
     * The CardIssuer
     * @var \Ammonkc\Otaehi\StructType\CardIssuer
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
     * @param \Ammonkc\Otaehi\StructType\TotalTripPrice $totalTripPrice
     * @param \Ammonkc\Otaehi\StructType\Rate $rate
     * @param \Ammonkc\Otaehi\StructType\PaymentStatus $paymentStatus
     * @param \Ammonkc\Otaehi\StructType\PaymentMethod $paymentMethod
     * @param \Ammonkc\Otaehi\StructType\CardType $cardType
     * @param \Ammonkc\Otaehi\StructType\CardIssuer $cardIssuer
     * @param mixed $ontologyExtension
     * @param bool $rewardsInd
     */
    public function __construct(\Ammonkc\Otaehi\StructType\TotalTripPrice $totalTripPrice = null, \Ammonkc\Otaehi\StructType\Rate $rate = null, \Ammonkc\Otaehi\StructType\PaymentStatus $paymentStatus = null, \Ammonkc\Otaehi\StructType\PaymentMethod $paymentMethod = null, \Ammonkc\Otaehi\StructType\CardType $cardType = null, \Ammonkc\Otaehi\StructType\CardIssuer $cardIssuer = null, $ontologyExtension = null, $rewardsInd = null)
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
     * @return \Ammonkc\Otaehi\StructType\TotalTripPrice|null
     */
    public function getTotalTripPrice()
    {
        return $this->TotalTripPrice;
    }
    /**
     * Set TotalTripPrice value
     * @param \Ammonkc\Otaehi\StructType\TotalTripPrice $totalTripPrice
     * @return \Ammonkc\Otaehi\StructType\OntologyPaymentType
     */
    public function setTotalTripPrice(\Ammonkc\Otaehi\StructType\TotalTripPrice $totalTripPrice = null)
    {
        $this->TotalTripPrice = $totalTripPrice;
        return $this;
    }
    /**
     * Get Rate value
     * @return \Ammonkc\Otaehi\StructType\Rate|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param \Ammonkc\Otaehi\StructType\Rate $rate
     * @return \Ammonkc\Otaehi\StructType\OntologyPaymentType
     */
    public function setRate(\Ammonkc\Otaehi\StructType\Rate $rate = null)
    {
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Get PaymentStatus value
     * @return \Ammonkc\Otaehi\StructType\PaymentStatus|null
     */
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }
    /**
     * Set PaymentStatus value
     * @param \Ammonkc\Otaehi\StructType\PaymentStatus $paymentStatus
     * @return \Ammonkc\Otaehi\StructType\OntologyPaymentType
     */
    public function setPaymentStatus(\Ammonkc\Otaehi\StructType\PaymentStatus $paymentStatus = null)
    {
        $this->PaymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return \Ammonkc\Otaehi\StructType\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @param \Ammonkc\Otaehi\StructType\PaymentMethod $paymentMethod
     * @return \Ammonkc\Otaehi\StructType\OntologyPaymentType
     */
    public function setPaymentMethod(\Ammonkc\Otaehi\StructType\PaymentMethod $paymentMethod = null)
    {
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Get CardType value
     * @return \Ammonkc\Otaehi\StructType\CardType|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @param \Ammonkc\Otaehi\StructType\CardType $cardType
     * @return \Ammonkc\Otaehi\StructType\OntologyPaymentType
     */
    public function setCardType(\Ammonkc\Otaehi\StructType\CardType $cardType = null)
    {
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Get CardIssuer value
     * @return \Ammonkc\Otaehi\StructType\CardIssuer|null
     */
    public function getCardIssuer()
    {
        return $this->CardIssuer;
    }
    /**
     * Set CardIssuer value
     * @param \Ammonkc\Otaehi\StructType\CardIssuer $cardIssuer
     * @return \Ammonkc\Otaehi\StructType\OntologyPaymentType
     */
    public function setCardIssuer(\Ammonkc\Otaehi\StructType\CardIssuer $cardIssuer = null)
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
     * @return \Ammonkc\Otaehi\StructType\OntologyPaymentType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyPaymentType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyPaymentType
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
