<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateTimeSpanType StructType
 * @subpackage Structs
 */
class DateTimeSpanType extends AbstractStructBase
{
    /**
     * The DateWindowRange
     * @var mixed
     */
    public $DateWindowRange;
    /**
     * The StartDateWindow
     * @var \ammonkc\otaehi\StructType\StartDateWindow
     */
    public $StartDateWindow;
    /**
     * The EndDateWindow
     * @var \ammonkc\otaehi\StructType\EndDateWindow
     */
    public $EndDateWindow;
    /**
     * Constructor method for DateTimeSpanType
     * @uses DateTimeSpanType::setDateWindowRange()
     * @uses DateTimeSpanType::setStartDateWindow()
     * @uses DateTimeSpanType::setEndDateWindow()
     * @param mixed $dateWindowRange
     * @param \ammonkc\otaehi\StructType\StartDateWindow $startDateWindow
     * @param \ammonkc\otaehi\StructType\EndDateWindow $endDateWindow
     */
    public function __construct($dateWindowRange = null, \ammonkc\otaehi\StructType\StartDateWindow $startDateWindow = null, \ammonkc\otaehi\StructType\EndDateWindow $endDateWindow = null)
    {
        $this
            ->setDateWindowRange($dateWindowRange)
            ->setStartDateWindow($startDateWindow)
            ->setEndDateWindow($endDateWindow);
    }
    /**
     * Get DateWindowRange value
     * @return mixed|null
     */
    public function getDateWindowRange()
    {
        return $this->DateWindowRange;
    }
    /**
     * Set DateWindowRange value
     * @param mixed $dateWindowRange
     * @return \ammonkc\otaehi\StructType\DateTimeSpanType
     */
    public function setDateWindowRange($dateWindowRange = null)
    {
        $this->DateWindowRange = $dateWindowRange;
        return $this;
    }
    /**
     * Get StartDateWindow value
     * @return \ammonkc\otaehi\StructType\StartDateWindow|null
     */
    public function getStartDateWindow()
    {
        return $this->StartDateWindow;
    }
    /**
     * Set StartDateWindow value
     * @param \ammonkc\otaehi\StructType\StartDateWindow $startDateWindow
     * @return \ammonkc\otaehi\StructType\DateTimeSpanType
     */
    public function setStartDateWindow(\ammonkc\otaehi\StructType\StartDateWindow $startDateWindow = null)
    {
        $this->StartDateWindow = $startDateWindow;
        return $this;
    }
    /**
     * Get EndDateWindow value
     * @return \ammonkc\otaehi\StructType\EndDateWindow|null
     */
    public function getEndDateWindow()
    {
        return $this->EndDateWindow;
    }
    /**
     * Set EndDateWindow value
     * @param \ammonkc\otaehi\StructType\EndDateWindow $endDateWindow
     * @return \ammonkc\otaehi\StructType\DateTimeSpanType
     */
    public function setEndDateWindow(\ammonkc\otaehi\StructType\EndDateWindow $endDateWindow = null)
    {
        $this->EndDateWindow = $endDateWindow;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\DateTimeSpanType
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
