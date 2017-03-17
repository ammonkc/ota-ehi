<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vehicle StructType
 * @subpackage Structs
 */
class Vehicle extends AbstractStructBase
{
    /**
     * The Class
     * @var \ammonkc\otaehi\StructType\_Class
     */
    public $Class;
    /**
     * The Make
     * @var \ammonkc\otaehi\StructType\Make
     */
    public $Make;
    /**
     * The Model
     * @var \ammonkc\otaehi\StructType\Model
     */
    public $Model;
    /**
     * The IncludeExclude
     * @var UNKNOWN
     */
    public $IncludeExclude;
    /**
     * The Text
     * @var mixed
     */
    public $Text;
    /**
     * The IsConfirmableInd
     * @var bool
     */
    public $IsConfirmableInd;
    /**
     * The DistanceUnit
     * @var UNKNOWN
     */
    public $DistanceUnit;
    /**
     * The DistancePerFuelUnit
     * @var UNKNOWN
     */
    public $DistancePerFuelUnit;
    /**
     * The VehRentalDetails
     * @var mixed
     */
    public $VehRentalDetails;
    /**
     * Constructor method for Vehicle
     * @uses Vehicle::setClass()
     * @uses Vehicle::setMake()
     * @uses Vehicle::setModel()
     * @uses Vehicle::setIncludeExclude()
     * @uses Vehicle::setText()
     * @uses Vehicle::setIsConfirmableInd()
     * @uses Vehicle::setDistanceUnit()
     * @uses Vehicle::setDistancePerFuelUnit()
     * @uses Vehicle::setVehRentalDetails()
     * @param \ammonkc\otaehi\StructType\_Class $class
     * @param \ammonkc\otaehi\StructType\Make $make
     * @param \ammonkc\otaehi\StructType\Model $model
     * @param UNKNOWN $includeExclude
     * @param mixed $text
     * @param bool $isConfirmableInd
     * @param UNKNOWN $distanceUnit
     * @param UNKNOWN $distancePerFuelUnit
     * @param mixed $vehRentalDetails
     */
    public function __construct(\ammonkc\otaehi\StructType\_Class $class = null, \ammonkc\otaehi\StructType\Make $make = null, \ammonkc\otaehi\StructType\Model $model = null, UNKNOWN $includeExclude = null, $text = null, $isConfirmableInd = null, UNKNOWN $distanceUnit = null, UNKNOWN $distancePerFuelUnit = null, $vehRentalDetails = null)
    {
        $this
            ->setClass($class)
            ->setMake($make)
            ->setModel($model)
            ->setIncludeExclude($includeExclude)
            ->setText($text)
            ->setIsConfirmableInd($isConfirmableInd)
            ->setDistanceUnit($distanceUnit)
            ->setDistancePerFuelUnit($distancePerFuelUnit)
            ->setVehRentalDetails($vehRentalDetails);
    }
    /**
     * Get Class value
     * @return \ammonkc\otaehi\StructType\_Class|null
     */
    public function getClass()
    {
        return $this->Class;
    }
    /**
     * Set Class value
     * @param \ammonkc\otaehi\StructType\_Class $class
     * @return \ammonkc\otaehi\StructType\Vehicle
     */
    public function setClass(\ammonkc\otaehi\StructType\_Class $class = null)
    {
        $this->Class = $class;
        return $this;
    }
    /**
     * Get Make value
     * @return \ammonkc\otaehi\StructType\Make|null
     */
    public function getMake()
    {
        return $this->Make;
    }
    /**
     * Set Make value
     * @param \ammonkc\otaehi\StructType\Make $make
     * @return \ammonkc\otaehi\StructType\Vehicle
     */
    public function setMake(\ammonkc\otaehi\StructType\Make $make = null)
    {
        $this->Make = $make;
        return $this;
    }
    /**
     * Get Model value
     * @return \ammonkc\otaehi\StructType\Model|null
     */
    public function getModel()
    {
        return $this->Model;
    }
    /**
     * Set Model value
     * @param \ammonkc\otaehi\StructType\Model $model
     * @return \ammonkc\otaehi\StructType\Vehicle
     */
    public function setModel(\ammonkc\otaehi\StructType\Model $model = null)
    {
        $this->Model = $model;
        return $this;
    }
    /**
     * Get IncludeExclude value
     * @return UNKNOWN|null
     */
    public function getIncludeExclude()
    {
        return $this->IncludeExclude;
    }
    /**
     * Set IncludeExclude value
     * @param UNKNOWN $includeExclude
     * @return \ammonkc\otaehi\StructType\Vehicle
     */
    public function setIncludeExclude(UNKNOWN $includeExclude = null)
    {
        $this->IncludeExclude = $includeExclude;
        return $this;
    }
    /**
     * Get Text value
     * @return mixed|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param mixed $text
     * @return \ammonkc\otaehi\StructType\Vehicle
     */
    public function setText($text = null)
    {
        $this->Text = $text;
        return $this;
    }
    /**
     * Get IsConfirmableInd value
     * @return bool|null
     */
    public function getIsConfirmableInd()
    {
        return $this->IsConfirmableInd;
    }
    /**
     * Set IsConfirmableInd value
     * @param bool $isConfirmableInd
     * @return \ammonkc\otaehi\StructType\Vehicle
     */
    public function setIsConfirmableInd($isConfirmableInd = null)
    {
        $this->IsConfirmableInd = $isConfirmableInd;
        return $this;
    }
    /**
     * Get DistanceUnit value
     * @return UNKNOWN|null
     */
    public function getDistanceUnit()
    {
        return $this->DistanceUnit;
    }
    /**
     * Set DistanceUnit value
     * @param UNKNOWN $distanceUnit
     * @return \ammonkc\otaehi\StructType\Vehicle
     */
    public function setDistanceUnit(UNKNOWN $distanceUnit = null)
    {
        $this->DistanceUnit = $distanceUnit;
        return $this;
    }
    /**
     * Get DistancePerFuelUnit value
     * @return UNKNOWN|null
     */
    public function getDistancePerFuelUnit()
    {
        return $this->DistancePerFuelUnit;
    }
    /**
     * Set DistancePerFuelUnit value
     * @param UNKNOWN $distancePerFuelUnit
     * @return \ammonkc\otaehi\StructType\Vehicle
     */
    public function setDistancePerFuelUnit(UNKNOWN $distancePerFuelUnit = null)
    {
        $this->DistancePerFuelUnit = $distancePerFuelUnit;
        return $this;
    }
    /**
     * Get VehRentalDetails value
     * @return mixed|null
     */
    public function getVehRentalDetails()
    {
        return $this->VehRentalDetails;
    }
    /**
     * Set VehRentalDetails value
     * @param mixed $vehRentalDetails
     * @return \ammonkc\otaehi\StructType\Vehicle
     */
    public function setVehRentalDetails($vehRentalDetails = null)
    {
        $this->VehRentalDetails = $vehRentalDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Vehicle
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
