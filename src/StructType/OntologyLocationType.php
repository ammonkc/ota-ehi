<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyLocationType StructType
 * @subpackage Structs
 */
class OntologyLocationType extends AbstractStructBase
{
    /**
     * The Type
     * @var \Ammonkc\Otaehi\StructType\Type
     */
    public $Type;
    /**
     * The GeneralLocation
     * @var \Ammonkc\Otaehi\StructType\GeneralLocation
     */
    public $GeneralLocation;
    /**
     * The Geocode
     * @var \Ammonkc\Otaehi\StructType\Geocode
     */
    public $Geocode;
    /**
     * The PhysicalLocation
     * @var \Ammonkc\Otaehi\StructType\PhysicalLocation
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
     * @param \Ammonkc\Otaehi\StructType\Type $type
     * @param \Ammonkc\Otaehi\StructType\GeneralLocation $generalLocation
     * @param \Ammonkc\Otaehi\StructType\Geocode $geocode
     * @param \Ammonkc\Otaehi\StructType\PhysicalLocation $physicalLocation
     * @param mixed $ontologyExtension
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Type $type = null, \Ammonkc\Otaehi\StructType\GeneralLocation $generalLocation = null, \Ammonkc\Otaehi\StructType\Geocode $geocode = null, \Ammonkc\Otaehi\StructType\PhysicalLocation $physicalLocation = null, $ontologyExtension = null)
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
     * @return \Ammonkc\Otaehi\StructType\Type|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param \Ammonkc\Otaehi\StructType\Type $type
     * @return \Ammonkc\Otaehi\StructType\OntologyLocationType
     */
    public function setType(\Ammonkc\Otaehi\StructType\Type $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get GeneralLocation value
     * @return \Ammonkc\Otaehi\StructType\GeneralLocation|null
     */
    public function getGeneralLocation()
    {
        return $this->GeneralLocation;
    }
    /**
     * Set GeneralLocation value
     * @param \Ammonkc\Otaehi\StructType\GeneralLocation $generalLocation
     * @return \Ammonkc\Otaehi\StructType\OntologyLocationType
     */
    public function setGeneralLocation(\Ammonkc\Otaehi\StructType\GeneralLocation $generalLocation = null)
    {
        $this->GeneralLocation = $generalLocation;
        return $this;
    }
    /**
     * Get Geocode value
     * @return \Ammonkc\Otaehi\StructType\Geocode|null
     */
    public function getGeocode()
    {
        return $this->Geocode;
    }
    /**
     * Set Geocode value
     * @param \Ammonkc\Otaehi\StructType\Geocode $geocode
     * @return \Ammonkc\Otaehi\StructType\OntologyLocationType
     */
    public function setGeocode(\Ammonkc\Otaehi\StructType\Geocode $geocode = null)
    {
        $this->Geocode = $geocode;
        return $this;
    }
    /**
     * Get PhysicalLocation value
     * @return \Ammonkc\Otaehi\StructType\PhysicalLocation|null
     */
    public function getPhysicalLocation()
    {
        return $this->PhysicalLocation;
    }
    /**
     * Set PhysicalLocation value
     * @param \Ammonkc\Otaehi\StructType\PhysicalLocation $physicalLocation
     * @return \Ammonkc\Otaehi\StructType\OntologyLocationType
     */
    public function setPhysicalLocation(\Ammonkc\Otaehi\StructType\PhysicalLocation $physicalLocation = null)
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
     * @return \Ammonkc\Otaehi\StructType\OntologyLocationType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyLocationType
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
