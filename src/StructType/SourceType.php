<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SourceType StructType
 * @subpackage Structs
 */
class SourceType extends AbstractStructBase
{
    /**
     * The RequestorID
     * @var \Ammonkc\Otaehi\StructType\RequestorID
     */
    public $RequestorID;
    /**
     * The Position
     * @var \Ammonkc\Otaehi\StructType\Position
     */
    public $Position;
    /**
     * The BookingChannel
     * @var \Ammonkc\Otaehi\StructType\BookingChannel
     */
    public $BookingChannel;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The AgentSine
     * @var UNKNOWN
     */
    public $AgentSine;
    /**
     * The PseudoCityCode
     * @var UNKNOWN
     */
    public $PseudoCityCode;
    /**
     * The ISOCountry
     * @var UNKNOWN
     */
    public $ISOCountry;
    /**
     * The ISOCurrency
     * @var UNKNOWN
     */
    public $ISOCurrency;
    /**
     * The AgentDutyCode
     * @var UNKNOWN
     */
    public $AgentDutyCode;
    /**
     * The AirlineVendorID
     * @var UNKNOWN
     */
    public $AirlineVendorID;
    /**
     * The AirportCode
     * @var UNKNOWN
     */
    public $AirportCode;
    /**
     * The FirstDepartPoint
     * @var UNKNOWN
     */
    public $FirstDepartPoint;
    /**
     * The ERSP_UserID
     * @var UNKNOWN
     */
    public $ERSP_UserID;
    /**
     * The TerminalID
     * @var UNKNOWN
     */
    public $TerminalID;
    /**
     * Constructor method for SourceType
     * @uses SourceType::setRequestorID()
     * @uses SourceType::setPosition()
     * @uses SourceType::setBookingChannel()
     * @uses SourceType::setTPA_Extensions()
     * @uses SourceType::setAgentSine()
     * @uses SourceType::setPseudoCityCode()
     * @uses SourceType::setISOCountry()
     * @uses SourceType::setISOCurrency()
     * @uses SourceType::setAgentDutyCode()
     * @uses SourceType::setAirlineVendorID()
     * @uses SourceType::setAirportCode()
     * @uses SourceType::setFirstDepartPoint()
     * @uses SourceType::setERSP_UserID()
     * @uses SourceType::setTerminalID()
     * @param \Ammonkc\Otaehi\StructType\RequestorID $requestorID
     * @param \Ammonkc\Otaehi\StructType\Position $position
     * @param \Ammonkc\Otaehi\StructType\BookingChannel $bookingChannel
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $agentSine
     * @param UNKNOWN $pseudoCityCode
     * @param UNKNOWN $iSOCountry
     * @param UNKNOWN $iSOCurrency
     * @param UNKNOWN $agentDutyCode
     * @param UNKNOWN $airlineVendorID
     * @param UNKNOWN $airportCode
     * @param UNKNOWN $firstDepartPoint
     * @param UNKNOWN $eRSP_UserID
     * @param UNKNOWN $terminalID
     */
    public function __construct(\Ammonkc\Otaehi\StructType\RequestorID $requestorID = null, \Ammonkc\Otaehi\StructType\Position $position = null, \Ammonkc\Otaehi\StructType\BookingChannel $bookingChannel = null, $tPA_Extensions = null, UNKNOWN $agentSine = null, UNKNOWN $pseudoCityCode = null, UNKNOWN $iSOCountry = null, UNKNOWN $iSOCurrency = null, UNKNOWN $agentDutyCode = null, UNKNOWN $airlineVendorID = null, UNKNOWN $airportCode = null, UNKNOWN $firstDepartPoint = null, UNKNOWN $eRSP_UserID = null, UNKNOWN $terminalID = null)
    {
        $this
            ->setRequestorID($requestorID)
            ->setPosition($position)
            ->setBookingChannel($bookingChannel)
            ->setTPA_Extensions($tPA_Extensions)
            ->setAgentSine($agentSine)
            ->setPseudoCityCode($pseudoCityCode)
            ->setISOCountry($iSOCountry)
            ->setISOCurrency($iSOCurrency)
            ->setAgentDutyCode($agentDutyCode)
            ->setAirlineVendorID($airlineVendorID)
            ->setAirportCode($airportCode)
            ->setFirstDepartPoint($firstDepartPoint)
            ->setERSP_UserID($eRSP_UserID)
            ->setTerminalID($terminalID);
    }
    /**
     * Get RequestorID value
     * @return \Ammonkc\Otaehi\StructType\RequestorID|null
     */
    public function getRequestorID()
    {
        return $this->RequestorID;
    }
    /**
     * Set RequestorID value
     * @param \Ammonkc\Otaehi\StructType\RequestorID $requestorID
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setRequestorID(\Ammonkc\Otaehi\StructType\RequestorID $requestorID = null)
    {
        $this->RequestorID = $requestorID;
        return $this;
    }
    /**
     * Get Position value
     * @return \Ammonkc\Otaehi\StructType\Position|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \Ammonkc\Otaehi\StructType\Position $position
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setPosition(\Ammonkc\Otaehi\StructType\Position $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get BookingChannel value
     * @return \Ammonkc\Otaehi\StructType\BookingChannel|null
     */
    public function getBookingChannel()
    {
        return $this->BookingChannel;
    }
    /**
     * Set BookingChannel value
     * @param \Ammonkc\Otaehi\StructType\BookingChannel $bookingChannel
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setBookingChannel(\Ammonkc\Otaehi\StructType\BookingChannel $bookingChannel = null)
    {
        $this->BookingChannel = $bookingChannel;
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
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get AgentSine value
     * @return UNKNOWN|null
     */
    public function getAgentSine()
    {
        return $this->AgentSine;
    }
    /**
     * Set AgentSine value
     * @param UNKNOWN $agentSine
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setAgentSine(UNKNOWN $agentSine = null)
    {
        $this->AgentSine = $agentSine;
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return UNKNOWN|null
     */
    public function getPseudoCityCode()
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param UNKNOWN $pseudoCityCode
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setPseudoCityCode(UNKNOWN $pseudoCityCode = null)
    {
        $this->PseudoCityCode = $pseudoCityCode;
        return $this;
    }
    /**
     * Get ISOCountry value
     * @return UNKNOWN|null
     */
    public function getISOCountry()
    {
        return $this->ISOCountry;
    }
    /**
     * Set ISOCountry value
     * @param UNKNOWN $iSOCountry
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setISOCountry(UNKNOWN $iSOCountry = null)
    {
        $this->ISOCountry = $iSOCountry;
        return $this;
    }
    /**
     * Get ISOCurrency value
     * @return UNKNOWN|null
     */
    public function getISOCurrency()
    {
        return $this->ISOCurrency;
    }
    /**
     * Set ISOCurrency value
     * @param UNKNOWN $iSOCurrency
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setISOCurrency(UNKNOWN $iSOCurrency = null)
    {
        $this->ISOCurrency = $iSOCurrency;
        return $this;
    }
    /**
     * Get AgentDutyCode value
     * @return UNKNOWN|null
     */
    public function getAgentDutyCode()
    {
        return $this->AgentDutyCode;
    }
    /**
     * Set AgentDutyCode value
     * @param UNKNOWN $agentDutyCode
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setAgentDutyCode(UNKNOWN $agentDutyCode = null)
    {
        $this->AgentDutyCode = $agentDutyCode;
        return $this;
    }
    /**
     * Get AirlineVendorID value
     * @return UNKNOWN|null
     */
    public function getAirlineVendorID()
    {
        return $this->AirlineVendorID;
    }
    /**
     * Set AirlineVendorID value
     * @param UNKNOWN $airlineVendorID
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setAirlineVendorID(UNKNOWN $airlineVendorID = null)
    {
        $this->AirlineVendorID = $airlineVendorID;
        return $this;
    }
    /**
     * Get AirportCode value
     * @return UNKNOWN|null
     */
    public function getAirportCode()
    {
        return $this->AirportCode;
    }
    /**
     * Set AirportCode value
     * @param UNKNOWN $airportCode
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setAirportCode(UNKNOWN $airportCode = null)
    {
        $this->AirportCode = $airportCode;
        return $this;
    }
    /**
     * Get FirstDepartPoint value
     * @return UNKNOWN|null
     */
    public function getFirstDepartPoint()
    {
        return $this->FirstDepartPoint;
    }
    /**
     * Set FirstDepartPoint value
     * @param UNKNOWN $firstDepartPoint
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setFirstDepartPoint(UNKNOWN $firstDepartPoint = null)
    {
        $this->FirstDepartPoint = $firstDepartPoint;
        return $this;
    }
    /**
     * Get ERSP_UserID value
     * @return UNKNOWN|null
     */
    public function getERSP_UserID()
    {
        return $this->ERSP_UserID;
    }
    /**
     * Set ERSP_UserID value
     * @param UNKNOWN $eRSP_UserID
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setERSP_UserID(UNKNOWN $eRSP_UserID = null)
    {
        $this->ERSP_UserID = $eRSP_UserID;
        return $this;
    }
    /**
     * Get TerminalID value
     * @return UNKNOWN|null
     */
    public function getTerminalID()
    {
        return $this->TerminalID;
    }
    /**
     * Set TerminalID value
     * @param UNKNOWN $terminalID
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setTerminalID(UNKNOWN $terminalID = null)
    {
        $this->TerminalID = $terminalID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\SourceType
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
