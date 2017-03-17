<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimePeriod StructType
 * @subpackage Structs
 */
class TimePeriod extends AbstractStructBase
{
    /**
     * The EarliestStart
     * @var \ammonkc\otaehi\StructType\EarliestStart
     */
    public $EarliestStart;
    /**
     * The MaximumDuration
     * @var \ammonkc\otaehi\StructType\MaximumDuration
     */
    public $MaximumDuration;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for TimePeriod
     * @uses TimePeriod::setEarliestStart()
     * @uses TimePeriod::setMaximumDuration()
     * @uses TimePeriod::setOntologyExtension()
     * @uses TimePeriod::setOntologyRefID()
     * @param \ammonkc\otaehi\StructType\EarliestStart $earliestStart
     * @param \ammonkc\otaehi\StructType\MaximumDuration $maximumDuration
     * @param mixed $ontologyExtension
     * @param string $ontologyRefID
     */
    public function __construct(\ammonkc\otaehi\StructType\EarliestStart $earliestStart = null, \ammonkc\otaehi\StructType\MaximumDuration $maximumDuration = null, $ontologyExtension = null, $ontologyRefID = null)
    {
        $this
            ->setEarliestStart($earliestStart)
            ->setMaximumDuration($maximumDuration)
            ->setOntologyExtension($ontologyExtension)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get EarliestStart value
     * @return \ammonkc\otaehi\StructType\EarliestStart|null
     */
    public function getEarliestStart()
    {
        return $this->EarliestStart;
    }
    /**
     * Set EarliestStart value
     * @param \ammonkc\otaehi\StructType\EarliestStart $earliestStart
     * @return \ammonkc\otaehi\StructType\TimePeriod
     */
    public function setEarliestStart(\ammonkc\otaehi\StructType\EarliestStart $earliestStart = null)
    {
        $this->EarliestStart = $earliestStart;
        return $this;
    }
    /**
     * Get MaximumDuration value
     * @return \ammonkc\otaehi\StructType\MaximumDuration|null
     */
    public function getMaximumDuration()
    {
        return $this->MaximumDuration;
    }
    /**
     * Set MaximumDuration value
     * @param \ammonkc\otaehi\StructType\MaximumDuration $maximumDuration
     * @return \ammonkc\otaehi\StructType\TimePeriod
     */
    public function setMaximumDuration(\ammonkc\otaehi\StructType\MaximumDuration $maximumDuration = null)
    {
        $this->MaximumDuration = $maximumDuration;
        return $this;
    }
    /**
     * Get OntologyExtension value
     * @return mixed|null
     */
    public function getOntologyExtension()
    {
        return $this->OntologyExtension;
    }
    /**
     * Set OntologyExtension value
     * @param mixed $ontologyExtension
     * @return \ammonkc\otaehi\StructType\TimePeriod
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get OntologyRefID value
     * @return string|null
     */
    public function getOntologyRefID()
    {
        return $this->OntologyRefID;
    }
    /**
     * Set OntologyRefID value
     * @param string $ontologyRefID
     * @return \ammonkc\otaehi\StructType\TimePeriod
     */
    public function setOntologyRefID($ontologyRefID = null)
    {
        // validation for constraint: string
        if (!is_null($ontologyRefID) && !is_string($ontologyRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ontologyRefID)), __LINE__);
        }
        $this->OntologyRefID = $ontologyRefID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\TimePeriod
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
