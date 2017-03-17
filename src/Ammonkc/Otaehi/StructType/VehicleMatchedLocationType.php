<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleMatchedLocationType StructType
 * @subpackage Structs
 */
class VehicleMatchedLocationType extends AbstractStructBase
{
    /**
     * The LocationDetail
     * @var \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public $LocationDetail;
    /**
     * The VehLocSearchCriterion
     * @var \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
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
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType $locationDetail
     * @param \Ammonkc\Otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion
     * @param bool $alternateLocInd
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehicleLocationDetailsType $locationDetail = null, \Ammonkc\Otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion = null, $alternateLocInd = null)
    {
        $this
            ->setLocationDetail($locationDetail)
            ->setVehLocSearchCriterion($vehLocSearchCriterion)
            ->setAlternateLocInd($alternateLocInd);
    }
    /**
     * Get LocationDetail value
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType|null
     */
    public function getLocationDetail()
    {
        return $this->LocationDetail;
    }
    /**
     * Set LocationDetail value
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType $locationDetail
     * @return \Ammonkc\Otaehi\StructType\VehicleMatchedLocationType
     */
    public function setLocationDetail(\Ammonkc\Otaehi\StructType\VehicleLocationDetailsType $locationDetail = null)
    {
        $this->LocationDetail = $locationDetail;
        return $this;
    }
    /**
     * Get VehLocSearchCriterion value
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType|null
     */
    public function getVehLocSearchCriterion()
    {
        return $this->VehLocSearchCriterion;
    }
    /**
     * Set VehLocSearchCriterion value
     * @param \Ammonkc\Otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion
     * @return \Ammonkc\Otaehi\StructType\VehicleMatchedLocationType
     */
    public function setVehLocSearchCriterion(\Ammonkc\Otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleMatchedLocationType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleMatchedLocationType
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
