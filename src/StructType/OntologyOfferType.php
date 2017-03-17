<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyOfferType StructType
 * @subpackage Structs
 */
class OntologyOfferType extends AbstractStructBase
{
    /**
     * The Offer
     * @var \Ammonkc\Otaehi\StructType\Offer
     */
    public $Offer;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The AllOffersInd
     * @var bool
     */
    public $AllOffersInd;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for OntologyOfferType
     * @uses OntologyOfferType::setOffer()
     * @uses OntologyOfferType::setOntologyExtension()
     * @uses OntologyOfferType::setAllOffersInd()
     * @uses OntologyOfferType::setOntologyRefID()
     * @param \Ammonkc\Otaehi\StructType\Offer $offer
     * @param mixed $ontologyExtension
     * @param bool $allOffersInd
     * @param string $ontologyRefID
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Offer $offer = null, $ontologyExtension = null, $allOffersInd = null, $ontologyRefID = null)
    {
        $this
            ->setOffer($offer)
            ->setOntologyExtension($ontologyExtension)
            ->setAllOffersInd($allOffersInd)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get Offer value
     * @return \Ammonkc\Otaehi\StructType\Offer|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \Ammonkc\Otaehi\StructType\Offer $offer
     * @return \Ammonkc\Otaehi\StructType\OntologyOfferType
     */
    public function setOffer(\Ammonkc\Otaehi\StructType\Offer $offer = null)
    {
        $this->Offer = $offer;
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
     * @return \Ammonkc\Otaehi\StructType\OntologyOfferType
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get AllOffersInd value
     * @return bool|null
     */
    public function getAllOffersInd()
    {
        return $this->AllOffersInd;
    }
    /**
     * Set AllOffersInd value
     * @param bool $allOffersInd
     * @return \Ammonkc\Otaehi\StructType\OntologyOfferType
     */
    public function setAllOffersInd($allOffersInd = null)
    {
        $this->AllOffersInd = $allOffersInd;
        return $this;
    }
    /**
     * Get OntologyRefID value
     * @return string|null
     */
    public function getOntologyRefID()
    {
        return $this->OntologyRefID;
    }
    /**
     * Set OntologyRefID value
     * @param string $ontologyRefID
     * @return \Ammonkc\Otaehi\StructType\OntologyOfferType
     */
    public function setOntologyRefID($ontologyRefID = null)
    {
        // validation for constraint: string
        if (!is_null($ontologyRefID) && !is_string($ontologyRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ontologyRefID)), __LINE__);
        }
        $this->OntologyRefID = $ontologyRefID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OntologyOfferType
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
