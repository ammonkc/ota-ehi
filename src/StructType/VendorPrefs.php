<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorPrefs StructType
 * @subpackage Structs
 */
class VendorPrefs extends AbstractStructBase
{
    /**
     * The VendorPref
     * @var \Ammonkc\Otaehi\StructType\VendorPref
     */
    public $VendorPref;
    /**
     * The ParticipationLevelCode
     * @var UNKNOWN
     */
    public $ParticipationLevelCode;
    /**
     * The LocationCategory
     * @var UNKNOWN
     */
    public $LocationCategory;
    /**
     * Constructor method for VendorPrefs
     * @uses VendorPrefs::setVendorPref()
     * @uses VendorPrefs::setParticipationLevelCode()
     * @uses VendorPrefs::setLocationCategory()
     * @param \Ammonkc\Otaehi\StructType\VendorPref $vendorPref
     * @param UNKNOWN $participationLevelCode
     * @param UNKNOWN $locationCategory
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VendorPref $vendorPref = null, UNKNOWN $participationLevelCode = null, UNKNOWN $locationCategory = null)
    {
        $this
            ->setVendorPref($vendorPref)
            ->setParticipationLevelCode($participationLevelCode)
            ->setLocationCategory($locationCategory);
    }
    /**
     * Get VendorPref value
     * @return \Ammonkc\Otaehi\StructType\VendorPref|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @param \Ammonkc\Otaehi\StructType\VendorPref $vendorPref
     * @return \Ammonkc\Otaehi\StructType\VendorPrefs
     */
    public function setVendorPref(\Ammonkc\Otaehi\StructType\VendorPref $vendorPref = null)
    {
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Get ParticipationLevelCode value
     * @return UNKNOWN|null
     */
    public function getParticipationLevelCode()
    {
        return $this->ParticipationLevelCode;
    }
    /**
     * Set ParticipationLevelCode value
     * @param UNKNOWN $participationLevelCode
     * @return \Ammonkc\Otaehi\StructType\VendorPrefs
     */
    public function setParticipationLevelCode(UNKNOWN $participationLevelCode = null)
    {
        $this->ParticipationLevelCode = $participationLevelCode;
        return $this;
    }
    /**
     * Get LocationCategory value
     * @return UNKNOWN|null
     */
    public function getLocationCategory()
    {
        return $this->LocationCategory;
    }
    /**
     * Set LocationCategory value
     * @param UNKNOWN $locationCategory
     * @return \Ammonkc\Otaehi\StructType\VendorPrefs
     */
    public function setLocationCategory(UNKNOWN $locationCategory = null)
    {
        $this->LocationCategory = $locationCategory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VendorPrefs
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
