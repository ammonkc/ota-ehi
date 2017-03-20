<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var
     */
    public $AgentSine;
    /**
     * The PseudoCityCode
     * @var
     */
    public $PseudoCityCode;
    /**
     * The ISOCountry
     * @var
     */
    public $ISOCountry;
    /**
     * The ISOCurrency
     * @var
     */
    public $ISOCurrency;
    /**
     * The AgentDutyCode
     * @var
     */
    public $AgentDutyCode;
    /**
     * The AirlineVendorID
     * @var
     */
    public $AirlineVendorID;
    /**
     * The AirportCode
     * @var
     */
    public $AirportCode;
    /**
     * The FirstDepartPoint
     * @var
     */
    public $FirstDepartPoint;
    /**
     * The ERSP_UserID
     * @var
     */
    public $ERSP_UserID;
    /**
     * The TerminalID
     * @var
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
     * @param  $agentSine
     * @param  $pseudoCityCode
     * @param  $iSOCountry
     * @param  $iSOCurrency
     * @param  $agentDutyCode
     * @param  $airlineVendorID
     * @param  $airportCode
     * @param  $firstDepartPoint
     * @param  $eRSP_UserID
     * @param  $terminalID
     */
    public function __construct(\Ammonkc\Otaehi\StructType\RequestorID $requestorID = null, \Ammonkc\Otaehi\StructType\Position $position = null, \Ammonkc\Otaehi\StructType\BookingChannel $bookingChannel = null, $tPA_Extensions = null,  $agentSine = null,  $pseudoCityCode = null,  $iSOCountry = null,  $iSOCurrency = null,  $agentDutyCode = null,  $airlineVendorID = null,  $airportCode = null,  $firstDepartPoint = null,  $eRSP_UserID = null,  $terminalID = null)
    {
        $this->setRequestorID($requestorID)
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
     * @return |null
     */
    public function getAgentSine()
    {
        return $this->AgentSine;
    }
    /**
     * Set AgentSine value
     * @param  $agentSine
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setAgentSine( $agentSine = null)
    {
        $this->AgentSine = $agentSine;
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return |null
     */
    public function getPseudoCityCode()
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param  $pseudoCityCode
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setPseudoCityCode( $pseudoCityCode = null)
    {
        $this->PseudoCityCode = $pseudoCityCode;
        return $this;
    }
    /**
     * Get ISOCountry value
     * @return |null
     */
    public function getISOCountry()
    {
        return $this->ISOCountry;
    }
    /**
     * Set ISOCountry value
     * @param  $iSOCountry
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setISOCountry( $iSOCountry = null)
    {
        $this->ISOCountry = $iSOCountry;
        return $this;
    }
    /**
     * Get ISOCurrency value
     * @return |null
     */
    public function getISOCurrency()
    {
        return $this->ISOCurrency;
    }
    /**
     * Set ISOCurrency value
     * @param  $iSOCurrency
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setISOCurrency( $iSOCurrency = null)
    {
        $this->ISOCurrency = $iSOCurrency;
        return $this;
    }
    /**
     * Get AgentDutyCode value
     * @return |null
     */
    public function getAgentDutyCode()
    {
        return $this->AgentDutyCode;
    }
    /**
     * Set AgentDutyCode value
     * @param  $agentDutyCode
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setAgentDutyCode( $agentDutyCode = null)
    {
        $this->AgentDutyCode = $agentDutyCode;
        return $this;
    }
    /**
     * Get AirlineVendorID value
     * @return |null
     */
    public function getAirlineVendorID()
    {
        return $this->AirlineVendorID;
    }
    /**
     * Set AirlineVendorID value
     * @param  $airlineVendorID
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setAirlineVendorID( $airlineVendorID = null)
    {
        $this->AirlineVendorID = $airlineVendorID;
        return $this;
    }
    /**
     * Get AirportCode value
     * @return |null
     */
    public function getAirportCode()
    {
        return $this->AirportCode;
    }
    /**
     * Set AirportCode value
     * @param  $airportCode
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setAirportCode( $airportCode = null)
    {
        $this->AirportCode = $airportCode;
        return $this;
    }
    /**
     * Get FirstDepartPoint value
     * @return |null
     */
    public function getFirstDepartPoint()
    {
        return $this->FirstDepartPoint;
    }
    /**
     * Set FirstDepartPoint value
     * @param  $firstDepartPoint
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setFirstDepartPoint( $firstDepartPoint = null)
    {
        $this->FirstDepartPoint = $firstDepartPoint;
        return $this;
    }
    /**
     * Get ERSP_UserID value
     * @return |null
     */
    public function getERSP_UserID()
    {
        return $this->ERSP_UserID;
    }
    /**
     * Set ERSP_UserID value
     * @param  $eRSP_UserID
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setERSP_UserID( $eRSP_UserID = null)
    {
        $this->ERSP_UserID = $eRSP_UserID;
        return $this;
    }
    /**
     * Get TerminalID value
     * @return |null
     */
    public function getTerminalID()
    {
        return $this->TerminalID;
    }
    /**
     * Set TerminalID value
     * @param  $terminalID
     * @return \Ammonkc\Otaehi\StructType\SourceType
     */
    public function setTerminalID( $terminalID = null)
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
