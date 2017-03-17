<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperatingAirlineType StructType
 * @subpackage Structs
 */
class OperatingAirlineType extends AbstractStructBase
{
    /**
     * The FlightNumber
     * @var UNKNOWN
     */
    public $FlightNumber;
    /**
     * The ResBookDesigCode
     * @var UNKNOWN
     */
    public $ResBookDesigCode;
    /**
     * The MarketingInd
     * @var bool
     */
    public $MarketingInd;
    /**
     * The BookedRBD
     * @var UNKNOWN
     */
    public $BookedRBD;
    /**
     * The TicketedRBD
     * @var UNKNOWN
     */
    public $TicketedRBD;
    /**
     * The FrequentFlierMiles
     * @var UNKNOWN
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
     * @param UNKNOWN $flightNumber
     * @param UNKNOWN $resBookDesigCode
     * @param bool $marketingInd
     * @param UNKNOWN $bookedRBD
     * @param UNKNOWN $ticketedRBD
     * @param UNKNOWN $frequentFlierMiles
     */
    public function __construct(UNKNOWN $flightNumber = null, UNKNOWN $resBookDesigCode = null, $marketingInd = null, UNKNOWN $bookedRBD = null, UNKNOWN $ticketedRBD = null, UNKNOWN $frequentFlierMiles = null)
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
     * @return UNKNOWN|null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param UNKNOWN $flightNumber
     * @return \ammonkc\otaehi\StructType\OperatingAirlineType
     */
    public function setFlightNumber(UNKNOWN $flightNumber = null)
    {
        $this->FlightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get ResBookDesigCode value
     * @return UNKNOWN|null
     */
    public function getResBookDesigCode()
    {
        return $this->ResBookDesigCode;
    }
    /**
     * Set ResBookDesigCode value
     * @param UNKNOWN $resBookDesigCode
     * @return \ammonkc\otaehi\StructType\OperatingAirlineType
     */
    public function setResBookDesigCode(UNKNOWN $resBookDesigCode = null)
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
     * @return \ammonkc\otaehi\StructType\OperatingAirlineType
     */
    public function setMarketingInd($marketingInd = null)
    {
        $this->MarketingInd = $marketingInd;
        return $this;
    }
    /**
     * Get BookedRBD value
     * @return UNKNOWN|null
     */
    public function getBookedRBD()
    {
        return $this->BookedRBD;
    }
    /**
     * Set BookedRBD value
     * @param UNKNOWN $bookedRBD
     * @return \ammonkc\otaehi\StructType\OperatingAirlineType
     */
    public function setBookedRBD(UNKNOWN $bookedRBD = null)
    {
        $this->BookedRBD = $bookedRBD;
        return $this;
    }
    /**
     * Get TicketedRBD value
     * @return UNKNOWN|null
     */
    public function getTicketedRBD()
    {
        return $this->TicketedRBD;
    }
    /**
     * Set TicketedRBD value
     * @param UNKNOWN $ticketedRBD
     * @return \ammonkc\otaehi\StructType\OperatingAirlineType
     */
    public function setTicketedRBD(UNKNOWN $ticketedRBD = null)
    {
        $this->TicketedRBD = $ticketedRBD;
        return $this;
    }
    /**
     * Get FrequentFlierMiles value
     * @return UNKNOWN|null
     */
    public function getFrequentFlierMiles()
    {
        return $this->FrequentFlierMiles;
    }
    /**
     * Set FrequentFlierMiles value
     * @param UNKNOWN $frequentFlierMiles
     * @return \ammonkc\otaehi\StructType\OperatingAirlineType
     */
    public function setFrequentFlierMiles(UNKNOWN $frequentFlierMiles = null)
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
     * @return \ammonkc\otaehi\StructType\OperatingAirlineType
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
