<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleChargePurposeType StructType
 * @subpackage Structs
 */
class VehicleChargePurposeType extends AbstractStructBase
{
    /**
     * The Purpose
     * @var
     */
    public $Purpose;
    /**
     * The RequiredInd
     * @var bool
     */
    public $RequiredInd;
    /**
     * Constructor method for VehicleChargePurposeType
     * @uses VehicleChargePurposeType::setPurpose()
     * @uses VehicleChargePurposeType::setRequiredInd()
     * @param  $purpose
     * @param bool $requiredInd
     */
    public function __construct( $purpose = null, $requiredInd = null)
    {
        $this
            ->setPurpose($purpose)
            ->setRequiredInd($requiredInd);
    }
    /**
     * Get Purpose value
     * @return |null
     */
    public function getPurpose()
    {
        return $this->Purpose;
    }
    /**
     * Set Purpose value
     * @param  $purpose
     * @return \Ammonkc\Otaehi\StructType\VehicleChargePurposeType
     */
    public function setPurpose( $purpose = null)
    {
        $this->Purpose = $purpose;
        return $this;
    }
    /**
     * Get RequiredInd value
     * @return bool|null
     */
    public function getRequiredInd()
    {
        return $this->RequiredInd;
    }
    /**
     * Set RequiredInd value
     * @param bool $requiredInd
     * @return \Ammonkc\Otaehi\StructType\VehicleChargePurposeType
     */
    public function setRequiredInd($requiredInd = null)
    {
        $this->RequiredInd = $requiredInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleChargePurposeType
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
