<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TripCharacteristics StructType
 * @subpackage Structs
 */
class TripCharacteristics extends AbstractStructBase
{
    /**
     * The Mode
     * @var mixed
     */
    public $Mode;
    /**
     * The BookingMethod
     * @var mixed
     */
    public $BookingMethod;
    /**
     * The DateTimeDuration
     * @var \Ammonkc\Otaehi\StructType\DateTimeDuration
     */
    public $DateTimeDuration;
    /**
     * The Location
     * @var \Ammonkc\Otaehi\StructType\Location
     */
    public $Location;
    /**
     * The PriceAndPayment
     * @var mixed
     */
    public $PriceAndPayment;
    /**
     * The ReservationStatus
     * @var mixed
     */
    public $ReservationStatus;
    /**
     * The Baggage
     * @var \Ammonkc\Otaehi\StructType\Baggage
     */
    public $Baggage;
    /**
     * The Animals
     * @var \Ammonkc\Otaehi\StructType\Animals
     */
    public $Animals;
    /**
     * The Activity
     * @var mixed
     */
    public $Activity;
    /**
     * The Lodging
     * @var \Ammonkc\Otaehi\StructType\Lodging
     */
    public $Lodging;
    /**
     * The Transportation
     * @var mixed
     */
    public $Transportation;
    /**
     * The TripValue
     * @var mixed
     */
    public $TripValue;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for TripCharacteristics
     * @uses TripCharacteristics::setMode()
     * @uses TripCharacteristics::setBookingMethod()
     * @uses TripCharacteristics::setDateTimeDuration()
     * @uses TripCharacteristics::setLocation()
     * @uses TripCharacteristics::setPriceAndPayment()
     * @uses TripCharacteristics::setReservationStatus()
     * @uses TripCharacteristics::setBaggage()
     * @uses TripCharacteristics::setAnimals()
     * @uses TripCharacteristics::setActivity()
     * @uses TripCharacteristics::setLodging()
     * @uses TripCharacteristics::setTransportation()
     * @uses TripCharacteristics::setTripValue()
     * @uses TripCharacteristics::setOntologyExtension()
     * @param mixed $mode
     * @param mixed $bookingMethod
     * @param \Ammonkc\Otaehi\StructType\DateTimeDuration $dateTimeDuration
     * @param \Ammonkc\Otaehi\StructType\Location $location
     * @param mixed $priceAndPayment
     * @param mixed $reservationStatus
     * @param \Ammonkc\Otaehi\StructType\Baggage $baggage
     * @param \Ammonkc\Otaehi\StructType\Animals $animals
     * @param mixed $activity
     * @param \Ammonkc\Otaehi\StructType\Lodging $lodging
     * @param mixed $transportation
     * @param mixed $tripValue
     * @param mixed $ontologyExtension
     */
    public function __construct($mode = null, $bookingMethod = null, \Ammonkc\Otaehi\StructType\DateTimeDuration $dateTimeDuration = null, \Ammonkc\Otaehi\StructType\Location $location = null, $priceAndPayment = null, $reservationStatus = null, \Ammonkc\Otaehi\StructType\Baggage $baggage = null, \Ammonkc\Otaehi\StructType\Animals $animals = null, $activity = null, \Ammonkc\Otaehi\StructType\Lodging $lodging = null, $transportation = null, $tripValue = null, $ontologyExtension = null)
    {
        $this
            ->setMode($mode)
            ->setBookingMethod($bookingMethod)
            ->setDateTimeDuration($dateTimeDuration)
            ->setLocation($location)
            ->setPriceAndPayment($priceAndPayment)
            ->setReservationStatus($reservationStatus)
            ->setBaggage($baggage)
            ->setAnimals($animals)
            ->setActivity($activity)
            ->setLodging($lodging)
            ->setTransportation($transportation)
            ->setTripValue($tripValue)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Mode value
     * @return mixed|null
     */
    public function getMode()
    {
        return $this->Mode;
    }
    /**
     * Set Mode value
     * @param mixed $mode
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setMode($mode = null)
    {
        $this->Mode = $mode;
        return $this;
    }
    /**
     * Get BookingMethod value
     * @return mixed|null
     */
    public function getBookingMethod()
    {
        return $this->BookingMethod;
    }
    /**
     * Set BookingMethod value
     * @param mixed $bookingMethod
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setBookingMethod($bookingMethod = null)
    {
        $this->BookingMethod = $bookingMethod;
        return $this;
    }
    /**
     * Get DateTimeDuration value
     * @return \Ammonkc\Otaehi\StructType\DateTimeDuration|null
     */
    public function getDateTimeDuration()
    {
        return $this->DateTimeDuration;
    }
    /**
     * Set DateTimeDuration value
     * @param \Ammonkc\Otaehi\StructType\DateTimeDuration $dateTimeDuration
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setDateTimeDuration(\Ammonkc\Otaehi\StructType\DateTimeDuration $dateTimeDuration = null)
    {
        $this->DateTimeDuration = $dateTimeDuration;
        return $this;
    }
    /**
     * Get Location value
     * @return \Ammonkc\Otaehi\StructType\Location|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \Ammonkc\Otaehi\StructType\Location $location
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setLocation(\Ammonkc\Otaehi\StructType\Location $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get PriceAndPayment value
     * @return mixed|null
     */
    public function getPriceAndPayment()
    {
        return $this->PriceAndPayment;
    }
    /**
     * Set PriceAndPayment value
     * @param mixed $priceAndPayment
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setPriceAndPayment($priceAndPayment = null)
    {
        $this->PriceAndPayment = $priceAndPayment;
        return $this;
    }
    /**
     * Get ReservationStatus value
     * @return mixed|null
     */
    public function getReservationStatus()
    {
        return $this->ReservationStatus;
    }
    /**
     * Set ReservationStatus value
     * @param mixed $reservationStatus
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setReservationStatus($reservationStatus = null)
    {
        $this->ReservationStatus = $reservationStatus;
        return $this;
    }
    /**
     * Get Baggage value
     * @return \Ammonkc\Otaehi\StructType\Baggage|null
     */
    public function getBaggage()
    {
        return $this->Baggage;
    }
    /**
     * Set Baggage value
     * @param \Ammonkc\Otaehi\StructType\Baggage $baggage
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setBaggage(\Ammonkc\Otaehi\StructType\Baggage $baggage = null)
    {
        $this->Baggage = $baggage;
        return $this;
    }
    /**
     * Get Animals value
     * @return \Ammonkc\Otaehi\StructType\Animals|null
     */
    public function getAnimals()
    {
        return $this->Animals;
    }
    /**
     * Set Animals value
     * @param \Ammonkc\Otaehi\StructType\Animals $animals
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setAnimals(\Ammonkc\Otaehi\StructType\Animals $animals = null)
    {
        $this->Animals = $animals;
        return $this;
    }
    /**
     * Get Activity value
     * @return mixed|null
     */
    public function getActivity()
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @param mixed $activity
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setActivity($activity = null)
    {
        $this->Activity = $activity;
        return $this;
    }
    /**
     * Get Lodging value
     * @return \Ammonkc\Otaehi\StructType\Lodging|null
     */
    public function getLodging()
    {
        return $this->Lodging;
    }
    /**
     * Set Lodging value
     * @param \Ammonkc\Otaehi\StructType\Lodging $lodging
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setLodging(\Ammonkc\Otaehi\StructType\Lodging $lodging = null)
    {
        $this->Lodging = $lodging;
        return $this;
    }
    /**
     * Get Transportation value
     * @return mixed|null
     */
    public function getTransportation()
    {
        return $this->Transportation;
    }
    /**
     * Set Transportation value
     * @param mixed $transportation
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setTransportation($transportation = null)
    {
        $this->Transportation = $transportation;
        return $this;
    }
    /**
     * Get TripValue value
     * @return mixed|null
     */
    public function getTripValue()
    {
        return $this->TripValue;
    }
    /**
     * Set TripValue value
     * @param mixed $tripValue
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
     */
    public function setTripValue($tripValue = null)
    {
        $this->TripValue = $tripValue;
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
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
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
     * @return \Ammonkc\Otaehi\StructType\TripCharacteristics
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
