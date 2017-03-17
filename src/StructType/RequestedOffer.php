<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedOffer StructType
 * @subpackage Structs
 */
class RequestedOffer extends AbstractStructBase
{
    /**
     * The OfferTypes
     * @var mixed
     */
    public $OfferTypes;
    /**
     * The TimePeriod
     * @var \ammonkc\otaehi\StructType\TimePeriod
     */
    public $TimePeriod;
    /**
     * The GuidelinePricing
     * @var \ammonkc\otaehi\StructType\GuidelinePricing
     */
    public $GuidelinePricing;
    /**
     * The TripPurpose
     * @var mixed
     */
    public $TripPurpose;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The NumberInParty
     * @var int
     */
    public $NumberInParty;
    /**
     * Constructor method for RequestedOffer
     * @uses RequestedOffer::setOfferTypes()
     * @uses RequestedOffer::setTimePeriod()
     * @uses RequestedOffer::setGuidelinePricing()
     * @uses RequestedOffer::setTripPurpose()
     * @uses RequestedOffer::setOntologyExtension()
     * @uses RequestedOffer::setNumberInParty()
     * @param mixed $offerTypes
     * @param \ammonkc\otaehi\StructType\TimePeriod $timePeriod
     * @param \ammonkc\otaehi\StructType\GuidelinePricing $guidelinePricing
     * @param mixed $tripPurpose
     * @param mixed $ontologyExtension
     * @param int $numberInParty
     */
    public function __construct($offerTypes = null, \ammonkc\otaehi\StructType\TimePeriod $timePeriod = null, \ammonkc\otaehi\StructType\GuidelinePricing $guidelinePricing = null, $tripPurpose = null, $ontologyExtension = null, $numberInParty = null)
    {
        $this
            ->setOfferTypes($offerTypes)
            ->setTimePeriod($timePeriod)
            ->setGuidelinePricing($guidelinePricing)
            ->setTripPurpose($tripPurpose)
            ->setOntologyExtension($ontologyExtension)
            ->setNumberInParty($numberInParty);
    }
    /**
     * Get OfferTypes value
     * @return mixed|null
     */
    public function getOfferTypes()
    {
        return $this->OfferTypes;
    }
    /**
     * Set OfferTypes value
     * @param mixed $offerTypes
     * @return \ammonkc\otaehi\StructType\RequestedOffer
     */
    public function setOfferTypes($offerTypes = null)
    {
        $this->OfferTypes = $offerTypes;
        return $this;
    }
    /**
     * Get TimePeriod value
     * @return \ammonkc\otaehi\StructType\TimePeriod|null
     */
    public function getTimePeriod()
    {
        return $this->TimePeriod;
    }
    /**
     * Set TimePeriod value
     * @param \ammonkc\otaehi\StructType\TimePeriod $timePeriod
     * @return \ammonkc\otaehi\StructType\RequestedOffer
     */
    public function setTimePeriod(\ammonkc\otaehi\StructType\TimePeriod $timePeriod = null)
    {
        $this->TimePeriod = $timePeriod;
        return $this;
    }
    /**
     * Get GuidelinePricing value
     * @return \ammonkc\otaehi\StructType\GuidelinePricing|null
     */
    public function getGuidelinePricing()
    {
        return $this->GuidelinePricing;
    }
    /**
     * Set GuidelinePricing value
     * @param \ammonkc\otaehi\StructType\GuidelinePricing $guidelinePricing
     * @return \ammonkc\otaehi\StructType\RequestedOffer
     */
    public function setGuidelinePricing(\ammonkc\otaehi\StructType\GuidelinePricing $guidelinePricing = null)
    {
        $this->GuidelinePricing = $guidelinePricing;
        return $this;
    }
    /**
     * Get TripPurpose value
     * @return mixed|null
     */
    public function getTripPurpose()
    {
        return $this->TripPurpose;
    }
    /**
     * Set TripPurpose value
     * @param mixed $tripPurpose
     * @return \ammonkc\otaehi\StructType\RequestedOffer
     */
    public function setTripPurpose($tripPurpose = null)
    {
        $this->TripPurpose = $tripPurpose;
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
     * @return \ammonkc\otaehi\StructType\RequestedOffer
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param int $numberInParty
     * @return \ammonkc\otaehi\StructType\RequestedOffer
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\RequestedOffer
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
