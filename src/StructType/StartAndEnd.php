<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartAndEnd StructType
 * @subpackage Structs
 */
class StartAndEnd extends AbstractStructBase
{
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * The Duration
     * @var \ammonkc\otaehi\StructType\Duration
     */
    public $Duration;
    /**
     * The StartDateTime
     * @var string
     */
    public $StartDateTime;
    /**
     * Constructor method for StartAndEnd
     * @uses StartAndEnd::setEnd()
     * @uses StartAndEnd::setDuration()
     * @uses StartAndEnd::setStartDateTime()
     * @param string $end
     * @param \ammonkc\otaehi\StructType\Duration $duration
     * @param string $startDateTime
     */
    public function __construct($end = null, \ammonkc\otaehi\StructType\Duration $duration = null, $startDateTime = null)
    {
        $this
            ->setEnd($end)
            ->setDuration($duration)
            ->setStartDateTime($startDateTime);
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \ammonkc\otaehi\StructType\StartAndEnd
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Get Duration value
     * @return \ammonkc\otaehi\StructType\Duration|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param \ammonkc\otaehi\StructType\Duration $duration
     * @return \ammonkc\otaehi\StructType\StartAndEnd
     */
    public function setDuration(\ammonkc\otaehi\StructType\Duration $duration = null)
    {
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get StartDateTime value
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param string $startDateTime
     * @return \ammonkc\otaehi\StructType\StartAndEnd
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDateTime)), __LINE__);
        }
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\StartAndEnd
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
