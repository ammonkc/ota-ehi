<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageFee StructType
 * @subpackage Structs
 */
class CoverageFee extends AbstractStructBase
{
    /**
     * The Charge
     * @var mixed
     */
    public $Charge;
    /**
     * The Vehicles
     * @var \Ammonkc\Otaehi\StructType\Vehicles
     */
    public $Vehicles;
    /**
     * The Deductible
     * @var mixed
     */
    public $Deductible;
    /**
     * Constructor method for CoverageFee
     * @uses CoverageFee::setCharge()
     * @uses CoverageFee::setVehicles()
     * @uses CoverageFee::setDeductible()
     * @param mixed $charge
     * @param \Ammonkc\Otaehi\StructType\Vehicles $vehicles
     * @param mixed $deductible
     */
    public function __construct($charge = null, \Ammonkc\Otaehi\StructType\Vehicles $vehicles = null, $deductible = null)
    {
        $this
            ->setCharge($charge)
            ->setVehicles($vehicles)
            ->setDeductible($deductible);
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \Ammonkc\Otaehi\StructType\CoverageFee
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Get Vehicles value
     * @return \Ammonkc\Otaehi\StructType\Vehicles|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \Ammonkc\Otaehi\StructType\Vehicles $vehicles
     * @return \Ammonkc\Otaehi\StructType\CoverageFee
     */
    public function setVehicles(\Ammonkc\Otaehi\StructType\Vehicles $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Get Deductible value
     * @return mixed|null
     */
    public function getDeductible()
    {
        return $this->Deductible;
    }
    /**
     * Set Deductible value
     * @param mixed $deductible
     * @return \Ammonkc\Otaehi\StructType\CoverageFee
     */
    public function setDeductible($deductible = null)
    {
        $this->Deductible = $deductible;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CoverageFee
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
