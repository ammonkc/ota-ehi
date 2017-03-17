<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyLocationType StructType
 * @subpackage Structs
 */
class OntologyLocationType extends AbstractStructBase
{
    /**
     * The Type
     * @var \ammonkc\otaehi\StructType\Type
     */
    public $Type;
    /**
     * The GeneralLocation
     * @var \ammonkc\otaehi\StructType\GeneralLocation
     */
    public $GeneralLocation;
    /**
     * The Geocode
     * @var \ammonkc\otaehi\StructType\Geocode
     */
    public $Geocode;
    /**
     * The PhysicalLocation
     * @var \ammonkc\otaehi\StructType\PhysicalLocation
     */
    public $PhysicalLocation;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for OntologyLocationType
     * @uses OntologyLocationType::setType()
     * @uses OntologyLocationType::setGeneralLocation()
     * @uses OntologyLocationType::setGeocode()
     * @uses OntologyLocationType::setPhysicalLocation()
     * @uses OntologyLocationType::setOntologyExtension()
     * @param \ammonkc\otaehi\StructType\Type $type
     * @param \ammonkc\otaehi\StructType\GeneralLocation $generalLocation
     * @param \ammonkc\otaehi\StructType\Geocode $geocode
     * @param \ammonkc\otaehi\StructType\PhysicalLocation $physicalLocation
     * @param mixed $ontologyExtension
     */
    public function __construct(\ammonkc\otaehi\StructType\Type $type = null, \ammonkc\otaehi\StructType\GeneralLocation $generalLocation = null, \ammonkc\otaehi\StructType\Geocode $geocode = null, \ammonkc\otaehi\StructType\PhysicalLocation $physicalLocation = null, $ontologyExtension = null)
    {
        $this
            ->setType($type)
            ->setGeneralLocation($generalLocation)
            ->setGeocode($geocode)
            ->setPhysicalLocation($physicalLocation)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Type value
     * @return \ammonkc\otaehi\StructType\Type|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param \ammonkc\otaehi\StructType\Type $type
     * @return \ammonkc\otaehi\StructType\OntologyLocationType
     */
    public function setType(\ammonkc\otaehi\StructType\Type $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get GeneralLocation value
     * @return \ammonkc\otaehi\StructType\GeneralLocation|null
     */
    public function getGeneralLocation()
    {
        return $this->GeneralLocation;
    }
    /**
     * Set GeneralLocation value
     * @param \ammonkc\otaehi\StructType\GeneralLocation $generalLocation
     * @return \ammonkc\otaehi\StructType\OntologyLocationType
     */
    public function setGeneralLocation(\ammonkc\otaehi\StructType\GeneralLocation $generalLocation = null)
    {
        $this->GeneralLocation = $generalLocation;
        return $this;
    }
    /**
     * Get Geocode value
     * @return \ammonkc\otaehi\StructType\Geocode|null
     */
    public function getGeocode()
    {
        return $this->Geocode;
    }
    /**
     * Set Geocode value
     * @param \ammonkc\otaehi\StructType\Geocode $geocode
     * @return \ammonkc\otaehi\StructType\OntologyLocationType
     */
    public function setGeocode(\ammonkc\otaehi\StructType\Geocode $geocode = null)
    {
        $this->Geocode = $geocode;
        return $this;
    }
    /**
     * Get PhysicalLocation value
     * @return \ammonkc\otaehi\StructType\PhysicalLocation|null
     */
    public function getPhysicalLocation()
    {
        return $this->PhysicalLocation;
    }
    /**
     * Set PhysicalLocation value
     * @param \ammonkc\otaehi\StructType\PhysicalLocation $physicalLocation
     * @return \ammonkc\otaehi\StructType\OntologyLocationType
     */
    public function setPhysicalLocation(\ammonkc\otaehi\StructType\PhysicalLocation $physicalLocation = null)
    {
        $this->PhysicalLocation = $physicalLocation;
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
     * @return \ammonkc\otaehi\StructType\OntologyLocationType
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
     * @return \ammonkc\otaehi\StructType\OntologyLocationType
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
