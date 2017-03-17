<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiModalOfferType StructType
 * @subpackage Structs
 */
class MultiModalOfferType extends AbstractStructBase
{
    /**
     * The RequestingParty
     * @var \Ammonkc\Otaehi\StructType\RequestingParty
     */
    public $RequestingParty;
    /**
     * The Ontology
     * @var \Ammonkc\Otaehi\StructType\Ontology
     */
    public $Ontology;
    /**
     * The RequestedOffer
     * @var \Ammonkc\Otaehi\StructType\RequestedOffer
     */
    public $RequestedOffer;
    /**
     * The TripCharacteristics
     * @var \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public $TripCharacteristics;
    /**
     * The TravelerCharacteristics
     * @var \Ammonkc\Otaehi\StructType\TravelerCharacteristics
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
     * @param \Ammonkc\Otaehi\StructType\RequestingParty $requestingParty
     * @param \Ammonkc\Otaehi\StructType\Ontology $ontology
     * @param \Ammonkc\Otaehi\StructType\RequestedOffer $requestedOffer
     * @param \Ammonkc\Otaehi\StructType\TripCharacteristics $tripCharacteristics
     * @param \Ammonkc\Otaehi\StructType\TravelerCharacteristics $travelerCharacteristics
     * @param mixed $ontologyExtension
     */
    public function __construct(\Ammonkc\Otaehi\StructType\RequestingParty $requestingParty = null, \Ammonkc\Otaehi\StructType\Ontology $ontology = null, \Ammonkc\Otaehi\StructType\RequestedOffer $requestedOffer = null, \Ammonkc\Otaehi\StructType\TripCharacteristics $tripCharacteristics = null, \Ammonkc\Otaehi\StructType\TravelerCharacteristics $travelerCharacteristics = null, $ontologyExtension = null)
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
     * @return \Ammonkc\Otaehi\StructType\RequestingParty|null
     */
    public function getRequestingParty()
    {
        return $this->RequestingParty;
    }
    /**
     * Set RequestingParty value
     * @param \Ammonkc\Otaehi\StructType\RequestingParty $requestingParty
     * @return \Ammonkc\Otaehi\StructType\MultiModalOfferType
     */
    public function setRequestingParty(\Ammonkc\Otaehi\StructType\RequestingParty $requestingParty = null)
    {
        $this->RequestingParty = $requestingParty;
        return $this;
    }
    /**
     * Get Ontology value
     * @return \Ammonkc\Otaehi\StructType\Ontology|null
     */
    public function getOntology()
    {
        return $this->Ontology;
    }
    /**
     * Set Ontology value
     * @param \Ammonkc\Otaehi\StructType\Ontology $ontology
     * @return \Ammonkc\Otaehi\StructType\MultiModalOfferType
     */
    public function setOntology(\Ammonkc\Otaehi\StructType\Ontology $ontology = null)
    {
        $this->Ontology = $ontology;
        return $this;
    }
    /**
     * Get RequestedOffer value
     * @return \Ammonkc\Otaehi\StructType\RequestedOffer|null
     */
    public function getRequestedOffer()
    {
        return $this->RequestedOffer;
    }
    /**
     * Set RequestedOffer value
     * @param \Ammonkc\Otaehi\StructType\RequestedOffer $requestedOffer
     * @return \Ammonkc\Otaehi\StructType\MultiModalOfferType
     */
    public function setRequestedOffer(\Ammonkc\Otaehi\StructType\RequestedOffer $requestedOffer = null)
    {
        $this->RequestedOffer = $requestedOffer;
        return $this;
    }
    /**
     * Get TripCharacteristics value
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics|null
     */
    public function getTripCharacteristics()
    {
        return $this->TripCharacteristics;
    }
    /**
     * Set TripCharacteristics value
     * @param \Ammonkc\Otaehi\StructType\TripCharacteristics $tripCharacteristics
     * @return \Ammonkc\Otaehi\StructType\MultiModalOfferType
     */
    public function setTripCharacteristics(\Ammonkc\Otaehi\StructType\TripCharacteristics $tripCharacteristics = null)
    {
        $this->TripCharacteristics = $tripCharacteristics;
        return $this;
    }
    /**
     * Get TravelerCharacteristics value
     * @return \Ammonkc\Otaehi\StructType\TravelerCharacteristics|null
     */
    public function getTravelerCharacteristics()
    {
        return $this->TravelerCharacteristics;
    }
    /**
     * Set TravelerCharacteristics value
     * @param \Ammonkc\Otaehi\StructType\TravelerCharacteristics $travelerCharacteristics
     * @return \Ammonkc\Otaehi\StructType\MultiModalOfferType
     */
    public function setTravelerCharacteristics(\Ammonkc\Otaehi\StructType\TravelerCharacteristics $travelerCharacteristics = null)
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
     * @return \Ammonkc\Otaehi\StructType\MultiModalOfferType
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
     * @return \Ammonkc\Otaehi\StructType\MultiModalOfferType
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
