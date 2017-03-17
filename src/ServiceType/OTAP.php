<?php

namespace ammonkc\otaehi\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for OTAP ServiceType
 * @subpackage Services
 */
class OTAP extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named OTA_Ping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ammonkc\otaehi\StructType\OTA_PingRQ $oTA_PingRQ
     * @return \ammonkc\otaehi\StructType\OTA_PingRS|bool
     */
    public function OTA_Ping(\ammonkc\otaehi\StructType\OTA_PingRQ $oTA_PingRQ)
    {
        try {
            $this->setResult(self::getSoapClient()->OTA_Ping($oTA_PingRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ammonkc\otaehi\StructType\OTA_PingRS
     */
    public function getResult()
    {
        return parent::getResult();
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
