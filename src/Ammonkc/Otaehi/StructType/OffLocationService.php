<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocationService StructType
 * @subpackage Structs
 */
class OffLocationService extends AbstractStructBase
{
    /**
     * The OffLocServiceDesc
     * @var \Ammonkc\Otaehi\StructType\OffLocServiceDesc
     */
    public $OffLocServiceDesc;
    /**
     * The OperationSchedules
     * @var \Ammonkc\Otaehi\StructType\OperationSchedulesType
     */
    public $OperationSchedules;
    /**
     * The OffLocServiceCharges
     * @var \Ammonkc\Otaehi\StructType\OffLocServiceCharges
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
     * @param \Ammonkc\Otaehi\StructType\OffLocServiceDesc $offLocServiceDesc
     * @param \Ammonkc\Otaehi\StructType\OperationSchedulesType $operationSchedules
     * @param \Ammonkc\Otaehi\StructType\OffLocServiceCharges $offLocServiceCharges
     * @param OffLocationServiceID_Type $type
     */
    public function __construct(\Ammonkc\Otaehi\StructType\OffLocServiceDesc $offLocServiceDesc = null, \Ammonkc\Otaehi\StructType\OperationSchedulesType $operationSchedules = null, \Ammonkc\Otaehi\StructType\OffLocServiceCharges $offLocServiceCharges = null, OffLocationServiceID_Type $type = null)
    {
        $this
            ->setOffLocServiceDesc($offLocServiceDesc)
            ->setOperationSchedules($operationSchedules)
            ->setOffLocServiceCharges($offLocServiceCharges)
            ->setType($type);
    }
    /**
     * Get OffLocServiceDesc value
     * @return \Ammonkc\Otaehi\StructType\OffLocServiceDesc|null
     */
    public function getOffLocServiceDesc()
    {
        return $this->OffLocServiceDesc;
    }
    /**
     * Set OffLocServiceDesc value
     * @param \Ammonkc\Otaehi\StructType\OffLocServiceDesc $offLocServiceDesc
     * @return \Ammonkc\Otaehi\StructType\OffLocationService
     */
    public function setOffLocServiceDesc(\Ammonkc\Otaehi\StructType\OffLocServiceDesc $offLocServiceDesc = null)
    {
        $this->OffLocServiceDesc = $offLocServiceDesc;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return \Ammonkc\Otaehi\StructType\OperationSchedulesType|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param \Ammonkc\Otaehi\StructType\OperationSchedulesType $operationSchedules
     * @return \Ammonkc\Otaehi\StructType\OffLocationService
     */
    public function setOperationSchedules(\Ammonkc\Otaehi\StructType\OperationSchedulesType $operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get OffLocServiceCharges value
     * @return \Ammonkc\Otaehi\StructType\OffLocServiceCharges|null
     */
    public function getOffLocServiceCharges()
    {
        return $this->OffLocServiceCharges;
    }
    /**
     * Set OffLocServiceCharges value
     * @param \Ammonkc\Otaehi\StructType\OffLocServiceCharges $offLocServiceCharges
     * @return \Ammonkc\Otaehi\StructType\OffLocationService
     */
    public function setOffLocServiceCharges(\Ammonkc\Otaehi\StructType\OffLocServiceCharges $offLocServiceCharges = null)
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
     * @return \Ammonkc\Otaehi\StructType\OffLocationService
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
     * @return \Ammonkc\Otaehi\StructType\OffLocationService
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
