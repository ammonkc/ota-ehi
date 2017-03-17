<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiModalOfferType StructType
 * @subpackage Structs
 */
class MultiModalOfferType extends AbstractStructBase
{
    /**
     * The RequestingParty
     * @var \ammonkc\otaehi\StructType\RequestingParty
     */
    public $RequestingParty;
    /**
     * The Ontology
     * @var \ammonkc\otaehi\StructType\Ontology
     */
    public $Ontology;
    /**
     * The RequestedOffer
     * @var \ammonkc\otaehi\StructType\RequestedOffer
     */
    public $RequestedOffer;
    /**
     * The TripCharacteristics
     * @var \ammonkc\otaehi\StructType\TripCharacteristics
     */
    public $TripCharacteristics;
    /**
     * The TravelerCharacteristics
     * @var \ammonkc\otaehi\StructType\TravelerCharacteristics
     */
    public $TravelerCharacteristics;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for MultiModalOfferType
     * @uses MultiModalOfferType::setRequestingParty()
     * @uses MultiModalOfferType::setOntology()
     * @uses MultiModalOfferType::setRequestedOffer()
     * @uses MultiModalOfferType::setTripCharacteristics()
     * @uses MultiModalOfferType::setTravelerCharacteristics()
     * @uses MultiModalOfferType::setOntologyExtension()
     * @param \ammonkc\otaehi\StructType\RequestingParty $requestingParty
     * @param \ammonkc\otaehi\StructType\Ontology $ontology
     * @param \ammonkc\otaehi\StructType\RequestedOffer $requestedOffer
     * @param \ammonkc\otaehi\StructType\TripCharacteristics $tripCharacteristics
     * @param \ammonkc\otaehi\StructType\TravelerCharacteristics $travelerCharacteristics
     * @param mixed $ontologyExtension
     */
    public function __construct(\ammonkc\otaehi\StructType\RequestingParty $requestingParty = null, \ammonkc\otaehi\StructType\Ontology $ontology = null, \ammonkc\otaehi\StructType\RequestedOffer $requestedOffer = null, \ammonkc\otaehi\StructType\TripCharacteristics $tripCharacteristics = null, \ammonkc\otaehi\StructType\TravelerCharacteristics $travelerCharacteristics = null, $ontologyExtension = null)
    {
        $this
            ->setRequestingParty($requestingParty)
            ->setOntology($ontology)
            ->setRequestedOffer($requestedOffer)
            ->setTripCharacteristics($tripCharacteristics)
            ->setTravelerCharacteristics($travelerCharacteristics)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get RequestingParty value
     * @return \ammonkc\otaehi\StructType\RequestingParty|null
     */
    public function getRequestingParty()
    {
        return $this->RequestingParty;
    }
    /**
     * Set RequestingParty value
     * @param \ammonkc\otaehi\StructType\RequestingParty $requestingParty
     * @return \ammonkc\otaehi\StructType\MultiModalOfferType
     */
    public function setRequestingParty(\ammonkc\otaehi\StructType\RequestingParty $requestingParty = null)
    {
        $this->RequestingParty = $requestingParty;
        return $this;
    }
    /**
     * Get Ontology value
     * @return \ammonkc\otaehi\StructType\Ontology|null
     */
    public function getOntology()
    {
        return $this->Ontology;
    }
    /**
     * Set Ontology value
     * @param \ammonkc\otaehi\StructType\Ontology $ontology
     * @return \ammonkc\otaehi\StructType\MultiModalOfferType
     */
    public function setOntology(\ammonkc\otaehi\StructType\Ontology $ontology = null)
    {
        $this->Ontology = $ontology;
        return $this;
    }
    /**
     * Get RequestedOffer value
     * @return \ammonkc\otaehi\StructType\RequestedOffer|null
     */
    public function getRequestedOffer()
    {
        return $this->RequestedOffer;
    }
    /**
     * Set RequestedOffer value
     * @param \ammonkc\otaehi\StructType\RequestedOffer $requestedOffer
     * @return \ammonkc\otaehi\StructType\MultiModalOfferType
     */
    public function setRequestedOffer(\ammonkc\otaehi\StructType\RequestedOffer $requestedOffer = null)
    {
        $this->RequestedOffer = $requestedOffer;
        return $this;
    }
    /**
     * Get TripCharacteristics value
     * @return \ammonkc\otaehi\StructType\TripCharacteristics|null
     */
    public function getTripCharacteristics()
    {
        return $this->TripCharacteristics;
    }
    /**
     * Set TripCharacteristics value
     * @param \ammonkc\otaehi\StructType\TripCharacteristics $tripCharacteristics
     * @return \ammonkc\otaehi\StructType\MultiModalOfferType
     */
    public function setTripCharacteristics(\ammonkc\otaehi\StructType\TripCharacteristics $tripCharacteristics = null)
    {
        $this->TripCharacteristics = $tripCharacteristics;
        return $this;
    }
    /**
     * Get TravelerCharacteristics value
     * @return \ammonkc\otaehi\StructType\TravelerCharacteristics|null
     */
    public function getTravelerCharacteristics()
    {
        return $this->TravelerCharacteristics;
    }
    /**
     * Set TravelerCharacteristics value
     * @param \ammonkc\otaehi\StructType\TravelerCharacteristics $travelerCharacteristics
     * @return \ammonkc\otaehi\StructType\MultiModalOfferType
     */
    public function setTravelerCharacteristics(\ammonkc\otaehi\StructType\TravelerCharacteristics $travelerCharacteristics = null)
    {
        $this->TravelerCharacteristics = $travelerCharacteristics;
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
     * @return \ammonkc\otaehi\StructType\MultiModalOfferType
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\MultiModalOfferType
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
