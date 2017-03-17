<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleModifyRSCoreType StructType
 * @subpackage Structs
 */
class VehicleModifyRSCoreType extends AbstractStructBase
{
    /**
     * The VehReservation
     * @var \Ammonkc\Otaehi\StructType\VehicleReservationType
     */
    public $VehReservation;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleModifyRSCoreType
     * @uses VehicleModifyRSCoreType::setVehReservation()
     * @uses VehicleModifyRSCoreType::setTPA_Extensions()
     * @param \Ammonkc\Otaehi\StructType\VehicleReservationType $vehReservation
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehicleReservationType $vehReservation = null, $tPA_Extensions = null)
    {
        $this
            ->setVehReservation($vehReservation)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get VehReservation value
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationType|null
     */
    public function getVehReservation()
    {
        return $this->VehReservation;
    }
    /**
     * Set VehReservation value
     * @param \Ammonkc\Otaehi\StructType\VehicleReservationType $vehReservation
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRSCoreType
     */
    public function setVehReservation(\Ammonkc\Otaehi\StructType\VehicleReservationType $vehReservation = null)
    {
        $this->VehReservation = $vehReservation;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRSCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRSCoreType
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
