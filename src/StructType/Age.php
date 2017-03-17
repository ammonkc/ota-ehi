<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Age StructType
 * @subpackage Structs
 */
class Age extends AbstractStructBase
{
    /**
     * The AgeSurcharge
     * @var \ammonkc\otaehi\StructType\AgeSurcharge
     */
    public $AgeSurcharge;
    /**
     * The AgeInfos
     * @var \ammonkc\otaehi\StructType\AgeInfos
     */
    public $AgeInfos;
    /**
     * The Vehicles
     * @var \ammonkc\otaehi\StructType\Vehicles
     */
    public $Vehicles;
    /**
     * The MinimumAge
     * @var int
     */
    public $MinimumAge;
    /**
     * The MaximumAge
     * @var int
     */
    public $MaximumAge;
    /**
     * Constructor method for Age
     * @uses Age::setAgeSurcharge()
     * @uses Age::setAgeInfos()
     * @uses Age::setVehicles()
     * @uses Age::setMinimumAge()
     * @uses Age::setMaximumAge()
     * @param \ammonkc\otaehi\StructType\AgeSurcharge $ageSurcharge
     * @param \ammonkc\otaehi\StructType\AgeInfos $ageInfos
     * @param \ammonkc\otaehi\StructType\Vehicles $vehicles
     * @param int $minimumAge
     * @param int $maximumAge
     */
    public function __construct(\ammonkc\otaehi\StructType\AgeSurcharge $ageSurcharge = null, \ammonkc\otaehi\StructType\AgeInfos $ageInfos = null, \ammonkc\otaehi\StructType\Vehicles $vehicles = null, $minimumAge = null, $maximumAge = null)
    {
        $this
            ->setAgeSurcharge($ageSurcharge)
            ->setAgeInfos($ageInfos)
            ->setVehicles($vehicles)
            ->setMinimumAge($minimumAge)
            ->setMaximumAge($maximumAge);
    }
    /**
     * Get AgeSurcharge value
     * @return \ammonkc\otaehi\StructType\AgeSurcharge|null
     */
    public function getAgeSurcharge()
    {
        return $this->AgeSurcharge;
    }
    /**
     * Set AgeSurcharge value
     * @param \ammonkc\otaehi\StructType\AgeSurcharge $ageSurcharge
     * @return \ammonkc\otaehi\StructType\Age
     */
    public function setAgeSurcharge(\ammonkc\otaehi\StructType\AgeSurcharge $ageSurcharge = null)
    {
        $this->AgeSurcharge = $ageSurcharge;
        return $this;
    }
    /**
     * Get AgeInfos value
     * @return \ammonkc\otaehi\StructType\AgeInfos|null
     */
    public function getAgeInfos()
    {
        return $this->AgeInfos;
    }
    /**
     * Set AgeInfos value
     * @param \ammonkc\otaehi\StructType\AgeInfos $ageInfos
     * @return \ammonkc\otaehi\StructType\Age
     */
    public function setAgeInfos(\ammonkc\otaehi\StructType\AgeInfos $ageInfos = null)
    {
        $this->AgeInfos = $ageInfos;
        return $this;
    }
    /**
     * Get Vehicles value
     * @return \ammonkc\otaehi\StructType\Vehicles|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \ammonkc\otaehi\StructType\Vehicles $vehicles
     * @return \ammonkc\otaehi\StructType\Age
     */
    public function setVehicles(\ammonkc\otaehi\StructType\Vehicles $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Get MinimumAge value
     * @return int|null
     */
    public function getMinimumAge()
    {
        return $this->MinimumAge;
    }
    /**
     * Set MinimumAge value
     * @param int $minimumAge
     * @return \ammonkc\otaehi\StructType\Age
     */
    public function setMinimumAge($minimumAge = null)
    {
        // validation for constraint: int
        if (!is_null($minimumAge) && !is_numeric($minimumAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumAge)), __LINE__);
        }
        $this->MinimumAge = $minimumAge;
        return $this;
    }
    /**
     * Get MaximumAge value
     * @return int|null
     */
    public function getMaximumAge()
    {
        return $this->MaximumAge;
    }
    /**
     * Set MaximumAge value
     * @param int $maximumAge
     * @return \ammonkc\otaehi\StructType\Age
     */
    public function setMaximumAge($maximumAge = null)
    {
        // validation for constraint: int
        if (!is_null($maximumAge) && !is_numeric($maximumAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumAge)), __LINE__);
        }
        $this->MaximumAge = $maximumAge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Age
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
