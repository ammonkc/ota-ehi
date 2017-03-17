<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageWeightType StructType
 * @subpackage Structs
 */
class BaggageWeightType extends AbstractStructBase
{
    /**
     * The ApproxInd
     * @var bool
     */
    public $ApproxInd;
    /**
     * The Weight
     * @var float
     */
    public $Weight;
    /**
     * Constructor method for BaggageWeightType
     * @uses BaggageWeightType::setApproxInd()
     * @uses BaggageWeightType::setWeight()
     * @param bool $approxInd
     * @param float $weight
     */
    public function __construct($approxInd = null, $weight = null)
    {
        $this
            ->setApproxInd($approxInd)
            ->setWeight($weight);
    }
    /**
     * Get ApproxInd value
     * @return bool|null
     */
    public function getApproxInd()
    {
        return $this->ApproxInd;
    }
    /**
     * Set ApproxInd value
     * @param bool $approxInd
     * @return \ammonkc\otaehi\StructType\BaggageWeightType
     */
    public function setApproxInd($approxInd = null)
    {
        $this->ApproxInd = $approxInd;
        return $this;
    }
    /**
     * Get Weight value
     * @return float|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param float $weight
     * @return \ammonkc\otaehi\StructType\BaggageWeightType
     */
    public function setWeight($weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\BaggageWeightType
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
