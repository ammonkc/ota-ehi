<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeeInfoType StructType
 * @subpackage Structs
 */
class EmployeeInfoType extends AbstractStructBase
{
    /**
     * The EmployeeId
     * @var
     */
    public $EmployeeId;
    /**
     * The EmployeeLevel
     * @var
     */
    public $EmployeeLevel;
    /**
     * The EmployeeTitle
     * @var
     */
    public $EmployeeTitle;
    /**
     * The EmployeeStatus
     * @var
     */
    public $EmployeeStatus;
    /**
     * Constructor method for EmployeeInfoType
     * @uses EmployeeInfoType::setEmployeeId()
     * @uses EmployeeInfoType::setEmployeeLevel()
     * @uses EmployeeInfoType::setEmployeeTitle()
     * @uses EmployeeInfoType::setEmployeeStatus()
     * @param  $employeeId
     * @param  $employeeLevel
     * @param  $employeeTitle
     * @param  $employeeStatus
     */
    public function __construct( $employeeId = null,  $employeeLevel = null,  $employeeTitle = null,  $employeeStatus = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setEmployeeLevel($employeeLevel)
            ->setEmployeeTitle($employeeTitle)
            ->setEmployeeStatus($employeeStatus);
    }
    /**
     * Get EmployeeId value
     * @return |null
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }
    /**
     * Set EmployeeId value
     * @param  $employeeId
     * @return \Ammonkc\Otaehi\StructType\EmployeeInfoType
     */
    public function setEmployeeId( $employeeId = null)
    {
        $this->EmployeeId = $employeeId;
        return $this;
    }
    /**
     * Get EmployeeLevel value
     * @return |null
     */
    public function getEmployeeLevel()
    {
        return $this->EmployeeLevel;
    }
    /**
     * Set EmployeeLevel value
     * @param  $employeeLevel
     * @return \Ammonkc\Otaehi\StructType\EmployeeInfoType
     */
    public function setEmployeeLevel( $employeeLevel = null)
    {
        $this->EmployeeLevel = $employeeLevel;
        return $this;
    }
    /**
     * Get EmployeeTitle value
     * @return |null
     */
    public function getEmployeeTitle()
    {
        return $this->EmployeeTitle;
    }
    /**
     * Set EmployeeTitle value
     * @param  $employeeTitle
     * @return \Ammonkc\Otaehi\StructType\EmployeeInfoType
     */
    public function setEmployeeTitle( $employeeTitle = null)
    {
        $this->EmployeeTitle = $employeeTitle;
        return $this;
    }
    /**
     * Get EmployeeStatus value
     * @return |null
     */
    public function getEmployeeStatus()
    {
        return $this->EmployeeStatus;
    }
    /**
     * Set EmployeeStatus value
     * @param  $employeeStatus
     * @return \Ammonkc\Otaehi\StructType\EmployeeInfoType
     */
    public function setEmployeeStatus( $employeeStatus = null)
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
     * @return \Ammonkc\Otaehi\StructType\EmployeeInfoType
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
