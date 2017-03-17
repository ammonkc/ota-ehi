<?php

namespace ammonkc\otaehi\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for OTAV ServiceType
 * @subpackage Services
 */
class OTAV extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named OTA_VehAvailRate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ammonkc\otaehi\StructType\OTA_VehAvailRateRQ $oTA_VehAvailRateRQ
     * @return \ammonkc\otaehi\StructType\OTA_VehAvailRateRS|bool
     */
    public function OTA_VehAvailRate(\ammonkc\otaehi\StructType\OTA_VehAvailRateRQ $oTA_VehAvailRateRQ)
    {
        try {
            $this->setResult(self::getSoapClient()->OTA_VehAvailRate($oTA_VehAvailRateRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named OTA_VehRes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ammonkc\otaehi\StructType\OTA_VehResRQ $oTA_VehResRQ
     * @return \ammonkc\otaehi\StructType\OTA_VehResRS|bool
     */
    public function OTA_VehRes(\ammonkc\otaehi\StructType\OTA_VehResRQ $oTA_VehResRQ)
    {
        try {
            $this->setResult(self::getSoapClient()->OTA_VehRes($oTA_VehResRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named OTA_VehRetRes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ammonkc\otaehi\StructType\OTA_VehRetResRQ $oTA_VehRetResRQ
     * @return \ammonkc\otaehi\StructType\OTA_VehRetResRS|bool
     */
    public function OTA_VehRetRes(\ammonkc\otaehi\StructType\OTA_VehRetResRQ $oTA_VehRetResRQ)
    {
        try {
            $this->setResult(self::getSoapClient()->OTA_VehRetRes($oTA_VehRetResRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named OTA_VehModify
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ammonkc\otaehi\StructType\OTA_VehModifyRQ $oTA_VehModifyRQ
     * @return \ammonkc\otaehi\StructType\OTA_VehModifyRS|bool
     */
    public function OTA_VehModify(\ammonkc\otaehi\StructType\OTA_VehModifyRQ $oTA_VehModifyRQ)
    {
        try {
            $this->setResult(self::getSoapClient()->OTA_VehModify($oTA_VehModifyRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named OTA_VehCancel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ammonkc\otaehi\StructType\OTA_VehCancelRQ $oTA_VehCancelRQ
     * @return \ammonkc\otaehi\StructType\OTA_VehCancelRS|bool
     */
    public function OTA_VehCancel(\ammonkc\otaehi\StructType\OTA_VehCancelRQ $oTA_VehCancelRQ)
    {
        try {
            $this->setResult(self::getSoapClient()->OTA_VehCancel($oTA_VehCancelRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named OTA_VehCheckIn
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ammonkc\otaehi\StructType\OTA_VehCheckInRQ $oTA_VehCheckInRQ
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS|bool
     */
    public function OTA_VehCheckIn(\ammonkc\otaehi\StructType\OTA_VehCheckInRQ $oTA_VehCheckInRQ)
    {
        try {
            $this->setResult(self::getSoapClient()->OTA_VehCheckIn($oTA_VehCheckInRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named OTA_VehLocDetail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ $oTA_VehLocDetailRQ
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS|bool
     */
    public function OTA_VehLocDetail(\ammonkc\otaehi\StructType\OTA_VehLocDetailRQ $oTA_VehLocDetailRQ)
    {
        try {
            $this->setResult(self::getSoapClient()->OTA_VehLocDetail($oTA_VehLocDetailRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named OTA_VehLocSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ammonkc\otaehi\StructType\OTA_VehLocSearchRQ $oTA_VehLocSearchRQ
     * @return \ammonkc\otaehi\StructType\OTA_VehLocSearchRS|bool
     */
    public function OTA_VehLocSearch(\ammonkc\otaehi\StructType\OTA_VehLocSearchRQ $oTA_VehLocSearchRQ)
    {
        try {
            $this->setResult(self::getSoapClient()->OTA_VehLocSearch($oTA_VehLocSearchRQ));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ammonkc\otaehi\StructType\OTA_VehAvailRateRS|\ammonkc\otaehi\StructType\OTA_VehCancelRS|\ammonkc\otaehi\StructType\OTA_VehCheckInRS|\ammonkc\otaehi\StructType\OTA_VehLocDetailRS|\ammonkc\otaehi\StructType\OTA_VehLocSearchRS|\ammonkc\otaehi\StructType\OTA_VehModifyRS|\ammonkc\otaehi\StructType\OTA_VehResRS|\ammonkc\otaehi\StructType\OTA_VehRetResRS
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
