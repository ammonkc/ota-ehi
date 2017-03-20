<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperatingAirlineType StructType
 * @subpackage Structs
 */
class OperatingAirlineType extends AbstractStructBase
{
    /**
     * The FlightNumber
     * @var
     */
    public $FlightNumber;
    /**
     * The ResBookDesigCode
     * @var
     */
    public $ResBookDesigCode;
    /**
     * The MarketingInd
     * @var bool
     */
    public $MarketingInd;
    /**
     * The BookedRBD
     * @var
     */
    public $BookedRBD;
    /**
     * The TicketedRBD
     * @var
     */
    public $TicketedRBD;
    /**
     * The FrequentFlierMiles
     * @var
     */
    public $FrequentFlierMiles;
    /**
     * Constructor method for OperatingAirlineType
     * @uses OperatingAirlineType::setFlightNumber()
     * @uses OperatingAirlineType::setResBookDesigCode()
     * @uses OperatingAirlineType::setMarketingInd()
     * @uses OperatingAirlineType::setBookedRBD()
     * @uses OperatingAirlineType::setTicketedRBD()
     * @uses OperatingAirlineType::setFrequentFlierMiles()
     * @param  $flightNumber
     * @param  $resBookDesigCode
     * @param bool $marketingInd
     * @param  $bookedRBD
     * @param  $ticketedRBD
     * @param  $frequentFlierMiles
     */
    public function __construct( $flightNumber = null,  $resBookDesigCode = null, $marketingInd = null,  $bookedRBD = null,  $ticketedRBD = null,  $frequentFlierMiles = null)
    {
        $this
            ->setFlightNumber($flightNumber)
            ->setResBookDesigCode($resBookDesigCode)
            ->setMarketingInd($marketingInd)
            ->setBookedRBD($bookedRBD)
            ->setTicketedRBD($ticketedRBD)
            ->setFrequentFlierMiles($frequentFlierMiles);
    }
    /**
     * Get FlightNumber value
     * @return |null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param  $flightNumber
     * @return \Ammonkc\Otaehi\StructType\OperatingAirlineType
     */
    public function setFlightNumber( $flightNumber = null)
    {
        $this->FlightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get ResBookDesigCode value
     * @return |null
     */
    public function getResBookDesigCode()
    {
        return $this->ResBookDesigCode;
    }
    /**
     * Set ResBookDesigCode value
     * @param  $resBookDesigCode
     * @return \Ammonkc\Otaehi\StructType\OperatingAirlineType
     */
    public function setResBookDesigCode( $resBookDesigCode = null)
    {
        $this->ResBookDesigCode = $resBookDesigCode;
        return $this;
    }
    /**
     * Get MarketingInd value
     * @return bool|null
     */
    public function getMarketingInd()
    {
        return $this->MarketingInd;
    }
    /**
     * Set MarketingInd value
     * @param bool $marketingInd
     * @return \Ammonkc\Otaehi\StructType\OperatingAirlineType
     */
    public function setMarketingInd($marketingInd = null)
    {
        $this->MarketingInd = $marketingInd;
        return $this;
    }
    /**
     * Get BookedRBD value
     * @return |null
     */
    public function getBookedRBD()
    {
        return $this->BookedRBD;
    }
    /**
     * Set BookedRBD value
     * @param  $bookedRBD
     * @return \Ammonkc\Otaehi\StructType\OperatingAirlineType
     */
    public function setBookedRBD( $bookedRBD = null)
    {
        $this->BookedRBD = $bookedRBD;
        return $this;
    }
    /**
     * Get TicketedRBD value
     * @return |null
     */
    public function getTicketedRBD()
    {
        return $this->TicketedRBD;
    }
    /**
     * Set TicketedRBD value
     * @param  $ticketedRBD
     * @return \Ammonkc\Otaehi\StructType\OperatingAirlineType
     */
    public function setTicketedRBD( $ticketedRBD = null)
    {
        $this->TicketedRBD = $ticketedRBD;
        return $this;
    }
    /**
     * Get FrequentFlierMiles value
     * @return |null
     */
    public function getFrequentFlierMiles()
    {
        return $this->FrequentFlierMiles;
    }
    /**
     * Set FrequentFlierMiles value
     * @param  $frequentFlierMiles
     * @return \Ammonkc\Otaehi\StructType\OperatingAirlineType
     */
    public function setFrequentFlierMiles( $frequentFlierMiles = null)
    {
        $this->FrequentFlierMiles = $frequentFlierMiles;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OperatingAirlineType
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
