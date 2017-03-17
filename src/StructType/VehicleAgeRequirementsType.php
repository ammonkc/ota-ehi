<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAgeRequirementsType StructType
 * @subpackage Structs
 */
class VehicleAgeRequirementsType extends AbstractStructBase
{
    /**
     * The Age
     * @var \ammonkc\otaehi\StructType\Age
     */
    public $Age;
    /**
     * Constructor method for VehicleAgeRequirementsType
     * @uses VehicleAgeRequirementsType::setAge()
     * @param \ammonkc\otaehi\StructType\Age $age
     */
    public function __construct(\ammonkc\otaehi\StructType\Age $age = null)
    {
        $this
            ->setAge($age);
    }
    /**
     * Get Age value
     * @return \ammonkc\otaehi\StructType\Age|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param \ammonkc\otaehi\StructType\Age $age
     * @return \ammonkc\otaehi\StructType\VehicleAgeRequirementsType
     */
    public function setAge(\ammonkc\otaehi\StructType\Age $age = null)
    {
        $this->Age = $age;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleAgeRequirementsType
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
