<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseFilter StructType
 * @subpackage Structs
 */
class ResponseFilter extends AbstractStructBase
{
    /**
     * The LocationAddressPhoneIndicator
     * @var bool
     */
    public $LocationAddressPhoneIndicator;
    /**
     * The LocationInfoIndicator
     * @var bool
     */
    public $LocationInfoIndicator;
    /**
     * The VehiclesIndicator
     * @var bool
     */
    public $VehiclesIndicator;
    /**
     * The RequirementsIndicator
     * @var bool
     */
    public $RequirementsIndicator;
    /**
     * The AdditionalFeesIndicator
     * @var bool
     */
    public $AdditionalFeesIndicator;
    /**
     * The LiabilitiesIndicator
     * @var bool
     */
    public $LiabilitiesIndicator;
    /**
     * The ServicesOfferedIndicator
     * @var bool
     */
    public $ServicesOfferedIndicator;
    /**
     * Constructor method for ResponseFilter
     * @uses ResponseFilter::setLocationAddressPhoneIndicator()
     * @uses ResponseFilter::setLocationInfoIndicator()
     * @uses ResponseFilter::setVehiclesIndicator()
     * @uses ResponseFilter::setRequirementsIndicator()
     * @uses ResponseFilter::setAdditionalFeesIndicator()
     * @uses ResponseFilter::setLiabilitiesIndicator()
     * @uses ResponseFilter::setServicesOfferedIndicator()
     * @param bool $locationAddressPhoneIndicator
     * @param bool $locationInfoIndicator
     * @param bool $vehiclesIndicator
     * @param bool $requirementsIndicator
     * @param bool $additionalFeesIndicator
     * @param bool $liabilitiesIndicator
     * @param bool $servicesOfferedIndicator
     */
    public function __construct($locationAddressPhoneIndicator = null, $locationInfoIndicator = null, $vehiclesIndicator = null, $requirementsIndicator = null, $additionalFeesIndicator = null, $liabilitiesIndicator = null, $servicesOfferedIndicator = null)
    {
        $this
            ->setLocationAddressPhoneIndicator($locationAddressPhoneIndicator)
            ->setLocationInfoIndicator($locationInfoIndicator)
            ->setVehiclesIndicator($vehiclesIndicator)
            ->setRequirementsIndicator($requirementsIndicator)
            ->setAdditionalFeesIndicator($additionalFeesIndicator)
            ->setLiabilitiesIndicator($liabilitiesIndicator)
            ->setServicesOfferedIndicator($servicesOfferedIndicator);
    }
    /**
     * Get LocationAddressPhoneIndicator value
     * @return bool|null
     */
    public function getLocationAddressPhoneIndicator()
    {
        return $this->LocationAddressPhoneIndicator;
    }
    /**
     * Set LocationAddressPhoneIndicator value
     * @param bool $locationAddressPhoneIndicator
     * @return \Ammonkc\Otaehi\StructType\ResponseFilter
     */
    public function setLocationAddressPhoneIndicator($locationAddressPhoneIndicator = null)
    {
        $this->LocationAddressPhoneIndicator = $locationAddressPhoneIndicator;
        return $this;
    }
    /**
     * Get LocationInfoIndicator value
     * @return bool|null
     */
    public function getLocationInfoIndicator()
    {
        return $this->LocationInfoIndicator;
    }
    /**
     * Set LocationInfoIndicator value
     * @param bool $locationInfoIndicator
     * @return \Ammonkc\Otaehi\StructType\ResponseFilter
     */
    public function setLocationInfoIndicator($locationInfoIndicator = null)
    {
        $this->LocationInfoIndicator = $locationInfoIndicator;
        return $this;
    }
    /**
     * Get VehiclesIndicator value
     * @return bool|null
     */
    public function getVehiclesIndicator()
    {
        return $this->VehiclesIndicator;
    }
    /**
     * Set VehiclesIndicator value
     * @param bool $vehiclesIndicator
     * @return \Ammonkc\Otaehi\StructType\ResponseFilter
     */
    public function setVehiclesIndicator($vehiclesIndicator = null)
    {
        $this->VehiclesIndicator = $vehiclesIndicator;
        return $this;
    }
    /**
     * Get RequirementsIndicator value
     * @return bool|null
     */
    public function getRequirementsIndicator()
    {
        return $this->RequirementsIndicator;
    }
    /**
     * Set RequirementsIndicator value
     * @param bool $requirementsIndicator
     * @return \Ammonkc\Otaehi\StructType\ResponseFilter
     */
    public function setRequirementsIndicator($requirementsIndicator = null)
    {
        $this->RequirementsIndicator = $requirementsIndicator;
        return $this;
    }
    /**
     * Get AdditionalFeesIndicator value
     * @return bool|null
     */
    public function getAdditionalFeesIndicator()
    {
        return $this->AdditionalFeesIndicator;
    }
    /**
     * Set AdditionalFeesIndicator value
     * @param bool $additionalFeesIndicator
     * @return \Ammonkc\Otaehi\StructType\ResponseFilter
     */
    public function setAdditionalFeesIndicator($additionalFeesIndicator = null)
    {
        $this->AdditionalFeesIndicator = $additionalFeesIndicator;
        return $this;
    }
    /**
     * Get LiabilitiesIndicator value
     * @return bool|null
     */
    public function getLiabilitiesIndicator()
    {
        return $this->LiabilitiesIndicator;
    }
    /**
     * Set LiabilitiesIndicator value
     * @param bool $liabilitiesIndicator
     * @return \Ammonkc\Otaehi\StructType\ResponseFilter
     */
    public function setLiabilitiesIndicator($liabilitiesIndicator = null)
    {
        $this->LiabilitiesIndicator = $liabilitiesIndicator;
        return $this;
    }
    /**
     * Get ServicesOfferedIndicator value
     * @return bool|null
     */
    public function getServicesOfferedIndicator()
    {
        return $this->ServicesOfferedIndicator;
    }
    /**
     * Set ServicesOfferedIndicator value
     * @param bool $servicesOfferedIndicator
     * @return \Ammonkc\Otaehi\StructType\ResponseFilter
     */
    public function setServicesOfferedIndicator($servicesOfferedIndicator = null)
    {
        $this->ServicesOfferedIndicator = $servicesOfferedIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ResponseFilter
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
