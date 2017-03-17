<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://cis1-xmldirect.ehi.com/services30/OTA30-Vendor.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://cis1-xmldirect.ehi.com/services30/OTA30-Vendor.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \ammonkc\otaehi\ClassMap::get(),
);
/**
 * Samples for OTAV ServiceType
 */
$oTAV = new \ammonkc\otaehi\ServiceType\OTAV($options);
/**
 * Sample call for OTA_VehAvailRate operation/method
 */
if ($oTAV->OTA_VehAvailRate(new \ammonkc\otaehi\StructType\OTA_VehAvailRateRQ()) !== false) {
    print_r($oTAV->getResult());
} else {
    print_r($oTAV->getLastError());
}
/**
 * Sample call for OTA_VehRes operation/method
 */
if ($oTAV->OTA_VehRes(new \ammonkc\otaehi\StructType\OTA_VehResRQ()) !== false) {
    print_r($oTAV->getResult());
} else {
    print_r($oTAV->getLastError());
}
/**
 * Sample call for OTA_VehRetRes operation/method
 */
if ($oTAV->OTA_VehRetRes(new \ammonkc\otaehi\StructType\OTA_VehRetResRQ()) !== false) {
    print_r($oTAV->getResult());
} else {
    print_r($oTAV->getLastError());
}
/**
 * Sample call for OTA_VehModify operation/method
 */
if ($oTAV->OTA_VehModify(new \ammonkc\otaehi\StructType\OTA_VehModifyRQ()) !== false) {
    print_r($oTAV->getResult());
} else {
    print_r($oTAV->getLastError());
}
/**
 * Sample call for OTA_VehCancel operation/method
 */
if ($oTAV->OTA_VehCancel(new \ammonkc\otaehi\StructType\OTA_VehCancelRQ()) !== false) {
    print_r($oTAV->getResult());
} else {
    print_r($oTAV->getLastError());
}
/**
 * Sample call for OTA_VehCheckIn operation/method
 */
if ($oTAV->OTA_VehCheckIn(new \ammonkc\otaehi\StructType\OTA_VehCheckInRQ()) !== false) {
    print_r($oTAV->getResult());
} else {
    print_r($oTAV->getLastError());
}
/**
 * Sample call for OTA_VehLocDetail operation/method
 */
if ($oTAV->OTA_VehLocDetail(new \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ()) !== false) {
    print_r($oTAV->getResult());
} else {
    print_r($oTAV->getLastError());
}
/**
 * Sample call for OTA_VehLocSearch operation/method
 */
if ($oTAV->OTA_VehLocSearch(new \ammonkc\otaehi\StructType\OTA_VehLocSearchRQ()) !== false) {
    print_r($oTAV->getResult());
} else {
    print_r($oTAV->getLastError());
}
/**
 * Samples for OTAP ServiceType
 */
$oTAP = new \ammonkc\otaehi\ServiceType\OTAP($options);
/**
 * Sample call for OTA_Ping operation/method
 */
if ($oTAP->OTA_Ping(new \ammonkc\otaehi\StructType\OTA_PingRQ()) !== false) {
    print_r($oTAP->getResult());
} else {
    print_r($oTAP->getLastError());
}
