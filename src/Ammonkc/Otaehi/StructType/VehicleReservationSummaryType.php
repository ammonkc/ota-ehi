<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReservationSummaryType StructType
 * @subpackage Structs
 */
class VehicleReservationSummaryType extends AbstractStructBase
{
    /**
     * The ConfID
     * @var \Ammonkc\Otaehi\StructType\ConfID
     */
    public $ConfID;
    /**
     * The PickUpLocation
     * @var mixed
     */
    public $PickUpLocation;
    /**
     * The ReturnLocation
     * @var mixed
     */
    public $ReturnLocation;
    /**
     * The PersonName
     * @var mixed
     */
    public $PersonName;
    /**
     * The Vehicle
     * @var mixed
     */
    public $Vehicle;
    /**
     * The Vendor
     * @var mixed
     */
    public $Vendor;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The PickUpDateTime
     * @var string
     */
    public $PickUpDateTime;
    /**
     * The ReturnDateTime
     * @var string
     */
    public $ReturnDateTime;
    /**
     * The ReservationStatus
     * @var string
     */
    public $ReservationStatus;
    /**
     * Constructor method for VehicleReservationSummaryType
     * @uses VehicleReservationSummaryType::setConfID()
     * @uses VehicleReservationSummaryType::setPickUpLocation()
     * @uses VehicleReservationSummaryType::setReturnLocation()
     * @uses VehicleReservationSummaryType::setPersonName()
     * @uses VehicleReservationSummaryType::setVehicle()
     * @uses VehicleReservationSummaryType::setVendor()
     * @uses VehicleReservationSummaryType::setTPA_Extensions()
     * @uses VehicleReservationSummaryType::setPickUpDateTime()
     * @uses VehicleReservationSummaryType::setReturnDateTime()
     * @uses VehicleReservationSummaryType::setReservationStatus()
     * @param \Ammonkc\Otaehi\StructType\ConfID $confID
     * @param mixed $pickUpLocation
     * @param mixed $returnLocation
     * @param mixed $personName
     * @param mixed $vehicle
     * @param mixed $vendor
     * @param mixed $tPA_Extensions
     * @param string $pickUpDateTime
     * @param string $returnDateTime
     * @param string $reservationStatus
     */
    public function __construct(\Ammonkc\Otaehi\StructType\ConfID $confID = null, $pickUpLocation = null, $returnLocation = null, $personName = null, $vehicle = null, $vendor = null, $tPA_Extensions = null, $pickUpDateTime = null, $returnDateTime = null, $reservationStatus = null)
    {
        $this
            ->setConfID($confID)
            ->setPickUpLocation($pickUpLocation)
            ->setReturnLocation($returnLocation)
            ->setPersonName($personName)
            ->setVehicle($vehicle)
            ->setVendor($vendor)
            ->setTPA_Extensions($tPA_Extensions)
            ->setPickUpDateTime($pickUpDateTime)
            ->setReturnDateTime($returnDateTime)
            ->setReservationStatus($reservationStatus);
    }
    /**
     * Get ConfID value
     * @return \Ammonkc\Otaehi\StructType\ConfID|null
     */
    public function getConfID()
    {
        return $this->ConfID;
    }
    /**
     * Set ConfID value
     * @param \Ammonkc\Otaehi\StructType\ConfID $confID
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
     */
    public function setConfID(\Ammonkc\Otaehi\StructType\ConfID $confID = null)
    {
        $this->ConfID = $confID;
        return $this;
    }
    /**
     * Get PickUpLocation value
     * @return mixed|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param mixed $pickUpLocation
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
     */
    public function setPickUpLocation($pickUpLocation = null)
    {
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return mixed|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param mixed $returnLocation
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
     */
    public function setReturnLocation($returnLocation = null)
    {
        $this->ReturnLocation = $returnLocation;
        return $this;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return mixed|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param mixed $vehicle
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
     */
    public function setVehicle($vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get Vendor value
     * @return mixed|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param mixed $vendor
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
     */
    public function setVendor($vendor = null)
    {
        $this->Vendor = $vendor;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get PickUpDateTime value
     * @return string|null
     */
    public function getPickUpDateTime()
    {
        return $this->PickUpDateTime;
    }
    /**
     * Set PickUpDateTime value
     * @param string $pickUpDateTime
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
     */
    public function setPickUpDateTime($pickUpDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickUpDateTime) && !is_string($pickUpDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickUpDateTime)), __LINE__);
        }
        $this->PickUpDateTime = $pickUpDateTime;
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return string|null
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
     */
    public function setReturnDateTime($returnDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDateTime)), __LINE__);
        }
        $this->ReturnDateTime = $returnDateTime;
        return $this;
    }
    /**
     * Get ReservationStatus value
     * @return string|null
     */
    public function getReservationStatus()
    {
        return $this->ReservationStatus;
    }
    /**
     * Set ReservationStatus value
     * @param string $reservationStatus
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
     */
    public function setReservationStatus($reservationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($reservationStatus) && !is_string($reservationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservationStatus)), __LINE__);
        }
        $this->ReservationStatus = $reservationStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationSummaryType
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
