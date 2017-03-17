<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyCompanyType StructType
 * @subpackage Structs
 */
class OntologyCompanyType extends AbstractStructBase
{
    /**
     * The NameOrCode
     * @var mixed
     */
    public $NameOrCode;
    /**
     * The TravelSegment
     * @var \ammonkc\otaehi\StructType\TravelSegment
     */
    public $TravelSegment;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for OntologyCompanyType
     * @uses OntologyCompanyType::setNameOrCode()
     * @uses OntologyCompanyType::setTravelSegment()
     * @uses OntologyCompanyType::setOntologyExtension()
     * @param mixed $nameOrCode
     * @param \ammonkc\otaehi\StructType\TravelSegment $travelSegment
     * @param mixed $ontologyExtension
     */
    public function __construct($nameOrCode = null, \ammonkc\otaehi\StructType\TravelSegment $travelSegment = null, $ontologyExtension = null)
    {
        $this
            ->setNameOrCode($nameOrCode)
            ->setTravelSegment($travelSegment)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get NameOrCode value
     * @return mixed|null
     */
    public function getNameOrCode()
    {
        return $this->NameOrCode;
    }
    /**
     * Set NameOrCode value
     * @param mixed $nameOrCode
     * @return \ammonkc\otaehi\StructType\OntologyCompanyType
     */
    public function setNameOrCode($nameOrCode = null)
    {
        $this->NameOrCode = $nameOrCode;
        return $this;
    }
    /**
     * Get TravelSegment value
     * @return \ammonkc\otaehi\StructType\TravelSegment|null
     */
    public function getTravelSegment()
    {
        return $this->TravelSegment;
    }
    /**
     * Set TravelSegment value
     * @param \ammonkc\otaehi\StructType\TravelSegment $travelSegment
     * @return \ammonkc\otaehi\StructType\OntologyCompanyType
     */
    public function setTravelSegment(\ammonkc\otaehi\StructType\TravelSegment $travelSegment = null)
    {
        $this->TravelSegment = $travelSegment;
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
     * @return \ammonkc\otaehi\StructType\OntologyCompanyType
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
     * @return \ammonkc\otaehi\StructType\OntologyCompanyType
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
