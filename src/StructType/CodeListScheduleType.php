<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodeListScheduleType StructType
 * @subpackage Structs
 */
class CodeListScheduleType extends AbstractStructBase
{
    /**
     * The OperationTimes
     * @var \Ammonkc\Otaehi\StructType\OperationTimes
     */
    public $OperationTimes;
    /**
     * The Start
     * @var UNKNOWN
     */
    public $Start;
    /**
     * The Duration
     * @var string
     */
    public $Duration;
    /**
     * The End
     * @var UNKNOWN
     */
    public $End;
    /**
     * The FeeRefRPH
     * @var string
     */
    public $FeeRefRPH;
    /**
     * The ScheduleRPH
     * @var string
     */
    public $ScheduleRPH;
    /**
     * Constructor method for CodeListScheduleType
     * @uses CodeListScheduleType::setOperationTimes()
     * @uses CodeListScheduleType::setStart()
     * @uses CodeListScheduleType::setDuration()
     * @uses CodeListScheduleType::setEnd()
     * @uses CodeListScheduleType::setFeeRefRPH()
     * @uses CodeListScheduleType::setScheduleRPH()
     * @param \Ammonkc\Otaehi\StructType\OperationTimes $operationTimes
     * @param UNKNOWN $start
     * @param string $duration
     * @param UNKNOWN $end
     * @param string $feeRefRPH
     * @param string $scheduleRPH
     */
    public function __construct(\Ammonkc\Otaehi\StructType\OperationTimes $operationTimes = null, UNKNOWN $start = null, $duration = null, UNKNOWN $end = null, $feeRefRPH = null, $scheduleRPH = null)
    {
        $this
            ->setOperationTimes($operationTimes)
            ->setStart($start)
            ->setDuration($duration)
            ->setEnd($end)
            ->setFeeRefRPH($feeRefRPH)
            ->setScheduleRPH($scheduleRPH);
    }
    /**
     * Get OperationTimes value
     * @return \Ammonkc\Otaehi\StructType\OperationTimes|null
     */
    public function getOperationTimes()
    {
        return $this->OperationTimes;
    }
    /**
     * Set OperationTimes value
     * @param \Ammonkc\Otaehi\StructType\OperationTimes $operationTimes
     * @return \Ammonkc\Otaehi\StructType\CodeListScheduleType
     */
    public function setOperationTimes(\Ammonkc\Otaehi\StructType\OperationTimes $operationTimes = null)
    {
        $this->OperationTimes = $operationTimes;
        return $this;
    }
    /**
     * Get Start value
     * @return UNKNOWN|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param UNKNOWN $start
     * @return \Ammonkc\Otaehi\StructType\CodeListScheduleType
     */
    public function setStart(UNKNOWN $start = null)
    {
        $this->Start = $start;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Ammonkc\Otaehi\StructType\CodeListScheduleType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get End value
     * @return UNKNOWN|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param UNKNOWN $end
     * @return \Ammonkc\Otaehi\StructType\CodeListScheduleType
     */
    public function setEnd(UNKNOWN $end = null)
    {
        $this->End = $end;
        return $this;
    }
    /**
     * Get FeeRefRPH value
     * @return string|null
     */
    public function getFeeRefRPH()
    {
        return $this->FeeRefRPH;
    }
    /**
     * Set FeeRefRPH value
     * @param string $feeRefRPH
     * @return \Ammonkc\Otaehi\StructType\CodeListScheduleType
     */
    public function setFeeRefRPH($feeRefRPH = null)
    {
        // validation for constraint: string
        if (!is_null($feeRefRPH) && !is_string($feeRefRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeRefRPH)), __LINE__);
        }
        $this->FeeRefRPH = $feeRefRPH;
        return $this;
    }
    /**
     * Get ScheduleRPH value
     * @return string|null
     */
    public function getScheduleRPH()
    {
        return $this->ScheduleRPH;
    }
    /**
     * Set ScheduleRPH value
     * @param string $scheduleRPH
     * @return \Ammonkc\Otaehi\StructType\CodeListScheduleType
     */
    public function setScheduleRPH($scheduleRPH = null)
    {
        // validation for constraint: string
        if (!is_null($scheduleRPH) && !is_string($scheduleRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scheduleRPH)), __LINE__);
        }
        $this->ScheduleRPH = $scheduleRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CodeListScheduleType
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
