<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationLiabilitiesType StructType
 * @subpackage Structs
 */
class VehicleLocationLiabilitiesType extends AbstractStructBase
{
    /**
     * The Coverages
     * @var \Ammonkc\Otaehi\StructType\Coverages
     */
    public $Coverages;
    /**
     * The Info
     * @var mixed
     */
    public $Info;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleLocationLiabilitiesType
     * @uses VehicleLocationLiabilitiesType::setCoverages()
     * @uses VehicleLocationLiabilitiesType::setInfo()
     * @uses VehicleLocationLiabilitiesType::setTPA_Extensions()
     * @param \Ammonkc\Otaehi\StructType\Coverages $coverages
     * @param mixed $info
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Coverages $coverages = null, $info = null, $tPA_Extensions = null)
    {
        $this
            ->setCoverages($coverages)
            ->setInfo($info)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get Coverages value
     * @return \Ammonkc\Otaehi\StructType\Coverages|null
     */
    public function getCoverages()
    {
        return $this->Coverages;
    }
    /**
     * Set Coverages value
     * @param \Ammonkc\Otaehi\StructType\Coverages $coverages
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationLiabilitiesType
     */
    public function setCoverages(\Ammonkc\Otaehi\StructType\Coverages $coverages = null)
    {
        $this->Coverages = $coverages;
        return $this;
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationLiabilitiesType
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationLiabilitiesType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationLiabilitiesType
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
