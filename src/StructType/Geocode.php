<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Geocode StructType
 * @subpackage Structs
 */
class Geocode extends AbstractStructBase
{
    /**
     * The Latitude
     * @var Latitude
     */
    public $Latitude;
    /**
     * The Longitude
     * @var Longitude
     */
    public $Longitude;
    /**
     * The UniversalAddress
     * @var \ammonkc\otaehi\StructType\UniversalAddress
     */
    public $UniversalAddress;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for Geocode
     * @uses Geocode::setLatitude()
     * @uses Geocode::setLongitude()
     * @uses Geocode::setUniversalAddress()
     * @uses Geocode::setOntologyExtension()
     * @uses Geocode::setOntologyRefID()
     * @param Latitude $latitude
     * @param Longitude $longitude
     * @param \ammonkc\otaehi\StructType\UniversalAddress $universalAddress
     * @param mixed $ontologyExtension
     * @param string $ontologyRefID
     */
    public function __construct(Latitude $latitude = null, Longitude $longitude = null, \ammonkc\otaehi\StructType\UniversalAddress $universalAddress = null, $ontologyExtension = null, $ontologyRefID = null)
    {
        $this
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setUniversalAddress($universalAddress)
            ->setOntologyExtension($ontologyExtension)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get Latitude value
     * @return Latitude|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param Latitude $latitude
     * @return \ammonkc\otaehi\StructType\Geocode
     */
    public function setLatitude(Latitude $latitude = null)
    {
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Get Longitude value
     * @return Longitude|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param Longitude $longitude
     * @return \ammonkc\otaehi\StructType\Geocode
     */
    public function setLongitude(Longitude $longitude = null)
    {
        $this->Longitude = $longitude;
        return $this;
    }
    /**
     * Get UniversalAddress value
     * @return \ammonkc\otaehi\StructType\UniversalAddress|null
     */
    public function getUniversalAddress()
    {
        return $this->UniversalAddress;
    }
    /**
     * Set UniversalAddress value
     * @param \ammonkc\otaehi\StructType\UniversalAddress $universalAddress
     * @return \ammonkc\otaehi\StructType\Geocode
     */
    public function setUniversalAddress(\ammonkc\otaehi\StructType\UniversalAddress $universalAddress = null)
    {
        $this->UniversalAddress = $universalAddress;
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
     * @return \ammonkc\otaehi\StructType\Geocode
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
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
     * @return \ammonkc\otaehi\StructType\Geocode
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
     * @return \ammonkc\otaehi\StructType\Geocode
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
