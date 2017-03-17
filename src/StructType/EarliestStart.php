<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EarliestStart StructType
 * @subpackage Structs
 */
class EarliestStart extends AbstractStructBase
{
    /**
     * The CalculationMethod
     * @var \Ammonkc\Otaehi\StructType\CalculationMethod
     */
    public $CalculationMethod;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The DateTime
     * @var string
     */
    public $DateTime;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for EarliestStart
     * @uses EarliestStart::setCalculationMethod()
     * @uses EarliestStart::setOntologyExtension()
     * @uses EarliestStart::setDateTime()
     * @uses EarliestStart::setOntologyRefID()
     * @param \Ammonkc\Otaehi\StructType\CalculationMethod $calculationMethod
     * @param mixed $ontologyExtension
     * @param string $dateTime
     * @param string $ontologyRefID
     */
    public function __construct(\Ammonkc\Otaehi\StructType\CalculationMethod $calculationMethod = null, $ontologyExtension = null, $dateTime = null, $ontologyRefID = null)
    {
        $this
            ->setCalculationMethod($calculationMethod)
            ->setOntologyExtension($ontologyExtension)
            ->setDateTime($dateTime)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get CalculationMethod value
     * @return \Ammonkc\Otaehi\StructType\CalculationMethod|null
     */
    public function getCalculationMethod()
    {
        return $this->CalculationMethod;
    }
    /**
     * Set CalculationMethod value
     * @param \Ammonkc\Otaehi\StructType\CalculationMethod $calculationMethod
     * @return \Ammonkc\Otaehi\StructType\EarliestStart
     */
    public function setCalculationMethod(\Ammonkc\Otaehi\StructType\CalculationMethod $calculationMethod = null)
    {
        $this->CalculationMethod = $calculationMethod;
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
     * @return \Ammonkc\Otaehi\StructType\EarliestStart
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \Ammonkc\Otaehi\StructType\EarliestStart
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
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
     * @return \Ammonkc\Otaehi\StructType\EarliestStart
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
     * @return \Ammonkc\Otaehi\StructType\EarliestStart
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
