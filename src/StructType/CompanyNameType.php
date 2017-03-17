<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyNameType StructType
 * @subpackage Structs
 */
class CompanyNameType extends AbstractStructBase
{
    /**
     * The Division
     * @var UNKNOWN
     */
    public $Division;
    /**
     * The Department
     * @var UNKNOWN
     */
    public $Department;
    /**
     * Constructor method for CompanyNameType
     * @uses CompanyNameType::setDivision()
     * @uses CompanyNameType::setDepartment()
     * @param UNKNOWN $division
     * @param UNKNOWN $department
     */
    public function __construct(UNKNOWN $division = null, UNKNOWN $department = null)
    {
        $this
            ->setDivision($division)
            ->setDepartment($department);
    }
    /**
     * Get Division value
     * @return UNKNOWN|null
     */
    public function getDivision()
    {
        return $this->Division;
    }
    /**
     * Set Division value
     * @param UNKNOWN $division
     * @return \ammonkc\otaehi\StructType\CompanyNameType
     */
    public function setDivision(UNKNOWN $division = null)
    {
        $this->Division = $division;
        return $this;
    }
    /**
     * Get Department value
     * @return UNKNOWN|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param UNKNOWN $department
     * @return \ammonkc\otaehi\StructType\CompanyNameType
     */
    public function setDepartment(UNKNOWN $department = null)
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
     * @return \ammonkc\otaehi\StructType\CompanyNameType
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
