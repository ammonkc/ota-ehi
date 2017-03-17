<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehAvails StructType
 * @subpackage Structs
 */
class VehAvails extends AbstractStructBase
{
    /**
     * The VehAvail
     * @var \ammonkc\otaehi\StructType\VehAvail
     */
    public $VehAvail;
    /**
     * The RateCategory
     * @var UNKNOWN
     */
    public $RateCategory;
    /**
     * The RatePeriod
     * @var UNKNOWN
     */
    public $RatePeriod;
    /**
     * Constructor method for VehAvails
     * @uses VehAvails::setVehAvail()
     * @uses VehAvails::setRateCategory()
     * @uses VehAvails::setRatePeriod()
     * @param \ammonkc\otaehi\StructType\VehAvail $vehAvail
     * @param UNKNOWN $rateCategory
     * @param UNKNOWN $ratePeriod
     */
    public function __construct(\ammonkc\otaehi\StructType\VehAvail $vehAvail = null, UNKNOWN $rateCategory = null, UNKNOWN $ratePeriod = null)
    {
        $this
            ->setVehAvail($vehAvail)
            ->setRateCategory($rateCategory)
            ->setRatePeriod($ratePeriod);
    }
    /**
     * Get VehAvail value
     * @return \ammonkc\otaehi\StructType\VehAvail|null
     */
    public function getVehAvail()
    {
        return $this->VehAvail;
    }
    /**
     * Set VehAvail value
     * @param \ammonkc\otaehi\StructType\VehAvail $vehAvail
     * @return \ammonkc\otaehi\StructType\VehAvails
     */
    public function setVehAvail(\ammonkc\otaehi\StructType\VehAvail $vehAvail = null)
    {
        $this->VehAvail = $vehAvail;
        return $this;
    }
    /**
     * Get RateCategory value
     * @return UNKNOWN|null
     */
    public function getRateCategory()
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param UNKNOWN $rateCategory
     * @return \ammonkc\otaehi\StructType\VehAvails
     */
    public function setRateCategory(UNKNOWN $rateCategory = null)
    {
        $this->RateCategory = $rateCategory;
        return $this;
    }
    /**
     * Get RatePeriod value
     * @return UNKNOWN|null
     */
    public function getRatePeriod()
    {
        return $this->RatePeriod;
    }
    /**
     * Set RatePeriod value
     * @param UNKNOWN $ratePeriod
     * @return \ammonkc\otaehi\StructType\VehAvails
     */
    public function setRatePeriod(UNKNOWN $ratePeriod = null)
    {
        $this->RatePeriod = $ratePeriod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehAvails
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
