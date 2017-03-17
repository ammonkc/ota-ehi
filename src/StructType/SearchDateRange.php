<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDateRange StructType
 * @subpackage Structs
 */
class SearchDateRange extends AbstractStructBase
{
    /**
     * The SearchQualifier
     * @var string
     */
    public $SearchQualifier;
    /**
     * The Start
     * @var UNKNOWN
     */
    public $Start;
    /**
     * The Duration
     * @var UNKNOWN
     */
    public $Duration;
    /**
     * The End
     * @var UNKNOWN
     */
    public $End;
    /**
     * Constructor method for SearchDateRange
     * @uses SearchDateRange::setSearchQualifier()
     * @uses SearchDateRange::setStart()
     * @uses SearchDateRange::setDuration()
     * @uses SearchDateRange::setEnd()
     * @param string $searchQualifier
     * @param UNKNOWN $start
     * @param UNKNOWN $duration
     * @param UNKNOWN $end
     */
    public function __construct($searchQualifier = null, UNKNOWN $start = null, UNKNOWN $duration = null, UNKNOWN $end = null)
    {
        $this
            ->setSearchQualifier($searchQualifier)
            ->setStart($start)
            ->setDuration($duration)
            ->setEnd($end);
    }
    /**
     * Get SearchQualifier value
     * @return string|null
     */
    public function getSearchQualifier()
    {
        return $this->SearchQualifier;
    }
    /**
     * Set SearchQualifier value
     * @param string $searchQualifier
     * @return \ammonkc\otaehi\StructType\SearchDateRange
     */
    public function setSearchQualifier($searchQualifier = null)
    {
        // validation for constraint: string
        if (!is_null($searchQualifier) && !is_string($searchQualifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchQualifier)), __LINE__);
        }
        $this->SearchQualifier = $searchQualifier;
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
     * @return \ammonkc\otaehi\StructType\SearchDateRange
     */
    public function setStart(UNKNOWN $start = null)
    {
        $this->Start = $start;
        return $this;
    }
    /**
     * Get Duration value
     * @return UNKNOWN|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param UNKNOWN $duration
     * @return \ammonkc\otaehi\StructType\SearchDateRange
     */
    public function setDuration(UNKNOWN $duration = null)
    {
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
     * @return \ammonkc\otaehi\StructType\SearchDateRange
     */
    public function setEnd(UNKNOWN $end = null)
    {
        $this->End = $end;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\SearchDateRange
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
