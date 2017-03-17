<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeInfoType StructType
 * @subpackage Structs
 */
class EmployeeInfoType extends AbstractStructBase
{
    /**
     * The EmployeeId
     * @var UNKNOWN
     */
    public $EmployeeId;
    /**
     * The EmployeeLevel
     * @var UNKNOWN
     */
    public $EmployeeLevel;
    /**
     * The EmployeeTitle
     * @var UNKNOWN
     */
    public $EmployeeTitle;
    /**
     * The EmployeeStatus
     * @var UNKNOWN
     */
    public $EmployeeStatus;
    /**
     * Constructor method for EmployeeInfoType
     * @uses EmployeeInfoType::setEmployeeId()
     * @uses EmployeeInfoType::setEmployeeLevel()
     * @uses EmployeeInfoType::setEmployeeTitle()
     * @uses EmployeeInfoType::setEmployeeStatus()
     * @param UNKNOWN $employeeId
     * @param UNKNOWN $employeeLevel
     * @param UNKNOWN $employeeTitle
     * @param UNKNOWN $employeeStatus
     */
    public function __construct(UNKNOWN $employeeId = null, UNKNOWN $employeeLevel = null, UNKNOWN $employeeTitle = null, UNKNOWN $employeeStatus = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setEmployeeLevel($employeeLevel)
            ->setEmployeeTitle($employeeTitle)
            ->setEmployeeStatus($employeeStatus);
    }
    /**
     * Get EmployeeId value
     * @return UNKNOWN|null
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }
    /**
     * Set EmployeeId value
     * @param UNKNOWN $employeeId
     * @return \ammonkc\otaehi\StructType\EmployeeInfoType
     */
    public function setEmployeeId(UNKNOWN $employeeId = null)
    {
        $this->EmployeeId = $employeeId;
        return $this;
    }
    /**
     * Get EmployeeLevel value
     * @return UNKNOWN|null
     */
    public function getEmployeeLevel()
    {
        return $this->EmployeeLevel;
    }
    /**
     * Set EmployeeLevel value
     * @param UNKNOWN $employeeLevel
     * @return \ammonkc\otaehi\StructType\EmployeeInfoType
     */
    public function setEmployeeLevel(UNKNOWN $employeeLevel = null)
    {
        $this->EmployeeLevel = $employeeLevel;
        return $this;
    }
    /**
     * Get EmployeeTitle value
     * @return UNKNOWN|null
     */
    public function getEmployeeTitle()
    {
        return $this->EmployeeTitle;
    }
    /**
     * Set EmployeeTitle value
     * @param UNKNOWN $employeeTitle
     * @return \ammonkc\otaehi\StructType\EmployeeInfoType
     */
    public function setEmployeeTitle(UNKNOWN $employeeTitle = null)
    {
        $this->EmployeeTitle = $employeeTitle;
        return $this;
    }
    /**
     * Get EmployeeStatus value
     * @return UNKNOWN|null
     */
    public function getEmployeeStatus()
    {
        return $this->EmployeeStatus;
    }
    /**
     * Set EmployeeStatus value
     * @param UNKNOWN $employeeStatus
     * @return \ammonkc\otaehi\StructType\EmployeeInfoType
     */
    public function setEmployeeStatus(UNKNOWN $employeeStatus = null)
    {
        $this->EmployeeStatus = $employeeStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\EmployeeInfoType
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
