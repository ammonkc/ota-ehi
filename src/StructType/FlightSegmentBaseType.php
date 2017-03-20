<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSegmentBaseType StructType
 * @subpackage Structs
 */
class FlightSegmentBaseType extends AbstractStructBase
{
    /**
     * The DepartureAirport
     * @var \Ammonkc\Otaehi\StructType\DepartureAirport
     */
    public $DepartureAirport;
    /**
     * The ArrivalAirport
     * @var \Ammonkc\Otaehi\StructType\ArrivalAirport
     */
    public $ArrivalAirport;
    /**
     * The OperatingAirline
     * @var mixed
     */
    public $OperatingAirline;
    /**
     * The Equipment
     * @var mixed
     */
    public $Equipment;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The DepartureDateTime
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The ArrivalDateTime
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * The StopQuantity
     * @var int
     */
    public $StopQuantity;
    /**
     * The RPH
     * @var
     */
    public $RPH;
    /**
     * The InfoSource
     * @var
     */
    public $InfoSource;
    /**
     * Constructor method for FlightSegmentBaseType
     * @uses FlightSegmentBaseType::setDepartureAirport()
     * @uses FlightSegmentBaseType::setArrivalAirport()
     * @uses FlightSegmentBaseType::setOperatingAirline()
     * @uses FlightSegmentBaseType::setEquipment()
     * @uses FlightSegmentBaseType::setTPA_Extensions()
     * @uses FlightSegmentBaseType::setDepartureDateTime()
     * @uses FlightSegmentBaseType::setArrivalDateTime()
     * @uses FlightSegmentBaseType::setStopQuantity()
     * @uses FlightSegmentBaseType::setRPH()
     * @uses FlightSegmentBaseType::setInfoSource()
     * @param \Ammonkc\Otaehi\StructType\DepartureAirport $departureAirport
     * @param \Ammonkc\Otaehi\StructType\ArrivalAirport $arrivalAirport
     * @param mixed $operatingAirline
     * @param mixed $equipment
     * @param mixed $tPA_Extensions
     * @param string $departureDateTime
     * @param string $arrivalDateTime
     * @param int $stopQuantity
     * @param  $rPH
     * @param  $infoSource
     */
    public function __construct(\Ammonkc\Otaehi\StructType\DepartureAirport $departureAirport = null, \Ammonkc\Otaehi\StructType\ArrivalAirport $arrivalAirport = null, $operatingAirline = null, $equipment = null, $tPA_Extensions = null, $departureDateTime = null, $arrivalDateTime = null, $stopQuantity = null,  $rPH = null,  $infoSource = null)
    {
        $this
            ->setDepartureAirport($departureAirport)
            ->setArrivalAirport($arrivalAirport)
            ->setOperatingAirline($operatingAirline)
            ->setEquipment($equipment)
            ->setTPA_Extensions($tPA_Extensions)
            ->setDepartureDateTime($departureDateTime)
            ->setArrivalDateTime($arrivalDateTime)
            ->setStopQuantity($stopQuantity)
            ->setRPH($rPH)
            ->setInfoSource($infoSource);
    }
    /**
     * Get DepartureAirport value
     * @return \Ammonkc\Otaehi\StructType\DepartureAirport|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param \Ammonkc\Otaehi\StructType\DepartureAirport $departureAirport
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
     */
    public function setDepartureAirport(\Ammonkc\Otaehi\StructType\DepartureAirport $departureAirport = null)
    {
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get ArrivalAirport value
     * @return \Ammonkc\Otaehi\StructType\ArrivalAirport|null
     */
    public function getArrivalAirport()
    {
        return $this->ArrivalAirport;
    }
    /**
     * Set ArrivalAirport value
     * @param \Ammonkc\Otaehi\StructType\ArrivalAirport $arrivalAirport
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
     */
    public function setArrivalAirport(\Ammonkc\Otaehi\StructType\ArrivalAirport $arrivalAirport = null)
    {
        $this->ArrivalAirport = $arrivalAirport;
        return $this;
    }
    /**
     * Get OperatingAirline value
     * @return mixed|null
     */
    public function getOperatingAirline()
    {
        return $this->OperatingAirline;
    }
    /**
     * Set OperatingAirline value
     * @param mixed $operatingAirline
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
     */
    public function setOperatingAirline($operatingAirline = null)
    {
        $this->OperatingAirline = $operatingAirline;
        return $this;
    }
    /**
     * Get Equipment value
     * @return mixed|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param mixed $equipment
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
     */
    public function setEquipment($equipment = null)
    {
        $this->Equipment = $equipment;
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
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get DepartureDateTime value
     * @return string|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param string $departureDateTime
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
     */
    public function setDepartureDateTime($departureDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureDateTime) && !is_string($departureDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDateTime)), __LINE__);
        }
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param string $arrivalDateTime
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDateTime) && !is_string($arrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDateTime)), __LINE__);
        }
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Get StopQuantity value
     * @return int|null
     */
    public function getStopQuantity()
    {
        return $this->StopQuantity;
    }
    /**
     * Set StopQuantity value
     * @param int $stopQuantity
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
     */
    public function setStopQuantity($stopQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($stopQuantity) && !is_numeric($stopQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($stopQuantity)), __LINE__);
        }
        $this->StopQuantity = $stopQuantity;
        return $this;
    }
    /**
     * Get RPH value
     * @return |null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param  $rPH
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
     */
    public function setRPH( $rPH = null)
    {
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get InfoSource value
     * @return |null
     */
    public function getInfoSource()
    {
        return $this->InfoSource;
    }
    /**
     * Set InfoSource value
     * @param  $infoSource
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
     */
    public function setInfoSource( $infoSource = null)
    {
        $this->InfoSource = $infoSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\FlightSegmentBaseType
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
