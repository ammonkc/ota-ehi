<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocationServiceType StructType
 * @subpackage Structs
 */
class OffLocationServiceType extends AbstractStructBase
{
    /**
     * The PersonName
     * @var mixed
     */
    public $PersonName;
    /**
     * The Telephone
     * @var \ammonkc\otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The TrackingID
     * @var mixed
     */
    public $TrackingID;
    /**
     * The SpecInstructions
     * @var UNKNOWN
     */
    public $SpecInstructions;
    /**
     * Constructor method for OffLocationServiceType
     * @uses OffLocationServiceType::setPersonName()
     * @uses OffLocationServiceType::setTelephone()
     * @uses OffLocationServiceType::setTrackingID()
     * @uses OffLocationServiceType::setSpecInstructions()
     * @param mixed $personName
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @param mixed $trackingID
     * @param UNKNOWN $specInstructions
     */
    public function __construct($personName = null, \ammonkc\otaehi\StructType\Telephone $telephone = null, $trackingID = null, UNKNOWN $specInstructions = null)
    {
        $this
            ->setPersonName($personName)
            ->setTelephone($telephone)
            ->setTrackingID($trackingID)
            ->setSpecInstructions($specInstructions);
    }
    /**
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \ammonkc\otaehi\StructType\OffLocationServiceType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \ammonkc\otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @return \ammonkc\otaehi\StructType\OffLocationServiceType
     */
    public function setTelephone(\ammonkc\otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get TrackingID value
     * @return mixed|null
     */
    public function getTrackingID()
    {
        return $this->TrackingID;
    }
    /**
     * Set TrackingID value
     * @param mixed $trackingID
     * @return \ammonkc\otaehi\StructType\OffLocationServiceType
     */
    public function setTrackingID($trackingID = null)
    {
        $this->TrackingID = $trackingID;
        return $this;
    }
    /**
     * Get SpecInstructions value
     * @return UNKNOWN|null
     */
    public function getSpecInstructions()
    {
        return $this->SpecInstructions;
    }
    /**
     * Set SpecInstructions value
     * @param UNKNOWN $specInstructions
     * @return \ammonkc\otaehi\StructType\OffLocationServiceType
     */
    public function setSpecInstructions(UNKNOWN $specInstructions = null)
    {
        $this->SpecInstructions = $specInstructions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OffLocationServiceType
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
