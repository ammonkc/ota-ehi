<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerCharacteristics StructType
 * @subpackage Structs
 */
class TravelerCharacteristics extends AbstractStructBase
{
    /**
     * The TripPurpose
     * @var mixed
     */
    public $TripPurpose;
    /**
     * The Classification
     * @var \Ammonkc\Otaehi\StructType\Classification
     */
    public $Classification;
    /**
     * The DetailInfo
     * @var \Ammonkc\Otaehi\StructType\DetailInfo
     */
    public $DetailInfo;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for TravelerCharacteristics
     * @uses TravelerCharacteristics::setTripPurpose()
     * @uses TravelerCharacteristics::setClassification()
     * @uses TravelerCharacteristics::setDetailInfo()
     * @uses TravelerCharacteristics::setOntologyExtension()
     * @param mixed $tripPurpose
     * @param \Ammonkc\Otaehi\StructType\Classification $classification
     * @param \Ammonkc\Otaehi\StructType\DetailInfo $detailInfo
     * @param mixed $ontologyExtension
     */
    public function __construct($tripPurpose = null, \Ammonkc\Otaehi\StructType\Classification $classification = null, \Ammonkc\Otaehi\StructType\DetailInfo $detailInfo = null, $ontologyExtension = null)
    {
        $this
            ->setTripPurpose($tripPurpose)
            ->setClassification($classification)
            ->setDetailInfo($detailInfo)
            ->setOntologyExtension($ontologyExtension);
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
     * @return \Ammonkc\Otaehi\StructType\TravelerCharacteristics
     */
    public function setTripPurpose($tripPurpose = null)
    {
        $this->TripPurpose = $tripPurpose;
        return $this;
    }
    /**
     * Get Classification value
     * @return \Ammonkc\Otaehi\StructType\Classification|null
     */
    public function getClassification()
    {
        return $this->Classification;
    }
    /**
     * Set Classification value
     * @param \Ammonkc\Otaehi\StructType\Classification $classification
     * @return \Ammonkc\Otaehi\StructType\TravelerCharacteristics
     */
    public function setClassification(\Ammonkc\Otaehi\StructType\Classification $classification = null)
    {
        $this->Classification = $classification;
        return $this;
    }
    /**
     * Get DetailInfo value
     * @return \Ammonkc\Otaehi\StructType\DetailInfo|null
     */
    public function getDetailInfo()
    {
        return $this->DetailInfo;
    }
    /**
     * Set DetailInfo value
     * @param \Ammonkc\Otaehi\StructType\DetailInfo $detailInfo
     * @return \Ammonkc\Otaehi\StructType\TravelerCharacteristics
     */
    public function setDetailInfo(\Ammonkc\Otaehi\StructType\DetailInfo $detailInfo = null)
    {
        $this->DetailInfo = $detailInfo;
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
     * @return \Ammonkc\Otaehi\StructType\TravelerCharacteristics
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
     * @return \Ammonkc\Otaehi\StructType\TravelerCharacteristics
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
