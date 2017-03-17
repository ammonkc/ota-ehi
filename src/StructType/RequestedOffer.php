<?php

namespace Ammonkc\Otaehi\StructType;

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
     * @var \Ammonkc\Otaehi\StructType\TimePeriod
     */
    public $TimePeriod;
    /**
     * The GuidelinePricing
     * @var \Ammonkc\Otaehi\StructType\GuidelinePricing
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
     * @param \Ammonkc\Otaehi\StructType\TimePeriod $timePeriod
     * @param \Ammonkc\Otaehi\StructType\GuidelinePricing $guidelinePricing
     * @param mixed $tripPurpose
     * @param mixed $ontologyExtension
     * @param int $numberInParty
     */
    public function __construct($offerTypes = null, \Ammonkc\Otaehi\StructType\TimePeriod $timePeriod = null, \Ammonkc\Otaehi\StructType\GuidelinePricing $guidelinePricing = null, $tripPurpose = null, $ontologyExtension = null, $numberInParty = null)
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
     * @return \Ammonkc\Otaehi\StructType\RequestedOffer
     */
    public function setOfferTypes($offerTypes = null)
    {
        $this->OfferTypes = $offerTypes;
        return $this;
    }
    /**
     * Get TimePeriod value
     * @return \Ammonkc\Otaehi\StructType\TimePeriod|null
     */
    public function getTimePeriod()
    {
        return $this->TimePeriod;
    }
    /**
     * Set TimePeriod value
     * @param \Ammonkc\Otaehi\StructType\TimePeriod $timePeriod
     * @return \Ammonkc\Otaehi\StructType\RequestedOffer
     */
    public function setTimePeriod(\Ammonkc\Otaehi\StructType\TimePeriod $timePeriod = null)
    {
        $this->TimePeriod = $timePeriod;
        return $this;
    }
    /**
     * Get GuidelinePricing value
     * @return \Ammonkc\Otaehi\StructType\GuidelinePricing|null
     */
    public function getGuidelinePricing()
    {
        return $this->GuidelinePricing;
    }
    /**
     * Set GuidelinePricing value
     * @param \Ammonkc\Otaehi\StructType\GuidelinePricing $guidelinePricing
     * @return \Ammonkc\Otaehi\StructType\RequestedOffer
     */
    public function setGuidelinePricing(\Ammonkc\Otaehi\StructType\GuidelinePricing $guidelinePricing = null)
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
     * @return \Ammonkc\Otaehi\StructType\RequestedOffer
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
     * @return \Ammonkc\Otaehi\StructType\RequestedOffer
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
     * @return \Ammonkc\Otaehi\StructType\RequestedOffer
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
     * @return \Ammonkc\Otaehi\StructType\RequestedOffer
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
