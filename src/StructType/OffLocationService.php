<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocationService StructType
 * @subpackage Structs
 */
class OffLocationService extends AbstractStructBase
{
    /**
     * The OffLocServiceDesc
     * @var \ammonkc\otaehi\StructType\OffLocServiceDesc
     */
    public $OffLocServiceDesc;
    /**
     * The OperationSchedules
     * @var \ammonkc\otaehi\StructType\OperationSchedulesType
     */
    public $OperationSchedules;
    /**
     * The OffLocServiceCharges
     * @var \ammonkc\otaehi\StructType\OffLocServiceCharges
     */
    public $OffLocServiceCharges;
    /**
     * The Type
     * @var OffLocationServiceID_Type
     */
    public $Type;
    /**
     * Constructor method for OffLocationService
     * @uses OffLocationService::setOffLocServiceDesc()
     * @uses OffLocationService::setOperationSchedules()
     * @uses OffLocationService::setOffLocServiceCharges()
     * @uses OffLocationService::setType()
     * @param \ammonkc\otaehi\StructType\OffLocServiceDesc $offLocServiceDesc
     * @param \ammonkc\otaehi\StructType\OperationSchedulesType $operationSchedules
     * @param \ammonkc\otaehi\StructType\OffLocServiceCharges $offLocServiceCharges
     * @param OffLocationServiceID_Type $type
     */
    public function __construct(\ammonkc\otaehi\StructType\OffLocServiceDesc $offLocServiceDesc = null, \ammonkc\otaehi\StructType\OperationSchedulesType $operationSchedules = null, \ammonkc\otaehi\StructType\OffLocServiceCharges $offLocServiceCharges = null, OffLocationServiceID_Type $type = null)
    {
        $this
            ->setOffLocServiceDesc($offLocServiceDesc)
            ->setOperationSchedules($operationSchedules)
            ->setOffLocServiceCharges($offLocServiceCharges)
            ->setType($type);
    }
    /**
     * Get OffLocServiceDesc value
     * @return \ammonkc\otaehi\StructType\OffLocServiceDesc|null
     */
    public function getOffLocServiceDesc()
    {
        return $this->OffLocServiceDesc;
    }
    /**
     * Set OffLocServiceDesc value
     * @param \ammonkc\otaehi\StructType\OffLocServiceDesc $offLocServiceDesc
     * @return \ammonkc\otaehi\StructType\OffLocationService
     */
    public function setOffLocServiceDesc(\ammonkc\otaehi\StructType\OffLocServiceDesc $offLocServiceDesc = null)
    {
        $this->OffLocServiceDesc = $offLocServiceDesc;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return \ammonkc\otaehi\StructType\OperationSchedulesType|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param \ammonkc\otaehi\StructType\OperationSchedulesType $operationSchedules
     * @return \ammonkc\otaehi\StructType\OffLocationService
     */
    public function setOperationSchedules(\ammonkc\otaehi\StructType\OperationSchedulesType $operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get OffLocServiceCharges value
     * @return \ammonkc\otaehi\StructType\OffLocServiceCharges|null
     */
    public function getOffLocServiceCharges()
    {
        return $this->OffLocServiceCharges;
    }
    /**
     * Set OffLocServiceCharges value
     * @param \ammonkc\otaehi\StructType\OffLocServiceCharges $offLocServiceCharges
     * @return \ammonkc\otaehi\StructType\OffLocationService
     */
    public function setOffLocServiceCharges(\ammonkc\otaehi\StructType\OffLocServiceCharges $offLocServiceCharges = null)
    {
        $this->OffLocServiceCharges = $offLocServiceCharges;
        return $this;
    }
    /**
     * Get Type value
     * @return OffLocationServiceID_Type|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param OffLocationServiceID_Type $type
     * @return \ammonkc\otaehi\StructType\OffLocationService
     */
    public function setType(OffLocationServiceID_Type $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OffLocationService
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
