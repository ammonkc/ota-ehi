<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRetrieveResRQAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleRetrieveResRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * @var \ammonkc\otaehi\StructType\LocationType
     */
    public $PickUpLocation;
    /**
     * The ReturnLocation
     * @var \ammonkc\otaehi\StructType\LocationType
     */
    public $ReturnLocation;
    /**
     * The Telephone
     * @var \ammonkc\otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The Vendor
     * @var \ammonkc\otaehi\StructType\CompanyNameType
     */
    public $Vendor;
    /**
     * The VehPref
     * @var \ammonkc\otaehi\StructType\VehiclePrefType
     */
    public $VehPref;
    /**
     * The Email
     * @var \ammonkc\otaehi\StructType\EmailType
     */
    public $Email;
    /**
     * The Remark
     * @var \ammonkc\otaehi\StructType\ParagraphType
     */
    public $Remark;
    /**
     * The SearchDateRange
     * @var \ammonkc\otaehi\StructType\SearchDateRange
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
     * @param \ammonkc\otaehi\StructType\LocationType $pickUpLocation
     * @param \ammonkc\otaehi\StructType\LocationType $returnLocation
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @param \ammonkc\otaehi\StructType\CompanyNameType $vendor
     * @param \ammonkc\otaehi\StructType\VehiclePrefType $vehPref
     * @param \ammonkc\otaehi\StructType\EmailType $email
     * @param \ammonkc\otaehi\StructType\ParagraphType $remark
     * @param \ammonkc\otaehi\StructType\SearchDateRange $searchDateRange
     * @param mixed $tPA_Extensions
     * @param string $pickUpDateTime
     */
    public function __construct(\ammonkc\otaehi\StructType\LocationType $pickUpLocation = null, \ammonkc\otaehi\StructType\LocationType $returnLocation = null, \ammonkc\otaehi\StructType\Telephone $telephone = null, \ammonkc\otaehi\StructType\CompanyNameType $vendor = null, \ammonkc\otaehi\StructType\VehiclePrefType $vehPref = null, \ammonkc\otaehi\StructType\EmailType $email = null, \ammonkc\otaehi\StructType\ParagraphType $remark = null, \ammonkc\otaehi\StructType\SearchDateRange $searchDateRange = null, $tPA_Extensions = null, $pickUpDateTime = null)
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
     * @return \ammonkc\otaehi\StructType\LocationType|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param \ammonkc\otaehi\StructType\LocationType $pickUpLocation
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setPickUpLocation(\ammonkc\otaehi\StructType\LocationType $pickUpLocation = null)
    {
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return \ammonkc\otaehi\StructType\LocationType|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param \ammonkc\otaehi\StructType\LocationType $returnLocation
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setReturnLocation(\ammonkc\otaehi\StructType\LocationType $returnLocation = null)
    {
        $this->ReturnLocation = $returnLocation;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \ammonkc\otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setTelephone(\ammonkc\otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \ammonkc\otaehi\StructType\CompanyNameType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \ammonkc\otaehi\StructType\CompanyNameType $vendor
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setVendor(\ammonkc\otaehi\StructType\CompanyNameType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get VehPref value
     * @return \ammonkc\otaehi\StructType\VehiclePrefType|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @param \ammonkc\otaehi\StructType\VehiclePrefType $vehPref
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setVehPref(\ammonkc\otaehi\StructType\VehiclePrefType $vehPref = null)
    {
        $this->VehPref = $vehPref;
        return $this;
    }
    /**
     * Get Email value
     * @return \ammonkc\otaehi\StructType\EmailType|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \ammonkc\otaehi\StructType\EmailType $email
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setEmail(\ammonkc\otaehi\StructType\EmailType $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Remark value
     * @return \ammonkc\otaehi\StructType\ParagraphType|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \ammonkc\otaehi\StructType\ParagraphType $remark
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setRemark(\ammonkc\otaehi\StructType\ParagraphType $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get SearchDateRange value
     * @return \ammonkc\otaehi\StructType\SearchDateRange|null
     */
    public function getSearchDateRange()
    {
        return $this->SearchDateRange;
    }
    /**
     * Set SearchDateRange value
     * @param \ammonkc\otaehi\StructType\SearchDateRange $searchDateRange
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public function setSearchDateRange(\ammonkc\otaehi\StructType\SearchDateRange $searchDateRange = null)
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
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
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
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
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
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRQAdditionalInfoType
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
