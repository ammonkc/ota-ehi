<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdjustmentDetails StructType
 * @subpackage Structs
 */
class AdjustmentDetails extends AbstractStructBase
{
    /**
     * The AdjustmentDetail
     * @var \ammonkc\otaehi\StructType\VehicleChargeType
     */
    public $AdjustmentDetail;
    /**
     * Constructor method for AdjustmentDetails
     * @uses AdjustmentDetails::setAdjustmentDetail()
     * @param \ammonkc\otaehi\StructType\VehicleChargeType $adjustmentDetail
     */
    public function __construct(\ammonkc\otaehi\StructType\VehicleChargeType $adjustmentDetail = null)
    {
        $this
            ->setAdjustmentDetail($adjustmentDetail);
    }
    /**
     * Get AdjustmentDetail value
     * @return \ammonkc\otaehi\StructType\VehicleChargeType|null
     */
    public function getAdjustmentDetail()
    {
        return $this->AdjustmentDetail;
    }
    /**
     * Set AdjustmentDetail value
     * @param \ammonkc\otaehi\StructType\VehicleChargeType $adjustmentDetail
     * @return \ammonkc\otaehi\StructType\AdjustmentDetails
     */
    public function setAdjustmentDetail(\ammonkc\otaehi\StructType\VehicleChargeType $adjustmentDetail = null)
    {
        $this->AdjustmentDetail = $adjustmentDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\AdjustmentDetails
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
