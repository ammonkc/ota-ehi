<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRef StructType
 * @subpackage Structs
 */
class HotelRef extends AbstractStructBase
{
    /**
     * The SegmentCategoryCode
     * @var UNKNOWN
     */
    public $SegmentCategoryCode;
    /**
     * The PropertyClassCode
     * @var UNKNOWN
     */
    public $PropertyClassCode;
    /**
     * The ArchitecturalStyleCode
     * @var UNKNOWN
     */
    public $ArchitecturalStyleCode;
    /**
     * The SupplierIntegrationLevel
     * @var int
     */
    public $SupplierIntegrationLevel;
    /**
     * The LocationCategoryCode
     * @var UNKNOWN
     */
    public $LocationCategoryCode;
    /**
     * The ExtendedCitySearchIndicator
     * @var bool
     */
    public $ExtendedCitySearchIndicator;
    /**
     * Constructor method for HotelRef
     * @uses HotelRef::setSegmentCategoryCode()
     * @uses HotelRef::setPropertyClassCode()
     * @uses HotelRef::setArchitecturalStyleCode()
     * @uses HotelRef::setSupplierIntegrationLevel()
     * @uses HotelRef::setLocationCategoryCode()
     * @uses HotelRef::setExtendedCitySearchIndicator()
     * @param UNKNOWN $segmentCategoryCode
     * @param UNKNOWN $propertyClassCode
     * @param UNKNOWN $architecturalStyleCode
     * @param int $supplierIntegrationLevel
     * @param UNKNOWN $locationCategoryCode
     * @param bool $extendedCitySearchIndicator
     */
    public function __construct(UNKNOWN $segmentCategoryCode = null, UNKNOWN $propertyClassCode = null, UNKNOWN $architecturalStyleCode = null, $supplierIntegrationLevel = null, UNKNOWN $locationCategoryCode = null, $extendedCitySearchIndicator = null)
    {
        $this
            ->setSegmentCategoryCode($segmentCategoryCode)
            ->setPropertyClassCode($propertyClassCode)
            ->setArchitecturalStyleCode($architecturalStyleCode)
            ->setSupplierIntegrationLevel($supplierIntegrationLevel)
            ->setLocationCategoryCode($locationCategoryCode)
            ->setExtendedCitySearchIndicator($extendedCitySearchIndicator);
    }
    /**
     * Get SegmentCategoryCode value
     * @return UNKNOWN|null
     */
    public function getSegmentCategoryCode()
    {
        return $this->SegmentCategoryCode;
    }
    /**
     * Set SegmentCategoryCode value
     * @param UNKNOWN $segmentCategoryCode
     * @return \Ammonkc\Otaehi\StructType\HotelRef
     */
    public function setSegmentCategoryCode(UNKNOWN $segmentCategoryCode = null)
    {
        $this->SegmentCategoryCode = $segmentCategoryCode;
        return $this;
    }
    /**
     * Get PropertyClassCode value
     * @return UNKNOWN|null
     */
    public function getPropertyClassCode()
    {
        return $this->PropertyClassCode;
    }
    /**
     * Set PropertyClassCode value
     * @param UNKNOWN $propertyClassCode
     * @return \Ammonkc\Otaehi\StructType\HotelRef
     */
    public function setPropertyClassCode(UNKNOWN $propertyClassCode = null)
    {
        $this->PropertyClassCode = $propertyClassCode;
        return $this;
    }
    /**
     * Get ArchitecturalStyleCode value
     * @return UNKNOWN|null
     */
    public function getArchitecturalStyleCode()
    {
        return $this->ArchitecturalStyleCode;
    }
    /**
     * Set ArchitecturalStyleCode value
     * @param UNKNOWN $architecturalStyleCode
     * @return \Ammonkc\Otaehi\StructType\HotelRef
     */
    public function setArchitecturalStyleCode(UNKNOWN $architecturalStyleCode = null)
    {
        $this->ArchitecturalStyleCode = $architecturalStyleCode;
        return $this;
    }
    /**
     * Get SupplierIntegrationLevel value
     * @return int|null
     */
    public function getSupplierIntegrationLevel()
    {
        return $this->SupplierIntegrationLevel;
    }
    /**
     * Set SupplierIntegrationLevel value
     * @param int $supplierIntegrationLevel
     * @return \Ammonkc\Otaehi\StructType\HotelRef
     */
    public function setSupplierIntegrationLevel($supplierIntegrationLevel = null)
    {
        // validation for constraint: int
        if (!is_null($supplierIntegrationLevel) && !is_numeric($supplierIntegrationLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($supplierIntegrationLevel)), __LINE__);
        }
        $this->SupplierIntegrationLevel = $supplierIntegrationLevel;
        return $this;
    }
    /**
     * Get LocationCategoryCode value
     * @return UNKNOWN|null
     */
    public function getLocationCategoryCode()
    {
        return $this->LocationCategoryCode;
    }
    /**
     * Set LocationCategoryCode value
     * @param UNKNOWN $locationCategoryCode
     * @return \Ammonkc\Otaehi\StructType\HotelRef
     */
    public function setLocationCategoryCode(UNKNOWN $locationCategoryCode = null)
    {
        $this->LocationCategoryCode = $locationCategoryCode;
        return $this;
    }
    /**
     * Get ExtendedCitySearchIndicator value
     * @return bool|null
     */
    public function getExtendedCitySearchIndicator()
    {
        return $this->ExtendedCitySearchIndicator;
    }
    /**
     * Set ExtendedCitySearchIndicator value
     * @param bool $extendedCitySearchIndicator
     * @return \Ammonkc\Otaehi\StructType\HotelRef
     */
    public function setExtendedCitySearchIndicator($extendedCitySearchIndicator = null)
    {
        $this->ExtendedCitySearchIndicator = $extendedCitySearchIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\HotelRef
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
