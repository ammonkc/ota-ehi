<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectionLocation StructType
 * @subpackage Structs
 */
class ConnectionLocation extends AbstractStructBase
{
    /**
     * The Inclusive
     * @var bool
     */
    public $Inclusive;
    /**
     * The MinChangeTime
     * @var int
     */
    public $MinChangeTime;
    /**
     * The ConnectionInfo
     * @var string
     */
    public $ConnectionInfo;
    /**
     * The MultiAirportCityInd
     * @var bool
     */
    public $MultiAirportCityInd;
    /**
     * The ConnectType
     * @var string
     */
    public $ConnectType;
    /**
     * Constructor method for ConnectionLocation
     * @uses ConnectionLocation::setInclusive()
     * @uses ConnectionLocation::setMinChangeTime()
     * @uses ConnectionLocation::setConnectionInfo()
     * @uses ConnectionLocation::setMultiAirportCityInd()
     * @uses ConnectionLocation::setConnectType()
     * @param bool $inclusive
     * @param int $minChangeTime
     * @param string $connectionInfo
     * @param bool $multiAirportCityInd
     * @param string $connectType
     */
    public function __construct($inclusive = null, $minChangeTime = null, $connectionInfo = null, $multiAirportCityInd = null, $connectType = null)
    {
        $this
            ->setInclusive($inclusive)
            ->setMinChangeTime($minChangeTime)
            ->setConnectionInfo($connectionInfo)
            ->setMultiAirportCityInd($multiAirportCityInd)
            ->setConnectType($connectType);
    }
    /**
     * Get Inclusive value
     * @return bool|null
     */
    public function getInclusive()
    {
        return $this->Inclusive;
    }
    /**
     * Set Inclusive value
     * @param bool $inclusive
     * @return \Ammonkc\Otaehi\StructType\ConnectionLocation
     */
    public function setInclusive($inclusive = null)
    {
        $this->Inclusive = $inclusive;
        return $this;
    }
    /**
     * Get MinChangeTime value
     * @return int|null
     */
    public function getMinChangeTime()
    {
        return $this->MinChangeTime;
    }
    /**
     * Set MinChangeTime value
     * @param int $minChangeTime
     * @return \Ammonkc\Otaehi\StructType\ConnectionLocation
     */
    public function setMinChangeTime($minChangeTime = null)
    {
        // validation for constraint: int
        if (!is_null($minChangeTime) && !is_numeric($minChangeTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minChangeTime)), __LINE__);
        }
        $this->MinChangeTime = $minChangeTime;
        return $this;
    }
    /**
     * Get ConnectionInfo value
     * @return string|null
     */
    public function getConnectionInfo()
    {
        return $this->ConnectionInfo;
    }
    /**
     * Set ConnectionInfo value
     * @param string $connectionInfo
     * @return \Ammonkc\Otaehi\StructType\ConnectionLocation
     */
    public function setConnectionInfo($connectionInfo = null)
    {
        // validation for constraint: string
        if (!is_null($connectionInfo) && !is_string($connectionInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($connectionInfo)), __LINE__);
        }
        $this->ConnectionInfo = $connectionInfo;
        return $this;
    }
    /**
     * Get MultiAirportCityInd value
     * @return bool|null
     */
    public function getMultiAirportCityInd()
    {
        return $this->MultiAirportCityInd;
    }
    /**
     * Set MultiAirportCityInd value
     * @param bool $multiAirportCityInd
     * @return \Ammonkc\Otaehi\StructType\ConnectionLocation
     */
    public function setMultiAirportCityInd($multiAirportCityInd = null)
    {
        $this->MultiAirportCityInd = $multiAirportCityInd;
        return $this;
    }
    /**
     * Get ConnectType value
     * @return string|null
     */
    public function getConnectType()
    {
        return $this->ConnectType;
    }
    /**
     * Set ConnectType value
     * @param string $connectType
     * @return \Ammonkc\Otaehi\StructType\ConnectionLocation
     */
    public function setConnectType($connectType = null)
    {
        // validation for constraint: string
        if (!is_null($connectType) && !is_string($connectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($connectType)), __LINE__);
        }
        $this->ConnectType = $connectType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ConnectionLocation
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
