<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRetrieveResRQAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleRetrieveResRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * @var \Ammonkc\Otaehi\StructType\LocationType
     */
    public $PickUpLocation;
    /**
     * The ReturnLocation
     * @var \Ammonkc\Otaehi\StructType\LocationType
     */
    public $ReturnLocation;
    /**
     * The Telephone
     * @var \Ammonkc\Otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The Vendor
     * @var \Ammonkc\Otaehi\StructType\CompanyNameType
     */
    public $Vendor;
    /**
     * The VehPref
     * @var \Ammonkc\Otaehi\StructType\VehiclePrefType
     */
    public $VehPref;
    /**
     * The Email
     * @var \Ammonkc\Otaehi\StructType\EmailType
     */
    public $Email;
    /**
     * The Remark
     * @var \Ammonkc\Otaehi\StructType\ParagraphType
     */
    public $Remark;
    /**
     * The SearchDateRange
     * @var \Ammonkc\Otaehi\StructType\SearchDateRange
     */
    public $SearchDateRange;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The PickUpDateTime
     * @var string
     */
    public $PickUpDateTime;
    /**
     * Constructor method for VehicleRetrieveResRQAdditionalInfoType
     * @uses VehicleRetrieveResRQAdditionalInfoType::setPickUpLocation()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setReturnLocation()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setTelephone()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setVendor()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setVehPref()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setEmail()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setRemark()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setSearchDateRange()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleRetrieveResRQAdditionalInfoType::setPickUpDateTime()
     * @param \Ammonkc\Otaehi\StructType\LocationType $pickUpLocation
     * @param \Ammonkc\Otaehi\StructType\LocationType $returnLocation
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @param \Ammonkc\Otaehi\StructType\CompanyNameType $vendor
     * @param \Ammonkc\Otaehi\StructType\VehiclePrefType $vehPref
     * @param \Ammonkc\Otaehi\StructType\EmailType $email
     * @param \Ammonkc\Otaehi\StructType\ParagraphType $remark
     * @param \Ammonkc\Otaehi\StructType\SearchDateRange $searchDateRange
     * @param mixed $tPA_Extensions
     * @param string $pickUpDateTime
     */
    public function __construct(\Ammonkc\Otaehi\StructType\LocationType $pickUpLocation = null, \Ammonkc\Otaehi\StructType\LocationType $returnLocation = null, \Ammonkc\Otaehi\StructType\Telephone $telephone = null, \Ammonkc\Otaehi\StructType\CompanyNameType $vendor = null, \Ammonkc\Otaehi\StructType\VehiclePrefType $vehPref = null, \Ammonkc\Otaehi\StructType\EmailType $email = null, \Ammonkc\Otaehi\StructType\ParagraphType $remark = null, \Ammonkc\Otaehi\StructType\SearchDateRange $searchDateRange = null, $tPA_Extensions = null, $pickUpDateTime = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setReturnLocation($returnLocation)
            ->setTelephone($telephone)
            ->setVendor($vendor)
            ->setVehPref($vehPref)
            ->setEmail($email)
            ->setRemark($remark)
            ->setSearchDateRange($searchDateRange)
            ->setTPA_Extensions($tPA_Extensions)
            ->setPickUpDateTime($pickUpDateTime);
    }
    /**
     * Get PickUpLocation value
     * @return \Ammonkc\Otaehi\StructType\LocationType|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param \Ammonkc\Otaehi\StructType\LocationType $pickUpLocation
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setPickUpLocation(\Ammonkc\Otaehi\StructType\LocationType $pickUpLocation = null)
    {
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return \Ammonkc\Otaehi\StructType\LocationType|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param \Ammonkc\Otaehi\StructType\LocationType $returnLocation
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setReturnLocation(\Ammonkc\Otaehi\StructType\LocationType $returnLocation = null)
    {
        $this->ReturnLocation = $returnLocation;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Ammonkc\Otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setTelephone(\Ammonkc\Otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Ammonkc\Otaehi\StructType\CompanyNameType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Ammonkc\Otaehi\StructType\CompanyNameType $vendor
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setVendor(\Ammonkc\Otaehi\StructType\CompanyNameType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get VehPref value
     * @return \Ammonkc\Otaehi\StructType\VehiclePrefType|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @param \Ammonkc\Otaehi\StructType\VehiclePrefType $vehPref
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setVehPref(\Ammonkc\Otaehi\StructType\VehiclePrefType $vehPref = null)
    {
        $this->VehPref = $vehPref;
        return $this;
    }
    /**
     * Get Email value
     * @return \Ammonkc\Otaehi\StructType\EmailType|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Ammonkc\Otaehi\StructType\EmailType $email
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setEmail(\Ammonkc\Otaehi\StructType\EmailType $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Remark value
     * @return \Ammonkc\Otaehi\StructType\ParagraphType|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Ammonkc\Otaehi\StructType\ParagraphType $remark
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setRemark(\Ammonkc\Otaehi\StructType\ParagraphType $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get SearchDateRange value
     * @return \Ammonkc\Otaehi\StructType\SearchDateRange|null
     */
    public function getSearchDateRange()
    {
        return $this->SearchDateRange;
    }
    /**
     * Set SearchDateRange value
     * @param \Ammonkc\Otaehi\StructType\SearchDateRange $searchDateRange
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setSearchDateRange(\Ammonkc\Otaehi\StructType\SearchDateRange $searchDateRange = null)
    {
        $this->SearchDateRange = $searchDateRange;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get PickUpDateTime value
     * @return string|null
     */
    public function getPickUpDateTime()
    {
        return $this->PickUpDateTime;
    }
    /**
     * Set PickUpDateTime value
     * @param string $pickUpDateTime
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setPickUpDateTime($pickUpDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickUpDateTime) && !is_string($pickUpDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickUpDateTime)), __LINE__);
        }
        $this->PickUpDateTime = $pickUpDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
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
