<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleMatchedLocationType StructType
 * @subpackage Structs
 */
class VehicleMatchedLocationType extends AbstractStructBase
{
    /**
     * The LocationDetail
     * @var \ammonkc\otaehi\StructType\VehicleLocationDetailsType
     */
    public $LocationDetail;
    /**
     * The VehLocSearchCriterion
     * @var \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public $VehLocSearchCriterion;
    /**
     * The AlternateLocInd
     * @var bool
     */
    public $AlternateLocInd;
    /**
     * Constructor method for VehicleMatchedLocationType
     * @uses VehicleMatchedLocationType::setLocationDetail()
     * @uses VehicleMatchedLocationType::setVehLocSearchCriterion()
     * @uses VehicleMatchedLocationType::setAlternateLocInd()
     * @param \ammonkc\otaehi\StructType\VehicleLocationDetailsType $locationDetail
     * @param \ammonkc\otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion
     * @param bool $alternateLocInd
     */
    public function __construct(\ammonkc\otaehi\StructType\VehicleLocationDetailsType $locationDetail = null, \ammonkc\otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion = null, $alternateLocInd = null)
    {
        $this
            ->setLocationDetail($locationDetail)
            ->setVehLocSearchCriterion($vehLocSearchCriterion)
            ->setAlternateLocInd($alternateLocInd);
    }
    /**
     * Get LocationDetail value
     * @return \ammonkc\otaehi\StructType\VehicleLocationDetailsType|null
     */
    public function getLocationDetail()
    {
        return $this->LocationDetail;
    }
    /**
     * Set LocationDetail value
     * @param \ammonkc\otaehi\StructType\VehicleLocationDetailsType $locationDetail
     * @return \ammonkc\otaehi\StructType\VehicleMatchedLocationType
     */
    public function setLocationDetail(\ammonkc\otaehi\StructType\VehicleLocationDetailsType $locationDetail = null)
    {
        $this->LocationDetail = $locationDetail;
        return $this;
    }
    /**
     * Get VehLocSearchCriterion value
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType|null
     */
    public function getVehLocSearchCriterion()
    {
        return $this->VehLocSearchCriterion;
    }
    /**
     * Set VehLocSearchCriterion value
     * @param \ammonkc\otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion
     * @return \ammonkc\otaehi\StructType\VehicleMatchedLocationType
     */
    public function setVehLocSearchCriterion(\ammonkc\otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion = null)
    {
        $this->VehLocSearchCriterion = $vehLocSearchCriterion;
        return $this;
    }
    /**
     * Get AlternateLocInd value
     * @return bool|null
     */
    public function getAlternateLocInd()
    {
        return $this->AlternateLocInd;
    }
    /**
     * Set AlternateLocInd value
     * @param bool $alternateLocInd
     * @return \ammonkc\otaehi\StructType\VehicleMatchedLocationType
     */
    public function setAlternateLocInd($alternateLocInd = null)
    {
        $this->AlternateLocInd = $alternateLocInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleMatchedLocationType
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
