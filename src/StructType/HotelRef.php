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
     * @var
     */
    public $SegmentCategoryCode;
    /**
     * The PropertyClassCode
     * @var
     */
    public $PropertyClassCode;
    /**
     * The ArchitecturalStyleCode
     * @var
     */
    public $ArchitecturalStyleCode;
    /**
     * The SupplierIntegrationLevel
     * @var int
     */
    public $SupplierIntegrationLevel;
    /**
     * The LocationCategoryCode
     * @var
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
     * @param  $segmentCategoryCode
     * @param  $propertyClassCode
     * @param  $architecturalStyleCode
     * @param int $supplierIntegrationLevel
     * @param  $locationCategoryCode
     * @param bool $extendedCitySearchIndicator
     */
    public function __construct( $segmentCategoryCode = null,  $propertyClassCode = null,  $architecturalStyleCode = null, $supplierIntegrationLevel = null,  $locationCategoryCode = null, $extendedCitySearchIndicator = null)
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
     * @return |null
     */
    public function getSegmentCategoryCode()
    {
        return $this->SegmentCategoryCode;
    }
    /**
     * Set SegmentCategoryCode value
     * @param  $segmentCategoryCode
     * @return \Ammonkc\Otaehi\StructType\HotelRef
     */
    public function setSegmentCategoryCode( $segmentCategoryCode = null)
    {
        $this->SegmentCategoryCode = $segmentCategoryCode;
        return $this;
    }
    /**
     * Get PropertyClassCode value
     * @return |null
     */
    public function getPropertyClassCode()
    {
        return $this->PropertyClassCode;
    }
    /**
     * Set PropertyClassCode value
     * @param  $propertyClassCode
     * @return \Ammonkc\Otaehi\StructType\HotelRef
     */
    public function setPropertyClassCode( $propertyClassCode = null)
    {
        $this->PropertyClassCode = $propertyClassCode;
        return $this;
    }
    /**
     * Get ArchitecturalStyleCode value
     * @return |null
     */
    public function getArchitecturalStyleCode()
    {
        return $this->ArchitecturalStyleCode;
    }
    /**
     * Set ArchitecturalStyleCode value
     * @param  $architecturalStyleCode
     * @return \Ammonkc\Otaehi\StructType\HotelRef
     */
    public function setArchitecturalStyleCode( $architecturalStyleCode = null)
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
     * @return |null
     */
    public function getLocationCategoryCode()
    {
        return $this->LocationCategoryCode;
    }
    /**
     * Set LocationCategoryCode value
     * @param  $locationCategoryCode
     * @return \Ammonkc\Otaehi\StructType\HotelRef
     */
    public function setLocationCategoryCode( $locationCategoryCode = null)
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
