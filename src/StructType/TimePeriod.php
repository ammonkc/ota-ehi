<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimePeriod StructType
 * @subpackage Structs
 */
class TimePeriod extends AbstractStructBase
{
    /**
     * The EarliestStart
     * @var \Ammonkc\Otaehi\StructType\EarliestStart
     */
    public $EarliestStart;
    /**
     * The MaximumDuration
     * @var \Ammonkc\Otaehi\StructType\MaximumDuration
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
     * @param \Ammonkc\Otaehi\StructType\EarliestStart $earliestStart
     * @param \Ammonkc\Otaehi\StructType\MaximumDuration $maximumDuration
     * @param mixed $ontologyExtension
     * @param string $ontologyRefID
     */
    public function __construct(\Ammonkc\Otaehi\StructType\EarliestStart $earliestStart = null, \Ammonkc\Otaehi\StructType\MaximumDuration $maximumDuration = null, $ontologyExtension = null, $ontologyRefID = null)
    {
        $this
            ->setEarliestStart($earliestStart)
            ->setMaximumDuration($maximumDuration)
            ->setOntologyExtension($ontologyExtension)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get EarliestStart value
     * @return \Ammonkc\Otaehi\StructType\EarliestStart|null
     */
    public function getEarliestStart()
    {
        return $this->EarliestStart;
    }
    /**
     * Set EarliestStart value
     * @param \Ammonkc\Otaehi\StructType\EarliestStart $earliestStart
     * @return \Ammonkc\Otaehi\StructType\TimePeriod
     */
    public function setEarliestStart(\Ammonkc\Otaehi\StructType\EarliestStart $earliestStart = null)
    {
        $this->EarliestStart = $earliestStart;
        return $this;
    }
    /**
     * Get MaximumDuration value
     * @return \Ammonkc\Otaehi\StructType\MaximumDuration|null
     */
    public function getMaximumDuration()
    {
        return $this->MaximumDuration;
    }
    /**
     * Set MaximumDuration value
     * @param \Ammonkc\Otaehi\StructType\MaximumDuration $maximumDuration
     * @return \Ammonkc\Otaehi\StructType\TimePeriod
     */
    public function setMaximumDuration(\Ammonkc\Otaehi\StructType\MaximumDuration $maximumDuration = null)
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
     * @return \Ammonkc\Otaehi\StructType\TimePeriod
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
     * @return \Ammonkc\Otaehi\StructType\TimePeriod
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
     * @return \Ammonkc\Otaehi\StructType\TimePeriod
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
