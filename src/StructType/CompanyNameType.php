<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyNameType StructType
 * @subpackage Structs
 */
class CompanyNameType extends AbstractStructBase
{
    /**
     * The Division
     * @var
     */
    public $Division;
    /**
     * The Department
     * @var
     */
    public $Department;
    /**
     * Constructor method for CompanyNameType
     * @uses CompanyNameType::setDivision()
     * @uses CompanyNameType::setDepartment()
     * @param  $division
     * @param  $department
     */
    public function __construct( $division = null,  $department = null)
    {
        $this->setDivision($division)
             ->setDepartment($department);
    }
    /**
     * Get Division value
     * @return |null
     */
    public function getDivision()
    {
        return $this->Division;
    }
    /**
     * Set Division value
     * @param  $division
     * @return \Ammonkc\Otaehi\StructType\CompanyNameType
     */
    public function setDivision( $division = null)
    {
        $this->Division = $division;
        return $this;
    }
    /**
     * Get Department value
     * @return |null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param  $department
     * @return \Ammonkc\Otaehi\StructType\CompanyNameType
     */
    public function setDepartment( $department = null)
    {
        $this->Department = $department;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CompanyNameType
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
