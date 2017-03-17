<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Date StructType
 * @subpackage Structs
 */
class Date extends AbstractStructBase
{
    /**
     * The PickUpDateTime
     * @var DateOrDateTimeType
     */
    public $PickUpDateTime;
    /**
     * The ReturnDateTime
     * @var DateOrDateTimeType
     */
    public $ReturnDateTime;
    /**
     * Constructor method for Date
     * @uses Date::setPickUpDateTime()
     * @uses Date::setReturnDateTime()
     * @param DateOrDateTimeType $pickUpDateTime
     * @param DateOrDateTimeType $returnDateTime
     */
    public function __construct(DateOrDateTimeType $pickUpDateTime = null, DateOrDateTimeType $returnDateTime = null)
    {
        $this
            ->setPickUpDateTime($pickUpDateTime)
            ->setReturnDateTime($returnDateTime);
    }
    /**
     * Get PickUpDateTime value
     * @return DateOrDateTimeType|null
     */
    public function getPickUpDateTime()
    {
        return $this->PickUpDateTime;
    }
    /**
     * Set PickUpDateTime value
     * @param DateOrDateTimeType $pickUpDateTime
     * @return \Ammonkc\Otaehi\StructType\Date
     */
    public function setPickUpDateTime(DateOrDateTimeType $pickUpDateTime = null)
    {
        $this->PickUpDateTime = $pickUpDateTime;
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return DateOrDateTimeType|null
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param DateOrDateTimeType $returnDateTime
     * @return \Ammonkc\Otaehi\StructType\Date
     */
    public function setReturnDateTime(DateOrDateTimeType $returnDateTime = null)
    {
        $this->ReturnDateTime = $returnDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Date
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
